@extends('masterfront')
 @section('title', 'Laravel Questionaire')
 @section('content')


 <div class="container main quizplay">

 

    <div class="col-md-12">
    <u style="color:white;"><h2>View Answer of the Questions:</h2></u>
     @foreach($questions as $q)
                        <div class="question"><h3>
                            <?php
                             $var= $q->correct;
                             ?>
                        @if($var=1)
                           <?php echo "a.";echo $q->answera;?>
                        @elseif($var=2)
                           <?php echo "b.";echo $q->answerb;?>
                       @elseif($var=3)
                           <?php echo "c.";echo $q->answerc;?>
                       @elseif($var=4)
                           <?php echo "d.";echo $q->answerd;?>
                       
                             @endif<br>
                        <u><?php echo "Answer Description";?></u>
                        <p style="color:white;">{{$q->answer}}</p>

                       </h3></div>    <hr>

       
    @endforeach

    </div>

    

</div>

 </div>
 @endsection

 @section('quizscripts')
    <!-- flot charts scripts-->
    <script src="{{ url('/js/quiz.js') }}" crossorigin="anonymous"></script>
@stop