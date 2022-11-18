<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&display=swap" rel="stylesheet" />
    <title>Music Cloud</title>
</head>

<body>
    <!-- START NAV -->
    <nav id="navbar" class="nav">
        <ul class="nav-list">
            <li>
                <a href="registerpage.php">Register</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </nav>
    <div class="logo">
        <a href="index.php">
            <img src="files/music_logo.png" class="music_logo">
        </a>
    </div>
    <!-- END NAV -->

    <!-- Start LOGIN -->
    <section class="loginbox">
        <form name="f1" action="authentication.php" onsubmit="return validation()" method="POST">
            <div class="container" id="login">
                <h1 class="login">Login</h1>
                <label class="username"> Username: </label>
                <input type="text" placeholder="Enter username" id="username" name="username" required>
                <label class="password"> Password: </label>
                <input type="password" placeholder="Enter password" name="password" required>
                <button type="submit" accesskey="f">Login</button>
                <div class="register">
                    <a>Don't have an account yet? <a class="register-here" href="registerpage.php"><u>Register here</u></a></p>
                </div>
                <!-- <input type="submit" id="btn" value="Login" /> -->
            </div>
        </form>
    </section>
    <!-- End LOGIN -->

    <!-- START CONTACT -->
    <section id="contact" class="contact-section">
        <div class="contact-section-header">
            <h2>Let's work together...</h2>
            <p>How do you take your coffee?</p>
        </div>
        <div class="contact-links">
            <a href="https://facebook.com/deepanshudheer" target="_blank" class="btn contact-details"><i class="fab fa-facebook-square"></i> Facebook</a>
            <a id="profile-link" href="https://github.com/deepanshudheer/music_library_system" target="_blank" class="btn contact-details"><i class="fab fa-github"></i> GitHub</a>
            <a href="https://twitter.com/deepsi03" target="_blank" class="btn contact-details"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="mailto:deepsi.awpgod@gmail.com" class="btn contact-details"><i class="fas fa-at"></i> Send a
                mail</a>
        </div>
    </section>
    <!-- END CONTACT -->

    <!-- START FOOTER -->
    <footer>
        <p>
            **This is a college assignment.
        </p>
        <p>
            &copy; Created for
            <a href="https://www.christuniversity.in/" target="_blank">Chirst University <i class="fab"></i></a>
        </p>
    </footer>
    <!-- END FOOTER -->

    <script>
        const urlSearchParams = new URLSearchParams(window.location.search);
        const params = Object.fromEntries(urlSearchParams.entries());
        console.log(params);
        if (params.validationsuccess == "no") {
            setTimeout(() => {
                alert("Incorrect username or password!")
                window.location = "index.php";

            }, 100)

        }
    </script>

    <script src="scripts/validation.js"></script>
    <script src="scripts/topbutton.js"></script>


</body>

</html>
