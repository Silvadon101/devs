<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devs List</title>
    <link rel="stylesheet" href="/css/list.css">
</head>

<body>
    <div class="main_container">
        <div class="sub_container">
            <div class="card_body">
                <center>
                    {{-- <img src="/img/devs-at-work.jpg" alt="devlist_img"> --}}
                </center>
                <div class="card1">
                        @if(!empty($devs[0]))
                                <h3>Devs List</h3>
                                <div class="project_con">
                                    <span>Project Tags</span>
                                    <span class="tag_con">
                                        @foreach($list as $list)
                                        <a class="tags" href="{{ url('/project/' . $list->projects ) }}">{{ $list->projects }}</a>
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
                                        @foreach ($devs as $devs)
                                            <tr>
                                                <td>{{ $devs->cne }}</td>
                                                <td>{{ $devs->firstname }}</td>
                                                <td>{{ $devs->lastname }}</td>
                                                <td>{{ $devs->dateofbirth }}</td>
                                                <td>{{ $devs->profession }}</td>
                                                <td>{{ $devs->where_am_i }}</td>
                                                <td>{{ $devs->projects }}</td>
                                                <td>
                                                    {{-- <a class="action_btn_show" href="#">Show</a> --}}
                                                    <a data-link="section2" class="action_btn_edit scroll_to" href="{{ url('edit/' . $devs->id) }}">Edit</a>
                                                    <a class="action_btn_del" href="{{ url('delete/' . $devs->id) }}">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <center>
                                <section class="empty_list">
                                <div class="img_con">
                                    <img src="/img/dev-icon-2-bg.png" alt="dev-icon">
                                </div>
                                <p>It's lonely here. Let's make a team!</p>
                                    <div class="btn">
                                        <a href="{{ url('/create') }}">ADD DEV</a>
                                    </div>
                                </section>
                                </center>
                        @endif
                </div>
                </div>
        </div>
    </div>

    {{-- @include('footer') --}}
</body>

</html>
