function fetchCountries() {
    fetch('https://restcountries.com/v3.1/all')
    .then(response => response.json())
    .then(data => {
        const blockedCountries = ['Suriname', 'French Guiana', 'Falkland Islands'];
        const countries = data
            .map(country => country.name.common)
            .filter(country => !blockedCountries.includes(country))
            .sort();
        populateSelect('#pais-nacimiento', countries);
        populateSelect('#pais-correspondencia', countries);
    })
    .catch(error => console.error('Error buscando ciudades:', error));
}

            
function fetchDepartments() {
    fetch('https://www.datos.gov.co/resource/xdk5-pm3f.json')
        .then(response => response.json())
        .then(data => {
            const departments = [...new Set(data.map(item => item.departamento))].sort();
            populateSelect('#departamento-nacimiento', departments);
            populateSelect('#departamento-correspondencia', departments);
        })
        .catch(error => console.error('Error fetching departments:', error));
}

// Function to fetch cities/municipalities (for Colombia)
function fetchMunicipalities(department, targetId) {
    fetch(`https://www.datos.gov.co/resource/xdk5-pm3f.json?departamento=${department}`)
        .then(response => response.json())
        .then(data => {
            const municipalities = [...new Set(data.map(item => item.municipio))].sort();
            populateSelect(targetId, municipalities);
        })
        .catch(error => console.error('Error fetching municipalities:', error));
}

// Function to populate select elements
function populateSelect(selectId, options) {
    const select = $(selectId);
    select.empty().append('<option value="">Seleccione una opción</option>');
    options.forEach(option => {
        select.append($('<option></option>').attr('value', option).text(option));
    });
}

// Event listeners
$(document).ready(function() {
    fetchCountries();
    fetchDepartments();

    $('#departamento-nacimiento').change(function() {
        fetchMunicipalities($(this).val(), '#municipio-nacimiento');
    });

    $('#departamento-correspondencia').change(function() {
        fetchMunicipalities($(this).val(), '#municipio-correspondencia');
    });
});

function populateDateSelects() {
    // Populate days
    const daySelect = $('#nacimiento-dia');
    for (let i = 1; i <= 31; i++) {
        daySelect.append($('<option></option>').attr('value', i).text(i));
    }

    // Populate months
    const monthSelect = $('#nacimiento-mes');
    const months = [
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    ];
    months.forEach((month, index) => {
        monthSelect.append($('<option></option>').attr('value', index + 1).text(month));
    });

    // Populate years
    const yearSelect = $('#nacimiento-año');
    const currentYear = new Date().getFullYear();
    for (let i = currentYear; i >= currentYear - 100; i--) {
        yearSelect.append($('<option></option>').attr('value', i).text(i));
    }
}

// Function to fetch countries from the API
function fetchCountries() {
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            const countries = data.map(country => country.name.common).sort();
            populateSelect('#pais-nacimiento', countries);
            populateSelect('#pais-correspondencia', countries);
        })
        .catch(error => console.error('Error fetching countries:', error));
}

// Function to fetch states/departments (for Colombia)
function fetchDepartments() {
    fetch('https://www.datos.gov.co/resource/xdk5-pm3f.json')
        .then(response => response.json())
        .then(data => {
            const departments = [...new Set(data.map(item => item.departamento))].sort();
            populateSelect('#departamento-nacimiento', departments);
            populateSelect('#departamento-correspondencia', departments);
        })
        .catch(error => console.error('Error fetching departments:', error));
}

// Function to fetch cities/municipalities (for Colombia)
function fetchMunicipalities(department, targetId) {
    fetch(`https://www.datos.gov.co/resource/xdk5-pm3f.json?departamento=${department}`)
        .then(response => response.json())
        .then(data => {
            const municipalities = [...new Set(data.map(item => item.municipio))].sort();
            populateSelect(targetId, municipalities);
        })
        .catch(error => console.error('Error fetching municipalities:', error));
}

// Function to populate select elements
function populateSelect(selectId, options) {
    const select = $(selectId);
    select.empty().append('<option value="">Seleccione una opción</option>');
    options.forEach(option => {
        select.append($('<option></option>').attr('value', option).text(option));
    });
}

// Event listeners
$(document).ready(function() {
    populateDateSelects();
    fetchCountries();
    fetchDepartments();

    $('#departamento-nacimiento').change(function() {
        fetchMunicipalities($(this).val(), '#municipio-nacimiento');
    });

    $('#departamento-correspondencia').change(function() {
        fetchMunicipalities($(this).val(), '#municipio-correspondencia');
    });

    // Update days in month based on selected month and year
    $('#nacimiento-mes, #nacimiento-año').change(function() {
        updateDaysInMonth();
    });
});

$(document).ready(function () {
    $('#previewBtn').on('click', function () {
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
});


$(document).ready(function () {
    $('#calcular-experiencia').on('click', function () {
        // Obtener los valores de los meses y años ingresados
        const meses = parseInt($('input[name="nacimiento_mes"]').val()) || 0;
        const años = parseInt($('input[name="nacimiento_año"]').val()) || 0;

        
        const totalMeses = años * 12 + meses;
        const totalAños = Math.floor(totalMeses / 12);
        const restoMeses = totalMeses % 12;

        // Mostrar el resultado en el campo de texto
        $('input[name="total_tiempo_de_experiencia"]').val(`${totalAños} años y ${restoMeses} meses`);
    });
});


