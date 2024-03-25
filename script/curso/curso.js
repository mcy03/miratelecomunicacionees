window.addEventListener("load", async function() {
    let coursesPage = 12;
    // Array de tecnologías
    const tecnologias = [
        "Securitiy",
        "Networking",
        "Wireless",
        "Customer Experience",
        "Data Center",
        "Collaboration",
        "DevNet",
        "Internet of Things",
        "Automation",
        "Service Provider",
        "Foundation",
        "Cloud",
        "CyberOPs"
    ];
    let tecnologies = await getTecnologies();
    // Obtener el elemento padre
    const tecnologiasFiltro = document.querySelector('.tecnologias-filtro');

    // Iterar sobre el array de tecnologías y generar los elementos <p>
    tecnologias.forEach(tecnologia => {
        const parrafo = document.createElement('p');
        parrafo.textContent = tecnologia;
        tecnologiasFiltro.appendChild(parrafo);
    });

    // Array de certificaciones
    const certificaciones = [
        "CCNA",
        "DevNet Associate",
        "Wireless",
        "CCNP Enterprise"
    ];

    // Obtener el elemento padre
    const certificacionFiltro = document.querySelector('.certificacion-filtro');

    // Iterar sobre el array de certificaciones y generar los elementos <p>
    certificaciones.forEach(certificacion => {
        const parrafo = document.createElement('p');
        parrafo.textContent = certificacion;
        certificacionFiltro.appendChild(parrafo);
    });

    let courses = await getCourses(0, 0);
    displayPages(courses, coursesPage);
    

    let page = 1;
    displayCourses(page, courses);

    const buttonPages = document.getElementsByClassName('buttonPages');

    for (let i = 0; i < buttonPages.length; i++) {
        const button = buttonPages[i];
        button.addEventListener('click', function(e) {
            e.preventDefault();

            page = button.textContent;
            displayCourses(page, courses);
        });
    }
})

async function displayCourses(page, courses) {
    let skip = (page - 1) * 12;

    coursesSelected = courses.slice(skip, skip + 12);

    // Obtener la sección de cursos
    const cursosSection = document.querySelector('.cursos');
    cursosSection.innerHTML = '';
    // Iterar sobre los cursos y generar el HTML dinámicamente
    for (let i = 0; i < coursesSelected.length; i += 3) {
        // Crear un nuevo div para la fila de cursos
        const filaCursos = document.createElement('div');
        filaCursos.classList.add('fila-cursos');
    
        // Iterar sobre los cursos en la fila actual
        for (let j = i; j < i + 3 && j < coursesSelected.length; j++) {
            // Crear un nuevo artículo para el curso
            const curso = document.createElement('article');
            curso.classList.add('curso');
            
            // Crear el contenido del artículo
            curso.innerHTML = `<h2>${coursesSelected[j].NOMBRE_CURSO}</h2>`;

            if (coursesSelected[j].NOMBRE_TECNOLOGIA) {
                curso.innerHTML += `<p>${coursesSelected[j].NOMBRE_TECNOLOGIA}</p>`;
            }

            if (coursesSelected[j].NOMBRE_CERTIFICACION) {
                curso.innerHTML += `<p>${coursesSelected[j].NOMBRE_CERTIFICACION}</p>`;
            } 
            
            curso.innerHTML += `<span>${coursesSelected[j].DESCRIPCION}</span>`;
    
            // Agregar el artículo al div de la fila de cursos
            filaCursos.appendChild(curso);
        }
    
        // Agregar la fila de cursos a la sección de cursos
        
        cursosSection.appendChild(filaCursos);
    }
}

async function displayPages(courses, coursesPage) {
    if (courses.length > coursesPage) {
        const pagination = document.getElementsByClassName('paginacion')[0];
        let page = 1;
        pagination.innerHTML += `
            <a href=""><i class="fa-solid fa-chevron-left "></i></a>
        `;

        for (let index = 0; index < courses.length; index = index + 12) {
            pagination.innerHTML += `
                <a href="" class="buttonPages">${page}</a>
            `;
            page++;
        }

        pagination.innerHTML += `
            <a href=""><i class="fa-solid fa-chevron-right "></i></a>
        `;
    }
}

async function getCourses(select, skip) {
    let formData = new FormData();
    formData.append('accion', 'get_courses');
    formData.append('select', select);
    formData.append('skip', skip);

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiCurso&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}

async function getTecnologies() {
    let formData = new FormData();
    formData.append('accion', 'get_tecnologies');

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiTecnologia&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}

async function getCertifications() {
    let formData = new FormData();
    formData.append('accion', 'get_certifications');

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiCertificacion&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}

