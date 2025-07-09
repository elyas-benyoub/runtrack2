<?php
$varBool = true;
$varString = "Elyas";
$varInt = 34;
$varFloat = 0.5;

$tab = [
    "varBool" => $varBool,
    "varString" => $varString,
    "varIn" => $varIn,
    "varFloat" => $varIn
]
?>

<table>
    <thead>
        <tr>
            <td>Type</td>
            <td>Key</td>
            <td>Value</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tab as $key => $value): ?>
            
        <?php endforeach ?>
    </tbody>
</table>