<html>
    <head>
        <title>@yield('title')</title>
        <style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    text-decoration: none;
    font-family: sans-serif;
    font-size: 14px;
}

.servicos{
    color: black;
    font-size: 20px;
    padding: 20px;
}

header{
    background-color: #bbbbbb;
    height: 70px;
    width: 100%

}

header h1 {
    color: white;
    padding: 50px
}
.produtos {
    width: 940px;
    margin: 0 auto;
    padding: 30px;
}

.produtos li {
    padding: 50px;
    display: inline;
    text-align: center;
    width: 30%;
    vertical-align: top;
}

.preco {
    color: black;
    font-size: 20px;
    padding: 20px;
}

.produtos h2 {
    color: brown;
    font-size: 30px;

}
        </style>
    </head>
    <body>

        @section('sidebar')

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
