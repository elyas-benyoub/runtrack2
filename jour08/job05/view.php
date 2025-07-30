<?php

$xmark = '<i class="fa-solid fa-xmark"></i>';
$circle = '<i class="fa-regular fa-circle"></i>';

?>

<body>
    <table id="morpion">
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
                                    <?php
                                    if ($value === 1) {
                                        echo $xmark;
                                    } elseif ($value === 2) {
                                        echo $circle;
                                    }
                                    ?>
                                </button>
                            </form>
                        </td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
        </tbody>
    </table>
    <form action="index.php" method='get'>
        <button type="submit" name="reset">reset</button>
    </form>
    <script src="https://kit.fontawesome.com/cf618d8113.js" crossorigin="anonymous"></script>
</body>

<style>
    #morpion table {
        box-sizing: border-box;
    }

    #morpion td {
        width: 100px;
        height: 100px;
    }

    #morpion button,
    #morpion form {
        width: 100%;
        height: 100%;
    }

    #morpion i {
        font-size: 70px;
    }

    #morpion i.fa-xmark {
        color: red;
    }

    #morpion i.fa-circle {
        color: green;
    }

    .green {
        color: green;
        font-size: 2rem;
        text-decoration: uppercase;
    }

    .red {
        color: red;
        font-size: 2rem;
        text-decoration: uppercase;
    }
</style>