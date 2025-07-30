<?php
session_start();

require_once "../../FT/count.php";
require_once "functions.php";

reset_game();

$battlefield = getBattlefield();
$message = "";

$location = $_GET['location'] ?? null;
$player = getPlayer();

playTurn($location, $battlefield, $player);

$_SESSION['battlefield'] = $battlefield;
$_SESSION['player'] = $player;

$message = $player == 1 ? "<p class='red'>↠ PLAYER 1</p>" : "<p class='green'>↠ PLAYER 2</p>";
$end = isEnded();
$winner = isWinner();


if ($end && !$winner) {
    $message = "<p style='color: blue; font-size: 2rem;'>AUCUN GAGNANT<?p>";
}

if ($winner) {
    $color = $winner === 1 ? "red" : "green";
    $message = "<p style='color: $color; font-size: 2rem;'>PLAYER $winner GAGNE<?p>";
}

?>

<?php require_once "../../ressources/navigation.php"; ?>
<?php require_once "view.php"; ?>
