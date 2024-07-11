window.addEventListener("load", async function() {
    filterTecnologies();
    filterCertifications();
    
    let coursesPage = 20;

    let courses = await getCourses(0, 0);
    displayPages(courses, coursesPage);

    let page = 1;
    displayCourses(page, courses);

    searchListener(courses);
    document.querySelectorAll('.tecnologias-filtro p').forEach(function(p) {
        p.addEventListener('click', function() {
            if (p.classList.contains('selected')) {
                p.classList.remove('selected');

                displayPages(courses, coursesPage);
                page = 1;

                displayCourses(page, courses);
            }else{
                p.classList.add('selected');

                let coursesFilter = courses.filter(objeto => objeto.NOMBRE_TECNOLOGIA === p.textContent);
  
                displayPages(coursesFilter, coursesPage);
                page = 1;

                displayCourses(page, coursesFilter);

                searchListener(coursesFilter);
            }
        });
    });

    document.querySelectorAll('.certificacion-filtro p').forEach(function(p) {
        p.addEventListener('click', function() {
            if (p.classList.contains('selected')) {
                p.classList.remove('selected');

                displayPages(courses, coursesPage);
                page = 1;

                displayCourses(page, courses);
            }else{
                p.classList.add('selected');
                
                let coursesFilter = courses.filter(objeto => objeto.NOMBRE_CERTIFICACION === p.textContent);

                displayPages(coursesFilter, coursesPage);
                page = 1;

                displayCourses(page, coursesFilter);
                
                searchListener(coursesFilter);
            }
        });
    });

    let tecnologyValue = document.getElementById("selectTecnology") ? document.getElementById("selectTecnology").value : null;
    let certificationValue = document.getElementById("selectCertification") ? document.getElementById("selectCertification").value : null;
    
    if (tecnologyValue != null) {
        let tecologia = document.getElementById(`tec-${tecnologyValue}`);
        tecologia.classList.add('selected');

        let coursesFilter = courses.filter(objeto => objeto.NOMBRE_TECNOLOGIA === tecologia.textContent);

        displayPages(coursesFilter, coursesPage);
        page = 1;

        displayCourses(page, coursesFilter);

    }else if (certificationValue != null) {
        let certification = document.getElementById(`cert-${certificationValue}`);
        certification.classList.add('selected');

        let coursesFilter = courses.filter(objeto => objeto.NOMBRE_CERTIFICACION === certification.textContent);

        displayPages(coursesFilter, coursesPage);
        page = 1;

        displayCourses(page, coursesFilter);
    }
})

async function filterTecnologies() {
    const loadingElementTec = document.getElementById('loading-tecnologies');
    const tecnologiasFiltro = document.querySelector('.tecnologias-filtro');

    try {
        // Realizar la petición a la API con FormData
        let tecnologies = await getTecnologies();

        // Iterar sobre los datos y agregarlos al HTML
        for (let index = 0; index < tecnologies.length; index++) {
            const parrafo = document.createElement('p');
            parrafo.textContent = tecnologies[index].NOMBRE_TECNOLOGIA;
            parrafo.id = `tec-${tecnologies[index].TECNOLOGIA_ID}`
            tecnologiasFiltro.appendChild(parrafo);
        }

        // Ocultar el elemento de carga
        loadingElementTec.style.display = 'none';

        // Mostrar el contenido obtenido
        tecnologiasFiltro.style.display = 'block';
    } catch (error) {
        // En caso de error, manejarlo aquí
        console.error('Error:', error);
        loadingElementTec.style.display = 'none'; // Ocultar el elemento de carga
    }
}

async function filterCertifications() {
    const loadingElementCert = document.getElementById('loading-certifications');
    const certificacionFiltro = document.querySelector('.certificacion-filtro');

    try {
        let certifications = await getCertifications();

        // Iterar sobre el array de certificaciones y generar los elementos <p>
        for (let index = 0; index < certifications.length; index++) {
            const parrafo = document.createElement('p');
            parrafo.textContent = certifications[index].NOMBRE_CERTIFICACION;
            parrafo.id = `cert-${certifications[index].CERTIFICACION_ID}`
            certificacionFiltro.appendChild(parrafo);
        };

        // Ocultar el elemento de carga
        loadingElementCert.style.display = 'none';

        // Mostrar el contenido obtenido
        certificacionFiltro.style.display = 'block';

    } catch (error) {
        // En caso de error, manejarlo aquí
        console.error('Error:', error);
        loadingElementCert.style.display = 'none'; // Ocultar el elemento de carga
    }
}

