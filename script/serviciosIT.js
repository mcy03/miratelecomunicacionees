document.addEventListener('DOMContentLoaded', function() {
    const headers = document.querySelectorAll('.header-solution');
    const texts = document.querySelectorAll('.text-solution');

    headers.forEach((header, index) => {
        header.addEventListener('click', function() {
            // Quitar la clase 'selected' de todos los headers y textos
            headers.forEach(h => h.classList.remove('selected'));
            texts.forEach(t => t.classList.remove('selected'));

            // Añadir la clase 'selected' al header y texto correspondientes
            header.classList.add('selected');
            texts[index].classList.add('selected');
        });
    });



    
});

function mostrarContenido(proyecto) {
    const contenidos = {
        saica: {
            title: "SAICA",
            content: `
                <p>Alcance económico del proyecto: 1.8 millones de euros. Año 2005-2007</p>
                <p>Se diseñó la alta disponibilidad simétrica entre los dos centros principales de la compañía, entre ciudad del Ebro y Zaragoza ciudad.
                La red de los centros se basó en 4 catalyst 6509, 30 switches 3750, callmanger 7 en cluster, conexión redundada por dos enlaces de
                radio y conexión por mpls a través de telefónica como una tercera opción, diseño de red, direccionamiento y conexionado de
                empresas filiales a través de vpns de mpls, diseño de red wifi con controllers para 800 access points distribuidos, implementación
                waas entre dos centros para optimización de wan.</p>`
        },
        aenaT1: {
            title: "AENA T1",
            content: `
                <p>Alcance económico del proyecto: 500.000, 00 euros. Año 2008</p>
                <p>Definición de la maqueta de red MPLS del aeropuerto de Barcelona que posteriormente se replicó en el aeropuerto de Madrid T4.
                Se conectó 8 equipos 7600 conectados en anillo mallados fullmesh , permitiendo hacer vpls / vpns de mpls como principal
                objetivo.
                </p>`
        },
        f1valencia: {
            title: "F1 Valencia Street Circuit",
            content: `
                <p>
                    Alcance económico del proyecto: 1 millón de euros. Año 2009 más 2010-2011-2012 de mantenimiento.
                </p>
                <br>
                <p>
                    Diseñamos, implementamos y mantenemos la red multiservicio basada en tecnología de MPLS con Cisco, dicha red soporta toda la
                    seguridad del sistema de control de carrera, la señal de televisión para las pantallas gigantes, cámaras de seguridad de control de
                    gradas, telefonía IP, también desarrollada por MIRA y el sistema global de megafonía.
                </p>
                <br>
                <p>
                    El equipamiento y alcance aproximado fue de 20 catalyst 6500 para montar el anillo MPLS.
                </p>
                <br>
                <p>
                    Cisco unified communications Manager 7.0 con srst en un 2811, hay 8 catalyst 3750.
                </p>
                <br>
                <p>
                    Este proyecto surge por la necesidad de migrar de una infraestructura provista y controlada por un proveedor a una solución
                    independiente, redundante y escalable. anillo mallados fullmesh , permitiendo hacer vpls / vpns de mpls como principal objetivo.
                </p>
                `
        },
        adif: {
            title: "ADIF",
            content: `
                <p>
                    Alcance económico del proyecto propuesto: 700.000, 00 euros. Año 2010.
                </p>
                <br>
                <p>
                    Auditoría de la red de alta velocidad (AVE), en los tramos de Madrid a Barcelona, con la finalidad de detectar puntos fuertes y
                    débiles así como la propuesta de un plan de mejora con producto Cisco.
                </p>
                <br>
                <p>
                    El objetivo era la unificación de diferentes redes independientes en una única basada en mpls, eran 4 redes conformadas todas ellas
                    por una variedad de equipos entre ellos alcatel, enterasys, juniper, Cisco y 3com.
                </p>
                <br>
                <p>
                    La red propuesta era una red basada en Cisco 7600 en equipos core y pe.
                </p>
                `
        },
        nexica: {
            title: "NEXICA",
            content: `
                <p>
                    Alcance del proyecto: 50.000, 00 euros (contaban con bajo presupuesto). Año 2010.
                </p>
                <br>
                <p>
                   Rediseño e implementación de su propia red.
                </p>
                <br>
                <p>
                    Rediseño e implementación de su propia red.
                </p>
                <br>
                <p>
                    El proyecto consistió en arreglar y rediseñar la topología de red existente así como proponer mejoras en seguridad y rapidez de la
                    red basándose en las aplicaciones de mpls , se entregó diseño de red propuesto añadiendo sólo un par de sw 6500 y la
                    implementación de Cisco work ampara su gestión global de red.
                </p>
                `
        },
        holcim: {
            title: "HOLCIM",
            content: `
                <p>
                    No tenemos el alcance económico puesto que nos subcontrataron una parte del total del proyecto. Año 2011.
                </p>
                <br>
                <p>
                    Implementación e instalación de Servidores de NEXUS 1000V en el Data Center principal y secundario para más de 16 host ESXi y
                    más de 60 VMs.
                </p>
                <br>
                <p>
                    El Nexus 1000v se configuró sobre una plataforma de Nexus 7000 configurando la conectividad entre Data Centers con OTV.
                </p>
                `
        }
    };

    document.getElementById('exampleModalLabel').innerText = contenidos[proyecto].title;
    document.getElementById('modalContent').innerHTML = contenidos[proyecto].content;
}
