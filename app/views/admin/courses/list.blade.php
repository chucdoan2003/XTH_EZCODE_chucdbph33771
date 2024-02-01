@extends('admin.layouts.main')
@section('content')
<a href="<?=BASE_URL?>admin/course/create"><button class="btn btn-success">Add course</button></a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Discription</th>
            <th scope="col">Thumbnail</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $key=>$item)
        <tr>
            <th scope="row"><?=$key+1?> </th>
            <td><?= $item['name']?></td>
            <td><?= $item['price']?></td>
            <td><?= $item['description']?></td>
            <td><img src="<?=BASE_URL?>public/assets/image/course/<?= $item['image']?>" height="100px" width="100px" alt=""></td>
            <td><?= $item['category']?></td>
            <td>
                <a href="<?=BASE_URL?>/admin/course/edit/<?=$item['id']?>"><button
                        class="btn btn-warning">edit</button></a>
                <a onclick="return confirm('Bạn có muốn xóa danh mục này không ?')"
                    href="<?=BASE_URL?>/admin/course/delete/<?=$item['id']?>"><button
                        class="btn btn-danger">delete</button></a>
                        <a href="<?=BASE_URL?>admin/course/content/list/<?=$item['id']?>"><button class="btn btn-primary">Show lecture</button></a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection