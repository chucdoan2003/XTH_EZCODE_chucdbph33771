<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <form action="">
        <label for="check"><i class="fa-solid fa-star star1"></i></label>
        <label for="check2"><i class="fa-solid fa-star star2"></i></label>
        <label for="check3"><i class="fa-solid fa-star star3"></i></label>
        <label for="check4"><i class="fa-solid fa-star star4"></i></label>
        <label for="check5"><i class="fa-solid fa-star star5"></i></label>
        <input type="radio" id="check" name="rating" value="1" />
        <input type="radio" id="check2" name="rating" value="2" />
        <input type="radio" id="check3" name="rating" value="3" />
        <input type="radio" id="check4" name="rating" value="4" />
        <input type="radio" id="check5" name="rating" value="5" />
        <button name="submit">submit</button>
    </form>


    <script>
    console.log('hihi')
    var start1 = document.querySelector('.star1')
    var start2 = document.querySelector('.star2')
    var start3 = document.querySelector('.star3')
    var start4 = document.querySelector('.star4')
    var start5 = document.querySelector('.star5')
    console.log(start2)
    start2.addEventListener('click', function() {
        start1.style.color = "yellow"
        start2.style.color = "yellow"
        console.log(start1)
        console.log(start2)
    })
    </script>
</body>

</html>