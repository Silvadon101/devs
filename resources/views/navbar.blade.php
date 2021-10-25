<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        nav {
            background: linear-gradient(to right,#516E96,#2F456A);
            padding: 12px 0;
        }

        nav .site_title_con {
            float: left;
            margin: 0 0 0 35px;
            /* padding: 12px; */
        }

        .site_title_con a {
            text-decoration: none;
            color: #fff;
        }

        .list_main_con {
            overflow: hidden;
            margin-left: 72%;
        }


        .list {
            float: left;
        }

        .list a {
            display: block;
            padding: 12px;
            color: #fff;
        }

        .nav_btn{
            margin: 0 8px;
            font-size: 14px;
            font-weight: 500;
        }

        .list_con .list .signout_btn{
            color: #ffffff;
            transition: 0.3s;
            transition-property: text-decoration;
            padding: 4px 35px 0;
            background: transparent;
            border-radius: 135px;
            text-decoration: none;
            margin: 4px 0 0;
        }

        .list_con .list .signout_btn:hover{
            text-decoration: underline;
        }

        .list_con .list .create_btn{
            border: 1.5px solid #ffffff;
            color: #ffffff;
            transition: 0.3s;
            transition-property: background-color;
            padding: 4px 35px;
            background: transparent;
            border-radius: 135px;
            text-decoration: none;
        }

        .list_con .list .create_btn:hover {
            background: #fff;
            color: #328AF1;
        }

    </style>
</head>

<body>
    <nav>
        <div class="site_title_con">
            <a href="/">
                <h3>DevCorp</h3>
            </a>
        </div>
        <div class="list_main_con">
            <div class="list_con">
                <div class="list"><a class="signout_btn nav_btn" href="{{ url('/signout') }}">SIGN OUT</a></div>
                <div class="list"><a data-link="section1" class="create_btn nav_btn scroll_to" href="{{ url('/create') }}">ADD DEV</a></div>
                {{-- <div class="list"><a class="create_btn nav_btn" href="#">CREATE LIST</a></div> --}}
            </div>
        </div>
    </nav>

{{-- ---------Javascript scroll on click----------- --}}
<script src="/js/scroll.js" type="text/javascript"></script>

</body>
</html>
