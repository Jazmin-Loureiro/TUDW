///////////////////Ejercicio 1/////////////////////////
document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("form");
    var archivoInput = document.getElementById("archivo");
    
    if (form && archivoInput) {
        form.addEventListener("submit", function(event) {
            var isValid = true;
            // Verificar si el archivo está seleccionado y si tiene la extensión correcta
            var archivo = archivoInput.value.trim();
            
            if (archivo === "" || !/\.(pdf|doc)$/.test(archivo)) {
                archivoInput.classList.add("is-invalid");
                isValid = false;
            } else {
                archivoInput.classList.remove("is-invalid");
            }
            
            if (!isValid) {
                event.preventDefault();
            }
        });
    }
});

///////////////////Ejercicio 2/////////////////////////
    document.addEventListener("DOMContentLoaded", function() {
        var form = document.getElementById("formText");
        if(form){ 
        form.addEventListener("submit", function(event) {
            var isValid = true;
            var archivoInput = document.getElementById("text");
            var archivo = archivoInput.value.trim();
            // Verificar si el archivo está seleccionado y si tiene la extensión correcta
            if (archivo === "" || !/\.(txt|text)$/i.test(archivo)) {
                archivoInput.classList.add("is-invalid");
                isValid = false;
            } else {
                archivoInput.classList.remove("is-invalid");
            }
            if (!isValid) {
                event.preventDefault();
            }
        });}
    });
    

////////////////////////////EJERCICO 3 /////////////////////////////////////
document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("FormCine2");
    if(form){
    form.addEventListener("submit", function(event) {
        var isValid = true;

        // Obtener valores y hacer trimming
        var titulo = document.getElementById("titulo").value.trim();
        var actores = document.getElementById("actores").value.trim(); // Corrige aquí
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

        var archivo = document.getElementById("imagenCine").value.trim();
        if (archivo === "" || !/\.(img|jpeg|png)$/.test(archivo)) {
            document.getElementById("imagenCine").classList.add("is-invalid");
            isValid = false;
        } else {
            document.getElementById("imagenCine").classList.remove("is-invalid");
        }
        if (!isValid) {
            event.preventDefault();
        }
    });

    $('input').on('input', function() {
        $(this).removeClass('is-invalid');
    });

    // Limpiar validaciones cuando se presiona el botón de reset
    form.querySelector('button[type="reset"]').addEventListener("click", function() {
        // Limpiar las clases is-invalid de todos los campos
        document.querySelectorAll('.form-control, .form-select').forEach(function(input) {
            input.classList.remove("is-invalid");
        });
    });}
});


