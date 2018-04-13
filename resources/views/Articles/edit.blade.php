<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src='{{asset('js/tinymce/tinymce.min.js')}}'></script>
    <script>
        tinymce.init({
            selector: '#InputBody',
            plugins : 'advlist autolink link image lists charmap print',
            images_upload_url: '/articles/uploadimage',
            automatic_uploads: false
        });
    </script>
</head>
<body>
<div style=" position: fixed; width: 100%; background-color: white; top: 0; border-bottom: 1px solid #dbdbdb; z-index: 100;">
    <div style="display: flex; justify-content: space-between; width: 900px; margin: 10px auto;">
        <a href="{{route('LogOut')}}" style="color: white !important"><button type="button" class="btn btn-secondary">Выйти</button></a>
        <a href="{{route('ShowAll')}}" style="color: white !important"> <button type="button" class="btn btn-primary">Назад</button></a>
    </div>
</div>
<div class="wrap" style="width: 900px; margin: 60px auto 20px;">
    <h1>Редактировать статью</h1>
    <form action="{{route('Update', ['id' => $article[0]['id']])}}" method="post" style="width: 100%;" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleSelect1">Категория</label>
            <select class="form-control" id="exampleSelect1" name="category_id">
                @foreach($categories as $category)
                    @if($category['id'] == $cat['id'])
                    <option value="{{$category['id']}}" selected = 'selected'>{{$category['name']}}</option>
                    @else
                    <option value="{{$category['id']}}">{{$category['name']}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">

            <label for="InputTitle">Заголовок</label>
            <input type="text" class="form-control" id="InputTitle" name="title" required value="{{$article[0]['title']}}">
        </div>
        <div class="form-group">
            <img src="{{'../img/'.$article[0]['image_url']}}" alt="" style="max-width: 200px; height: auto; max-height: 200px; display: block; padding: 20px 0;" class="preview">
            <label for="InputFile">Изображение</label>
            <input type="file" class="form-control-file" id="InputFile" accept="image/*" name="article_image"  onchange="loadFile(event)">
        </div>
        <div class="form-group">
            <label for="InputShort">Краткое описание</label>
            <textarea name="short" id="InputShort" cols="" rows="2" class="form-control">{{$article[0]['short']}}</textarea>
        </div>
        <div class="form-group">
            <label for="InputBody">Текст</label>
            <textarea name="body" id="InputBody" rows="18">{!!$article[0]['body'] !!}</textarea>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                @if($article[0]['is_main'])
                    <input type="checkbox" class="form-check-input" name="is_main" checked>
                @else
                    <input type="checkbox" class="form-check-input" name="is_main">
                @endif
                На главной?
            </label>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Изменить</button>
        {{ csrf_field() }}
    </form>

    <script>
        var loadFile = function(event) {
            document.getElementsByClassName('preview')[0].src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
</div>
</body>
</html>