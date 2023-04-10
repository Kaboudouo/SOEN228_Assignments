<?php 
    $file = fopen('./TextContent/SocialsInfo.txt', 'r');
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
            <img src="rsc/media_ico.png" alt="MediaIcos" usemap="#workmap" width="500" />
            <map id="workmap">
                <area shape="rect" coords="200, 15, 300, 115" href="https://www.twitter.com" target="_blank" alt ="twitter" />
                <area shape="rect" coords="200, 200, 300, 300" href="https://github.com/Kaboudouo?tab=repositories" target="_blank" alt ="github" />
                <area shape="rect" coords="375, 200, 575, 300" href="https://www.linkedin.com/in/noa-chayer-90905a252/" target="_blank" alt ="linkedin" />
            </map>
        </div>
    </body>
</html>