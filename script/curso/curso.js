window.addEventListener("load", async function() {
    await loadFiltersAndCourses();
    handleTecnologyAndCertificationSelection();
    handleInitialFilterSelection();

});

async function loadFiltersAndCourses() {
    await filterTecnologies();
    await filterCertifications();
    
    let coursesPage = 20;
    let courses = await getCourses(0, 0);
    
    displayPages(courses, coursesPage);
    displayCourses(1, courses);
    searchListener(courses);
}

function handleTecnologyAndCertificationSelection() {
    document.querySelectorAll('.tecnologias-filtro p, .certificacion-filtro p').forEach(function(p) {
        p.addEventListener('click', function() {
            let isTecnology = p.closest('.tecnologias-filtro') !== null;
            let filterKey = isTecnology ? 'NOMBRE_TECNOLOGIA' : 'NOMBRE_CERTIFICACION';
            
            if (p.classList.contains('selected')) {
                p.classList.remove('selected');
                // Mostrar todos los cursos si se deselecciona
                displayPages(courses, coursesPage);
                displayCourses(1, courses);
                searchListener(courses);
            } else {
                // Deseleccionar todos los elementos del grupo antes de seleccionar el nuevo
                document.querySelectorAll('.' + (isTecnology ? 'tecnologias-filtro' : 'certificacion-filtro') + ' p').forEach(function(p) {
                    p.classList.remove('selected');
                });
                p.classList.add('selected');

                let coursesFilter = courses.filter(objeto => objeto[filterKey] === p.textContent);

                displayPages(coursesFilter, coursesPage);
                displayCourses(1, coursesFilter);
                searchListener(coursesFilter);
            }
        });
    });
}

function handleInitialFilterSelection() {
    let tecnologyValue = document.getElementById("selectTecnology")?.value;
    let certificationValue = document.getElementById("selectCertification")?.value;

    if (tecnologyValue) {
        applyInitialFilter(tecnologyValue, 'tec', 'NOMBRE_TECNOLOGIA');
    } else if (certificationValue) {
        applyInitialFilter(certificationValue, 'cert', 'NOMBRE_CERTIFICACION');
    }
}

function applyInitialFilter(filterValue, elementPrefix, filterKey) {
    let element = document.getElementById(`${elementPrefix}-${filterValue}`);
    element.classList.add('selected');

    let coursesFilter = courses.filter(objeto => objeto[filterKey] === element.textContent);
    displayPages(coursesFilter, coursesPage);
    displayCourses(1, coursesFilter);
}

async function filterTecnologies() {
    await loadFilters('.tecnologias-filtro', 'loading-tecnologies', getTecnologies, 'TECNOLOGIA_ID', 'NOMBRE_TECNOLOGIA');
}

async function filterCertifications() {
    await loadFilters('.certificacion-filtro', 'loading-certifications', getCertifications, 'CERTIFICACION_ID', 'NOMBRE_CERTIFICACION');
}

async function loadFilters(filterContainerSelector, loadingElementId, fetchFunction, idField, nameField) {
    const loadingElement = document.getElementById(loadingElementId);
    const filterContainer = document.querySelector(filterContainerSelector);

    try {
        let items = await fetchFunction();
        items.forEach(item => {
            const p = document.createElement('p');
            p.textContent = item[nameField];
            p.id = `${filterContainerSelector.slice(1)}-${item[idField]}`;
            filterContainer.appendChild(p);
        });

        loadingElement.style.display = 'none';
        filterContainer.style.display = 'block';
    } catch (error) {
        console.error('Error:', error);
        loadingElement.style.display = 'none';
    }
}

async function displayCourses(page, courses) {
    const loadingElementCourse = document.getElementById('loading-courses');
    const cursosSection = document.querySelector('.cursos');
    const cursosDiv = document.querySelector('.list-courses');
    const messageNoContent = document.getElementsByClassName('no-content')[0];
    
    cursosSection.innerHTML = '';

    if (courses.length > 0) {
        messageNoContent.style.display = 'none';
        let skip = (page - 1) * 20;
        let coursesSelected = courses.slice(skip, skip + 20);
    
        // Crear un único contenedor (div) para todos los cursos
        const filaCursos = document.createElement('div');
        filaCursos.classList.add('fila-cursos'); // Clase para todo el contenedor
        
        coursesSelected.forEach((course) => {
            const curso = document.createElement('article');
            curso.classList.add('curso');
            curso.innerHTML = `
                <a href="http://127.0.0.1/miratelecomunicacionees/?controller=curso&action=view&${course.NOMBRE_CURSO}" target="_blank" style="text-decoration: none; color: inherit;">
                    <h2>${course.NOMBRE_CURSO}</h2>
                    <div id="content-course-${course.NOMBRE_CURSO}" class="content-course">
                        ${course.NOMBRE_TECNOLOGIA ? `<p>${course.NOMBRE_TECNOLOGIA}</p>` : ''}
                        ${course.NOMBRE_CERTIFICACION ? `<p>${course.NOMBRE_CERTIFICACION}</p>` : ''}
                        <span>${course.COMPLETE_NAME}</span>
                    </div>
                </a>`;
            
            // Añadir el artículo al contenedor de cursos
            filaCursos.appendChild(curso);
        });
    
        // Añadir el contenedor con todos los cursos a la sección
        cursosSection.appendChild(filaCursos);
    
        loadingElementCourse.style.display = 'none';
        cursosDiv.style.display = 'flex';
    } else {
        messageNoContent.style.display = 'block';
    }
    
}

async function displayPages(courses, coursesPage) {
    const pagination = document.getElementsByClassName('paginacion')[0];
    pagination.innerHTML = '';

    if (courses.length > coursesPage) {
        pagination.innerHTML = `<a href=""><i class="fa-solid fa-chevron-left "></i></a>`;
        
        let pages = Math.ceil(courses.length / coursesPage);
        for (let page = 1; page <= pages; page++) {
            pagination.innerHTML += `<a href="" class="buttonPages">${page}</a>`;
        }

        pagination.innerHTML += `<a href=""><i class="fa-solid fa-chevron-right "></i></a>`;

        document.querySelectorAll('.buttonPages').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                displayCourses(parseInt(button.textContent), courses);
            });
        });
    }  
}

function searchListener(courses) {
    const buscador = document.getElementById('inputCurso');
    
    buscador.addEventListener('input', function() {
        const textoBusqueda = buscador.value.toLowerCase();
        const cursosFiltrados = courses.filter(curso => curso.NOMBRE_CURSO.toLowerCase().includes(textoBusqueda));

        displayCourses(1, cursosFiltrados);
        displayPages(cursosFiltrados, 20);

        const messageNoContent = document.getElementsByClassName('no-content')[0];
        messageNoContent.style.display = cursosFiltrados.length === 0 ? 'block' : 'none';
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


