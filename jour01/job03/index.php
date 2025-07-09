<?php
$varBool = true;
$varString = "Elyas";
$varInt = 34;
$varFloat = 0.5;

$tab = [
    "varBool" => $varBool,
    "varString" => $varString,
    "varInt" => $varInt,
    "varFloat" => $varFloat
]
?>

<style>
    table {
        border-collapse: collapse
    }

    td {
        padding: 0.5rem;
    }

    thead {
        background-color: lightgrey;
    }
</style>

<table border="2">
    <thead>
        <tr>
            <td>Type</td>
            <td>Key</td>
            <td>Value</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tab as $key => $value): ?>
            <tr>
                <td><?php echo gettype($value) ?></td>
                <td><?php echo $key ?></td>
                <td><?php
                    if (gettype($value) === "boolean") {
                        echo $value ? "true" : false;
                    } else {
                        echo htmlspecialchars(string: $value);
                    }
                ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>