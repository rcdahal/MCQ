@extends('masterfront')
 @section('title', 'Laravel Questionaire')
 @section('content')


 <div class="container main">
 <div class="row">
   <div class="col-md-12">
   <div id="buttons">
      {{-- <a href="#" class="btn blue">Blue Button</a> --}}
      <a href="/quiz" class="btn green ">Start your Test</a>
      {{-- <a href="#" class="btn red">Red Button</a>
      <a href="#" class="btn purple">Purple Button</a>
      <a href="#" class="btn orange">Orange Button</a>
      <a href="#" class="btn yellow">Yellow Button</a> --}}
    </div>
    
    </div>
    <div class="center">
 <?php 
 if($cont[0]->introtext){?>
    <h1 align="center" style="color: white;"><?php echo $cont[0]->introtext;?></h1><?php
 } 
 ?>
    </div>
</div>
 </div>
 </div>
 @endsection