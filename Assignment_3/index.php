<?php 
    // $file = fopen('./TextContent/HomeInfo.txt', 'r');
    $lines = file('./TextContent/HomeInfo.txt', FILE_IGNORE_NEW_LINES);
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
                    <li><a href="index.php"><u>Home</u></a></li>
                    <li><a href="resume.php">Resume</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li><a href="social.php">Social</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </div>
        </div>
        <div class="page-body">
            <img class = "mogus" src="rsc/amongus.png" alt="Sussy" />
            <div class="text-content">
                <div class="content-component">
                    <h1 class = 'des_head'>Professional Statement</h1>
                    <p class="des_body">
                        <?php
                            $i = 0;
                            while ($i < sizeof($lines)) {
                                if ($lines[$i] == ""){
                                    break;
                                }
                                echo $lines[$i];
                                $i++;
                            }
                        ?>
                    </p>
                </div>
                <div class="content-component">
                    <h1 class = 'des_head'>Brief Biography</h1>
                    <p class="des_body">
                        <?php
                            $i++;
                            while ($i < sizeof($lines)) {
                                echo $lines[$i];
                                $i++;
                            }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>