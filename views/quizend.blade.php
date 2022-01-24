@extends('masterfront')
 @section('title', 'Laravel Questionaire')
 @section('content')


 <div class="container main quizend">

 <div class="row"><div class="col-md-12">

<h2 style="text-align:center;">Online Test Ended !!!</h2><br>
<h2 style="text-align:center; c">Your Obtained Marks is: <h4>{{ $res }}</h4></h2><br>
<?php $va=$res*100/140; ?>
<h4 class="res" style="text-align:center;">Your result is: {{ $va }} % => 
@if($va<40)
<span style="color:red">Fail</span>
@else
<span style="color:green">Passed</span>
@endif
</h4>
<div class="row">
<div class="col-md-6" style="text-align:center; margin-top:50px;"><a href="/quiz" class="btn btn-primary btnAgain">Take test Again</a></div>
<div class="col-md-6" style="text-align:center; margin-top:50px;"><a href="/quizzzz" class="btn btn-primary btnAgain">View Answer</a></div>
</div>

</div>
 </div>
 </div>
 @endsection