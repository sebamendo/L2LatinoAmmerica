<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/createAccount.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
    <title>L2 Latino America - Register</title>
</head>

<body>

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
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    <a class="nav-link" href="donation.html">Donation</a>
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

        <div class="header">
            <div class="welcome">

                <h3 class="welcome-title">L2 Latino América</h3>
                
            </div>

        </div>

        <div class="create-content">

            <form autocomplete="off">
                <div class="mb-3 form-check">
                    <input class="checkbox" type="checkbox" class="form-check-input" id="exampleCheck1" placeholder="Login">
                    <label class="form-check-label" for="exampleCheck1">Acepto los terminos y condiciones</label>
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label">* Login</label>
                    <input type="text" class="form-control" id="login" placeholder="Login" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">* Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
                </div>
                <div class="mb-3">
                    <label for="password class="form-label">* Repetir Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Repetir Contraseña" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">* E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="E-mail" required>
                </div>
                <div class="mb-3">
                    <label for="emial" class="form-label">* Repetir E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="Repetir E-mail" required>
                </div>
                
                <a href="#" class="register btn btn-primary">Registrarse</a>
            </form>

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