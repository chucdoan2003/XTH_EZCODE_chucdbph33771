<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?=BASE_URL?>/public/assets/css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>

<body>
    <div class="container">
        <header>
            <ul>
                <li><a href="<?php echo BASE_URL?>">Home </a></li>||
                <li><a href="<?=BASE_URL?>course/register/list">Registered courses  </a></li>||
                <li><a href="">Contact </a></li>||
                <?php if(isset($_SESSION['user']) && $_SESSION['user']['role']==1) :?>
                <li><a href="<?=BASE_URL?>admin">Admin</a></li>
                <?php endif; ?>
            </ul>
            <div class="search_login">
                <div class="search">
                    <form action="">
                        <input type="text" class="search_input" placeholder="Enter....">
                        <button stype="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
                <?php if(isset($_SESSION['user'])):?>
                    <i class="fa-solid fa-circle-user"></i>
                    <a href="<?php echo BASE_URL?>user/logout"><i class="fa-solid fa-right-from-bracket"></i></a>
                <?php endif;?>
                <?php if(!isset($_SESSION['user'])):?>
                    <div class="login"><a href="<?php echo BASE_URL?>user/login">Login</a></div>
                <?php endif; ?>

               
                
            </div>
        </header>
        
        {{-- Content --}}
        @yield('content')
        {{-- Footer --}}
        <footer>
            <div class="gioi_thieu">
                <h3>Introduce</h3>
                <p>Traditional room</p>
                <p>Outstanding student</p>
                <p>Terms & policies</p>
                <p>Operational criteria</p>
            </div>
            <div class="hoTro">
                <h3>Learning support services</h3>
                <p>Learning forum</p>
                <p>Learning materials library</p>
                <p>Student corner blog</p>
                <p>Check out the practice test</p>
            </div>
            <div class="doitac">
                <h3>Customer</h3>
                <p>Comments about the service</p>
                <p>Troubleshooting</p>
            </div>
            <div class="mangxh">
                <h3>Social media</h3>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-tiktok"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-square-instagram"></i>
        
            </div>
        </footer>
        </div>
        </body>
        
        </html>

