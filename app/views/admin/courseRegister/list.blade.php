@extends('admin.layouts.main')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Course</th>
            <th scope="col">Username</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Payment status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registedCourse as $key=>$item)
        <tr>
            <th scope="row"><?= $key+1?></th>
            <td><?= $item['name']?></td>
            <td><?= $item['username']?></td>
            <td><?= number_format($item['price'])?> vnđ</td>
            <td><img src="<?=BASE_URL?>public/assets/image/course/<?= $item['image']?>" height="100px;" width="100px" alt=""></td>
            <td><?php if($item['payments_status']==0){echo 'Chưa thanh toán';}else{echo 'Đã thanh toán';} ?></td>
           

        </tr>
        @endforeach
    </tbody>
</table>
@endsection