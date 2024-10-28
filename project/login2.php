<?php
require __DIR__ . '/auth.php';

if (getUserLogin() !== null) {
    header('Location: /index2.php');
    exit;
}

if (!empty($_POST)) {
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (checkAuth($login, $password)) {
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        header('Location: /index2.php');
    } else {
        $error = 'Ошибка авторизации';
    }
}
?>
<html>
<head>
    <title>Форма авторизации</title>
</head>
<body>

<?php if (isset($error)): ?>
    <span style="color: #2b2929;">
    <?= $error ?>
</span>
<?php endif; ?>

<form action="/login2.php" method="post">
    <label for="login">Имя пользователя: </label><input type="text" name="login" id="login">
    <br>
    <label for="password">Пароль: </label><input type="password" name="password" id="password">
    <br>
    <input type="submit" value="Войти">
</form>
</body>
</html>