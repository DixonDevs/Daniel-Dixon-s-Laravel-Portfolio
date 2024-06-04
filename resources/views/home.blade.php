<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Home Page</title>
    @vite('resources/js/app.jsx')
</head>
<body>
@include('partials.header')
<div class="wrapper">
    <div class="full-screen-section">
        <h1>HELLO</h1>
        <p class="under-hello">I AM A SOFTWARE DEVELOPER</p>
        <button class="portfolio-button">See Portfolio</button>
    </div>

    <div class="full-screen-section-2">
        <div class="content-wrapper-2">
            <img class="daniel-image" src="images/8bit image of Daniel.jpg" alt="8-bit Character of Daniel Dixon" width="600" height="650">
            <div class="about-me">
            <strong class="about-me-top">About Me</strong>
            <h1 class="about-me-middle"><strong>I am a Full Stack Developer/Business Owner</strong></h1>
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
<div class="wrapper-2">
    <div class="full-screen-section-3">
        <div class="content-wrapper-3">
            <div class="experience">
                <strong class="experience-title">Experience</strong>
                <h1 class="experience-1">AceOne Technologies</h1>
                <p>Full Stack Developer / October 2023 - Present</p>
                <ul>
                    <li class="animated-item">Manage multiple WordPress sites, ensuring smooth operation and implementing customizations as per client requirements.</li>
                    <li class="animated-item">Maintain and develope web software using Laravel, utilizing PHP, HTML, CSS, and JavaScript to create robust and efficient applications
                        while adhearing to best practice.</li>
                    <li class="animated-item">Conduct regular maintenance and updates to ensure security and performance optimization of websites and web applications.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Inline JavaScript -->
<script>
    var button = document.getElementById('move-button');
    var originalPosition = { left: button.offsetLeft, top: button.offsetTop };
    var moveCount = 0;
    var maxMoves = 10;
    var buttonTexts = [
        "Can't catch me!",
        "Too slow!",
        "Try again!",
        "Almost!",
        "Not quite!",
        "Keep trying!",
        "Missed me!",
        "Getting closer!",
        "So close!",
        "Gotcha!"
    ];

    button.addEventListener('mouseover', function() {
        if (moveCount < maxMoves) {
            moveButton();
            moveCount++;
        } else {
            button.style.position = 'static'; // Reset position style
            button.style.left = originalPosition.left + 'px';
            button.style.top = originalPosition.top + 'px';
            button.textContent = "OH im stuck!!!"; // Reset text content
            button.classList.remove('unclickable');
        }
    });

    function moveButton() {
        var newX = Math.random() * (window.innerWidth - button.offsetWidth);
        var newY = Math.random() * (window.innerHeight - button.offsetHeight);
        button.style.position = 'absolute'; // Ensure the button can move freely
        button.style.left = newX + 'px';
        button.style.top = newY + 'px';
        button.textContent = buttonTexts[moveCount % buttonTexts.length]; // Change button text
        button.parentElement.href = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'; // Enable link
        button.classList.add('unclickable');
    }

    document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const items = entry.target.querySelectorAll('.animated-item');
                items.forEach((item, index) => {
                    item.style.setProperty('--animation-delay', `${index * 0.3}s`);
                    item.classList.add('visible');
                });
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const sections = document.querySelectorAll('.full-screen-section-3');
    sections.forEach((section) => {
        observer.observe(section);
    });
});
</script>
</body>
</html>
