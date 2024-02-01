@extends('admin.layouts.main')
@section('content')
<h1 style="text-align:center">Add Course</h1>
<form action="<?=BASE_URL?>admin/course/edit/<?=$course['id']?>" method="POST" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
        <input value="<?=$course['name']?>" type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" name="name">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
        <input value="<?=$course['price']?>" type="number" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" name="price">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
        <input value="<?=$course['description']?>" name="description" type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default">
    </div>
    <img src="<?=BASE_URL?>public/assets/image/course/<?=$course['image']?>" height="100px" width="100px" alt="">
    <div class="input-group mb-3">
        <input name="image" type="file" class="form-control" id="inputGroupFile02">
    </div>
    <select class="form-select" aria-label="Default select example" name="cate_id">
        <option >Category</option>
        @foreach ($categories as $category)
        <option value="<?=$category['id']?>" <?php if($category['id']==$course['cate_id']){echo 'selected';}?>><?=$category['name']?> </option>
        @endforeach
        
      </select>
    <button type="submit" class="btn btn-success" name="edit">Edit</button>
</form>
@endsection