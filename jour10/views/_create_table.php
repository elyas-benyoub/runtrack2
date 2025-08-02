<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>RunTrack2</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <?php foreach ($fields as $field): ?>
                    <th><?= $field->name ?></th>
                <?php endforeach ?>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <?php foreach ($row as $data): ?>
                        <td><?= $data ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</body>
</html>
