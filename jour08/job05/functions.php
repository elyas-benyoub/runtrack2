<?php

function reset_battlefield()
{
    $battlefield = [];

    // toutes les cases sont initialisees a 0 (player)
    for ($y = 0; $y < 3; $y++) {
        for ($x = 0; $x < 3; $x++) {
            $battlefield["item-$y-$x"] = 0;
        }
    }

    // sauvegarde dans $_SESSION et le player 1 commence la partie
    $_SESSION['battlefield'] = $battlefield;
    $_SESSION['player'] = 1;

    return $battlefield;
}

function reset_game()
{
    // si query de l'url contient reset on reinitialise le tableau
    if (isset($_GET['reset'])) {
        $_SESSION['battlefield'] = reset_battlefield();
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        header("Location: $uri");
        exit;
    }
}

function getBattlefield()
{
    // on recupere le tableau de la partie actuelle ou un tableau initialise
    return $_SESSION['battlefield'] ?? reset_battlefield();
}

function isEnded()
{
    // si toutes les cases sont remplies, partie finie
    $battlefield = $_SESSION['battlefield'];

    if (isset($battlefield)) {
        foreach ($battlefield as $player) {
            if ($player === 0)
                return false;
        }

        return true;
    }
}

function getPlayer()
{
    return $_SESSION['player'] ?? 1;
}

function playTurn(&$location, &$battlefield, &$player)
{
    if (!isset($battlefield[$location]) || $battlefield[$location] !== 0)
        return;

    if (isEnded())
        $location = NULL;
    
    // on enregistre le joueur sur la case qu'il a choisi
    $battlefield[$location] = $player;
    // joueur suivant
    $player = $player === 1 ? 2 : 1;
}

function isWinner() {
    $battlefield = getBattlefield();
    $winner = 0;
    $b = [];

    foreach($battlefield as $item => $value) {
        $b[] = $value;
    }

    // creation des lignes possibles
    $tab = [
        "y0" => [$b[0], $b[1], $b[2]],
        "y1" => [$b[3], $b[4], $b[5]],
        "y2" => [$b[6], $b[7], $b[8]],
        "x1" => [$b[0], $b[3], $b[6]],
        "x2" => [$b[1], $b[4], $b[7]],
        "x3" => [$b[2], $b[5], $b[8]],
        "dia1" => [$b[0], $b[4], $b[8]],
        "dia2" => [$b[2], $b[4], $b[6]],
    ];

    // on test si il y a des lignes entiere avec le meme joueur
    foreach($tab as $line) {
        $i = 1;
        $first = $line[0];
        $fullLine = true;

        while (isset($line[$i])) {
            if ($line[$i] !== $first) $fullLine = false;
            $i++;
        }

        $winner = $fullLine ? $line[0] : 0;
        if ($winner) return $winner;
    }

    return 0;
}

function getMessage(int $player, bool $end, int $winner): string
{
    if ($end && !$winner) {
        return "<p style='color: blue; font-size: 2rem;'>AUCUN GAGNANT</p>";
    }

    if ($winner) {
        $color = $winner === 1 ? "red" : "green";
        return "<p style='color: $color; font-size: 2rem;'>PLAYER $winner GAGNE</p>";
    }

    $color = $player === 1 ? "red" : "green";
    return "<p class='$color'>↠ PLAYER $player</p>";
}