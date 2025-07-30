<?php

function reset_battlefield()
{
    $battlefield = [];

    for ($y = 0; $y < 3; $y++) {
        for ($x = 0; $x < 3; $x++) {
            $battlefield["item-$y-$x"] = 0;
        }
    }

    $_SESSION['battlefield'] = $battlefield;
    $_SESSION['player'] = 1;
    $_SESSION['end'] = false;

    return $battlefield;
}

function reset_game()
{
    if (isset($_GET['reset'])) {
        $_SESSION['battlefield'] = reset_battlefield();
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        header("Location: $uri");
        exit;
    }
}

function getBattlefield()
{
    return $_SESSION['battlefield'] ?? reset_battlefield();
}

function isEnded()
{
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
    if (isEnded()) {
        return 0;
    }

    return $_SESSION['player'] ?? 2;
}

function playTurn(&$location, &$battlefield, &$player)
{
    if (!isset($battlefield[$location]) || $battlefield[$location] !== 0)
        return;

    if (isEnded())
        $location = NULL;
    
    $battlefield[$location] = $player;
    $player = $player === 1 ? 2 : 1;
}

function isWinner() {
    $battlefield = getBattlefield();
    $winner = 0;
    $b = [];

    foreach($battlefield as $item => $value) {
        $b[] = $value;
    }

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
