const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');
const seleccionLabText = document.getElementById('seleccionLab');
const credencialesEmpText = document.getElementById('credencialesEmp');
const finalizarResText = document.getElementById('finalizarRes');
const seleccionLabSection = document.getElementById('seleccionLabSection');
const credencialesEmpSection = document.getElementById('credencialesEmpSection');
const finalizarResSection = document.getElementById('finalizarResSection');

const inputLab = document.getElementById('laboratorios');
const inputAlumnos = document.getElementById('alumnos');
const inputFecha = document.getElementById('fecha');
const inputPods = document.getElementById('pods');
const apartadoPods = document.getElementById('apartadoPods');
const apartadoAlumnos = document.getElementById('apartadoAlumnos');
const apartadoFechas = document.getElementById('apartadoFechas');

// Variable para llevar el control de la sección actual
let currentSection = seleccionLabSection;

function visible(section) {
    section.style.display = 'flex';
    let sectionId = section.id.replace('Section', '');
    let sectionText = document.getElementById(sectionId);
    sectionText.classList.add('selected');
    sectionText.classList.remove('unselected');
    sectionText.classList.remove('completed');
    currentSection = section;  // Actualiza la sección actual
    if (currentSection !== seleccionLabSection) {
        prevBtn.style.display = 'block';
    } else {
        prevBtn.style.display = 'none';
    }
}

function oculto(event, section) {
    event.preventDefault();  // Prevenir la recarga de la página
    section.style.display = 'none';
    let sectionId = section.id.replace('Section', '');
    let sectionText = document.getElementById(sectionId);
    sectionText.classList.add('unselected');
    sectionText.classList.remove('selected');
}

function init() {
    // Inicializa el estado
    seleccionLabText.classList.add('selected');
    credencialesEmpText.classList.add('unselected');
    finalizarResText.classList.add('unselected');
    visible(seleccionLabSection);  // Mostrar la primera sección inicialmente
    prevBtn.style.display = 'none'; // Oculto el botón anterior en la primera sección
}

init();

nextBtn.addEventListener('click', function (event) {
    event.preventDefault(); // Asegura que no se recargue la página

    if (currentSection === seleccionLabSection) {
        oculto(event, seleccionLabSection);
        seleccionLabText.classList.add('completed');
        visible(credencialesEmpSection);
    } else if (currentSection === credencialesEmpSection) {
        oculto(event, credencialesEmpSection);
        credencialesEmpText.classList.add('completed');
        visible(finalizarResSection);
    }
});

prevBtn.addEventListener('click', function (event) {
    event.preventDefault(); // Asegura que no se recargue la página

    if (currentSection === finalizarResSection) {
        oculto(event, finalizarResSection);
        finalizarResText.classList.remove('completed');
        visible(credencialesEmpSection);
    } else if (currentSection === credencialesEmpSection) {
        oculto(event, credencialesEmpSection);
        credencialesEmpText.classList.remove('completed');
        visible(seleccionLabSection);
    }
});

function showPopup(message) {
    // Obtener el elemento del popup
    var popup = document.getElementById('popup');
    // Mostrar el popup
    popup.style.display = 'block';
    // Actualizar el mensaje del popup
    document.getElementById('popup-message').innerText = message;

    // Cerrar el popup al hacer clic en la "X"
    document.querySelector('.close-btn').addEventListener('click', function () {
        popup.style.display = 'none';
    });

    // Opcional: Cerrar el popup después de unos segundos
    setTimeout(function () {
        popup.style.display = 'none';
    }, 10000); // Se cierra automáticamente después de 10 segundos
}

addEventListener('change', () => {
    if (inputPods.value !== '' && inputAlumnos.value > inputPods.value) {
        showPopup('Remember that the laboratories cannot be worked on simultaneously, since they are 1:2 pod:student.');
    }
})



inputLab.addEventListener('change', () => {
    apartadoPods.style.display = 'block';
    apartadoAlumnos.style.display = 'block';
    apartadoFechas.style.display = 'block';
})