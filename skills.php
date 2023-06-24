<?php
$servername="localhost";
$username="root";
$password="";
$dbname="portfolio";
$conn=new mysqli($servername,$username,$password,$dbname);
$query="SELECT * FROM skills";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width",initial-scale=1>
        <title>My Skills</title>
        <link rel="stylesheet" href="skillsstyles.css">
    </head>
    <body>
        <h2>SKILLS</h2>
        <p>Below shows the percentages of my skills in various fields.</p>
      <div class="container">
        <p>Front-end Technologies</p>
        <div class="progress-container">
            <h4>HTML</h4>
            <div class="progress-bar">
                <span data-width="100%"></span>
            </div>
        </div>

        <div class="progress-container">
            <h4>CSS</h4>
            <div class="progress-bar">
                <span data-width="85%"></span>
            </div>
        </div>

        <div class="progress-container">
            <h4>Javascript</h4>
            <div class="progress-bar">
                <span data-width="40%"></span>
            </div>
        </div>
       
        <p>Programming</p>
        <div class="progress-container">
            <h4>C</h4>
            <div class="progress-bar">
                <span data-width="75%"></span>
            </div>
        </div>

        <div class="progress-container">
            <h4>MySQL</h4>
            <div class="progress-bar">
                <span data-width="20%"></span>
            </div>
        </div>

        <div class="progress-container">
            <h4>Java</h4>
            <div class="progress-bar">
                <span data-width="60%"></span>
            </div>
        </div>

        <p>Design</p>
        <div class="progress-container">
            <h4>Photoshop</h4>
            <div class="progress-bar">
                <span data-width="55%"></span>
            </div>
        </div>

        <div class="progress-container">
            <h4>Illustrator</h4>
            <div class="progress-bar">
                <span data-width="60%"></span>
            </div>
        </div>
        <div>
            <table>
                <tr>
                    <td>Skill Name</td>
                    <td>Skill Level</td>
                </tr>
                <tr>
                    <?php
                    while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <td><?php echo $row['skillName'];?></td>
                    <td><?php echo $row['skillLevel'];?></td>
                    </tr>
                    <?php
                    }
                    ?>
            </table>
        </div>
      <script src="skilljs.js"></script>
    </body>
</html>