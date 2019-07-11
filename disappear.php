<?php
?>
<!doctype html>
<html lang="en">
<title>Diss-appear</title>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Cinzel:900" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<body>
<?php include 'partials/navbar.php' ?>
<style>
    body {
        background-color: #9f999a;
    }

    img {
        height: 120px;
        margin-top: 30px;
    }
</style>
</body>
<div class="container">
    <div class="text-center">
        <h1>Let them diss-appear</h1>
        <div class="kim">
            <img src="img/kim.png" alt="">
        </div>
    </div>
</div>
<script>
    $('img').click(function () {
        $(this).fadeOut(100);
        $(this).delay(2500).fadeIn(100);
    })
</script>
</html>