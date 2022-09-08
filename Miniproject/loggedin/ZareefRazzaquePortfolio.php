<?php
    session_start();

    if(!($_SESSION["active"] == "true")){
        header("Location: ../notloggedin/ZareefRazzaquePortfolio.php");

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
                <a href="https://uk.linkedin.com/in/zareef-razzaque"><img src="../other/linkedinbutton.png" alt="Linkedin Logo" width=" 80"></a>
                <a href="https://www.instagram.com/zareef_razzaque/"><img src="../other/instagrambutton.png" alt="Instagram Logo" width=" 80"></a>
                <a href="https://github.com/ZareefRazzaque"><img src="../other/githubbutton.png" alt="Instagram Logo" width=" 80"></a>
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
                <a href="messages.php" class="mainlinks">Messages</a>
            


            </div>
        </nav>

        <a class="returntotop" href="#top">Return to top</a>

        <a class="login" href="../phpstuff/logout.php">Log Out</a>        

<!-----------------The Main part of the page starts here----------------------------------------------------------------------------------------------------------------- -->
        <main>

            <section class = "introductions">
                <header id = "whoami">Who am I</header>
                <article class ="intro">
                    <p>Hi I am Zareef Razzaque, I am a Computer Scientist and Robot Entusiast studing at Queen Mary, University of London.</p>
                    <p>As a student who has learned Java, JavaScript and Python by the end of Secondary School, I enjoy the puzzles programming has to offer: whether it is Critical, Thinking Maximising Effiency or Taking Complicated Problems.</p>
                    <p>I am also interested in prototype testing through previous experience as a product tester and through a side project developing a RC Boat! </p>
                    <p>I dream for my passion of all things technology to take me to great places and change the world in incredible ways…</p>
                </article>
                <figure>
                    <img src="../other/me.jpg" alt="Zareef Razzaque" width="400">
                    <figcaption>Zareef Razzaque</figcaption>
                </figure>
            
            </section>

            


                
               
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <section class = "sidelinks">
                <nav class=" pagelinks">
                    <header class="pagelinkstitle">Page&nbspLinks</header>
                    <ul class = "subjects">
                        <li><a class=" pagelinks" href="#whoami" class= pagelinks>Who am I</a> </li>
                        <li><a class=" pagelinks" href="#myeducation" class= pagelinks>Education</a></li>
                        <li> <a class=" pagelinks" href="#hobbies" class= pagelinks>Hobbies </a> </li>
                        <li> <a class=" pagelinks" href="#contactdetails" class= pagelinks>Contact Details </a> </li>
                    </ul>
                </nav>
        

            </section>
           








            <section id = "myeducation">
                <article class="educationinfo">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <header class="educationtitle"> Education </header>
                    Alevels (taken at The Coopers' Company and Coborn School): 
                    <figure class = "cooperslogo">
                        <img  src="../other/cooper-logo.png" alt="Coopers Company Logo">
                    </figure>
                    <table class="alevelgrades">
                        <tr> 
                            <th>Subjects Taken</th>
                        </tr>

                        <tr>
                            <td>Mathematics</td>
                        </tr>

                        <tr>
                            <td>Physics</td>

                        </tr>
                        <tr>
                            <td>Economics</td>    

                    </table>

                    <br>


                    
                    <p> I am currently studying with Queen Mary, University of London.</p> 
                    <figure class="qmullogo">
                        <img src="../other/QMUL-logo.jpg" alt="QMUL Logo" width="400">
                    </figure>

                    <p>currently enrolled: Computer Science BSc</p>
                </article>

            </section>








            <section id = "hobbies">
                <article>
                    <header class="hobbiestitle" > Hobbies</Header>
                        I enjoy a number of hobbies during my free time including but not limited to: <br>

                        <div class ="ewb">
                            <hr>
                            <header>Engineers Without Borders</header>
                            

                            <p class="ewbtext"> 
                                    <img class="ewbimage" src="../other/ewb.png" alt="Engineering without borders" width="250">
                                
                                I am apart of Queen Mary's Engineers Without Borders, a society dedicated to improving sustainability through engineering products that are designed to help the enviroment and imporve the livelihoods of people in many different parts of the world.
                                Currently playing the role as the Society's only Electronic Engineer and Computer Scientist, Each day is a new journey in learning how electronics can be designed to help the environment. 
                            </p>
                            
                            <hr>
                        </div>
                        
                        <div class="fencing">
                            <hr>
                            <header class="fencingtitle">Fencing</header>
                            <p class="fencingtext"> 
                                <img class="fencingimage" src="../other/fencing.png" alt="fencing in Warwick" width="250">
                            
                                My favourite hobby is fencing as I enjoy competition and the challenge of dueling other people, As  of yet i have been to one tournament in Warwick where i came 28 out of 50
                                it was quite possibly one of the most enjoyable experiances that I have had and I hope to go to more like it 
                            </p>
                            <hr>
                        </div>

                        
                        <div class ="aiandrobotics">
                            <hr>
                            <header class ="aiandroboticstitle">AI and Robotics</header>
                            

                            <p class="aiandroboticstext"> 
                                    <video class="roboticsvideo" src="../other/robotics.mp4" controls muted width="350" height="350"></video>
                                
                                Ai and Robotics is a field I am deaply interested in and would like to explore in the future, currently I am apart of Queen Mary's Ai and Robotics Society, where we
                                learn to create and design different robots for different purposes, currently the society's is attemping to build robots that are able to compete against one another
                                in a miniaturized robot wars
                            </p>
                            <hr>

                </article>    
            </section>


            <section class="contactme" id="contactdetails" >

                <article>
                    <header class="contacttitle">Contact Me!</header>
                    Would you like to contact me? <br>
                    my contact details are: <br>

                    Email: ZareefRazzaque@outlook.com <br>
                    or alternatively you can contact me <a class="contactmelink" href="contact.php"> here</a>
                </article>


            </section>




        </main>
    </body>

    <footer>
        created by Zareef Razzaque 2022

    </footer>
</html>