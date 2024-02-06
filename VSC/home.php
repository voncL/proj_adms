<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
    <div class="header">
        <h2>TaskMaster</h2>
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="#">Contact Us</a>
    <nav>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="myForm">
        <select name="option" onchange="submitForm()">
            <option value="login">Login</option>
            <option value="signup">Signup</option>
        </select>
    </form>
    <script>
    function submitForm() {
        document.getElementById("myForm").submit();
    }
    </script>
    </nav>
    </div>
    <article>
    <section class="card">
      <div class="text-content">
        <h3>Your Card Title</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
           Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>  
        <a href="https://www.web-leb.com/code">Join now</a>
      </div>
      <div class="visual">
        <img src="ge.jpg" alt="" />
      </div>
    </section> 
  </article>
</body>

    <footer>
        <div class="ft1">
        <h4>Follow Us</h4>
        <ul class="wrapper">
            <li class="icon discord">
            <span><i class="fab fa-discord-f"><a href="https://discord.com/"><img class="img" src="dc.png"/></a></i></span>
            </li>
            <li class="icon github">
            <span><i class="fab fa-github"><a href="https://github.com/"><img class="img2" src="github.png"/></a></i></span>
            </li>
            <li class="icon youtube">
            <span><i class="fab fa-youtube"><a href="https://www.youtube.com/watch?v=zZ6vybT1HQs"><img class="img3" src="yt.png"/></a></i></span>
            </li>
        </ul>
        </div>
        <div class="ft2">
        <div class="card">
            <h4>Products</h4>
            <a href="" class="btn">LMS for Education</a><br>
            <a href="" class="btn">Classroom</a><br>
            <a href="" class="btn">Assignments</a><br>
            <a href="" class="btn">PHP Database</a><br>
        </div>
        <div class="card">
            <h4>Get Products</h4>
            <a href="" class="btn">Contact Sales</a><br>
            <a href="" class="btn">Apply for Cloud Credits</a><br>
            <a href="" class="btn">Sign up</a><br>
            <a href="" class="btn">Accesbility</a><br>
        </div>
        <div class="card">
            <h4>For Educators</h4>
            <a href="" class="btn">Overview</a><br>
            <a href="" class="btn">Product Guides</a><br>
            <a href="" class="btn">Communities</a><br>
            <a href="" class="btn">FAQ</a><br>
        </div>
        <div class="card">
            <h4>About Our LMS</h4>
            <a href="" class="btn">Our Commitment</a><br>
            <a href="" class="btn">For K12</a><br>
            <a href="" class="btn">Accesbility</a><br>
            <a href="" class="btn">Distance Learning</a><br>
        </div>
</div>
    </footer>
    
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $option = $_POST["option"];

    if ($option == "login") {
        header("Location: new.php");
        exit();
    } elseif ($option == "signup") {
        header("Location: Register.php");
        exit();
    }
}
?>


        
        