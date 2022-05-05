<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DevCorp-Developer Management System</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    {{-- ------------Navbar------------ --}}
    @include('navbar')
    <div id="space"></div>

{{--    ----------------Client Info--------------------}}
    <div class="client_con">
        @if(session('googleuser'))
        <div class="client">
            <img src="{{ auth()->user()->avatar }}" alt="profile-icon" height="100px" width="100px" style="border-radius: 200px">
            <span class="client-name">
                <h4>{{ auth()->user()->name }}</h4>
            </span>
        </div>
        @else
        <div class="client">
            <img src="/img/profile-icon.png" alt="profile-icon" height="100px" width="100px">
            <span class="client-name">
                <h4>{{ session('loguser') }}</h4>
            </span>
        </div>
        @endif
        <i class="fas fa-level-down-alt arrow-down"></i>
    </div>
    {{--   -------X-----Client Info-------X-----------}}

    @if ($layout == 'index')
        <div>
            <section>
                @include('developerslist')
            </section>
            <section></section>
        </div>
    @elseif($layout == 'create')
        <div>
            <section>
                @include('developerslist')
            </section>
            <section id="section1" class="form_container">
                <form class="form_bd" action="store" method="POST">
                    @csrf
                    <div>
                        <label>Dev id</label><br>
                        <input type="text" name="cne" placeholder="E7000" required>
                    </div>
                    <div>
                        <label>First Name</label><br>
                        <input type="text" name="firstname" placeholder="John" required>
                    </div>
                    <div>
                        <label>Last Name</label><br>
                        <input type="text" name="lastname" placeholder="Doe" required>
                    </div>
                    <div>
                        <label>Date of Birth</label><br>
                        <input type="date" name="dateofbirth" required>
                    </div>
                    <div>
                        <label>Profession</label><br>
                        <input type="text" name="profession" placeholder="Software Eng. . ." required>
                    </div>
                    <div>
                        <label>Where am I?</label><br>
                        <input type="text" name="where_am_i" placeholder="London" required>
                    </div>
                    <div>
                        <label>Projects?</label><br>
                        <input type="text" name="projects" placeholder="Google" required>
                    </div>
                    <input type="submit" value="Save">
                    <input type="reset" value="Reset">
                </form>
            </section>
        </div>
    @elseif($layout == 'show')
        <div>
            <section>
                @include('project')
            </section>
            <section></section>
        </div>
    @elseif($layout == 'edit')
        <div>
            <section>
                @include('developerslist')
            </section>
            <section id="section2" class="form_container">
                <form class="form_bd" action="{{ url('/update/' . $dev->id) }}" method="POST">
                    @csrf
                    <div>
                        <label>Dev id</label><br>
                        <input type="text" value="{{ $dev->cne }}" name="cne" placeholder="E7000" required>
                    </div>
                    <div>
                        <label>First Name</label><br>
                        <input type="text" value="{{ $dev->firstname }}" name="firstname"
                            placeholder="Enter firstname" required>
                    </div>
                    <div>
                        <label>Last Name</label><br>
                        <input type="text" value="{{ $dev->lastname }}" name="lastname" placeholder="Enter lastname" required>
                    </div>
                    <div>
                        <label>Date of Birth</label><br>
                        <input type="date" value="{{ $dev->dateofbirth }}" name="dateofbirth"
                            placeholder="Enter date of birth" required>
                    </div>
                    <div>
                        <label>Profession</label><br>
                        <input type="text" value="{{ $dev->profession }}" name="profession"
                            placeholder="Enter profession" required>
                    </div>
                    <div>
                        <label>Where am I?</label><br>
                        <input type="text" value="{{ $dev->where_am_i }}" name="where_am_i" placeholder="London" required>
                    </div>
                    <div>
                        <label>Project</label><br>
                        <input type="text" value="{{ $dev->projects }}" name="projects" placeholder="Google" required>
                    </div>
                    <input type="submit" value="Update">
                    <input type="reset" value="Reset">
                </form>
            </section>
        </div>
    @endif
    <br><br><br>

    {{-- ---------Footer--------- --}}
    @include('footer')
</body>
</html>
