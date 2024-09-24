let pods = 5;

// Inicializa el ionRangeSlider una vez al cargar la página
$(document).ready(function () {
  $("#pods").ionRangeSlider({
    min: 0,
    max: pods,
    from: 0,
  });
});

window.addEventListener("load", async function () {
  let data = await get_data();
  let proovedores = data[0];
  let zonasHorarias = data[1];
  let labsReservas = await get_labs_reservas();
  let reservas = await get_reservas();

  // Mostrar los datos en los selects
  displayLabs(labsReservas);
  displayProovedores(proovedores);
  displayReservas(reservas);
  displayZonasHorarias(zonasHorarias);


  new Choices('#proovedores', {
    searchEnabled: true,  // Habilitar la búsqueda
    itemSelectText: '',   // Texto que aparece cuando una opción es seleccionable
  });
  new Choices('#laboratorios', {
    searchEnabled: true,  // Habilitar la búsqueda
    itemSelectText: '',   // Texto que aparece cuando una opción es seleccionable
  });
  new Choices('#zonasHorarias', {
    searchEnabled: true,  // Habilitar la búsqueda
    itemSelectText: '',   // Texto que aparece cuando una opción es seleccionable
  });
});


function displayProovedores(proovedores) {
  let proovedoresSelect = document.getElementById('proovedores');

  proovedores.forEach(proovedor => {
    // Crear un nuevo elemento <option>
    let option = document.createElement('option');

    // Asignar el valor y el texto a la opción
    option.value = proovedor.PROOVEDOR_ID;
    option.textContent = proovedor.PROOVEDOR_NAME;

    // Agregar la opción al select
    proovedoresSelect.appendChild(option);
  });
}

function displayZonasHorarias(zonasHorarias) {
  let zonasHorariasSelect = document.getElementById('zonasHorarias');

  zonasHorarias.forEach(zonaHoraria => {
    // Crear un nuevo elemento <option>
    let option = document.createElement('option');

    // Asignar el valor y el texto a la opción
    option.value = zonaHoraria.TIME_ZONE_ID;
    option.textContent = zonaHoraria.TIME_ZONE + ': ' + zonaHoraria.NOMBRE;

    // Agregar la opción al select
    zonasHorariasSelect.appendChild(option);
  });
}

function displayLabs(labs) {
  let labsSelect = document.getElementById('laboratorios');

  labs.forEach(lab => {
    // Crear un nuevo elemento <option>
    let option = document.createElement('option');

    // Asignar el valor y el texto a la opción
    option.value = lab.LABORATORIO_ID;
    option.textContent = lab.NOMBRE_CURSO + ' - ' + lab.COMPLETE_NAME;

    // Agregar la opción al select
    labsSelect.appendChild(option);
  });

  // Agregar evento de cambio al select
  labsSelect.addEventListener('change', function () {
    const selectedLab = labsSelect.options[labsSelect.selectedIndex];

    labs.forEach(lab => {
      if (lab.LABORATORIO_ID === selectedLab.value) {
        pods = lab.PODS_AVALIABLE; // Actualiza la variable pods

        // Actualiza el rango del slider
        $("#pods").data("ionRangeSlider").update({
          max: pods
        });
      }
    });
  });
}

function displayReservas(reservas) {
  let labsSelect = document.getElementById('laboratorios');

  labsSelect.addEventListener('change', () => {
    const selectedLab = labsSelect.options[labsSelect.selectedIndex];

    reservas.forEach(reserva => {
      if (reserva.LABORATORIO_ID === selectedLab.value) {
        console.log(reserva);
      }
    });
  });
}

//----------------------
//      Peticiones a api para obtener datos 
//----------------------
async function get_data() {
  let formData = new FormData();
  formData.append('accion', 'get_data');

  const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiReservas&action=api';

  try {
    const response = await axios.post(url, formData);

    return response.data;
  } catch (error) {
    console.error('Error:', error.message);
  }
}
async function get_labs_reservas() {
  let formData = new FormData();
  formData.append('accion', 'get_labs_reservas');

  const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiReservas&action=api';

  try {
    const response = await axios.post(url, formData);

    return response.data;
  } catch (error) {
    console.error('Error:', error.message);
  }
}
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



