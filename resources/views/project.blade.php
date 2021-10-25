<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devs List</title>
    <link rel="stylesheet" href="/css/list.css">
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
    <div class="client">
        <img src="/img/profile-icon.png" alt="profile-icon" height="100px" width="100px">
        <span class="client-name">
                <h4>{{ session('loguser') }}</h4>
            </span>
    </div>
    <i class="fas fa-level-down-alt arrow-down"></i>
</div>
{{--   -------X-----Client Info-------X-----------}}


<div class="main_container">
    <div class="sub_container">
        <div class="card_body">
            <center>
                {{-- <img src="/img/devs-at-work.jpg" alt="devlist_img"> --}}
            </center>
            <div class="card1">
                <h3>Devs List</h3>
                <div class="project_con">
                    <span>Project Tags</span>
                    <span class="tag_con">
                @foreach($list as $list)
                    <a class="tags" href="{{ url('/project/' . $list->projects ) }}"> {{ $list->projects }}</a>
                @endforeach
              </span>
          </div>
                <p>Here are all your fellow devs!
                </p>
                <table class="table">
                    <thead class="thead">
                    <tr>
                        <th>Dev_id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Date of Birth</th>
                        <th>Profession</th>
                        <th>Where_am_i</th>
                        <th>Projects</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="tbody">
                                                @foreach ($dev as $dev)
                                                    <tr>
                                                        <td>{{ $dev->cne }}</td>
                                                        <td>{{ $dev->firstname }}</td>
                                                        <td>{{ $dev->lastname }}</td>
                                                        <td>{{ $dev->dateofbirth }}</td>
                                                        <td>{{ $dev->profession }}</td>
                                                        <td>{{ $dev->where_am_i }}</td>
                                                        <td>{{ $dev->projects }}</td>
                                                        <td>
                                                            {{-- <a class="action_btn_show" href="#">Show</a>--}}
                                                            <a class="action_btn_edit" href="{{ url('edit/' . $dev->id) }}">Edit</a>
                                                            <a class="action_btn_del" href="{{ url('delete/' . $dev->id) }}">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<br><br><br>
{{--------------Footer-------------}}
 @include('footer')
</body>

</html>
