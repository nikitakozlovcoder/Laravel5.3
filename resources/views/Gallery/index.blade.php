<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        .image{
            margin: auto;
            max-height: 100%;
            max-width: 100%;
            height: auto;
            width: auto;
        }
    </style>
</head>
<body>
<div style=" position: fixed; width: 100%; background-color: white; top: 0; border-bottom: 1px solid #dbdbdb;">
    <div style="display: flex; justify-content: space-between; width: 900px; margin: 10px auto;">
        <a href="{{route('LogOut')}}" style="color: white !important"><button type="button" class="btn btn-secondary">Выйти</button></a>
        <a href="{{route('ShowAll')}}" style="color: white !important"><button type="button" class="btn btn-primary">Назад</button></a>
    </div>
</div>
<div class="wrap" style="width: 900px; margin: 80px auto 20px;">
    <form action="{{route('AddGallery')}}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <h2>Добавить фото</h2>
            <img src="" alt="" class="preview" style="max-width: 200px; height: auto; max-height: 200px; display: block; padding: 20px 0;">
            <input type="file" class="form-control-file file" id="InputFile" accept="image/*" name="image" required onchange="loadFile(event)">
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Добавить</button>
        {{csrf_field()}}
    </form>
    <script>
        var loadFile = function(event) {
            document.getElementsByClassName('preview')[0].src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    <div style="display: flex; flex-wrap: wrap;">
    @foreach($images as $image)
        <div style="width: 250px; padding: 0 10px; margin-top: 20px; ">
            <div style="display: flex; max-height: 180px; ">
                <img src="{{'./img/'.$image['image_url']}}" alt="" class="image">
            </div>
            <form action="{{route('DeleteGallery', ['id'=> $image['id']])}}"  method="post">
                <button type="submit" class="btn btn-danger" style="margin-top: 2px; margin-bottom: 10px;">Удалить</button>
                {{csrf_field()}}
            </form>
        </div>
    @endforeach
    </div>
</div>
</body>
</html>