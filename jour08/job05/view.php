<?php

$xmark = '<i class="fa-solid fa-xmark"></i>';
$circle = '<i class="fa-regular fa-circle"></i>';

if ($winner) {
    $color = $winner === 1 ? 'red' : 'green';
    $border = "border: 3px solid $color";
} else {
    $border = '';
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <main>
        <table id="morpion" style="<?= $border ?>">
            <?php echo $message ?>
            <tbody>
                <?php for ($y = 0; $y < 3; $y++): ?>
                    <tr>
                        <?php for ($x = 0; $x < 3; $x++): ?>
                            <td>
                                <form action="index.php" method="get">
                                    <?php
                                    $key = "item-$y-$x";
                                    $value = $battlefield[$key] ?? 0;
                                    $disabled = $winner ? 'disabled' : ($value !== 0 ? 'disabled' : '');
                                    $icon = $value === 1 ? $xmark : ($value === 2 ? $circle : '');
                                    ?>
                                    <button type="submit" name="location" value="<?= $key ?>" <?= $disabled ?>>
                                        <?= $icon ?>
                                    </button>
                                </form>
                            </td>
                        <?php endfor ?>
                    </tr>
                <?php endfor ?>
            </tbody>
        </table>
        <form action="index.php" method='get' class="reset">
            <button type="submit" name="reset">reset</button>
        </form>
    </main>
</body>

</html>