<?php
$rows = rand(50, 100);
$names = ["Giovanni", "Florian", "Nathanuel", "Vendelin", "Bendegúz", "Enrigue", "Zalán", "Alfonz", "Nimród", "Jean-Pierre", "Migel"];
$surnames = ["Premrdal", "Toth", "Herák", "Bihary", "Vyhonský", "Adamec", "Obsust", "Plesivec", "Fekete", "Kundaker", "Holochuj"];

function getEmailAddress($name, $surname)
{
    return strtolower($name) . "." . strtolower($surname) . "@slovensko.sk";
}

function getRandomName()
{
    global $names;
    return $names[array_rand($names)];
}

function getRandomSurname()
{
    global $surnames;
    return $surnames[array_rand($surnames)];
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
    <title>Nahodna tabulka</title>
</head>
<style>

    body {
        background-color: #352f33;
    }

    * {
        color: #ed69ff;
    }

    h1 {
        margin-top: 50px;
        font-family: Montserrat, serif;
        font-size: 50px;
    }

    table {
        font-size: 18px;
        margin-top: 50px;
    }

    .table > thead > tr > th, .table > thead > tr {
        border-bottom: 2px solid #b095ae;
    }

    .table > tbody > tr > td, .table > tbody > tr > th,
    .table > tfoot > tr > td, .table > tfoot > tr > th,
    .table > thead > tr > td, .table > thead > tr > th {
        border-top: 1px solid #b095ae;
    }

</style>
<body>
<?php include 'partials/navbar.php' ?>
<div class="container">
    <h1 class="text-center">Nahodna tabulka</h1>
    <div class="row">
        <table class="table">
            <thead>
            <th>Id</th>
            <th>Meno</th>
            <th>Priezvisko</th>
            <th>Email</th>
            </thead>
            <tbody>
            <?php for ($i = 1; $i < $rows + 1; $i++) {
                $name = getRandomName();
                $surname = getRandomSurname();
                echo "<tr>";
                echo "<td>";
                echo $i;
                echo "</td>";
                echo "<td>";
                echo $name;
                echo "</td>";
                echo "<td>";
                echo $surname;
                echo "</td>";
                echo "<td>";
                echo getEmailAddress($name, $surname);
                echo "</td>";
                echo "</tr>";
            } ?>
            </tbody>
        </table>
    </div>
</body>
</html>