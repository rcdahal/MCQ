@extends('masterfront')
@section('title', 'Laravel Questionaire')
 
<style>
.mce-notification-warning {display: none;}
</style>
 
@section('content')
 
<div class="container">
    <form action="{{ url('YOUR_ACTION_URL') }}" method="post">
        <div class="form-group">
            <label for="exampleInputDescription">Description:</label>
            <textarea class="description" name="description"></textarea>
        </div>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
 
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
tinymce.init({
    selector:'textarea.description',
    width: 900,
    height: 300
});
</script>