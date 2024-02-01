@extends('admin.layouts.main')
@section('content')
<a href="<?=BASE_URL?>admin/course/content/create/<?=$id?>"><button class="btn btn-success">Add lecture</button></a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($lectures as $item)
        <tr>
            <th scope="row"><?= $item['id']?></th>
            <td><?= $item['title']?></td>
            <td><?= $item['content']?></td>
            
            <td>
                <a href="<?=BASE_URL?>/admin/course/content/edit/<?=$item['id']?>"><button
                        class="btn btn-warning">edit</button></a>
                <a onclick="return confirm('Bạn có muốn xóa danh mục này không ?')"
                    href="<?=BASE_URL?>/admin/course/content/delete/<?=$item['id']?>"><button
                        class="btn btn-danger">delete</button></a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection