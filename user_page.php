<?php 

session_start();
if(!isset($_SESSION['email'])){
    header("location: index.php");
    exit();
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="style001.css">
 
</head>
<body>
    <header class="header">
        <div class="logo">lulatt.</div> 
        <nav class="navbar">
            <a class="project" href="#project">Projects</a>
            <a class="about" href="#about">About-Me</a>
            <a class="contant" href="#contact">Contact</a>

            <button class="header-logo-button" onclick="window.location.href='logout.php'">Logout</button>
        </nav>
    </header>

      <main class="hero-section">
        <div class="hero-content">
            <h1>Lulatt. is Student of<br>KOBE DENSHI IT College. <br>KOBE SHI.</h1>
            <p class="hero-links">
                <a href="#">Behance</a> &ndash; 
                <a href="#">LinkedIn</a> &ndash; 
                <a href="#">Github</a>
            </p>
        </div>
        <div class="hero-image-container">
            <img src="img/1.png" alt="Jonny Czar" class="hero-image">
        </div>
    </main>

    <section id="project" class="section">
        <h2>Projects</h2>
        <div class="project-grid">
            <div class="project-card">
                <img src="project-placeholder-1.jpg" alt="Project 1">
                <h3>Project Alpha</h3>
                <p>Designed and developed a responsive Youtube platform.</p>
            </div>
            <div class="project-card">
                <img src="project-placeholder-2.jpg" alt="Project 2">
                <h3>Project Beta</h3>
                <p>My personal movies review website </p>
            </div>
            <div class="project-card">
                <img src="project-placeholder-3.jpg" alt="Project 3">
                <h3>Project Gamma</h3>
                <p>My Porfolio Site</p>
            </div>
        </div>
    </section>

    <section id="about" class="section">
        <h2>About-Me</h2>
        <p>I am currently studying at the KOBE DENSHI IT College in Japan. As a first years Student in AI System Development Deperment.</p>
        <p>I am so much passionate to be a Software Engineer in the future. I want to start my carrer as a Backend Developer first...</p>

        <!-- <p>I am a passionate Product Designer with over 8 years of experience in crafting intuitive and engaging user experiences. My expertise lies in bridging the gap between user needs, business goals, and technological feasibility.</p>
        <p>Throughout my career, I've had the privilege of working with diverse teams on a variety of products, from e-commerce platforms to mobile applications. I thrive in fast-paced environments and am always eager to learn and adapt to new challenges.</p>
         -->
        <h3>Skills:</h3>
        <ul>
            <li>HTML/CSS/JS</li>
            <li>PHP/Python</li>
            <li>MySQL Database</li>
            <li>Github</li>
            <!-- <li>UI Design & Prototyping</li>
            <li>Interaction Design</li>
            <li>Design Systems</li>
            <li>User Testing</li>
            <li>Figma, Sketch, Adobe XD</li> -->
        </ul>
    </section>

    <section id="contact" class="section">
        <h2>Contact</h2>
        <p>Feel free to reach out to me using through my social links.</p>
        
        <div class="img-wrapper">
            <div class="img-block">
                <label class="linkedin-label" for="linkedIn">linkedin</label>
                <img class="linkedin-img" src="img/qr-Linkedin.png" alt="img not found">
            </div>
            <div class="img-block">
                <label class="github-label" for="github">github</label>
                <img class="github-img" src="img/qr-github.png" alt="img not found">
            </div>
        </div>

    </section>

    <footer>
        <p>All the copyright@ go to LuLatt. 2025</p>
    </footer>
    <script src="script.js"></script>
   <!-- <div class="box">
        <h1>Welcome, <span></span></h1>
        <p>This is an <span>user</span> page</p>
        <button onclick="window.location.href='logout.php'">Logout</button>
   </div> -->
<!-- <?= $_SESSION['name']; ?> -->
</body>
</html>