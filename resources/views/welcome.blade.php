<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="{{ route('pasien.create') }}">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
            <form method="post" action="{{ route('pasien.store') }}">
                @csrf
                <div class="form-group">
                    <label for="first_name">Nama:</label>
                    <input type="text" class="form-control" name="nama"/>
                </div>

                <div class="form-group">
                    <label for="last_name">no rm:</label>
                    <input type="text" class="form-control" name="no_rm"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Birth:</label>
                    <input type="date" class="form-control" name="birth"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Birth:</label>
                    <input type="date" class="form-control" name="tgl_asesmen"/>
                </div>

                <div class="form-group">
                    <label for="city">Usia:</label>
                    <input type="text" class="form-control" name="usia"/>
                </div>

                <div class="form-group">
                    <label for="email">sex:</label>
                    <input type="text" class="form-control" name="sex"/>
                </div>
                <div class="form-group">
                    <label for="city">alamat:</label>
                    <input type="text" class="form-control" name="alamat"/>
                </div>
                <div class="form-group">
                    <label for="city">alamat:</label>
                    <input type="text" class="form-control" name="rencana_kerja" value="None"/>
                </div>
                <button type="submit" class="btn btn-primary-outline">Add contact</button>

            </form>
        </div>
    </body>
</html>
