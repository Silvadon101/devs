<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="/css/form.css" rel="stylesheet">
</head>

<body>
    <main>
        <div class="wrapper">
            <section class="main_con">
                <form action="signup" method="POST">
                    @csrf
                    <div class="field">
                        <input type="text" name="name" placeholder="John Doe"><br>
                    </div>
                    <span style="color:rgb(235, 52, 52)">
                        @if (Session::get('failuser'))
                            {{ Session::get('failuser') }}
                        @endif
                    </span>
                    <div class="field">
                        <input type="text" name="username" placeholder="dev_newbie_john"><br>
                    </div>
                    <span style="color:rgb(235, 52, 52)">
                        @if (Session::get('failemail'))
                            {{ Session::get('failemail') }}
                        @endif
                    </span>
                    <div class="field">
                        <input type="email" name="email" placeholder="johndoe@gmail.com"><br>
                    </div>
                    <div class="field">
                        <input type="password" name="pwd" placeholder="password">
                    </div>
                    <div class="field">
                        <input type="submit" value="REGISTER">
                    </div>
                </form>
            </section>
        </div>
    </main>
</body>
</html>
