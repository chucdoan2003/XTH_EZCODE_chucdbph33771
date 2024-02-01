@extends('admin.layouts.main')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Course</th>
            <th scope="col">Username</th>
            <th scope="col">Image</th>
            <th scope="col">Payment status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registedCourse as $key=>$item)
        <tr>
            <th scope="row"><?= $key+1?></th>
            <td><?= $item['name']?></td>
            <td><?= $item['username']?></td>
            <td><img src="<?=BASE_URL?>public/assets/image/course/<?= $item['image']?>" height="100px;" width="100px" alt=""></td>
            <td><?php if($item['payments_status']==0){echo 'Chưa thanh toán';}else{echo 'Đã thanh toán';} ?></td>
            <td>
               
                <a onclick="return confirm('Bạn có muốn xóa danh mục này không ?')"
                    href="<?=BASE_URL?>/admin/course/content/delete/<?=$item['id']?>"><button
                        class="btn btn-danger">delete</button></a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection