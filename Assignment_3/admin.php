<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Chayer Profile</title>
        <link rel="stylesheet" href="index.css" />
        <script>
            function processLogin(){
                var username = document.getElementById("username").value;
                var password = document.getElementById("pw").value;
                var timestamp = new Date(Date.now());
                var agent = navigator.userAgent;

                if (username === "username" && password === "password"){
                    sessionStorage.setItem("username", username);
                    sessionStorage.setItem("password", btoa(password));
                    sessionStorage.setItem("timestamp", timestamp);
                    sessionStorage.setItem("user-agent", agent);

                    window.location.href="../Assignment_2/adminIndex.html";
                } else {
                    alert("Credentials are:\nUsername: username\nPassword: password");
                }

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
                    <li><a href="contact.php">Contacts</a></li>
                    <li><a href="social.php">Social</a></li>
                    <li><a href="admin.php"><u>Admin</u></a></li>
                </ul>
            </div>
        </div>
        <div class="admin">
            <div class = "fields">
                <div>
                    <div>
                        <label for="username">Username</label>
                    </div>
                    <input id="username" />
                </div>
    
                <div>
                    <div>
                        <label for="pw">Password</label>
                    </div>
                    <input type="password" id="pw" />
                </div>
    
                <div class="logbutton">
                    <input id = "login" type="button" onclick="processLogin()" value = "Login"/>
                </div>
            </div>
        </div>
    </body>
</html>