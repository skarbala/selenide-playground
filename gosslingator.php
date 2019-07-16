<!DOCTYPE html>
<html lang="en" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Gosslingate me!</title>
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link rel="stylesheet" href="gosslingator/gosslingator.css">
    <link rel='shortcut icon' type='image/x-icon' href='gosslingator/assets/ryan.ico'/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">

</head>
<body>
<?php include 'partials/navbar.php' ?>
<div id="app">
    <div class="upper">
        <h1 class="ryan-title">Goslingate me</h1>
        <div class="buttons">
            <button @click="addRyan" id="addRyan" class="ryan-button">Ryan!</button>
            <button
                    class="ryan-button"
                    @click="removeRyan"
                    id="removeRyan"
                    :class="{ disabled: isDisabled }"
                    :disabled="isDisabled">
                Ryan out!
            </button>
        </div>
    </div>
    <transition-group name="bounce" tag="ul">
        <img v-for="ryan in ryans"
             v-bind:key="ryan.id"
             @click="removeSpecificRyan(ryan)"
             src="gosslingator/assets/ryan.png"
             :alt="ryan.id"
             v-bind:style="{ width: ryan.width+ 'px', top:ryan.top + 'px', left:ryan.left + 'px'}"
        ></transition-group>
    <div v-if="tooManyRyans">
        <h1 class="tooManyRyans ryan-title">number of <br><span>ryans</span><br>is too damn<br><span>high</span></h1>
    </div>
    <div class="ryan-counter">
        <h2 id="ryanCounter" v-html="ryans.length"></h2>
        <h3 v-html="ryanCounterDescription">Ryans</h3>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<script src="gosslingator/gosslingator.js"></script>
</html>