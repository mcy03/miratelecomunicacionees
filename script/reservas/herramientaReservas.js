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

async function confirmacionReserva() {
    let vendorSelect = document.getElementById('proovedores');
    let vendorText = vendorSelect.selectedIndex !== -1 ? vendorSelect.options[vendorSelect.selectedIndex].text : '';

    let laboratorySelect = document.getElementById('laboratorios');
    let laboratoryText = laboratorySelect.selectedIndex !== -1 ? laboratorySelect.options[laboratorySelect.selectedIndex].text : '';

    let numPods = document.getElementById('pods').value || 'N/A';
    let numStudents = document.getElementById('alumnos').value || 'N/A';

    /* let schedule = document.getElementById('schedule').value || 'N/A'; */

    let zonasHorarias = document.getElementById('zonasHorarias');
    let timeZoneText = zonasHorarias.selectedIndex !== -1 ? zonasHorarias.options[zonasHorarias.selectedIndex].text : '';

    let companyName = document.getElementById('companyName').value || 'N/A';
    let contactName = document.getElementById('contactName').value || 'N/A';
    let contactEmail = document.getElementById('contactEmail').value || 'N/A';
    let address = document.getElementById('address').value || 'N/A';

    let countrySelect = document.getElementById('country');
    let countryText = countrySelect.selectedIndex !== -1 ? countrySelect.options[countrySelect.selectedIndex].text : '';

    let citySelect = document.getElementById('city');
    let cityText = citySelect.selectedIndex !== -1 ? citySelect.options[citySelect.selectedIndex].text : '';

    let zipCode = document.getElementById('zipCode').value || 'N/A';
    let phone = document.getElementById('phone').value || 'N/A';
    let technicalContactName = document.getElementById('technicalContactName').value || 'N/A';
    let technicalContactEmail = document.getElementById('technicalContactEmail').value || 'N/A';
    


    // Asignar los valores obtenidos a los elementos de confirmación
    document.getElementById('confirmVendor').innerHTML = `<b>Vendor: </b>${vendorText}`;
    document.getElementById('confirmLaboratory').innerHTML = `<b>Laboratory: </b>${laboratoryText}`;
    document.getElementById('confirmNum_pods').innerHTML = `<b>Pods: </b>${numPods}`;
    document.getElementById('confirmNum_students').innerHTML = `<b>Students: </b>${numStudents}`;
    document.getElementById(`confirmStart_date`).innerHTML = `<b>Start date: </b>${selectedDates[0]}`;
    document.getElementById(`confirmEnd_date`).innerHTML = `<b>End date: </b>${selectedDates[selectedDates.length - 1]}`;
    /* document.getElementById(`confirmSchedule`).innerHTML = `<b>Schedule: </b>${schedule}`; */

    document.getElementById('confirmTime_zone').innerHTML = `<b>Time zone: </b>${timeZoneText}`;

    document.getElementById('confirmCompany_name').innerHTML = `<b>Company name: </b>${companyName}`;
    document.getElementById('confirmCompany_contact').innerHTML = `<b>Company contact: </b>${contactName} (${contactEmail})`;
    document.getElementById('confirmAddress').innerHTML = `<b>Address: </b>${address}`;
    document.getElementById('confirmCountry').innerHTML = `<b>Country: </b>${countryText}`;
    document.getElementById('confirmCity').innerHTML = `<b>City: </b>${cityText}`;
    document.getElementById('confirmZip_code').innerHTML = `<b>Zip code: </b>${zipCode}`;
    document.getElementById('confirmPhone').innerHTML = `<b>Phone: </b>${phone}`;
    document.getElementById('confirmTechnical_contact').innerHTML = `<b>Technical contact: </b>${technicalContactName} (${technicalContactEmail})`;

    let clienteId = await comprobarCliente(companyName, contactName, contactEmail, address, countryText, cityText, zipCode, phone, technicalContactName, technicalContactEmail);
    await comprobarReserva(vendorSelect, laboratorySelect, numPods, numStudents, selectedDates, zonasHorarias, clienteId);
}

async function comprobarCliente(companyName, contactName, contactEmail, address, countryText, cityText, zipCode, phone, technicalContactName, technicalContactEmail) {
    let clientes = await get_clientes();
    let clienteId = 0;
    let clienteExiste = false;

    clientes.forEach(async cliente => {
        if (cliente.EMPRESA === companyName && cliente.NOMBRE_CONTACTO === contactName && cliente.EMAIL_CONTACTO === contactEmail && cliente.DIRECCION === address && cliente.PAIS === countryText && cliente.CIUDAD === cityText && cliente.CODIGO_POSTAL === zipCode && cliente.TELEFONO === phone && cliente.NOMBRE_CONTACTO_TECH === technicalContactName && cliente.EMAIL_CONTACTO_TECH === technicalContactEmail) {
            clienteExiste = true;
            clienteId = cliente.CLIENTE_ID;
        }
    });

    if (clienteExiste === false) {
        clienteId = await insert_cliente(companyName, contactName, contactEmail, address, countryText, cityText, zipCode, phone, technicalContactName, technicalContactEmail);
    }
    
    return clienteId;
}

async function comprobarReserva(vendorSelect, laboratorySelect, numPods, numStudents, selectedDates, zonasHorarias, clienteId) {
    let schedule = ['09:00:00', '12:00:00'];
    console.log(vendorSelect.value);
    console.log(laboratorySelect.value);
    console.log(numPods);
    console.log(numStudents);
    console.log(selectedDates);
    console.log(zonasHorarias.value);
    console.log(schedule);
    console.log(clienteId);
    await insert_reserva(vendorSelect.value, laboratorySelect.value, numPods, numStudents, selectedDates[0], selectedDates[selectedDates.length - 1], zonasHorarias.value, schedule[0], schedule[1], clienteId);

}

//----------------------
//      Peticiones a api para obtener datos 
//----------------------
async function get_reservas() {
    let formData = new FormData();
    formData.append('accion', 'get_reservas');
  
    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiReservas&action=api';
  
    try {
      const response = await axios.post(url, formData);
  
      return response.data;
    } catch (error) {
      console.error('Error:', error.message);
    }
  }

  async function get_clientes() {
    let formData = new FormData();
    formData.append('accion', 'get_clientes');
  
    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiReservas&action=api';
  
    try {
      const response = await axios.post(url, formData);
  
      return response.data;
    } catch (error) {
      console.error('Error:', error.message);
    }
  }

async function insert_cliente(companyName, contactName, contactEmail, address, countryText, cityText, zipCode, phone, technicalContactName, technicalContactEmail) {
    let formData = new FormData();
    formData.append('accion', 'insert_cliente');
    formData.append('companyName', companyName);
    formData.append('contactName', contactName);
    formData.append('contactEmail', contactEmail);
    formData.append('address', address);
    formData.append('country', countryText);
    formData.append('city', cityText);
    formData.append('zipCode', zipCode);
    formData.append('phone', phone);
    formData.append('technicalContactName', technicalContactName);
    formData.append('technicalContactEmail', technicalContactEmail);

  
    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiReservas&action=api';
  
    try {
      const response = await axios.post(url, formData);
  
      return response.data;
    } catch (error) {
      console.error('Error:', error.message);
    }
  }

async function insert_reserva() {
    let formData = new FormData();
    formData.append('accion', 'insert_reserva');
  
    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiReservas&action=api';
  
    try {
      const response = await axios.post(url, formData);
  
      return response.data;
    } catch (error) {
      console.error('Error:', error.message);
    }
  }