window.addEventListener("load", async function() {
    let coursesPage = 20;
    let courses = shuffleArray(await getCourses(0, 0));

    await loadFiltersAndCourses(courses, coursesPage);
    handleTecnologyAndCertificationSelection(courses, coursesPage);
    handleInitialFilterSelection(courses, coursesPage);

});

async function loadFiltersAndCourses(courses, coursesPage) {
    await filterTecnologies();
    await filterCertifications();
    
    displayPages(courses, coursesPage);
    displayCourses(1, courses);
    searchListener(courses);
    return courses;
}

function handleTecnologyAndCertificationSelection(courses, coursesPage) {
    let selectedTecnology = null;
    let selectedCertification = null;

    document.querySelectorAll('.tecnologias-filtro p, .certificacion-filtro p').forEach(function(p) {
        p.addEventListener('click', function() {
            let isTecnology = p.closest('.tecnologias-filtro') !== null;
            let filterKey = isTecnology ? 'NOMBRE_TECNOLOGIA' : 'NOMBRE_CERTIFICACION';

            // Si ya está seleccionado, lo deseleccionamos
            if (p.classList.contains('selected')) {
                p.classList.remove('selected');

                // Limpiar el filtro correspondiente
                if (isTecnology) {
                    selectedTecnology = null;
                } else {
                    selectedCertification = null;
                }
            } else {
                // Deseleccionar todos los elementos del grupo antes de seleccionar el nuevo
                document.querySelectorAll('.' + (isTecnology ? 'tecnologias-filtro' : 'certificacion-filtro') + ' p').forEach(function(p) {
                    p.classList.remove('selected');
                });
                p.classList.add('selected');

                // Actualizar el filtro correspondiente
                if (isTecnology) {
                    selectedTecnology = p.textContent;
                } else {
                    selectedCertification = p.textContent;
                }
            }

            // Aplicar el filtrado con la combinación de filtros seleccionados
            let coursesFilter = courses;

            if (selectedTecnology) {
                coursesFilter = coursesFilter.filter(objeto => objeto['NOMBRE_TECNOLOGIA'] === selectedTecnology);
            }
            if (selectedCertification) {
                coursesFilter = coursesFilter.filter(objeto => objeto['NOMBRE_CERTIFICACION'] === selectedCertification);
            }

            // Mostrar los cursos filtrados
            displayPages(coursesFilter, coursesPage);
            displayCourses(1, coursesFilter);
            searchListener(coursesFilter);
        });
    });
}

function handleInitialFilterSelection(courses, coursesPage) {
    let tecnologyValue = document.getElementById("selectTecnology")?.value;
    let certificationValue = document.getElementById("selectCertification")?.value;

    // Corrección en los console.log
    console.log('tecnologia: ' + tecnologyValue);
    console.log('certificacion: ' + certificationValue);

    // Verificamos que haya un valor en tecnologyValue o certificationValue
    if (tecnologyValue) {
        applyInitialFilter(tecnologyValue, 'tecnologias', 'TECNOLOGIA_ID', courses, coursesPage);
    }else if (certificationValue) {
        applyInitialFilter(certificationValue, 'certificacion', 'CERTIFICACION_ID', courses, coursesPage);
    }
}


function applyInitialFilter(filterValue, elementPrefix, filterKey, courses, coursesPage) {
    // Suponiendo que `courses` y `coursesPage` son accesibles
    let element = document.getElementById(`${elementPrefix}-filtro-${filterValue}`);
    if (element) {
        element.classList.add('selected');
    }

    // Filtrar cursos basado en el filtro inicial
    let coursesFilter = courses.filter(objeto => objeto[filterKey] === filterValue);
    console.log(`${elementPrefix}-filtro-${filterValue}`);
    // Mostrar los cursos filtrados
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
                <a href="http://127.0.0.1/miratelecomunicacionees/?controller=curso&action=view&curso=${course.NOMBRE_CURSO}" target="_blank" style="text-decoration: none; color: inherit;">
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

function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];  // Intercambiar elementos
    }
    return array;
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


