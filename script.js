// Espera a que la página cargue completamente
window.onload = function() {
    // Configura el tiempo de duración de la pantalla de carga (2 segundos)
    setTimeout(function() {
        // Oculta la pantalla de carga
        document.getElementById("loadingScreen").style.display = "none";
        // Muestra el contenedor de login
        document.getElementById("loginPage").style.display = "block";
    }, 2000); // Aquí puedes ajustar el tiempo de duración (2000ms = 2 segundos)
};
