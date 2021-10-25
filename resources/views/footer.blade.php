<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        footer{
            font-family: 'Poppins';
        }
        h1{
            color: grey;
            text-align: center;
            margin-top: 145px;
        }

        .main_foot{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(to right,#2E81E9,#1D54BD);
            color: #fff;
        }

        a{
            color: #8CAEE5;
            text-decoration: none;
            font-size: 18px;
        }

        a:hover{
            color: #fff;
        }

        li{
            list-style: none;
        }

        .sub_foot_title_con{
            width: 60%;
            padding: 45px;
        }

        .sub_foot_title_con p{
            padding: 0 2px;
        }

        .sub_foot_title_con h1{
            text-align:left;
            padding: 25px 2px 0;
            color: #fff;
            margin: 0 0 12px 0;
            font-size: 35px;
        }

        .right_block{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 8%;
        }

        .main_link_block{
            margin: 25px 45px 0;
            padding: 0 0 12px 0;
        }

        .bottom_foot{
            background: linear-gradient(to right,#2E81E9,#1D54BD);
            color: #8DACE1;
            text-align:center;
            font-size: 14px;
            border-top: 1.5px solid #628abc;
            padding: 18px 0 12px 0;
        }

        .bottom_foot a{
            font-size: 14px;
        }

        .bottom_foot a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <footer>
        <div class="main_foot">
            <section class="foot_title_card">
                <div class="sub_foot_title_con">
                    <h1>DevCorp</h1>
                    <p>A friendly, loving family of devs<br>. . . only online.</p>
                </div>
            </section>

            <div class="right_block">
                <section class="link_col_1 main_link_block">
                    <h4 style="margin-bottom:30px">Engage</h4>
                    <ul>
                        <li><a href="{{ url('/signout') }}">Sign Out</a></li>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">Log In</a></li>
                    </ul>
                </section>
                <section class="link_col_2 main_link_block">
                    <h4 style="margin-bottom:30px">Details</h4>
                    <ul>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </section>
                <section class="link_col_3 main_link_block">
                    <h4 style="margin-bottom:30px">Coming Soon</h4>
                    <ul>
                        <li><a href="#">Chat Feature</a></li>
                        <li><a href="#">More Mods</a></li>
                        <li><a href="#">. . .</a></li>
                    </ul>
                </section>
            </div>
        </div>
        <div class="bottom_foot">
            <p>&copy; Devcorp 2021. All rights reserved. Yes, all of them. Seriously.<br>
                Designed with <b><a href="#">Laravel</a></b>. Proudly hosted with <b><a href="#">localhost.</a></b></p>
        </div>
    </footer>
</body>
</html>
