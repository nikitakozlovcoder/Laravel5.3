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
    <form action="{{route('AddCategories')}}" method="post">
        <h3>Новая категория</h3>
        <div class="form-group" style="display: flex;">
            <input type="text" placeholder="Название..." class="form-control" name="category" required>
            <div style="padding-left: 10px;">
                <button class="btn btn-primary" style="width: 134px;" type="submit">Добавить</button>
            </div>
        </div>
        {{csrf_field()}}
    </form>

    @for ($i = 0; $i < count($categories); $i++)
        <div style="display: flex;">
        <form action="{{route('UpdateCategories', ['id'=> $categories[$i]['id']])}}" method="post" style="flex-grow: 1;">
            <div class="form-group" style="display: flex;">
             <input type="text" value="{{$categories[$i]['name']}}" class="form-control" name="category">
                <div style="padding-left: 10px;">
                <button type="submit" class="btn btn-primary" style="width: 134px;">Редактировать</button>
                </div>

            </div>
            {{csrf_field()}}
        </form>
        <form action="{{route('DeleteCategories', ['id'=> $categories[$i]['id']])}}"  method="post" style="padding-left: 10px;">
            <button type="submit" class="btn btn-danger">Удалить</button>
            {{csrf_field()}}
        </form>
        </div>
    @endfor
</div>
</body>
</html>