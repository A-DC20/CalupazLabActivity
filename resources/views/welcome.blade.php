<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
        }

        .navbar {
            background-color: black;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .home-content {
            text-align: center;
        }

        .home-content p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Website</h1>
    </header>

    <div class="navbar">
        <a href="ContactUs">Contact Us</a>
        <a href="AboutUs">About Us</a>
        <a href="Faqs">FAQs</a>
        <a href="Models">Models</a>
    </div>

    <div class="container">
        <div class="home-content">
            <h2>Welcome to Our Homepage</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget ligula non sapien venenatis
                convallis. Nunc sit amet urna id justo congue tincidunt. Vestibulum volutpat sapien auctor fringilla
                dignissim.
            </p>
        </div>
    </div>
</body>
    </body>
</html>
