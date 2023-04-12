<?php 
    $lines = file('./TextContent/SocialsInfo.txt', FILE_IGNORE_NEW_LINES);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Chayer Profile</title>
        <link rel="stylesheet" href="index.css" />
    </head>
    <body>
        <div class="header">
            <div class="nav-links">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="resume.php">Resume</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li><a href="social.php"><u>Social</u></a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </div>
        </div>

        <div class = "social">
            <img src="rsc/socials.png" alt="MediaIcos" usemap="#workmap" width="500" />
            <?php 
                $social1 = $lines[0];
                $social2 = $lines[1];
                $social3 = $lines[2];
                echo "<map id='workmap'>
                        <area shape='rect' coords='0, 0, 150, 200' href='$social1' target='_blank' alt ='social1' />
                        <area shape='rect' coords='175, 0, 325, 200' href='$social2' target='_blank' alt ='social2' />
                        <area shape='rect' coords='350, 0, 700, 200' href='$social3' target='_blank' alt ='social3' />
                    </map>";
            ?>
        </div>
    </body>
</html>