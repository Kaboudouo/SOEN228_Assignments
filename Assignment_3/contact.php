<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Chayer Profile</title>
        <link rel="stylesheet" href="index.css" />
        <script type="text/javascript">
            function submitContactMsg(){
                var name = document.getElementById("name-field").value;
                var email = document.getElementById("email-field").value;
                var number = document.getElementById("tel-field").value;
                var msg = document.getElementById("msg-box").value;

                var txtFile = new File([name + "\n" + email + "\n" + number + "\n" + msg],
                './TextContent',        
                {
                type: 'text/plain',
                }
                );
                var blob2URL = window.URL.createObjectURL(txtFile);

                var anchorTag = document.createElement('a');
                anchorTag.href = blob2URL;
                anchorTag.download = 'ContactInfo';
                anchorTag.click();
            }
        </script>
    </head>
    <body>
        <div class="header">
            <div class="nav-links">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="resume.php">Resume</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="contact.php"><u>Contacts</u></a></li>
                    <li><a href="social.php">Social</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </div>
        </div>
        <div class = "contact-me">
            <h1 class = "titles">CONTACT ME</h1>
            <div class = "input-fields">

                <div>
                    <div>
                        <label for="name-field">Name:</label>
                    </div>
                    <input id="name-field" />
                </div>

                <div>
                    <div>
                        <label for="email-field">E-mail:</label>     
                    </div>
                    <input id="email-field" type="text" />
                </div>
 
                <div>
                    <div>
                        <label for="tel-field">Telephone:</label>
                    </div>
                    <input id="tel-field" type="text" />
                </div>

                <div>
                    <div>
                        <label for="msg-box">Message:</label>
                    </div>
                    <textarea id="msg-box"  rows="5" cols="100"></textarea>
                </div>
                <div>
                    <input
                        id="submit"
                        type="button"
                        value="Submit"
                        onclick="submitContactMsg()"
                    />
                </div>
            </div>
        </div>
    </body>
</html>