<?php require_once "../../FT/count.php"; ?>

<?php $data = ft_count($_GET) > 0 ? $_GET : $_POST; ?>

<h1><?= ft_count($_GET) > 0 ? 'GET' : 'POST'; ?></h1>
<table border="1">
    <thead>
        <tr>
            <th>Argument</th>
            <th>Value</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $arg => $value): ?>
            <tr>
                <td><?= $arg ?></td>
                <td><?= $value ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<style>
    table {
        border-collapse: collapse;
        margin-bottom: 2rem;
    }

    th,
    td {
        padding: 1rem;
    }
    
        tbody tr:nth-child(odd) {
            background-color: lightgray;
        }

    tbody tr:hover {
        background-color: rgb(235, 235, 235);
    }
</style>