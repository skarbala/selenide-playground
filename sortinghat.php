<!DOCTYPE html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Spelleology</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit:100i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:700" rel="stylesheet">
    <link rel="stylesheet" href="sortinghat/style.css">
</head>
<body>

<?php include 'partials/navbar.php' ?>
<div id="app">
    <div class="text-center col-md-4 offset-md-4">
        <h1>Sorting hat</h1>
        <button :disabled="sortDisabled" v-on:click="sort()">SORT</button>
        <div v-if="!loading">
            <p class="result">{{result}}</p>
        </div>
        <img class="loading" v-if="loading" src="img/loading.gif" alt=""></div>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
<script src="sortinghat/index.js"></script>
</html>