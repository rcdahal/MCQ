@extends('adm.masteradmin')
@section('title', 'Laravel Questionaire | Create Category')
@section('contentadmin')
 


    <h3>Create New Categories</h3>

    <form method="POST" action="/create-category-action">
 
        {{ csrf_field() }}
 
       <div>
          <input type="text" name="categoryname" placeholder="Category Name">
      </div>
      <div>
        <input type="submit" name="action" value="Cancel">
        <input type="submit" name="action" value="Create">
 
      </div>
 
    </form>  
   
    <script>
    $(document).ready(function(e){
    $('.leftMenu .quiz').addClass('selected');
    });
</script>
@endsection
