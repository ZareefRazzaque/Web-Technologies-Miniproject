<?php
    session_start();

    if(!($_SESSION["active"] == "true")){
        header("Location: ../notloggedin/skills.php");

    }
?>
<!DOCTYPE html>
<html>
    


    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="zareefrazzaque.css"> 
        <title>Zareef Razzaque Portfolio</title>
        
    </head>
    
    
    <!-- ¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬  -->
    <body>
        





        <div class = "topofpage" id = "top">
            <header class="myname">Zareef Razzaque</header>
            <header class="pagetitle">-Skills and Experience</header>
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


        <main>


            <Header class="title">Skills and Experience</Header>
            

            
                <section class="blogsection" >
                    <article>
                    <header class ="experiance">Welcome to Skills and Experiance,<br>
                     this is the Work Experience I have gathered so far
                     </header>
                    </article>

                    <script src = "../JScriptstuff/basicsubmission.js" defer> </script>
                    <script src = "../JScriptstuff/preview.js" defer> </script>
                    <form  method="GET" action="../phpstuff/addexperiance.php" id="form">
                    

                        <header>Add Experiance</header> <br>
                        Company name: <br>
                        <input type="text" name="ExperianceTitle" class="blogtitle"  > <br>

                        Details: <br>
        
                        <textarea name="NewExperiance"  cols="30" rows="10"></textarea> <br>
        
                        <button  type="button" class="submit" id="clear button"  > Clear </button>
                        <button  type="button" class="submit" id="preview button" > Preview</button> 
                        <input type="submit" class="submit" id="submit button">

                        <div class = "center" id ="fill in" > </div>
        
                    </form>

                    <script src = "../JScriptstuff/dropdown.js" defer> </script>
                    <div id = 'dropdown' class = "dropdown">
                        <header id ="dropdown button" > Sort By Months </header> 
                        <ul class = "hidden">Show All</ul>
                        <ul class = "hidden">January</ul>
                        <ul class = "hidden">Febuary</ul>
                        <ul class = "hidden">March</ul>
                        <ul class = "hidden">April</ul>
                        <ul class = "hidden">May</ul>
                        <ul class = "hidden">June</ul>
                        <ul class = "hidden">July</ul>
                        <ul class = "hidden">Augest</ul>
                        <ul class = "hidden">September</ul>
                        <ul class = "hidden">October</ul>
                        <ul class = "hidden">November</ul>
                        <ul class = "hidden">December</ul>

                    </div>

                    <div id="preview">
                        <header id = "preview header" class= "header"> </header>

                        <p class="example" id = "preview text" > </p>

                    </div>

                    <div  id = "preview buttons" class = "hidden" >
                        <button type="button" class="submit" id="edit"  > Continue Editing  </button>
                        <button type="button" class="submit" id="preview submit"  > Submit  </button>
                        <br>
                    </div>


                    <?php

                        

                        //conecting to database 
                        $server = "localhost";
                        $save = "root";
                        $password = "";
                        $database = "miniproject";

                        $connection =  mysqli_connect($server, $save, $password, $database);

                        if(!$connection){
                            die("could not connect to the user database".mysqli_connect_error());
                        }




                        //grabbing everything from the database
                        $savedDetails = mysqli_query($connection, "SELECT * FROM experiance");
                        $pastblogs = array();


                        for($i =0; $i<mysqli_num_rows( $savedDetails );$i++ ){ 
                            $pastblogs[$i] = mysqli_fetch_array($savedDetails);


                        }
                        
                        

                        //sorting blog data before uploading to website
                        $sorted = array();
                        $youngest = -1;
                        

                        //repeats for the length of previously posted blogs
                        for($i=0;$i<sizeof($pastblogs);$i++){
                            $added = "false";
                            
                            $newyoungest  = -1;

                            for($x=0;$x<(sizeof($pastblogs));$x++){

                                //filters out all the entries newer than the one just uploaded
                                if (($youngest==-1)||($pastblogs[$youngest]["date"]>$pastblogs[$x]["date"])){ 

                                    //finds the youngest of the blogs that were filtered through
                                    if (($newyoungest==-1)||($pastblogs[$newyoungest]["date"]<$pastblogs[$x]["date"])){
                                    
                                        $newyoungest = $x;
                                    }
                                }

                            }

                            if (!($newyoungest == -1)){
                                $sorted[$i] = $newyoungest;
                                $youngest=$newyoungest;
                            }
        

                        }


                        //printing data to website
                        for($i = 0; $i<(sizeof($sorted));$i++){
                            $showingtitle = $pastblogs[$sorted[$i]]["title"] ;
                            $showingdetails =$pastblogs[$sorted[$i]]["details"] ;
                            $showingdate =$pastblogs[$sorted[$i]]["date"] ;

                            echo "
                            <article class=\"article\">
                                <header class = \"header\"> $showingtitle </header>
                                <p class = \"para\" >
                                    $showingdetails <br>
                                    Written: $showingdate 
                                </p>
                            </article>  
                            ";
                        
                        }
                    
                    ?>

                </section>
    

        </main>

        <footer>
            created by Zareef Razzaque 2022
    
        </footer>

        


    </body>

</html>


