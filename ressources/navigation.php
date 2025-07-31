<?php

$currentUrl = $_SERVER['REQUEST_URI'];
$currentPath = trim(parse_url($currentUrl, PHP_URL_PATH), '/');

$basePath = dirname(__DIR__); // remonte à RUNTRACK2
$navigation = [];

foreach (scandir($basePath) as $jour) {
    if (is_dir("$basePath/$jour") && preg_match('/^jour\d+$/', $jour)) {
        $jobs = [];

        foreach (scandir("$basePath/$jour") as $job) {
            if (is_dir("$basePath/$jour/$job") && preg_match('/^job\d+$/', $job)) {
                $path = "$jour/$job/index.php";
                $label = ucfirst($jour) . ' > ' . ucfirst($job);
                $selected = strpos($currentPath, "$jour/$job") !== false;

                $jobs[] = [
                    'label' => $label,
                    'path' => $path,
                    'selected' => $selected,
                ];
            }
        }

        if (!empty($jobs)) {
            $navigation[$jour] = $jobs;
        }
    }
}

// Aplatir les éléments pour prev/next
$flat = [];
foreach ($navigation as $group) foreach ($group as $item) $flat[] = $item;

$currentIndex = array_search(true, array_column($flat, 'selected'));
$prev = $flat[$currentIndex - 1] ?? null;
$next = $flat[$currentIndex + 1] ?? null;
$baseUrl = '';
$scriptPath = trim($_SERVER['SCRIPT_NAME'], '/');
$segments = explode('/', $scriptPath);
if (in_array('runtrack2', $segments)) {
    $baseUrl = '/' . $segments[0];
}
?>

<nav>
    <a href="<?= $baseUrl ?>/index.php" id="menu-button">🏠 Menu</a>
    <form id="form-nav"">
        <label for="nav">Navigation :&nbsp;</label>
        <select id="nav" onchange="window.location.href = this.value">
            <?php foreach ($navigation as $jour => $jobs): ?>
                <optgroup label="<?= htmlspecialchars(ucfirst($jour)) ?>">
                    <?php foreach ($jobs as $item): ?>
                        <option value="<?= $baseUrl ?>/<?= htmlspecialchars($item['path']) ?>"
                            <?= $item['selected'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($item['label']) ?>
                        </option>
                    <?php endforeach; ?>
                </optgroup>
            <?php endforeach; ?>
        </select>
    </form>

    <div id="next">
        <?php if ($prev): ?>
            <a href="<?= $baseUrl ?>/<?= htmlspecialchars($prev['path']) ?>">⬅️ Précédent</a>
        <?php endif; ?>

        <?php if ($next): ?>
            <a href="<?= $baseUrl ?>/<?= htmlspecialchars($next['path']) ?>" >Suivant ➡️</a>
        <?php endif; ?>
    </div>
</nav>

<style>

    #form-nav {
        margin: 0;
    }

    nav, #form-nav, #next {
        display: flex;
        align-items: center;
    }

    nav {
        border-bottom: 1px solid black;
        background-color: white;
        font-size:16px;
        height:50px;
        padding: 0 1em;
        margin-bottom: 1em;
        gap: 1em;
    }

    #next {
        display: flex;
        gap: 1em;
    }

    #menu-button {
        text-decoration: none;
        padding: 6px 12px;
        background-color: #eee;
        border-radius: 4px;
        color: black;
        border: 1px solid #ccc;
        font-weight: bold;
    }

    #menu-button:hover {
        background-color: #ddd;
    }
</style>