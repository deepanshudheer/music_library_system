<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/register.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&display=swap" rel="stylesheet" />
    <title>User Registration</title>
</head>

<body>

    <!-- START NAV -->
    <nav id="navbar" class="nav">
        <ul class="nav-list">
            <li>
                <a href="index.php">Login</a>
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

    <form name="rg" action="register.php" method="POST">
        <div class="container">
            <h1>Register</h1>
            <p class="fill-form">Please fill in this form to create an account.</p>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <button type="submit" class="registerbtn">Register</button>
            <div class="register">
                <a class="already" href="index.php">Already have an account? <span class="sign-in"><u>Sign in</u></span></a></p>
            </div>
        </div>
    </form>
</body>
<script>
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());
    console.log(params);
    if (params.registersuccess == "no") {
        setTimeout(() => {
            alert("Username already exists!")
            window.location = "registerpage.php";
        }, 100)

    }
</script>

</html>
