<?php 
    // $file = fopen('./TextContent/ProjectsInfo.txt', 'r');
    $lines = file('./TextContent/ProjectsInfo.txt', FILE_IGNORE_NEW_LINES);
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
                    <li><a href="projects.php"><u>Projects</u></a></li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li><a href="social.php">Social</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </div>
        </div>
        <div class="projects">
            <h1 class="titles">PROJECTS SUMMARY</h1>
            <ol type="I">
                <li >
                    Retail E-Commerce Website (WIP)
                    <div class="box">
                        <p>
                            Dynamic E-Commerce website created using Javascript and React. This projects seeks to include
                            the prevalent knowledge needed for front-end development.
                        </p>
                        <img src="rsc/construction.jpg" alt="construction" />
                    </div>
                </li>
                    
                <li >
                    Thrill of the Kill - Multiplayer FPS (WIP)
                    <div class="box">
                        <p>
                            Action-packed first person shooter. Created using Unity, Thrill of the Kill is a movement-heavy
                            and ability-based game, seeking to get your adrenaline going. The purpose of this project is to
                            develop different game-making techniques while also learning networking.
                        </p>
                        <img src="rsc/TotK.PNG" alt="Game main menu" />
                    </div>
                </li>

                <li>
                    Foreign Exchange Trading Algorithm
                    <div class="box">
                        <p>
                            Coded in the MQL5 language, by catching long term trends in the Foreign Exchange through price oscillation analysis, my latest trading 
                            algorithm was able to return 110% profits in the last year. This algorithm is still being optimized.
                        </p>
                        <img src="rsc/EA.PNG" alt="Expert Advisor" />
                    </div> 
                </li>


                <li>
                    Poker Game
                    <div class="box">
                        <p>
                            This python based game of poker features a complete GUI and adaptive AI for the computer 
                            players. The CPUs will handle their decisions given the strength of their cards, with leeway to bluff the player out.
                            Included in the repository is a study documentation, outlining the game logic and playtesting results.
                        </p>
                        <img src="rsc/poker.PNG" alt="poker interface" />
                    </div>
                </li>
            </ol>
        </div>
    </body>
</html>