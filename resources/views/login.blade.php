<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log In</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="/css/form.css" rel="stylesheet">
</head>
<body>
	    <main>
        <div class="wrapper">
            <section class="main_con">
                <form action="login" method="POST">
                    @csrf
                    <span style="color:rgb(235, 52, 52)">
                        @if (Session::get('faillog'))
                            {{ Session::get('faillog') }}
                        @endif
                    </span>
                    <div class="field">
                        <input type="text" name="username" placeholder="dev_newbie_john">
                    </div>
                    <div class="field">
                        <input type="password" name="pwd" placeholder="password">
                    </div>
                    <div class="field">
                        <input type="submit" value="LOGIN">
                    </div>
                </form>
            </section>
        </div>
    </main>
</body>
</html>