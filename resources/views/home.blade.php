<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HarmonyWorks</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
                body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #b1bbab;
        }
        header {
            background-color: #545f44;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav {
            background-color: #739366;
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            color: #fff;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        main {
            padding: 20px;
        }
        footer {
            background-color: #545f44;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
</style>
</head>
    <body>

    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <li class="nav-item dropdown links">
                    <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        @can('manage-users')
                            <a class="dropdown-item" href="{{route('admin.users.index')}}">
                                User Management
                            </a>
                        @endcan
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @else
                <a href="{{ url('/login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <header>
        <h1>Sveiki atvykę į HarmonyWorks!</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Pagrindinis</a></li>
            <li><a href="#">Apie</a></li>
            <li><a href="#">Paslaugos</a></li>
            <li><a href="#">Kontaktai</a></li>
        </ul>
    </nav>

    <main>
        <h2>Turinys</h2>
        <p>This is the main content area of the page..</p>
        <p>You can add more sections, content, and customize it as needed.</p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> HarmonyWork</p>
    </footer>

    </body>
</html>