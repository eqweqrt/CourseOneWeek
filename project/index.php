<!DOCTYPE html>
<html>
<head>
    <title>Форма входа</title>
</head>
<body>
<form action="/login.php" method="post">
    <label>
        Логин <input type="text" name="login" required>
    </label>
    <br>
    <label>
        Пароль <input type="password" name="password" required>
    </label>
    <br>
    <input type="submit" value="Войти">
</form>
</body>
</html>