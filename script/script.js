$(document).ready(function () {
    // Función para manejar la ocultación del contenedor y la adición de contenido según la resolución de la pantalla
    function handleContainerVisibility() {
        if (window.matchMedia("(min-width: 1024px)").matches) {
            $('.container-fluid').removeClass('hide-on-large');
            $('.container-fluid').html(
                '<div class="offcanvas-body"><a class="nav-link active" aria-current="page" href="index.php">Home</a><a class="nav-link" href="donation.php">Donation</a><a class="nav-link" href="https://discord.com/invite/EDt2nfeUxh" target="_blank">Discord</a><div class="login"><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Login"><input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Contraseña"><button type="button" class="btn btn-outline-light">Login</button></div></div>');
        } else {
            
        }
    }

    // Llamar a la función al cargar la página y al cambiar el tamaño de la ventana
    handleContainerVisibility();
    $(window).resize(handleContainerVisibility);
});