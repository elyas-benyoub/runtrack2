<h1>Jour04 > Job05</h1>
<a href="../job04/index.php">prev</a>
<a href="../job06/index.php">next</a>
<br /><br />

<?php

require_once "../../functions.php";

if (ft_count($_POST) > 0) {
    $_POST["username"] === "John" && $_POST["password"] === "Rambo"
        ? $message = "C’est pas ma guerre"
        : $message = "Votre pire cauchemar";
} else {
    $message = "";
}

?>

<form action="index.php" method="POST">
    <div>
        <label for="username">Username</label>
        <input type="text" id="username" name="username">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="text" id="password" name="password">
    </div>
    <button type="submit">Log in</button>
</form>
<p><?= $message; ?></p>
