<?php

spl_autoload_register(function ($class) {
    require 'classes/' . $class . '.php';
});

$player1 = new Warrior('Cloup');
$player2 = new Magician('Vivi');
$player3 = new Archer('Legolas');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baston</title>
</head>
<body>
    <?php while ($player1->isAlive() && $player2->isAlive() && $player3->isAlive()): ?>
        <div class="round">
            <p><?= $player1->turn($player2) ?></p>
            <?php $result = "$player1->name a gagné !" ?>
            <?php if ($player2->isAlive()): ?>
                <p><?= $player2->turn($player1) ?></p>
                <?php $result = "$player2->name a gagné !" ?>
            <?php endif ?>
            <p><?= $player2->turn($player3) ?></p>
            <?php $result = "$player2->name a gagné !" ?>
            <?php if ($player3->isAlive()): ?>
                <p><?= $player3->turn($player2) ?></p>
                <?php $result = "$player3->name a gagné !" ?>
            <?php endif ?>
        </div>
    <?php endwhile ?>
    <p class="result"><?= $result ?></p>
    
</body>
</html>




