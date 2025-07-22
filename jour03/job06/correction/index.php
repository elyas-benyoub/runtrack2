<?php
header('Content-Type: text/html; charset="utf-8"');

?>
<html>

<body>
    <?php
    
    include 'head.html';
    $str = "Les choses que l'on possède finissent par nous posséder.";
    
    $i = 0;

    while (isset($str[$i])) {
        if (htmlspecialchars((string) $str[$i]))
            echo htmlspecialchars((string) $str[$i]);
        $i++;
    }

    ?>
</body>

</html>