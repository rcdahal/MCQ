@extends('masterfront')
 @section('title', 'Laravel Questionaire')
 @section('content')


 <div class="container main quizplay">

 <div class="row">
    <div class="col-md-12 text-center">
        <div class="timer">01:00
        </div>
    </div>
</div>

    <div class="col-md-12">

    <div class="quizquestions">
    @foreach($questions as $q)
        <div class="qItem" cor="{{ $q->correct }}">
        <div class="question"><h3>{{ $q->question }}</h3></div>
        <div class="answers">
            <div class="answ"><span>1.</span> {{ $q->answera }}</div>
            <div class="answ"><span>2.</span> {{ $q->answerb }}</div>
            <div class="answ"><span>3.</span> {{ $q->answerc }}</div>
            <div class="answ"><span>4.</span> {{ $q->answerd }}</div>
        </div>
        </div>
    @endforeach

    </div>

    <div class="row">
         
       
        
       
        <div class="col-md-4">
             
        <div class="btn bpre" style="position: absolute; float: start;">Previous</div></div>
        <div class="col-md-4">
        <div class="btn bNext" style="position: absolute; float: start;">Next</div></div>
        <div class="col-md-4">
        <div class="btn bFinish" style="position: absolute; float: right;">Submit</div>
    </div>
   
   
             
        
        

    </div>

</div>

 </div>
 @endsection

 @section('quizscripts')
    <!-- flot charts scripts-->
    <script src="{{ url('/js/quiz.js') }}" crossorigin="anonymous"></script>
@stop