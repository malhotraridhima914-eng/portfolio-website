<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

$dbname= "mysql:host=localhost;dbname=db_portfolio";
$username="root";
$password="";

$conn=new PDO($dbname, $username , $password);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message=$_POST["message"];


$sql="INSERT INTO users(name , email , message) VALUES(:name, :email , :message)";

$stmt=$conn->prepare($sql);

$stmt->execute([
    ":name"=>$name,
    ":email"=>$email,
    ":message"=>$message
]);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
          
</head>
<body>
<!-- navbar -->
    <div class="a" id="home">
        <div class="aa">
            <div class="aaa">Ridhima</div>
            <div class="aab">.</div>
        </div>
        <div class="header">
            <div><a href="#home">Home</a></div>
            <div><a href="#about">About</a></div>
            <div><a href="#skills">Skills</a></div>
            <div><a href="#project">Projects</a></div>
            <div><a href="#contact">Contact</a></div>
        </div>
        <div class="ab">Download CV
            <i class="fa-solid fa-download"></i>
        </div>
    </div>

<!-- Intro Section -->
<div class="intro">
    <div class="hero_section">
    <div class="bb">
        <h4>Hi, I'm</h4>
    </div>
    <div class="b">Ridhima</div>
    <div>Web Developer |<span class="c"> Python Programmer</span></div>
    <div class="About_me">
        <p>
            I built responsive websites and practical software solutions. I love turning ideas into real world projects with clean and efficient code.
        </p>
    </div>
    <div class="bc" >
        <div class="baa">
            <a href="https://github.com/malhotraridhima914-eng" target="_blank" rel="noopener">
            View My Work 
            <i class="fa-solid fa-arrow-right"></i>
        </a>
        </div>
        <div class="bab">
            <a href="#contact">
            Contact Me 
            <i class="fa-solid fa-phone"></i>
        </a>
        </div>
    </div>
    <div class="social">
        <div class="github">
            <a href="https://github.com/malhotraridhima914-eng" target="_blank" rel="noopener">
            <i class="fa-brands fa-github"></i>
        </a>
        </div>
        <div class="insta">
            <a href="https://www.instagram.com/ridmalhotra1301/" target="_blank" rel="noopener">
            <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
        <div class="linkedin">
            <a href="https://www.linkedin.com/in/ridhima-malhotra-6936832a5" target="_blank" rel="noopener">
                <i class="fa-brands fa-linkedin"></i>
            </a>
        </div>
        <div class="mail">
            <a href="mailto:malhotraridhima914@gmial.com" target="_blank">
            <i class="fa-regular fa-envelope"></i>
        </a>
        </div>
    </div>
</div>
    <div class="image">
        <img src="ridhima-image-portfolio.png" alt="picture" width="390px" height="410px">
    </div>
</div>

<!-- About section -->
<div class="about" id="about">
        <div class="about_sec">
            <div class="cc">
                About me 
            </div>
            <div class="ct">Get to know me!</div>
            <div>While pursuing B.Sc. Chemistry (Hons.), I discovered a strong interest in technology, programming, and problem-solving. What started as curiosity gradually became a passion for building websites, working with data, and creating digital solutions.
                </div>
            <div>I enjoy learning new technologies and transforming ideas into practical projects that are both functional and user-friendly.</div>
        </div>
        <div class="info">
            <div class="name">
                <div><i class="fa-regular fa-user"></i><b>Name:</b>  Ridhima</div>
            </div>
            <div class="edu">
                <div><i class="fa-solid fa-graduation-cap"></i><b>Education:</b>  B.Sc. Chem (Hons.)</div>
            </div>
            <div class="loc">
                <div><i class="fa-solid fa-location-dot"></i><b>Location:</b>  New Delhi, India</div>
            </div>
            <div class="ema">
                <div><i class="fa-regular fa-envelope"></i><b>Email:</b>  malhotraridhima914@gmail.com</div>
            </div>
        </div>
</div>

