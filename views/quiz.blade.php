@extends('masterfront')
 @section('title', 'Laravel Questionaire')
 @section('content')


 <div class="container main quiz">
 <div class="row">
    <div class="col-md-12">


    <p style="color:white;">This is an interactive questionnaire with questions from various areas.
    Start by clicking on "Start Test" button then, select a test no. and 
    answer the questions by clicking on one of four given answers.</p>
    <p style="color:white;">Quiz duration is limited to 2 hours, If you answer on all questions earlier, test will end.</p>
    <div class="center">
        <div class="btn btn-primary playBtn">Start test
        </div>
    </div>


<div class="quizstart">
    <h2 align="center" style="color:red;">Choose a Test:</h2>
    <div class="quizcategories">
    @foreach($categories as $d)
            <a class="catitem" href="quizplay/{{ $d->id }}">{{ $d->categoryname }}</a>
    @endforeach

    </div>
</div>

</div>
 </div>
 </div>
 @endsection

