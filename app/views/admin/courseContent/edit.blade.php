@extends('admin.layouts.main')
@section('content')
<h1 style="text-align:center">Add Course lecture</h1>
<form action="<?=BASE_URL?>/admin/course/content/edit/<?=$lecture['id']?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name='id_course' value="<?=$lecture['id_course']?>">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
        <input value="<?=$lecture['title']?>" type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" name="title">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Content</span>
        <input value="<?=$lecture['content']?>" type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" name="content">
    </div>
    <button type="" class="btn btn-success" name="update">update</button>
</form>
@endsection