@extends('layouts.main')
@section('content')
<div class="wrap__padding">
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
            <?php if($item['payments_status']!==1): ?>
            <td>
               <form action="<?=BASE_URL?>course/change/<?=$item['id']?>" method="POST">
                <button class="btn btn-primary" type="submit">Invoice</button>
                </form>
            </td>
            <?php endif; ?>

        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection