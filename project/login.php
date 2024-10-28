<?php
$login = !empty($_POST['login']) ? $_POST['login'] : '';
$password = !empty($_POST['password']) ? $_POST['password'] : '';

if ($login === 'admin') {
    if ($password === 'Pa$$w0rd') {
        $isAuthorized = true;
        $message = 'Логин и пароль верные!';
    } else {
        $isAuthorized = false;
        $message = 'Неправильный пароль';
    }
} else {
    $isAuthorized = false;
    $message = 'Пользователь не найден';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Результат авторизации</title>
</head>
<body>
<p>
    <?= $message ?>
</p>
</body>
</html>

<?php
$login = !empty($_POST['login']) ? $_POST['login'] : '';
$password = !empty($_POST['password']) ? $_POST['password'] : '';
?>
<html>
<head>
    <title>Обработка POST-запроса</title>
</head>
<body>
<p>
    Переданный login: <?= $login ?>
    <br>
    Переданный password: <?= $password ?>
</p>
</body>
</html>