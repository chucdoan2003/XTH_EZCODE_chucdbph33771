@extends('admin.layouts.main')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">UserName</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $key=>$user):?>
        <tr>
            <th scope="row">
                <?=$key+1?> </th>
            <td><?=$user['username']?></td>
            <td><?=$user['email']?></td>
            <td>
                <a onclick="return confirm('Bạn có muốn xóa user này không ?')"
                    href="<?=BASE_URL?>/admin/user/delete/<?=$user['id']?>"><button
                        class="btn btn-danger">delete</button></a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
@endsection