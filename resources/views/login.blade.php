<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body style="display:flex; justify-content: center; align-items: center; min-height: 100vh;">
<form action="{{route('LoginPost')}}" method="post" style="width: 300px;" id="contact">
    <div class="form-group">
        <label for="InputName">Логин</label>
        <input type="text" class="form-control" id="InputName"  placeholder="Введите логин..." name="login">
    </div>
    <div class="form-group">
        <label for="InputPassword">Пароль</label>
        <input type="password" class="form-control" id="InputPassword" placeholder="Пароль..." name="password">
    </div>
    <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Войти</button>
    {{ csrf_field() }}
</form>
</body>
</html>