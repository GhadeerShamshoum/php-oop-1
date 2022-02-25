<?php
require_once __DIR__.'/classes/movie.php';

$film = [
    new Movie("The Lord of the Rings","Fantasy Fiction"),
    new Movie("Pirates of the caribean","action"),
    new Movie("The Hobbit","action"),
];

$film[0]-> setReleaseDate("14 December 2002");
$film[0]-> setFontSize("bolder");
$film[1]-> setReleaseDate("20 May 2011");
$film[2]-> setReleaseDate("14 December 2012");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bolder{
            font-weight:bold;
            font-size:30px;
        }
    </style>
</head>
<body>
    <ul>
        <?php
        foreach($film as $element){
            echo "<li class='{$element->getFontSize()}'>{$element-> getInfo()}</li>";
        }
        ?>
    </ul>
    
</body>
</html>