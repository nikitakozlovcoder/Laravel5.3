<!DOCTYPE html>
<html  class="no-js" lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Дом Кровли</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <!--<link rel="manifest" href="site.webmanifest">-->
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="/css/Bootstrap.css">

</head>
<body>
<header>
    <nav class="header_nav_main" style="background-color: #33363c" >
        <div class="wrap header_nav">
            <a href="{{route('Home')}}" class="logo"><img src="{{asset('img/logo.png')}}" alt=""></a>
            <div class="header_links">
                <a href="{{route('Home')}}" class="header_link">Главная</a>
                <a href="{{route('Products')}}" class="header_link">Каталог</a>
                <a href="#" class="header_link" id="contact_link">Контакты</a>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="nav_expand"><path d="M0 84V44c0-8.837 7.163-16 16-16h416c8.837 0 16 7.163 16 16v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16zm16 144h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 256h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0-128h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>

        </div>
    </nav>
</header>
<script src='{{asset("js/nav.js")}}'></script>
    <div class="wrap scope" style="margin-top: 100px; max-width: 1000px;">
        <h1>{{$article['title']}}</h1>
        <br>
        <img src="{{'../img/'.$article['image_url']}}" alt="" class="product_scope_img">
        <br>
        <br>
        <div class="scope_text">
        {!! $article['body']  !!}
        </div>

    </div>

<footer class="footer" style="background-image: url('{{asset("/img/1920x1080/02.jpg")}}')" >
    <div class="wrap">
        <div class="footer_cols">
            <div class="footer_col footer_col_info">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d169.38283453055902!2d38.91172728035398!3d47.21412952168544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3fd42ebbe97a1%3A0x344f1af3fb3bb45a!2z0KHQvNC40YDQvdC-0LLRgdC60LjQuSDQv9C10YAuLCA0MSwg0KLQsNCz0LDQvdGA0L7Qsywg0KDQvtGB0YLQvtCy0YHQutCw0Y8g0L7QsdC7LiwgMzQ3OTM1!5e0!3m2!1sru!2sru!4v1523464973165" class="map" allowfullscreen></iframe>
                <div class="footer_col_info_text">
                    <div> График работы:</div>
                    <div>Понедельник – пятница с <span class="footer_col_info_text-accent">9.00 до 18.00</span></div>
                    <div>Суббота – воскресенье с <span class="footer_col_info_text-accent">9.00 до 14.00</span></div>
                    <div>Наш адрес: <span class="footer_col_info_text-accent">Ростовская обл. г. Таганрог</span></div>
                    <div>Магазин: <span class="footer_col_info_text-accent">Пер. Смирновский 41, тел./факс 8(8634) 615-515</span></div>
                    <div>Магазин-склад: <span class="footer_col_info_text-accent">Мариупольское шоссе 37/2, тел./факс 8(8634) 47-70-70</span></div>
                </div>

            </div>
            <div class="footer_col footer_col_form">
                <h1>Свяжитесь с нами</h1>
                <form action="{{route('Mail')}}" class="footer_form" method="post" id="contact">

                    <input type="text" placeholder="Имя" name="name" required id="name">
                    <input type="email" placeholder="Почта" name="email" id="email">
                    <input type="text" placeholder="Телефон" name="phone" required id="phone">
                    <textarea name="body" rows="7" id="body"></textarea>
                    <input type="submit" class="footer_submit">
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>
</footer>
<script src="../js/main.js"></script>

</body>
</html>
