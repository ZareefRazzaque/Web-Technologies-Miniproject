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
        <link rel="stylesheet" href="zareefrazzaque.css"> 
        <title>Zareef Razzaque Portfolio</title>
        
    </head>
    
    

    <body>






        <div class = "topofpage" id = "top">
            <header class="myname">Zareef Razzaque</header>
            <header class="pagetitle">-Contact Me</header>
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

        <a class="login" href="../notloggedin/login.php">Log In</a>

    <!-- ¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬  -->
    <header class="title">Contact Me!</header>

        
    <main class ="emailsection">
            
            
        <script src = "../JScriptstuff/basicsubmission.js" defer> </script>
        <form  method="GET" action="../phpstuff/addmessage.php">
            Your Email: <br>
            <input type="email" name="ContactEmail" class="email" ><br>
                
            <hr>
            Subject: <br>
            <input type="text" name="Subject" class="subject" > <br>

            <hr>


            <textarea name="MainArticle"class="mainarticle" ></textarea> <br>
            <button  type="button" class="submit" id="clear button"  > Clear </button>
            <input type="submit" class="submit" id ="submit button">


            <div class = "center" id ="fill in" > </div>

        </form>



        <?php
         if(isset($_REQUEST['attempted'])){
            echo "Message has been sent!";
            
        } 
        ?>




        
    </main>

        <footer>
            created by Zareef Razzaque 2022
    
        </footer>
    </body>
</html>