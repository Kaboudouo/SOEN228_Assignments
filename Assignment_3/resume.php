<?php 
    // $file = fopen('./TextContent/ResumeInfo.txt', 'r');
    $lines = file('./TextContent/ResumeInfo.txt', FILE_IGNORE_NEW_LINES);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Chayer Profile</title>
        <link rel="stylesheet" href="index.css" />
    </head>
    <body>
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
        </script>
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
                    <dt>Coding Languages</dt>
                    <dd>
                        <ul>
                            <li>C#</li>
                            <li>CSS</li>
                            <li>Java</li>
                            <li>HTML</li>
                            <li>Python</li>
                            <li>Javascript</li>
                        </ul>
                    </dd>
                    <dt>Software Proficiencies</dt>
                    <dd>
                        <ul>
                            <li>Unity</li>
                            <li>Github</li>
                            <li>Photoshop</li>
                            <li>Microsoft Office</li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <div class = "experience">
                <h1 class="titles">WORK EXPERIENCE</h1>
                <ol>
                    <li>
                        Supervisor, Cineplex Scotiabank 
                        <h2>March 2022 - July 2022</h2>
                        <p>
                        Organising workspace, delegating tasks, and ensuring policy compliance
                            to maintain an efficient work environment. Additionally includes training
                            new personnel, taking inventory, and dealing with unexpected situations.
                        </p>
                    </li>

                    <li>
                        Cast Member
                        <h2>July 2021 - March 2022</h2>
                        <p>
                            Operating a cash register for concession and box office. Requires constant
                            customer interaction and working in synergy with co-workers, usually
                            in a high-pressure environment.
                        </p>
                    </li>
                </ol>
            </div>
            <div class = "container2">
                <div class = "awards">
                    <h1 class="titles">AWARDS AND RECOGNITION</h1>
                    <ol>
                        <li>Literally</li>
                        <li>Nothing</li>
                        <li>To see</li>
                    </ol>
                </div>
                <div class = "references">
                    <h1 class="titles">REFERENCES</h1>
                    <ul>
                        <li>Again</li>
                        <li>Nothing</li>
                        <li>To see</li>
                    </ul>
                </div>
            </div>
            <button type ="button">Download Full CV</button>
        </div>
    </body>
</html>