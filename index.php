<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="media/logoL2.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap"
        rel="stylesheet">
    <title>L2 Latino America</title>
</head>

<body class="img-fluid">

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="donation.php">Donation</a>
                    <a class="nav-link" href="https://discord.com/invite/EDt2nfeUxh" target="_blank">Discord</a>
                    <div class="login">
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" placeholder="Login">
                        <input type="password" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" placeholder="Contraseña">
                        <button type="button" class="btn btn-outline-light">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section class="section-container">

        <div class="hopzone">
            <a href="https://l2.hopzone.net/site/vote/105951/1" target="_blank"><img src="media/l2topzone.jpg" alt=""></a>
        </div>

        <div class="header ">

            <div class="buttons">
                <a href="createAccount.php" class="btn-create-account btn btn-primary">Create Account</a>
                <a href="download.php" class="btn-download btn btn-primary">Download</a>
            </div>

        </div>

        <div class="preview ">
            <iframe class="preview-video ratio ratio-16x9" src="https://www.youtube.com/embed/peLAaPAbkiI"
                title="Intro LatinoAmerica" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <iframe class="preview-video ratio ratio-16x9" src="https://www.youtube.com/embed/mj5oTD9EmYI"
                title="Boss LatinoAmerica" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>

        </div>

        <div class="server-content">
            <div class="server-info">
                <h3 class="title">Server Info</h3>
                <div class="info-detail">
                    <p>-Exp x9999</p>
                    <p>-Sp x9999</p>
                    <p>-Adena x9999</p>
                    <p>-Drop x1</p>
                    <p>-Level Max: 200</p>
                    <p>-Custom 4ta Class</p>
                    <p>-System Tatto</p>
                    <p>-System Emblem</p>
                    <p>-System Dressme</p>
                    <p>-System Achievements</p>
                    <p>-System Raid Boss</p>
                    <p>-Custom Instances</p>
                    <p>-Custom Skill Pasive</p>
                    <p>-Custom Armor</p>
                    <p>-Custom Weapon</p>
                    <p>-Custom Accesory</p>
                    <p>-Custom Monster</p>
                    <p>-Custom Npc</p>
                    <p>-Custom Boss</p>
                    <p>-Custom Raid Boss</p>
                    <p>-Custom Epic Boss</p>
                    <p>-Gmshop</p>
                    <p>-Buffer</p>
                    <p>-Clan Manager</p>
                    <p>-Pc Point</p>
                    <p>-TvT Event for 20 Minute</p>
                    <p>-Event Rabbit 1 Hours</p>
                </div>
            </div>
            <div class="server-dc">
                <iframe id="discordWidget" src="https://discord.com/widget?id=821125018255622144&amp;theme=dark"
                    class="height" allowtransparency="true" frameborder="0"
                    sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
            </div>
        </div>


    </section>

    <footer>
        <p>2024 L2 Latino América ALL RIGHTS RESERVED</p>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>