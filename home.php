

<html>

<head>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&display=swap" rel="stylesheet" />
    <title>Music Cloud</title>
</head>

<body>
    <!-- START NAV -->
    <nav id="navbar" class="nav">
        <ul class="nav-list">
            <li>
                <a href="#home">Home</a>
            </li>
            <li>
                <a href="#playlists">Playlists</a>
            </li>
            <li>
                <a href="index.php" onclick="logout.php">Logout</a>
            </li>
        </ul>
    </nav>
    <!-- END NAV -->

    <!-- Curated Playlist SECTION -->
    <section id="playlists" class="about-section">

        <h2 class="about-header">Curated Playlists For You</h2>
        <!-- PHP CODE TO FETCH DATA FROM ROWS -->

        <div id="playlist" class="projects-grid">
            <a href="playlists/playlist1.php" target="_parent" class="project project-tile">
                <img class="project-image"
                    src="https://images.squarespace-cdn.com/content/v1/5befb3b84611a081dd003798/1542447456369-C6IDY1DIB1A4GQ0JLZ2T/Ibrahim-final.jpg"
                    alt="playlist cover" />
                <p class="project-title">
                    <span class="code">&lt;</span>
                    Playlist 1
                    <span class="code">&#47;&gt;</span>
                </p>
            </a>
            <a href="playlists/playlist2.php" target="_parent" class="project project-tile">
                <img class="project-image" src="https://i.scdn.co/image/ab67616d00001e0219130c3e840d80db83d14c97"
                    alt="playlist cover" />
                <p class="project-title">
                    <span class="code">&lt;</span>
                    Playlist 2
                    <span class="code">&#47;&gt;</span>
                </p>
            </a>
            <a href="playlists/playlist3.php" target="_parent" class="project project-tile">
                <img class="project-image"
                    src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/41cc4b37210415.5738dba522f25.jpg"
                    alt="playlist cover" />
                <p class="project-title">
                    <span class="code">&lt;</span>
                    Playlist 3
                    <span class="code">&#47;&gt;</span>
                </p>
            </a>
            <a href="playlists/playlist4.php" target="_parent" class="project project-tile">
                <img class="project-image"
                    src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/f5a34e108782021.5fc5820ec88bf.png"
                    alt="playlist cover" />
                <p class="project-title">
                    <span class="code">&lt;</span>
                    Playlist 4
                    <span class="code">&#47;&gt;</span>
                </p>
            </a>
            <a href="playlists/playlist5.php" target="_parent" class="project project-tile">
                <img class="project-image" src="https://images.template.net/106597/feels-playlist-cover-4s50m.png"
                    alt="playlist cover" />
                <p class="project-title">
                    <span class="code">&lt;</span>
                    Playlist 5
                    <span class="code">&#47;&gt;</span>
                </p>
            </a>
            <a href="playlists/playlist6.php" target="_blank" class="project project-tile">
                <img class="project-image" src="https://i.scdn.co/image/ab67616d0000b27358ecb3e5ec3bbef70ee09e43"
                    alt="playlist cover" />
                <p class="project-title">
                    <span class="code">&lt;</span>
                    Playlist 6
                    <span class="code">&#47;&gt;</span>
                </p>
            </a>
        </div>

        <a href="playlists.php" class="btn btn-show-all" target="_blank">Show all<i
                class="fas fa-chevron-right"></i></a>
    </section>
    <!-- END CURATED PLAYLISTS FOR YOU -->

    <div class="logo">
        <a href="index.php">
            <img src="files/music_logo.png" class="music_logo">
        </a>
    </div>

    <div class="container" id="home">
        <h1 class="home">Home</h1>
        <!-- <input type="submit" id="btn" value="home" /> -->
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <script src="scripts/topbutton.js"></script>
    <!-- <script>
        window.onbeforeunload = function () {
                window.scrollTo(0, 0);
            }
    </script> -->

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
</body>

</html>
