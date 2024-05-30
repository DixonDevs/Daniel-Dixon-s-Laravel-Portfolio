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
            <div class="about-me">
            <strong class = "about-me-top">About Me</strong>
            <h1 class = "about-me-middle"><strong>I am a Full Stack Developer/Business Owner</strong></h1>
            <p>From a young age, I was drawn to technology, dreaming of the day I would have my own computer. When that day finally arrived, I was initially fascinated by playing 
                Minecraft, spending countless hours navigating its blocky landscapes. However, beyond the gameplay, I became curious about the mechanics behind the game, sparking my 
                interest in development.</p>

            <p>Although I didn't pursue game development, this curiosity evolved into a passion for coding and programming. Now, as a full stack web developer, 
                I'm captivated by the intricacies of software development. My journey began with Minecraft and has transformed into a continuous pursuit of knowledge and growth 
                in the ever-evolving field of technology.</p>
            </div>     
        </div>
    </div>
</div>

<!-- Inline JavaScript -->
<script>
    var button = document.getElementById('move-button');
    document.addEventListener('mousemove', function(e) {
        var dx = e.pageX - button.offsetLeft - button.offsetWidth / 2;
        var dy = e.pageY - button.offsetTop - button.offsetHeight / 2;
        var distance = Math.sqrt(dx * dx + dy * dy);
        if (distance < 100) {
            var newX = Math.random() * (window.innerWidth - button.offsetWidth);
            var newY = Math.random() * (window.innerHeight - button.offsetHeight);
            button.style.left = newX + 'px';
            button.style.top = newY + 'px';
            button.classList.add('unclickable');
        } else {
            button.classList.remove('unclickable');
        }
    });
</script>
</body>
</html>
