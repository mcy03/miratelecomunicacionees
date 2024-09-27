const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');
const seleccionLabText = document.getElementById('seleccionLab');
const credencialesEmpText = document.getElementById('credencialesEmp');
const policyText = document.getElementById('policy');
const finalizarResText = document.getElementById('finalizarRes');
const seleccionLabSection = document.getElementById('seleccionLabSection');
const credencialesEmpSection = document.getElementById('credencialesEmpSection');
const policySection = document.getElementById('policySection');
const finalizarResSection = document.getElementById('finalizarResSection');
const form = document.getElementById('formReserva');

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
    policyText.classList.add('unselected');
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
        visible(policySection);
    } else if (currentSection === policySection) {
        oculto(event, policySection);
        policyText.classList.add('completed');
        visible(finalizarResSection);
        nextBtn.innerHTML = 'SUBMIT';
        let ghostBtn = document.getElementById('ghostBtn');
        ghostBtn.style.display = 'flex';
        nextBtn.style.fontSize = '16px';
        nextBtn.style.width = '200px'
        confirmacionReserva();
    } else {
        form.submit();
    }
});

prevBtn.addEventListener('click', function (event) {
    event.preventDefault(); // Asegura que no se recargue la página

    if (currentSection === finalizarResSection) {
        oculto(event, finalizarResSection);
        finalizarResText.classList.remove('completed');
        visible(policySection);
        nextBtn.innerHTML = 'NEXT';
        let ghostBtn = document.getElementById('ghostBtn');
        ghostBtn.style.display = 'none';
        nextBtn.style.fontSize = '12px';
        nextBtn.style.width = 'fit-content'
    } else if (currentSection === policySection) {
        oculto(event, policySection);
        policyText.classList.remove('completed');
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

function confirmacionReserva() {
    let vendorSelect = document.getElementById('proovedores');
    let vendor = vendorSelect.value; // ID del proveedor
    let vendorText = vendorSelect.options[vendorSelect.selectedIndex].text; // Texto del proveedor

    let laboratorySelect = document.getElementById('laboratorios');
    let laboratory = laboratorySelect.value; // ID del laboratorio
    let laboratoryText = laboratorySelect.options[laboratorySelect.selectedIndex].text; // Texto del laboratorio

    let numPods = document.getElementById('pods').value;
    let numStudents = document.getElementById('alumnos').value;

    let companyName = document.getElementById('companyName').value;
    let contactName = document.getElementById('contactName').value;
    let contactEmail = document.getElementById('contactEmail').value;
    let address = document.getElementById('address').value;
    
    // Obtener el país seleccionado
    let countrySelect = document.getElementById('country');
    let country = countrySelect.value; // ID del país
    let countryText = countrySelect.options[countrySelect.selectedIndex].text; // Texto del país

    // Obtener la ciudad seleccionada
    let citySelect = document.getElementById('city');
    let city = citySelect.value; // ID de la ciudad
    let cityText = citySelect.options[citySelect.selectedIndex].text; // Texto de la ciudad

    let zipCode = document.getElementById('zipCode').value;
    let phone = document.getElementById('phone').value;
    let technicalContactName = document.getElementById('technicalContactName').value;
    let technicalContactEmail = document.getElementById('technicalContactEmail').value;

    let confirmVendor = document.getElementById('vendor');
    let confirmLaboratory = document.getElementById('laboratory');
    let confirmNumPods = document.getElementById('num_pods');
    let confirmNumStudents = document.getElementById('num_students');

    let confirmCompanyName = document.getElementById('company_name');
    let confirmCompanyContact = document.getElementById('company_contact');
    let confirmAddress = document.getElementById('address');
    let confirmCountry = document.getElementById('country');
    let confirmCity = document.getElementById('city');
    let confirmZipCode = document.getElementById('zip_code');
    let confirmPhone = document.getElementById('phone');
    let confirmTechnicalContact = document.getElementById('technical_contact');

    // Asignar los textos de confirmación
    confirmVendor.innerHTML += vendorText;
    confirmLaboratory.innerHTML += laboratoryText;
    confirmNumPods.innerHTML = 'pods';
    confirmNumStudents.innerHTML = 'students';



    confirmTimeZone.innerHTML = 'time zone';
    confirmCompanyName.innerHTML = 'company name';
    confirmCompanyContact.innerHTML = 'company contact';
    confirmAddress.innerHTML = 'address';
    confirmCountry.innerHTML = 'country';
    confirmCity.innerHTML = 'city';
    confirmZipCode.innerHTML = 'zip code';
    confirmPhone.innerHTML = 'phone';
    confirmTechnicalContact.innerHTML = 'technical contact';
}
