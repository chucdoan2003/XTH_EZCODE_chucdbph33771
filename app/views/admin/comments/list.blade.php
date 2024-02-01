@extends('admin.layouts.main')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">UserName</th>
            <th scope="col">Product</th>
            <th scope="col">Content</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($comments as $key=>$comment):?>
        <tr>
            <th scope="row">
                <?=$key + 1?> </th>
            <td><?=$comment['name']?></td>
            <td><?=$comment['username']?></td>
            <td><?=$comment['content']?></td>
            <td>
                <a onclick="return confirm('Bạn có muốn xóa danh mục này không ?')"
                    href="<?=BASE_URL?>/admin/comment/delete/<?=$comment['id']?>"><button
                        class="btn btn-danger">delete</button></a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
@endsection