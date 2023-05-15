<!DOCTYPE html>
<html>
<head>
    <title>Formulier</title>
</head>
<body>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        echo "Username: " . $username . "<br>";
        echo "Password: " . $password;
    }
    ?>
</body>
</html>
