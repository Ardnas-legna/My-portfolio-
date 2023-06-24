<?php
$servername="localhost";
$username="root";
$password="";
$dbname="portfolio";
$conn=new mysqli($servername,$username,$password,$dbname);
$query="SELECT * FROM projects";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Projects</title> 
        <link rel="stylesheet" href="projectsstyles.css">
    </head>
    <body>
        <div class="img-slider">
            <h2>MY PROJECTS</h2>
            <p>The projects that I have done, or I'm still doing, will be shown in the image slider below. </p>
            <div class="slide active">
                <img src="Screenshot 2023-06-03 165441.jpg">
                <div class="info">
                    <h2>Website</h2>
                    <p>This is a website that is optimized for learning,testing and training learners in various programming languages.</p>
                </div>
            </div>
            
            <div class="slide ">
                <img src="Family_Guy_The_Quest_for_Stuff_cover_art.jpg">
                <div class="info">
                    <h2>Game</h2>
                    <p>This is an action-adventure video game based on the Fox adult animated television series, family guy.</p>
                </div>
            </div>

            <div class="slide ">
                <img src="3-4-programming-project_thumbnail.jpg">
                <div class="info">
                    <h2>Article</h2>
                    <p>This is an article that helps to develop an understanding of computer programming as a series of instructions.</p>
                </div>
            </div>

            <div class="slide ">
                <img src="downloadd.jpg">
                <div class="info">
                    <h2>Cartoon</h2>
                    <p>This is an animated sitcom which will be produced by Warner Bros.</p>
                </div>
            </div>
            <div class="navigation">
                <div class="btn active"></div>
                <div class="btn"></div>
                <div class="btn "></div>
                <div class="btn "></div>
            </div>
        </div>

        <div class="container">
            <p>The completion bars of each project is show below.</p>
            <div class="progress-container">
                <h4>Website</h4>
                <div class="progress-bar">
                    <span data-width="85%"></span>
                </div>
            </div>

            <div class="progress-container">
                <h4>Game</h4>
                <div class="progress-bar">
                    <span data-width="60%"></span>
                </div>
            </div>

            <div class="progress-container">
                <h4>Article</h4>
                <div class="progress-bar">
                    <span data-width="100%"></span>
                </div>
            </div>

            <div class="progress-container">
                <h4>Cartoon</h4>
                <div class="progress-bar">
                    <span data-width="78%"></span>
                </div>
            </div>
        </div>

        <div>
            <table>
                <tr>
                    <td>Project Name</td>
                    <td>Project Completion</td>
                </tr>
                <tr>
                    <?php
                    while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <td><?php echo $row['projectName'];?></td>
                    <td><?php echo $row['projectCompletion'];?></td>
                    </tr>
                    <?php
                    }
                    ?>
            </table>
        </div>
        <script src="projectssjs.js"></script>
    </body>
</html>