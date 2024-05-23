<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Home Page</title>
</head>
<body>
    @include('partials.header')
    <div className="bg-pink">
        <h1>Full Screen Section</h1>
        <p>Content that fits the full screen.</p>
    </div>
</body>
</html>
