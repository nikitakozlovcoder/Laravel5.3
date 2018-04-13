<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div style=" position: fixed; width: 100%; background-color: white; top: 0; border-bottom: 1px solid #dbdbdb;">
        <div style="display: flex; justify-content: space-between; width: 900px; margin: 10px auto;">
            <a href="{{route('LogOut')}}" style="color: white !important"> <button type="button" class="btn btn-secondary">Выйти</button></a>
            <a href="{{route('ShowAll')}}" style="color: white !important"><button type="button" class="btn btn-primary">Назад</button></a>
        </div>
    </div>
    <div class="wrap" style="width: 900px; margin: 80px auto 20px;">
                <form action="{{route('FieldUpdate')}}"  method="post">
                    <div>Заголовок</div>
                    <input type="text" class="form-control" value="{{$field[0]['title']}}" name="title">
                    <div style="margin-top: 10px;">Текст</div>
                    <textarea class="form-control" rows="3" name="body" >{{$field[0]['body']}}</textarea>
                    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Изменить</button>
                    {{csrf_field()}}
                </form>
    </div>
</body>
</html>