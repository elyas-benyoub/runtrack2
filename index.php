<?php

$basePath = __DIR__; // Dossier runtrack2
$navigation = [];

foreach (scandir($basePath) as $jour) {
    if (is_dir("$basePath/$jour") && preg_match('/^jour\d+$/', $jour)) {
        $jobs = [];

        foreach (scandir("$basePath/$jour") as $job) {
            if (is_dir("$basePath/$jour/$job") && preg_match('/^job\d+$/', $job)) {
                $jobs[] = [
                    'label' => ucfirst($job),
                    'path' => "$jour/$job/index.php",
                ];
            }
        }

        if (!empty($jobs)) {
            $navigation[$jour] = $jobs;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Navigation Runtrack2</title>
    <style>
        ul { list-style: none; padding-left: 1em; }
        li { margin: 4px 0; }
        h2 { margin-top: 1em; }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 2em;
        }

        .jour-block {
            flex: 1 1 200px;
            border: 1px solid #ccc;
            padding: 1em;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Menu des exercices</h1>
    <div class="container">
    <?php foreach ($navigation as $jour => $jobs): ?>
        <div class="jour-block">
            <h2><?= htmlspecialchars(ucfirst($jour)) ?></h2>
            <ul>
                <?php foreach ($jobs as $job): ?>
                    <li>
                        <a href="<?= htmlspecialchars($job['path']) ?>">
                            <?= htmlspecialchars($job['label']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
    </div>
</body>
</html>