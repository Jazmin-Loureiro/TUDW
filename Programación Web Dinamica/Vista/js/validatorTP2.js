////////////////////////////EJERCICO 1 /////////////////////////////////////
$(document).ready(function() {
    var form = document.getElementById("FormLogin");
        if(form){
    $('#FormLogin').on('submit', function(event) {
        let isValid = true;
        // Validar el campo "usuario"
        let usuario = $('#usuario').val().trim();
        if (usuario === '') {
            $('#usuario').addClass('is-invalid');
            isValid = false;
        } else {
            $('#usuario').removeClass('is-invalid');
        }
        // Validar el campo "password"
        let password = $('#pass').val().trim();
        var regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; // Expresión regular para validar que contenga al menos una letra y un número
        if (password === '' || !regex.test(password)) {
            $('#pass').addClass('is-invalid');
            isValid = false;
        } else {
            $('#pass').removeClass('is-invalid');
            if (password === usuario) {
                alert('La contraseña no puede ser igual al nombre de usuario.');
                $('#pass').addClass('is-invalid');
                isValid = false;
            }
        }
        if (!isValid) {
            event.preventDefault();
        }
    });}
    $('#usuario, #pass').on('input', function() {
        $(this).removeClass('is-invalid');
    });
});

////////////////////////////EJERCICO 2 /////////////////////////////////////
document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("FormCinema");
    if (form) {
        form.addEventListener("submit", function(event) {
            var isValid = true;
            var titulo = document.getElementById("titulo").value.trim();
            var actores = document.getElementById("actores").value.trim();
            var director = document.getElementById("director").value.trim();
            var guion = document.getElementById("guion").value.trim();
            var produccion = document.getElementById("produccion").value.trim();
            var duracion = document.getElementById("duracion").value.trim();
            var nacionalidad = document.getElementById("nacionalidad").value.trim();
            var genero = document.getElementById("genero").value.trim();
            var sinopsis = document.getElementById("sinopsis").value.trim();
            var año = document.getElementById("año").value.trim(); 
            var añoNum = parseInt(año);

            // Validar si los campos no están vacíos
            if (titulo === "") {
                document.getElementById("titulo").classList.add("is-invalid");
                isValid = false;
            } else {
                document.getElementById("titulo").classList.remove("is-invalid");
            }
            if (actores === "") { 
                document.getElementById("actores").classList.add("is-invalid");
                isValid = false;
            } else {
                document.getElementById("actores").classList.remove("is-invalid");
            }
            if (director === "") {
                document.getElementById("director").classList.add("is-invalid");
                isValid = false;
            } else {
                document.getElementById("director").classList.remove("is-invalid");
            }
            if (guion === "") {
                document.getElementById("guion").classList.add("is-invalid");
                isValid = false;
            } else {
                document.getElementById("guion").classList.remove("is-invalid");
            }
            if (produccion === "") {
                document.getElementById("produccion").classList.add("is-invalid");
                isValid = false;
            } else {
                document.getElementById("produccion").classList.remove("is-invalid");
            }
            if (duracion === "" || !/^\d{1,3}$/.test(duracion) || parseInt(duracion) <= 0) {
                document.getElementById("duracion").classList.add("is-invalid");
                isValid = false;
            } else {
                document.getElementById("duracion").classList.remove("is-invalid");
            }
            if (nacionalidad === "") {
                document.getElementById("nacionalidad").classList.add("is-invalid");
                isValid = false;
            } else {
                document.getElementById("nacionalidad").classList.remove("is-invalid");
            }
            if (genero === "") {
                document.getElementById("genero").classList.add("is-invalid");
                isValid = false;
            } else {
                document.getElementById("genero").classList.remove("is-invalid");
            }
            if (sinopsis === "") {
                document.getElementById("sinopsis").classList.add("is-invalid");
                isValid = false;
            } else {
                document.getElementById("sinopsis").classList.remove("is-invalid");
            }
            if (año === "" || !/^\d{4}$/.test(año) || añoNum < 1895 || añoNum > new Date().getFullYear()) {
                document.getElementById("año").classList.add("is-invalid");
                isValid = false;
            } else {
                document.getElementById("año").classList.remove("is-invalid");
            }
            if (!isValid) {
                event.preventDefault();
            }
        });
        $('input').on('input', function() {
            $(this).removeClass('is-invalid');
        });

        var resetButton = form.querySelector('button[type="reset"]') || form.querySelector('input[type="reset"]');
        if (resetButton) {
            resetButton.addEventListener("click", function() {
                document.querySelectorAll('.form-control, .form-select').forEach(function(input) {
                    input.classList.remove("is-invalid");
                });
            });
        } else {
            console.error('No se encontró el botón de reset en el formulario.');
        }
    } 
});

