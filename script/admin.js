    
    
    const enlaces = Array.from(document.getElementsByClassName('enlacesMenu'));

    let lastContent;

    enlaces.forEach(enlace => {
        enlace.addEventListener('click', async function name(e) {
            e.preventDefault();
            lastContent = document.getElementsByClassName('activated')[0];
            
            lastContent.classList.remove("activated");
            lastContent.classList.add("desactivated");
            
            let id = enlace.id;
            const contenido = document.getElementsByClassName('contenido-'+id)[0];
            contenido.classList.remove("desactivated");
            contenido.classList.add("activated");

            await data(id);
            
        })
    });

    
    
    async function getEntries(button) {
        let formData = new FormData();
            formData.append('accion', 'get_entries_view_blog');

            if (button.hasClass('public')) {
                formData.append('estado', 'PUBLIC');
            }else if(button.hasClass('draft')){
                formData.append('estado', 'DRAFT');
            }else if(button.hasClass('trash')){
                formData.append('estado', 'TRASH');
            }

        
    
        const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiPublicacion&action=api';
    
        try {
            const response = await axios.post(url, formData);
            console.log(response.data);
            return response.data;
        } catch (error) {
            console.error('Error:', error.message);
        }
    }
    
    function viewEntries(data) {
        listContainer = document.querySelector('.list.list-entries');
        listContainer.innerHTML = '';
        data.forEach(entry => {
            const entryHTML = `
                <div class="data entrie">
                <a id="entrie-${entry.PUBLICACION_ID}" class="enlaceEntrie" href="http://127.0.0.1/miratelecomunicacionees/?controller=entrada&entrie=${entry.PUBLICACION_ID}">
                    <div class="body-data body-entrie">
                        <div class="data-img entrie-img">
                            <img src="./resource/publicaciones/${entry.IMG}" alt="">
                        </div>

                            <div class="info-data info-entrie">
                                <h4>${entry.TITULO}</h4>
                                <p class="date-data date-entrie">${entry.FECHA}</p>
                            </div>
                        
                    </div>
                </a>
                    <div class="options-data options-entrie">
                        <select id="entrie-${entry.PUBLICACION_ID}" class="selectOption">
                            <option value="">Opciones</option>
                            <option value="http://127.0.0.1/miratelecomunicacionees/?controller=entrada&entrie=${entry.PUBLICACION_ID}">Ver</option>
                            <option value="eliminar">Eliminar</option>
                            <option value="http://127.0.0.1/miratelecomunicacionees/?controller=entrada&entrie=${entry.PUBLICACION_ID}">Editar</option>
                        </select>
                    </div>
                </div>
            `;
            listContainer.innerHTML += entryHTML;


        });

        document.querySelectorAll('.selectOption').forEach(function(select) {
            select.addEventListener('change', async function(e) {
                e.preventDefault();
                var selectedValue = this.value;
                if (selectedValue === 'eliminar') {
                    result = deleteEntrie(this.id.split('-')[1]);

                    if (result) {
                        const enlace = document.getElementsByClassName('activated')[0];
                        await data(enlace.id);
                    }
                }else{
                    window.location.href = this.value;
                }
            });
        });

    }

    async function deleteEntrie(id) {
        let formData = new FormData();
        formData.append('accion', 'delete_entrie');
        formData.append('id', id);

        const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiPublicacion&action=api';
    
        try {
            const response = await axios.post(url, formData);
    
            return response.data;
        } catch (error) {
            console.error('Error:', error.message);
        }
    }

    async function getCategories() {
        let formData = new FormData();
        formData.append('accion', 'get_categories_admin');
    
        const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiCategoria&action=api';
    
        try {
            const response = await axios.post(url, formData);
    
            return response.data;
        } catch (error) {
            console.error('Error:', error.message);
        }
    }
    function viewCategories(data) {
        let listContainer = document.querySelector('.list-categories');
    
        data.forEach(category => {
            const categoryHTML = `
                <div class="category">
                    <div class="body-category">
                        <div class="info-category">
                            <h4>${category.NOMBRE}</h4>
                            <p class="date-category">${category.FECHA}</p>
                        </div>
                        <div class="entries-category">
                            <a id="${category.NOMBRE}" class="enlaceEntriesCategory" href="#">
                                <p class="num-entries-category">${category.ENTRADAS} entradas</p>
                            </a>
                        </div>
                    </div>
                    <div class="options-category">
                        <p>Opciones...</p>
                    </div>
                </div>
            `;
            listContainer.innerHTML += categoryHTML;
        });
    
    }
    

    async function getPages() {
        const pages = [
            { nombre: "Home", fecha: "7 de oct. de 2021", imagen: "./resource/backgroundEjemplo.jpg" },
            { nombre: "Formación", fecha: "8 de oct. de 2021", imagen: "./resource/backgroundEjemplo.jpg" },
            { nombre: "Calendario", fecha: "9 de oct. de 2021", imagen: "./resource/backgroundEjemplo.jpg" },
            { nombre: "Servicios IT", fecha: "10 de oct. de 2021", imagen: "./resource/backgroundEjemplo.jpg" },
            { nombre: "Laboratorios", fecha: "11 de oct. de 2021", imagen: "./resource/backgroundEjemplo.jpg" },
            { nombre: "Libreria digital", fecha: "12 de oct. de 2021", imagen: "./resource/backgroundEjemplo.jpg" },
            { nombre: "Mira", fecha: "12 de oct. de 2021", imagen: "./resource/backgroundEjemplo.jpg" },
            { nombre: "On the Go", fecha: "12 de oct. de 2021", imagen: "./resource/backgroundEjemplo.jpg" },
            { nombre: "Curso", fecha: "12 de oct. de 2021", imagen: "./resource/backgroundEjemplo.jpg" }
        ];
    
        return pages;
    }
    function viewPages(data) {
        listContainer = document.querySelector('.list-pages');
    
        data.forEach(page => {
            const pageHTML = `
                <div class="data page">
                    <div class="body-data body-page">
                        <div class="data-img page-img">
                            <img src="${page.imagen}" alt="">
                        </div>
                        <div class="info-data info-page">
                            <h4>${page.nombre}</h4>
                            <p class="date-data date-page">${page.fecha}</p>
                        </div>
                    </div>
                    <div class="options-data options-page">
                        <p>Opciones...</p>
                    </div>
                </div>
            `;
            
            listContainer.innerHTML += pageHTML;
        });
    }

    async function getCourses() {
        let formData = new FormData();
        formData.append('accion', 'get_courses');
    
        const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiCurso&action=api';
    
        try {
            const response = await axios.post(url, formData);
    
            return response.data;
        } catch (error) {
            console.error('Error:', error.message);
        }
    }
    
    function viewCourses(data) {
        // Obtener el contenedor donde se mostrarán los cursos
        const contenedorCursos = document.querySelector('.content-data-objects.content-courses');

        // Generar y mostrar los cursos en el contenedor
        contenedorCursos.innerHTML = generarTodosLosCursosHTML(data);

    
    }

    // Función para generar el HTML de cada curso
    function generarCursoHTML(curso) {
        console.log(curso);
        return `
            <div class="object course">
                <div class="object-img course-img">
                    <img src="./resource/${curso.IMG_CURSO}" alt="">
                </div>

                <div class="object-body course-body">
                    <h4 class="id-object id-course">${curso.NOMBRE_CURSO}</h4>
                    <p class="name-object name-course">${curso.DESCRIPCION}</p>
                </div>

                <div class="options-object options-course">
                    <p>Opciones...</p>
                </div>
            </div>
        `;
    }

    // Función para generar el HTML de dos cursos en una fila
    function generarDosCursosEnFilaHTML(curso1, curso2) {
        return `
            <div class="row-objects">
                ${generarCursoHTML(curso1)}
                ${generarCursoHTML(curso2)}
            </div>
        `;
    }

    // Función para generar el HTML de todos los cursos agrupados en pares
    function generarTodosLosCursosHTML(cursos) {
        let html = '';
        for (let i = 0; i < cursos.length -1; i += 2) {
            const curso1 = cursos[i];
            const curso2 = cursos[i + 1];
            html += generarDosCursosEnFilaHTML(curso1, curso2);
        }
        return html;
    }

    async function data(id) {
        if (id == 'entradas') {
            let selectedButton = $('.filter-entries button.selected');

            let aentries = await getEntries(selectedButton);
            viewEntries(aentries);
            $('.filter-entries button').click(async function() {

                $('.filter-entries button').removeClass('selected');

                $(this).addClass('selected');
                let entries;
                if ($(this).hasClass('public selected')) {
                    entries = await getEntries($(this));
                } else if ($(this).hasClass('draft selected')) {
                    entries = await getEntries($(this));
                } else if ($(this).hasClass('trash selected')) {
                    entries = await getEntries($(this));
                }

                viewEntries(entries);
            });
        }else if (id == 'categorias') {
            let allCategories = await getCategories();
            viewCategories(allCategories);
        }else if (id == 'paginas') {
            let allPages = await getPages();
            viewPages(allPages);
        }else if (id == 'cursos') {
            let allCourses = await getCourses();
            viewCourses(allCourses);
        }
    }