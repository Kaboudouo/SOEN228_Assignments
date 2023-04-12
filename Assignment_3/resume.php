<?php 
    // $file = fopen('./TextContent/ResumeInfo.txt', 'r');
    $lines = file('./TextContent/ResumeInfo.txt', FILE_IGNORE_NEW_LINES);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Chayer Profile</title>
        <link rel="stylesheet" href="index.css" />
        <script type="text/javascript">
            function createNewEduc(school, degree, year){

                const dtnode = document.createElement("dt");
                const dttext = document.createTextNode(school);
                dtnode.appendChild(dttext);

                const ddnode1 = document.createElement("dd");
                const ddnode2 = document.createElement("dd");
                const ddtext1 = document.createTextNode(degree);
                const ddtext2 = document.createTextNode(year);
                ddnode2.classList.add("dates")

                ddnode1.appendChild(ddtext1);
                ddnode2.appendChild(ddtext2);

                const dlnode = document.getElementById("education");
                dlnode.appendChild(dtnode);
                dlnode.appendChild(ddnode1);
                dlnode.appendChild(ddnode2);
            }

            function addToTechnicals(category, line){
                // Category 0 = Software, 1 = Coding
                const linode = document.createElement("li");
                const litext = document.createTextNode(line);
                linode.appendChild(litext);
                let element = null;
                if (category == 0){
                    element = document.getElementById("sftw-prof")
                } else{
                    element = document.getElementById("code-lang")
                }
                element.appendChild(linode);
            }

            function createWorkExperience(title, date, description){
                const titletxt = document.createTextNode(title);
                const datetxt = document.createTextNode(date);
                const descriptiontxt =document.createTextNode(description);

                const linode = document.createElement("li");
                const h2node = document.createElement("h2");
                const pnode = document.createElement("p");

                h2node.appendChild(datetxt);
                pnode.appendChild(descriptiontxt);

                linode.appendChild(titletxt);
                linode.appendChild(h2node);
                linode.appendChild(pnode);

                const element = document.getElementById("wrk-exp")
                element.appendChild(linode);
            }

            
            function addToARR(category, line){
                // Category 0 = Awards & Recognition, 1 = References
                const linode = document.createElement("li");
                const litext = document.createTextNode(line);
                linode.appendChild(litext);
                let element = null;
                if (category == 0){
                    element = document.getElementById("anr")
                } else{
                    element = document.getElementById("ref")
                }
                element.appendChild(linode);
            }

        </script>
    </head>
    <body>
        <div class="header">
            <div class="nav-links">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="resume.php"><u>Resume</u></a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li><a href="social.php">Social</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </div>
        </div>

        <div class = "container1">
            <div class="education"> 
                <h1 class="titles"> EDUCATION </h1>
                <dl id="education"></dl>
                <?php 
                    $i = -1;
                    while($i < sizeof($lines)){
                        $i++;
                        if ($lines[$i] == ""){
                            break;
                        } else{
                            $school = $lines[$i];
                            $degree = $lines[$i + 1];
                            $year = $lines[$i + 2];
                            echo "<script type='text/javascript'>
                                createNewEduc(`$school`, `$degree`, `$year`);
                                </script>";
                            $i += 2;
                        }
                    }
                ?>
            </div>
            <div class = "technicals">
                <h1 class="titles">TECHNICAL SKILLS</h1>
                <dl>
                    <dt>Software Proficiencies</dt>
                    <dd>
                        <ul id="sftw-prof"></ul>
                    </dd>
                    <dt>Coding Languages</dt>
                    <dd>
                        <ul id="code-lang"></ul>
                    </dd>
                </dl>
                <?php 
                    $j = 0;
                    $i++;
                    while($j < 2){
                        if ($lines[$i] == ""){
                            $j++;
                        } else{
                            $line = $lines[$i];
                            echo "<script type='text/javascript'>
                                addToTechnicals($j, `$line`);
                                </script>";
                        }
                        $i++;
                    }
                ?>
            </div>
            <div class = "experience">
                <h1 class="titles">WORK EXPERIENCE</h1>
                <ol id = "wrk-exp"></ol>
                <?php 
                    while($i < sizeof($lines)){
                        if ($lines[$i] == ""){
                            break;
                        } else{
                            $title = $lines[$i];
                            $date = $lines[$i + 1];
                            $description = $lines[$i + 2];
                            echo "<script type='text/javascript'>
                                createWorkExperience(`$title`, `$date`, `$description`);
                                </script>";
                            $i += 2;
                        }
                        $i++;
                    }
                ?>
            </div>
            <div class = "container2">
                <div class = "awards">
                    <h1 class="titles">AWARDS AND RECOGNITION</h1>
                    <ol id="anr"></ol>
                </div>
                <div class = "references">
                    <h1 class="titles">REFERENCES</h1>
                    <ul id="ref"></ul>
                </div>
                <?php 
                    $j = 0;
                    $i++;
                    while($j < 2){
                        if ($i >= sizeof($lines)){
                            break;
                        }
                        if ($lines[$i] == ""){
                            $j++;
                        } else{
                            $line = $lines[$i];
                            echo "<script type='text/javascript'>
                                addToARR($j, `$line`);
                                </script>";
                        }
                        $i++;
                    }
                ?>
            </div>
            <button type ="button">Download Full CV</button>
        </div>
    </body>
</html>