<?php
?>
<!doctype html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
<title>Wait for it</title>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
<body>
<?php include 'partials/navbar.php' ?>
<style>
    body {
        background-color: #f5f5f5;
    }

    h1 {
        margin: 20px;
        text-transform: uppercase;
        font-size: 4em;
        color: #be2d2b;
        text-shadow: 2px 2px #9c2424;
        font-family: 'Luckiest Guy', cursive;
    }

    .current-wait-time p {
        font-size: 30px;
        font-weight: 600;
    }

    .current-wait-time span {
        color: #be2d2b;
    }

    .error {
        border: 2px solid #be2d2b;;
    }

    div.current-wait-time {
        margin-top: 50px;
    }

    div.row {
        margin: 30px 0;
    }

</style>
</body>
<div class="container">
    <div class="text-center">
        <h1>wait for it !</h1>
    </div>
    <div class="row">
        <h2>Its gonna be legen...</h2>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <button class="btn btn-success" type="button" id="startWaitForText">wait for it</button>
            </div>
            <input type="text" class="form-control" id="waitForTextInput" placeholder="Your text will appear here">
        </div>
    </div>

    <div class="row">
        <h2>Wait for class</h2>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <button class="btn btn-success" type="button" id="startWaitForProperty">Get the property</button>
            </div>
            <input type="text" class="form-control" id="waitForProperty" placeholder="This input will get a class">
        </div>
    </div>

    <div class="current-wait-time text-center"></div>
</div>
</div>
<script>
    $('#startWaitForText').click(function () {
        setTimeout(function () {
            $('#waitForTextInput').val("dary !!!");
        }, getRandomResponseTime());

    });

    $('#startWaitForProperty').click(function () {
        $('#waitForProperty').removeClass('error');
        setTimeout(function () {
            $('#waitForProperty').addClass('error');
            $('#startWaitForProperty').prop("disabled", true);
        }, getRandomResponseTime());
    });

    $('#waitForBlur').blur(function () {
        setTimeout(function () {
            $('#waitForBlur').val("blured!");
        }, getRandomResponseTime());
    });

    function getRandomResponseTime() {
        var div = $('.current-wait-time');
        var number = Math.round(Math.random() * (3500 - 1000) + 1000);
        div.html('<p>Work in progress</p>');
        setTimeout(function () {
            div.html('<p>' +
                'Response time was: <span>' + number + '</span> miliseconds</p>');
        }, number);
        return number;
    }

</script>
</html>
