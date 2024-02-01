<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/assets/css/home.css">
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
                <li><a href="<?php echo BASE_URL?>">Home</a></li>
                <li><a href="">Course</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">News</a></li>
            </ul>
            <div class="search_login">
                <div class="search">
                    <form action="">
                        <input type="text" class="search_input" placeholder="Enter....">
                        <button stype="submit" class="btn btn-primary">Search</button>
                    </form>


                </div>
                <div class="login"><a href="<?php echo BASE_URL?>/user/login">Login</a></div>
            </div>

        </header>