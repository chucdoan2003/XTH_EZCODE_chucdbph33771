@extends('layouts.main')
@section('content')
<div class="main__content-home">
    <div class="home">
        <div class="home__aside">
            <div class="home__aside-title">
                <h5>Các khóa học</h5>
            </div>
            @foreach($categories as $item)
            <div class="home__aside-item"><a href="<?=BASE_URL?>home/cate/<?=$item['id']?>"><?=$item['name']?></a></div>
            @endforeach
        </div>
        <div class="home__main">
            <!-- Khóa học mới -->
            <h3>Khóa học mới</h3>
            <div class="home__course">
                @foreach($courses as $item)
                <div class="course__item">
                    <img src="<?=BASE_URL?>public/assets/image/course/<?=$item['image']?>" alt="">
                    <div class="course__item-content">
                        <a href="">
                            <h5><?=$item['name']?></h5>
                        </a>
                        <span><b>Giá :</b> <?=number_format($item['price'])?> vnđ</span>
                        <div class="course__btn">
                            <a href="<?=BASE_URL?>course/<?=$item['id']?>" class="Course__btn"><button class="btn btn-primary">Xem khóa học</button></a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="course__item">
                    <img src="/public/assets/image/home/laptoplearn.jpg" alt="">
                    <div class="course__item-content">
                        <a href="">
                            <h5>Khóa học lập trình php</h5>
                        </a>
                        <span><b>Giá</b>: 900.000 vnđ</span>
                        <span><b>Giảng viên</b>: Nguyễn Văn A</span>
                        <div class="course__btn">
                            <a href="" class="Course__btn"><button class="btn btn-primary">Xem khóa học</button></a>
                        </div>
                    </div>
                </div>
                <div class="course__item">
                    <img src="/public/assets/image/home/laptoplearn.jpg" alt="">
                    <div class="course__item-content">
                        <a href="">
                            <h5>Khóa học lập trình php</h5>
                        </a>
                        <span><b>Giá</b>: 900.000 vnđ</span>
                        <span><b>Giảng viên</b>: Nguyễn Văn A</span>
                        <div class="course__btn">
                            <a href="" class="Course__btn"><button class="btn btn-primary">Xem khóa học</button></a>
                        </div>
                    </div>
                </div> --}}


            </div>
            <!-- Khóa học nổi bật -->
            {{-- <h3>Khóa học nổi bật</h3> --}}
            {{-- <div class="home__course">
                <div class="course__item">
                    <img src="/public/assets/image/home/laptoplearn.jpg" alt="">
                    <div class="course__item-content">
                        <a href="">
                            <h5>Khóa học lập trình php</h5>
                        </a>
                        <span><b>Giá</b>: 900.000 vnđ</span>
                        <span><b>Giảng viên</b>: Nguyễn Văn A</span>
                        <div class="course__btn">
                            <a href="" class="Course__btn"><button class="btn btn-primary">Xem khóa học</button></a>
                        </div>
                    </div>
                </div>
                <div class="course__item">
                    <img src="/public/assets/image/home/laptoplearn.jpg" alt="">
                    <div class="course__item-content">
                        <a href="">
                            <h5>Khóa học lập trình php</h5>
                        </a>
                        <span><b>Giá</b>: 900.000 vnđ</span>
                        <span><b>Giảng viên</b>: Nguyễn Văn A</span>
                        <div class="course__btn">
                            <a href="" class="Course__btn"><button class="btn btn-primary">Xem khóa học</button></a>
                        </div>
                    </div>
                </div>
                <div class="course__item">
                    <img src="/public/assets/image/home/laptoplearn.jpg" alt="">
                    <div class="course__item-content">
                        <a href="">
                            <h5>Khóa học lập trình php</h5>
                        </a>
                        <span><b>Giá</b>: 900.000 vnđ</span>
                        <span><b>Giảng viên</b>: Nguyễn Văn A</span>
                        <div class="course__btn">
                            <a href="" class="Course__btn"><button class="btn btn-primary">Xem khóa học</button></a>
                        </div>
                    </div>
                </div>


            </div> --}}
        </div>

    </div>

</div>
@endsection