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
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        main {
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
</style>
</head>
    <body class="antialiased">

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