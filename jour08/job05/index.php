<?php
session_start();

require_once "../../FT/count.php";
require_once "functions.php";

reset_game();

// recuperation des donnees pour le tour
$battlefield = getBattlefield();
$location = $_GET['location'] ?? null;
$player = getPlayer();

// on lance le tour
$location && playTurn($location, $battlefield, $player);

// on sauvegarde les nouvelles donnees
$_SESSION['battlefield'] = $battlefield;
$_SESSION['player'] = $player;

// on recupere les resultats
$end = isEnded();
$winner = isWinner();
$message = getMessage($player, $end, $winner);

?>

<!-- on affiche le jeu -->
<?php require_once "../../ressources/navigation.php"; ?>
<?php require_once "view.php"; ?>
