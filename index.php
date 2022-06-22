<?php
require_once __DIR__ . '/movie.php';
$Il_signore_degli_anelli= new Movie('Il signore degli anelli', 'Fantasy','Peter Jackson');
$Forrest_Gump= new Movie('Forest Gump', 'Drammatico','Robert Zemeckis');
var_dump($Forrest_Gump);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-1</title>
</head>
<body>
    <header>
        <h1>The films</h1>
    </header>
    <main>
        <div>
            <h4><?php echo $Il_signore_degli_anelli->title ?></h4>
            <p>Genere: <?php echo $Il_signore_degli_anelli->genre ?></p>
            <p>Autore: <?php echo $Il_signore_degli_anelli->getName() ?></p>
        </div>
        <hr>
        <div>
            <h4><?php echo $Forrest_Gump->title?></h4>
            <p>Genere: <?php echo $Forrest_Gump->genre?></p>
            <p>Autore: <?php echo $Forrest_Gump->getName()?></p>
        </div>
    </main>
</body>
</html>