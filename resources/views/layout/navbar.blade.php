<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="{{ url('/') }}#home"style="color:#007BFF;text-decoration:none;">KrawlyScript</a></div>
        <ul>
            <ul>
                <li><a href="{{ url('/') }}#home">HOME</a></li>
                <li><a href="{{ url('/') }}#about">ABOUT</a></li>
                <li><a href="{{ url('/') }}#services">SERVICES</a></li>
                <li><a href="{{ route('projects') }}">PROJECTS</a></li>
                <li><a href="{{ url('/') }}#contact">CONTACT US</a></li>
            </ul>
                  
        </ul>
    </div>
</body>
</html>