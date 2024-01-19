<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Casino!</h1>
    <form method="post">
        <input type="submit" name="blackjack" value="Play blackjack!">
        <input type="submit" name="spin-the-wheel" value="Spin the wheel!">
        <input type="submit" name="higher-or-lower" value="play higher or lower!">
        <input type="submit" name="heads-or-tails" value="Play heads or tails!">
        <input type="submit" name="slotmachine" value="Play slots!">
    </form>
<?php

if (isset($_POST['blackjack'])) {
    header("Location: blackjack.php");
} elseif (isset($_POST['higher-or-lower'])) {
    header("Location: higher-or-lower.php");
} elseif (isset($_POST['heads-or-tails'])) {
    header("Location: heads-or-tails.php");
} elseif (isset($_POST['slotmachine'])) {
    header("Location: slotmachine.php");
} elseif (isset($_POST['spin-the-wheel'])) {
    header("Location: spin-the-wheel.php");
}
?>
</body>
</html>