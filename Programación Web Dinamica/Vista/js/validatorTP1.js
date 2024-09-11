
////////////////////////////EJERCICO 1 /////////////////////////////////////
$(document).ready(function() {
    var form = document.getElementById("form");
    var numeroInput = $('#numero'); // Selecciona el input
    if (form && numeroInput.length) {
        $(form).on('submit', function(event) {
            let isValid = true;
            var numero = numeroInput.val().trim(); 
            if (numero === '') {
                numeroInput.addClass('is-invalid');
                isValid = false;
            } else {
                numeroInput.removeClass('is-invalid');
            }

            if (!isValid) {
                event.preventDefault();
            }
        });

        numeroInput.on('input', function() {
            $(this).removeClass('is-invalid');
        });
    }
});


////////////////////////////EJERCICIO 2 /////////////////////////////////////
$(document).ready(function() {
    $('#formCursada').on('submit', function(event) {
        let isValid = true;
        // Iterar sobre cada campo de horas para validarlo
        $('input[name^="horas"]').each(function() {
            var value = $(this).val().trim();
            if (value === '' || value < 0 || value > 24) {
                $(this).addClass('is-invalid');
                isValid = false;
            } else {
                $(this).removeClass('is-invalid');
            }
        });
        if (!isValid) {
            event.preventDefault();
        }
    });
    $('#formCursada input[name^="horas"]').on('input', function() {
        $(this).removeClass('is-invalid');
    });
});

////////////////////////////EJERCICIO 3/////////////////////////////////////
$(document).ready(function() {
    $('#formDatos').on('submit', function(event) {
        let isValid = true;
        var nombre = $('#nombre').val().trim();
        var apellido = $('#apellido').val().trim();
        var edad = $('#edad').val().trim();
        var direccion = $('#direccion').val().trim();

        if (nombre === "" || !/^[A-Za-z\s]+$/.test(nombre)) {
            $('#nombre').addClass('is-invalid');
            isValid = false;
        } else {
            $('#nombre').removeClass('is-invalid');
        }
        if (apellido === ''  || !/^[A-Za-z\s]+$/.test(apellido)) {
            $('#apellido').addClass('is-invalid');
            isValid = false;
        } else {
            $('#apellido').removeClass('is-invalid');
        }
        if (edad === '' || !/^\d{1,3}$/.test(edad) || edad < 0 || edad > 100) {
            $('#edad').addClass('is-invalid');
            isValid = false;
        } else {
            $('#edad').removeClass('is-invalid');
        }
        if (direccion === ''  || !/^[A-Za-z\s]+$/.test(direccion)) {
            $('#direccion').addClass('is-invalid');
            isValid = false;
        } else {
            $('#direccion').removeClass('is-invalid');
        }
        if (!isValid) {
            event.preventDefault();
        }
    });
    $('#nombre, #apellido, #edad, #direccion').on('input', function() {
        $(this).removeClass('is-invalid');
    });
});

////////////////////////////EJERCICIO 4/////////////////////////////////////

