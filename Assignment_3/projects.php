<?php 
    // $file = fopen('./TextContent/ProjectsInfo.txt', 'r');
    $lines = file('./TextContent/ProjectsInfo.txt', FILE_IGNORE_NEW_LINES);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Chayer Profile</title>
        <link rel="stylesheet" href="index.css" />
        <script type="text/javascript">
            function createProject(name, description){
                const nametext = document.createTextNode(name);
                const descriptiontext = document.createTextNode(description);

                const pnode = document.createElement("p");
                pnode.appendChild(descriptiontext);

                const linode = document.createElement("li");
                linode.appendChild(nametext);
                linode.appendChild(pnode);

                const element = document.getElementById("prj");
                element.appendChild(linode);
            }
        </script>
    </head>
    <body>
        <div class="header">
            <div class="nav-links">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="resume.php">Resume</a></li>
                    <li><a href="projects.php"><u>Projects</u></a></li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li><a href="social.php">Social</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </div>
        </div>
        <div class="projects">
            <h1 class="titles">PROJECTS SUMMARY</h1>
            <ol type="I" id="prj"></ol>
            <?php 
                $i = 0;
                while($i < sizeof($lines)){
                    $name = $lines[$i];
                    $description = $lines[$i + 1];
                    echo "<script type='text/javascript'>
                        createProject(`$name`, `$description`);
                        </script>";
                    $i += 2;
                }
            ?>
        </div>
    </body>
</html>