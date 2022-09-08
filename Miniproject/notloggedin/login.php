<?php
    session_start();
    if(isset($_SESSION["active"])){
        if(($_SESSION["active"] == "true")){
            header("Location: ../loggedin/ZareefRazzaquePortfolio.php");

        }
    }
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
        <meta charset="utf-8">
        <link rel="stylesheet" href="zareefrazzaque.css"> 
        <title>Zareef Razzaque Portfolio</title>
        
    </head>
    
    
    <!-- ¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬  -->
    <body>






        <div class = "topofpage" id="top">
            <header class="myname">Zareef Razzaque</header>
            <header class="pagetitle">-Portfolio</header>
        </div>

        <nav class="linkbar">
            
            <div class="otherlinks">
                <a href="https://uk.linkedin.com/in/zareef-razzaque"><img src="other/linkedinbutton.png" alt="Linkedin Logo" width=" 80"></a>
                <a href="https://www.instagram.com/zareef_razzaque/"><img src="other/instagrambutton.png" alt="Instagram Logo" width=" 80"></a>
                <a href="https://github.com/ZareefRazzaque"><img src="other/githubbutton.png" alt="Instagram Logo" width=" 80"></a>
            </div>


            <div class="mainlinks">
                <a href="ZareefRazzaquePortfolio.php" class="mainlinks" >Home</a> 
                |
                <a href="skills.php" class="mainlinks">Skills & Experience</a>
                |
                <a href="projects.php" class="mainlinks">Projects</a>
                |
                <a href="blog.php" class="mainlinks">Blog</a>
                |
                <a href="contact.php" class="mainlinks">Contact Me</a>
            


            </div>
        </nav>

         
        <header class="title">Log In</header>

        <main class ="blogsection">
            

            <form  method="POST" action="../phpstuff/login.php" method="post">
                Email: <br>
                <input required type="email" name="Email" class="email" ><br>
                
                <hr>

                Password: <br>
                <input required type="password" name="Password" class="subject" > <br>

                <?php 
                    if(isset($_REQUEST['attempted'])){
                        echo "Incorrect login details, please try again <br>";
                        
                    } 
                ?>
                
                <input type="submit" class="submit"> 
            </form>

        </main>

        <footer>
            created by Zareef Razzaque 2022
    
        </footer>

    </body>
    
</html>