async function displayCourses(page, courses) {
    const loadingElementCourse = document.getElementById('loading-courses');
    const cursosSection = document.querySelector('.cursos');
    const cursosDiv = document.querySelector('.list-courses');

    
    if (courses.length != 0) {
        const messageNoContent = document.getElementsByClassName('no-content')[0];

        if (messageNoContent.style.display == 'block') {
            messageNoContent.style.display = 'none';
        }

        cursosSection.innerHTML = '';
        let skip = (page - 1) * 20;
    
        try {
            coursesSelected = courses.slice(skip, skip + 20);

            // Iterar sobre los cursos y generar el HTML dinámicamente
            for (let i = 0; i < coursesSelected.length; i += 3) {
                // Crear un nuevo div para la fila de cursos
                const filaCursos = document.createElement('div');
                filaCursos.classList.add('fila-cursos');
            
                // Iterar sobre los cursos en la fila actual
                for (let j = i; j < i + 3 && j < coursesSelected.length; j++) {
                    const link = document.createElement('a');
                    link.href = `http://127.0.0.1/miratelecomunicacionees/?controller=curso&action=view&${coursesSelected[j].NOMBRE_CURSO}`;
                    link.style.textDecoration = 'none'; // Asegura que el enlace no tenga subrayado
                    link.style.color = 'inherit'; // Asegura que el enlace herede el color del texto
                    link.target = "_blank";
                    
                    // Crear el artículo para el curso
                    const curso = document.createElement('article');
                    curso.classList.add('curso');
                    
                    // Crear el contenido del artículo
                    link.innerHTML = `<h2>${coursesSelected[j].NOMBRE_CURSO}</h2>`;
                    if (coursesSelected[j].NOMBRE_TECNOLOGIA) {
                        link.innerHTML += `<p>${coursesSelected[j].NOMBRE_TECNOLOGIA}</p>`;
                    }
                    if (coursesSelected[j].NOMBRE_CERTIFICACION) {
                        link.innerHTML += `<p>${coursesSelected[j].NOMBRE_CERTIFICACION}</p>`;
                    }
                    link.innerHTML += `<span>${coursesSelected[j].COMPLETE_NAME}</span>`;
                
                    // Agregar el artículo dentro del enlace
                    curso.appendChild(link);
                
                    // Agregar el enlace al div de la fila de cursos
                    filaCursos.appendChild(curso);
                }
                
            
                // Agregar la fila de cursos a la sección de cursos
                cursosSection.appendChild(filaCursos);
            }
    
            // Ocultar el elemento de carga
            loadingElementCourse.style.display = 'none';
    
            // Mostrar el contenido obtenido
            cursosDiv.style.display = 'block';
    
        } catch (error) {
            // En caso de error, manejarlo aquí
            console.error('Error:', error);
            loadingElementCourse.style.display = 'none'; // Ocultar el elemento de carga
        }
    }
}

async function displayPages(courses, coursesPage) {
    const pagination = document.getElementsByClassName('paginacion')[0];
    
    pagination.innerHTML = '';
    if (courses.length > coursesPage) {
        let page = 1;
        pagination.innerHTML += `
            <a href=""><i class="fa-solid fa-chevron-left "></i></a>
        `;

        for (let index = 0; index < courses.length; index = index + 20) {
            pagination.innerHTML += `
                <a href="" class="buttonPages">${page}</a>
            `;
            page++;
        }

        pagination.innerHTML += `
            <a href=""><i class="fa-solid fa-chevron-right "></i></a>
        `;

        const buttonPages = document.getElementsByClassName('buttonPages');

        for (let i = 0; i < buttonPages.length; i++) {
            const button = buttonPages[i];
            button.addEventListener('click', function(e) {
                e.preventDefault();
    
                page = button.textContent;
                displayCourses(page, courses);
            });
        }
    }  
}

function searchListener(courses) {
    const buscador = document.getElementById('inputCurso');
    
    buscador.addEventListener('input', function() {
        const textoBusqueda = buscador.value.toLowerCase();
        console.log(textoBusqueda);

        const cursosFiltrados = courses.filter(function(elemento) {
            return elemento.NOMBRE_CURSO.toLowerCase().includes(textoBusqueda);
        });
        console.log(cursosFiltrados);
            

        if (cursosFiltrados.length == 0) {
            const cursosSection = document.querySelector('.cursos');
            cursosSection.innerHTML = "";
            
            const messageNoContent = document.getElementsByClassName('no-content')[0];

            messageNoContent.style.display = 'block';
        }

        displayCourses(1, cursosFiltrados);
        displayPages(cursosFiltrados, 20);
    });
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
function messageNoContent() {
    const messageNoContent = document.getElementsByClassName('no-content')[0];
    if (messageNoContent.style.display == 'block') {
        messageNoContent.style.display = 'none';
    }else{
        messageNoContent.style.display = 'block';
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