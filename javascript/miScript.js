// Función para obtener países y bloquear algunos países específicos
function fetchCountries() {
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            const blockedCountries = ['Suriname', 'French Guiana', 'Falkland Islands'];
            const countries = data
                .map(country => country.name.common)
                .filter(country => !blockedCountries.includes(country))
                .sort();

            // Llama a populateSelect con los selectores donde necesitas los países
            populateSelect(['#pais-nacimiento', '#pais-correspondencia', '#pais-identificacion', '#pais-nacionalidad','#pais'], countries);
        })
        .catch(error => console.error('Error buscando países:', error));
}

// Función para obtener departamentos (para Colombia)
function fetchDepartments() {
    fetch('https://www.datos.gov.co/resource/xdk5-pm3f.json')
        .then(response => response.json())
        .then(data => {
            const departments = [...new Set(data.map(item => item.departamento))].sort();
            populateSelect(['#departamento-nacimiento', '#departamento-correspondencia'], departments);
        })
        .catch(error => console.error('Error fetching departments:', error));
}

// Función para obtener municipios (para Colombia) según el departamento seleccionado
function fetchMunicipalities(department, targetId) {
    fetch(`https://www.datos.gov.co/resource/xdk5-pm3f.json?departamento=${department}`)
        .then(response => response.json())
        .then(data => {
            const municipalities = [...new Set(data.map(item => item.municipio))].sort();
            populateSelect([targetId], municipalities);
        })
        .catch(error => console.error('Error fetching municipalities:', error));
}

// Función para poblar múltiples selectores con opciones
function populateSelect(selectIds, options) {
    selectIds.forEach(selectId => {
        const select = $(selectId);
        select.empty().append('<option value="">Seleccione una opción</option>');
        options.forEach(option => {
            select.append($('<option></option>').attr('value', option).text(option));
        });
    });
}

// Función para poblar los selects de días, meses y años para la fecha de nacimiento
function populateDateSelects() {
    const daySelect = $('#nacimiento-dia');
    for (let i = 1; i <= 31; i++) {
        daySelect.append($('<option></option>').attr('value', i).text(i));
    }

    const monthSelect = $('#nacimiento-mes');
    const months = [
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    ];
    months.forEach((month, index) => {
        monthSelect.append($('<option></option>').attr('value', index + 1).text(month));
    });

    const yearSelect = $('#nacimiento-año');
    const currentYear = new Date().getFullYear();
    for (let i = currentYear; i >= currentYear - 100; i--) {
        yearSelect.append($('<option></option>').attr('value', i).text(i));
    }
}

// Configuración de eventos y llamadas a funciones al cargar el documento
$(document).ready(function() {
    populateDateSelects();  // Llenar selects de fecha
    fetchCountries();       // Llenar selectores de países
    fetchDepartments();     // Llenar selectores de departamentos

    // Actualizar municipios al cambiar el departamento
    $('#departamento-nacimiento').change(function() {
        fetchMunicipalities($(this).val(), '#municipio-nacimiento');
    });
    $('#departamento-correspondencia').change(function() {
        fetchMunicipalities($(this).val(), '#municipio-correspondencia');
    });

    // Ajustar días según el mes y año seleccionados
    $('#nacimiento-mes, #nacimiento-año').change(function() {
        updateDaysInMonth();
    });

    // Función para mostrar vista previa de datos
    $('#previewBtn').on('click', function() {
        let primerApellido = $('#primerApellido').val();
        let segundoApellido = $('#segundoApellido').val();
        let nombres = $('#nombres').val();
        let tipoDoc = $('input[name="optradio"]:checked').val();
        let numeroDoc = $('#numeroDoc').val();
        let sexo = $('input[name="sexo"]:checked').val();
        let nacionalidad = $('input[name="nacionalidad"]:checked').val();

        let previewText = `
            <strong>Primer Apellido:</strong> ${primerApellido}<br>
            <strong>Segundo Apellido:</strong> ${segundoApellido}<br>
            <strong>Nombres:</strong> ${nombres}<br>
            <strong>Documento de Identificación:</strong> ${tipoDoc} ${numeroDoc}<br>
            <strong>Sexo:</strong> ${sexo}<br>
            <strong>Nacionalidad:</strong> ${nacionalidad}<br>
        `;

        $('#previewContent').html(previewText);
        $('#previewSection').show();
    });

    // Calcular experiencia
    $('#calcular-experiencia').on('click', function() {
        const meses = parseInt($('input[name="nacimiento_mes"]').val()) || 0;
        const años = parseInt($('input[name="nacimiento_año"]').val()) || 0;

        const totalMeses = años * 12 + meses;
        const totalAños = Math.floor(totalMeses / 12);
        const restoMeses = totalMeses % 12;

        $('input[name="total_tiempo_de_experiencia"]').val(`${totalAños} años y ${restoMeses} meses`);
    });
});
