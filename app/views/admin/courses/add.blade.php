@extends('admin.layouts.main')
@section('content')
<h1 style="text-align:center">Add Course</h1>
<form action="add" method="POST" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
        <input type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" name="name">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
        <input type="number" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" name="price">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
        <input name="description" type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <input name="image" type="file" class="form-control" id="inputGroupFile02">
    </div>
    <select class="form-select" aria-label="Default select example" name="cate_id">
        <option selected>Category</option>
        @foreach ($categories as $category)
        <option value="<?=$category['id']?>"><?=$category['name']?> </option>
        @endforeach
        
      </select>
    <button type="submit" class="btn btn-success" name="add">Add</button>
</form>
@endsection