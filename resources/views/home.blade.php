<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Home Page</title>
</head>
<body>
<div class="wrapper">
    @include('partials.header')
    <div class="full-screen-section">
        <h1>HELLO</h1>
        <p class="under-hello">I AM A SOFTWARE DEVELOPER</p>
        <button class="portfolio-button">See Portfolio</button>
    </div>

    <div class="full-screen-section-2">
        <div class="content-wrapper">
            <img class="daniel-image" src="images\8bit image of Daniel.jpg" alt="8-bit Character of Daniel Dixon" width="600" height="650">
            <button class="portfolio-button">See Portfolio</button>
        </div>
    </div>
</div>
</body>
</html>