<!-- Skills -->
<div class="skill">
    <div class="ss" id="skills">
        My Skills
    </div>
    <div class="ts">
        Technologies I work with
    </div>
    <div class="icon">
        <div class="html">

            <i class="fa-brands fa-html5 fa-2xl" style="color: rgb(245, 95, 3);"></i>
            <p style="font-size: smaller;">HTML</p>
        </div>
        <div>
            <i class="fa-brands fa-css3-alt fa-2xl" style="color: rgb(11, 85,143);"></i>
            <p style="font-size: smaller;">CSS</p>
        </div>
        <div>
            <i class="fa-brands fa-js fa-2xl" style="color: rgb(245, 205, 3);"></i>
            <p style="font-size: smaller;">JavaScript</p>
        </div>
        <div>
            <i class="fa-brands fa-python fa-2xl" style="color: #3776AB;"></i>
            <p style="font-size: smaller;">Python</p>
        </div>
        <div>
            <i class="fa-brands fa-php fa-2xl" style="color: rgb(97, 60, 127);"></i>
            <p style="font-size: smaller;">PHP</p>
        </div>
        <div>
            <i class="fa-brands fa-laravel fa-2xl" style="color: rgb(245, 3, 3);"></i>
            <p style="font-size: smaller;">laravel</p>
        </div>
        <div class="cpp">
            
            <i class="devicon-cplusplus-plain colored"></i>
            <p style="font-size: smaller;">C++</p>
        </div>
        <div>
            <i class="fa-solid fa-database fa-2xl" style="color: rgb(249, 249, 249);"></i>
            <p style="font-size: smaller;">SQL</p>
        </div>
        <div>
            <i class="fa-brands fa-r-project fa-2xl" style="color: rgb(57, 63, 246);"></i>
            <p style="font-size: smaller;">R</p>
        </div>
        <div>
            <i class="fa-solid fa-file-excel fa-2xl" style="color: rgb(6, 84, 6);"></i>
            <p style="font-size: smaller;">Excel</p>
        </div>
    </div>
</div>

<!-- Projects -->
<div  class="projects" id="projects">

    <div class="section-title" id="project">
        MY PROJECTS
    </div>

    <h2>Things I've Built</h2>

    <div id="projects-container"></div>

</div>

<!-- CONTACT -->
    <div>
        <DIV  class="Contact" id="contact">
            <div>
                <div class="co"><h3>LET'S CONNECT</h3></div>
                <div class="cp">Have a project in mind?</div>
                <div>
                    <p>I'm open to oppurtunities and collaborations.</p>
                </div>
                <div>
                    <p>Let's built something together!</p>
                </div>
            </div>
            <div>
                <form action="index.php" method="post">
                    <input type="text" placeholder="Your name" name="name">
                    <input type="email" placeholder="Your email" name="email"><br><br>
                    <textarea placeholder="Your message" name="message"></textarea>
                    <button>Send message<i class="fa-solid fa-paper-plane fa-lg" style="color: rgb(252, 250, 250);"></i></button>
                </form>
            </div>
        </DIV>

    </div>

<!-- Footer -->
    
<div class="Footer">
        <div>
            <div class="aa">
                <div class="aaa">Ridhima</div>
                <div class="aab">.</div>
            </div>
            <div>
                <p>Building Ideas. Creating Solutions.</p>
            </div>
            <div>
                <p>©️ 2026 Ridhima. All rights reserved.</p>
            </div>
        </div>
        <div>
            <div>
                <b>Quick Links</b>
            </div>
            <div class="head">
                <div><a href="#home">Home</a></div>
                <div><a href="#about">About</a></div>
                <div><a href="#skills">Skills</a></div>
                <div><a href="#project">Projects</a></div>
                <div><a href="#contact">Contact</a></div>
            </div>
        </div>
        <div>
            <div><b>Connect</b></div>
        <div class="social">
            <div class="github">
                <a href="https://github.com/malhotraridhima914-eng" target="_blank" rel="noopener">
                <i class="fa-brands fa-github"></i>
            </a>
            </div>
            <div class="insta">
                <a href="https://www.instagram.com/ridmalhotra1301/" target="_blank" rel="noopener">
                <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
            <div class="linkedin">
                <a href="https://www.linkedin.com/in/ridhima-malhotra-6936832a5" target="_blank" rel="noopener">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
            <div class="mail">
                <a href="mailto:malhotraridhima914@gmial.com" target="_blank">
                <i class="fa-regular fa-envelope"></i>
            </a>
            </div>
        </div>
    </div>

</div>
    
    
    
<script src="script.js" defer></script>
</script>
</body>
</html>
