@extends('adm.masteradmin')
@section('title', 'Laravel Questionaire')
@section('contentadmin')


            <div class="row">
                <div class="col-md-6"><h3>Categories:</h3></div>
                <div class="col-md-6 text-right"><a href="admin-quizz/create-category" class="newcatBtn">Create New Category</a></div>
            </div>
            <table class="table">
                <thead>
                    <tr class="table-primary  ">
                        <th>Catagory Name</th>
                        <th>Add question</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $d)
                    <tr class="table-bordered striped bordered">
                        <td>{{ $d->categoryname }}</td>
                        <td><div ><button type="button" class="btn btn-dark"><a href="admin-quizz/category/{{ $d->id }}">Add</a></button></div></td>
                        <td><div class="col-md-2 text-center"><button type="button" class="btn btn-info">
<a href="admin-quizz/edit-category/{{ $d->id }}">Edit</a></button>
</div>
            <div class="col-md-2 text-center">
                <button type="button" class="btn btn-danger">
                <div class="deletecat" catvar="{{ $d->id }}" catname="{{ $d->categoryname }}">Delete</div></button></td>
                    </tr>
                </tbody>
                @endforeach
                <?php /*
            @foreach($categories as $d)
            <div class="categoryItem">
            <div class="row">
            <div class="col-md-8"><a href="admin-quizz/category/{{ $d->id }}">{{ $d->categoryname }}</a></div>
            <div class="col-md-2 text-center"><a href="admin-quizz/edit-category/{{ $d->id }}">Edit</a></div>
            <div class="col-md-2 text-center">
                <div class="deletecat" catvar="{{ $d->id }}" catname="{{ $d->categoryname }}">Delete</div>
            </div>
            </div>
            </div>
            @endforeach*/?>
            </table>

    <script>
        $(document).ready(function(e){
        $('.leftMenu .quiz').addClass('selected');
        });
    </script>

@endsection
