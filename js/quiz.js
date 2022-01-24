


function shuffle(o){
    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
}

function startQuiz(){

    var questsN = [];
    var nm = 0;
    $('.quizquestions .qItem').each(function() {
        questsN.push(nm);
        nm++;
    });
    totalq  = nm;
    shuffle(questsN);

    var qNum = 0;
    var corr = 0;
    var corrcount = 0;
    function question(){
        if (qNum==0) {
                $('.bpre').hide();
                $('.bNext').show();
                $('.bFinish').hide();
                }
        else if(qNum==1){
            $('.bFinish').show();        
            $('.bpre').show();
            $('.bNext').hide();

        }else{

        $('.bNext').show();
        $('.bpre').show();
        $('.bFinish').hide();
        }

        var clickCheck = 0;
        $('.quizquestions .qItem').hide();
        $('.quizquestions .qItem:eq('+ questsN[qNum] +')').show();
        corr = parseInt($('.quizquestions .qItem:eq('+ questsN[qNum] +')').attr('cor'));
        $('.quizquestions .qItem .answers .answ').click(function(){
            var ind = $(this).index() + 1;
            if(clickCheck == 0) {
                

                           /* var ind=document.querySelector('input[name="abc"]:checked').value;
                            alert(ind);

                /*var ind = $(this).index() + 1;*/

           /* document.getElementById('abc').addEventListener('change', function() {
                console.log('You selected: ', this.value).css({'background-color': '#c3e879'});
                });    */        
                if(ind == corr){
                    corrcount++;
                    /*$(this).css({'background-color': '#c3e879'});*/
                    
                } else {
                    /*$(this).css({'background-color': '#f7aeae'});*/
                    $(this).parent().find('.answ:eq('+ (corr-1) +')');/*.css({'background-color': '#c3e879'})*/
                    corrcount=corrcount-corrcount*0.1;
                }
                
                if((qNum) < totalq){
                    /*$('.bNext').css('display', 'inline');*/
                    
                } else {
                    $('.bFinish').css('display', 'inline');
                }

            }
            clickCheck++;
        });

    }
    question();

    $('.bNext').click(function(){
        qNum++;
        question();
    });
    $('.bpre').click(function(){
        --qNum;
        question();
    });

    $('.bFinish').click(function(){
        endQuiz();
    });

    timer();

    var tmr;
    var secs = 60;
    var min = 4; // 4
    function timer() {
    
        var secsT = "";
        tmr = setInterval(function(){
        if (secs > 0) {
            secs--;
        } else {
            secs = 59;
            if (min > 0) {
            min--;
            } else if (min == 0) {
                clearInterval(tmr);
                min = 0;
                secs = 0;
                endQuiz();
            }
        }
        if (secs < 10) {
            secsT = "0" + secs;
        } else {
            secsT = secs;
        }
        $('.timer').html("0" + min + ":" + secsT);
        }, 1000);
        console.log(secsT);
    };

    function endQuiz() {
        clearInterval(tmr);
        console.log(corrcount + " " + totalq);
        var perc = Math.round((100 / totalq) * corrcount);
        console.log(perc);
        var mark=(perc*totalq)/100;
        var url = "/quizend/"+corrcount;
        location.href=url;
    }

}



startQuiz();