@extends('admin.layouts.main')
@section('content')
<h1 style="text-align:center">Edit Category</h1>
<form action="<?=BASE_URL?>admin/category/update/<?=$category['id']?>" method="POST" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
        <input  type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" name="name" value="<?=$category['name']?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
        <input  name="description" type="text" class="form-control"
            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$category['description']?>">
    </div>
    <div class="input-group mb-3">
        <input name="image" type="file" class="form-control" id="inputGroupFile02" >
    </div>
    <button type="submit" class="btn btn-success" name="edit">edit</button>
</form>
@endsection
