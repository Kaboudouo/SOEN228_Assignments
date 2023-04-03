<?php 
    $file = fopen('./Assignment3/TextContent/HomeInfo.txt', 'r');
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
                    <li><a href="index.html"><u>Home</u></a></li>
                    <li><a href="resume.html">Resume</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="contact.html">Contacts</a></li>
                    <li><a href="social.html">Social</a></li>
                    <li><a href="admin.html">Admin</a></li>
                </ul>
            </div>
        </div>
        <img class = "mogus" src="rsc/amongus.png" alt="Sussy" />
        <div class="description">
            <h1 class = 'des_head'>Developping The Means For Self-Custodial Ownership</h1>
            <p class="des_body">
                <?php
                    while ($line = fgets($file)) {
                        echo $line;
                    }
                ?>
            </p>
        </div>
    </body>
</html>