$(document).ready(function() {
    $('#FormDatos2').on('submit', function(event) {
        let isValid = true;
        var nombre = $('#nombre').val().trim();
        var apellido = $('#apellido').val().trim();
        var edad = $('#edad').val().trim();
        var direccion = $('#direccion').val().trim();
        var educacion = $('input[name="educacion"]:checked').val();
        var sexo = $('#sexo').val();
        var deportes = $('input[name="deportes[]"]:checked').length;

        // Validación del Nombre
        if (nombre === "" || !/^[A-Za-z\s]+$/.test(nombre)) {
            $('#nombre').addClass('is-invalid');
            isValid = false;
        } else {
            $('#nombre').removeClass('is-invalid');
        }
        // Validación del Apellido
        if (apellido === '' || !/^[A-Za-z\s]+$/.test(apellido)) {
            $('#apellido').addClass('is-invalid');
            isValid = false;
        } else {
            $('#apellido').removeClass('is-invalid');
        }
        // Validación de la Edad
        if (edad === '' || !/^\d{1,3}$/.test(edad) || edad < 0 || edad > 100) {
            $('#edad').addClass('is-invalid');
            isValid = false;
        } else {
            $('#edad').removeClass('is-invalid');
        }
        // Validación de la Dirección
        if (direccion === '' || !/^[A-Za-z0-9\s]+$/.test(direccion)) {
            $('#direccion').addClass('is-invalid');
            isValid = false;
        } else {
            $('#direccion').removeClass('is-invalid');
        }
        // Validación de Educación
        if (educacion === undefined) {
            $('input[name="educacion"]').addClass('is-invalid');
            isValid = false;
        } else {
            $('input[name="educacion"]').removeClass('is-invalid');
        }
        // Validación de Sexo
        if (sexo === null || sexo === "") {
            $('#sexo').addClass('is-invalid');
            isValid = false;
        } else {
            $('#sexo').removeClass('is-invalid');
        }
        // Validación de Deportes
        if (deportes === 0) {
            $('input[name="deportes[]"]').addClass('is-invalid');
            isValid = false;
        } else {
            $('input[name="deportes[]"]').removeClass('is-invalid');
        }
        if (!isValid) {
            event.preventDefault();
        }
    });
    $('#nombre, #apellido, #edad, #direccion, #sexo').on('input change', function() {
        $(this).removeClass('is-invalid');
    });
    $('input[name="educacion"]').on('change', function() {
        $('input[name="educacion"]').removeClass('is-invalid');
    });
    $('input[name="deportes[]"]').on('change', function() {
        $('input[name="deportes[]"]').removeClass('is-invalid');
    });
});


////////////////////////////EJERCICO 7 /////////////////////////////////////
$(document).ready(function() {
    $('#formOperacion').on('submit', function(event) {
        let isValid = true;
        var operador1 = $('#operador1').val().trim();
        var operador2 = $('#operador2').val().trim();
        var operacion = $('#operacion').val();
        if (operador1 === ''||isNaN(operador1)) {
            $('#operador1').addClass('is-invalid');
            isValid = false;
        } else {
            $('#operador1').removeClass('is-invalid');
        }
        if (operador2 === '' || isNaN(operador2)) {
            $('#operador2').addClass('is-invalid');
            isValid = false;
        } else {
            $('#operador2').removeClass('is-invalid');
        }
        if (operacion === '' || operacion === null) {
            $('#operacion').addClass('is-invalid');
            isValid = false;
        } else {
            $('#operacion').removeClass('is-invalid');
        }
        if (!isValid) {
            event.preventDefault();
        }
    });
    $('#operador1,#operador2,#operacion').on('input', function() {
        $(this).removeClass('is-invalid');
    });
});


////////////////////////////EJERCICO 8 /////////////////////////////////////
$(document).ready(function() {
    $('#formEntradas').on('submit', function(event) {
        let isValid = true;
        var edad = $('#edad').val().trim();
        var estudiante = $('input[name="estudiante"]:checked').val();
        // Validar edad
        if (edad === '' || isNaN(edad) || parseInt(edad) <= 0 || edad > 100) {
            $('#edad').addClass('is-invalid');
            isValid = false;
        } else {
            $('#edad').removeClass('is-invalid');
        }
        // Validar estudiante
        if (!estudiante) {
            $('.form-check').addClass('is-invalid');
            isValid = false;
        } else {
            $('.form-check').removeClass('is-invalid');
        }
        if (!isValid) {
            event.preventDefault();
        }
    });

    $('#edad').on('input', function() {
        $(this).removeClass('is-invalid');
    });

    $('input[name="estudiante"]').on('change', function() {
        $('.form-check').removeClass('is-invalid');
    });

    $('#formEntradas').on('reset', function() {
        $('.form-control, .form-select, .form-check').removeClass('is-invalid');
    });
});
