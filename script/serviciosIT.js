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
        },

        ayuntBcn: {
            title: "Ayuntamiento de Barcelona",
            content: `
                <p>
                    Alcance económico desconocido puesto que nos subcontrataron una parte del total del proyecto. Año 2011
                </p>
                <br>
                <p>
                    Instalación de piloto VDI para el Ayuntamiento de Barcelona con tecnología Cisco UCS y Netapp
                </p>
                `
        },
        ayuntMadrid: {
            title: "Ayuntamiento de Madrid",
            content: `
                <p>
                    Alcance económico desconocido puesto que nos subcontrataron una parte del total del proyecto. Año 2012.
                </p>
                <br>
                <p>
                    Instalación piloto de proyecto de consolidación de CPDs, configurando un cluster de UCS con blades chasis y aplicando un nivel 2
                    con 2 Nexus 5000 en VPC.
                </p>
                `
        },
        mapfre: {
            title: "Mapfre",
            content: `
                <p>
                    Alcance económico desconocido puesto que nos subcontrataron para realizar la maqueta en base a las dudas/inquietudes que
                    tenía el cliente. Año 2012.
                </p>
                <br>
                <p>
                    Recreamos la maqueta propuesta por Cisco y Telefonica para RFP de Data Center.
                </p>
                <br>
                <p>
                    El equipo utilizado, 2 Nexus 7000 y 2 Nexus 5000 simulando cada uno un DC diferente, configurando OTV entre ambos equipos y
                    redactando las pruebas de alta disponibilidad de ISSU y comprobaciones de prevención de bucle de nivel 2.
                </p>
                `
        },
        andorraTelecom: {
            title: "Andorra Telecom",
            content: `
                <p>
                    Alcance económico aprox. del total de formación entregada: 150.000,00 euros. Año 2007-Actualidad (2 pliegos adjudicados 2010
                    y 2012).
                </p>
                <br>
                <p>
                    Desde el 2007 hasta la actualidad somos su proveedor para la entrega de formaciones oficiales y a medida de Cisco.
                </p>
                <br>
                <p>
                    Durante todos estos años les hemos formado en las diferentes tecnologías Cisco:
                </p>
                <br>
                <p>
                    Routing y Switching, MPLS, BGP, MCAST, CCNA, DATA CENTER, WIRELESS …
                </p>
                `
        },
        ciscoLatam: {
            title: "Cisco LATAM",
            content: `
                <p>
                    Año 2011-Actualidad
                </p>
                <br>
                <p>
                    Entregamos unos Test Drive de UCS para Cisco LATAM, en los que los participantes pueden tener acceso a una maqueta de Data
                    center versión 3.0 integrada Fabric Interconnect 6100, Switches nexus 2000 y 1000v y servidores de la serie B y C. interactuando
                    en un entorno de virtualización y almacenamiento.
                </p>
                <br>
                <p>
                    Países: Ecuador, Puerto Rico, Brasil, México, Colombia, Chile, Guatemala, Honduras.
                </p>
                `
        },
        schneiderEgipto: {
            title: "Schneider Egipto: Año 2021",
            content: `
            <p>
                Preparación para pruebas FAT. Los equipos involucrados en este proyecto. Firepower, Catalyst 92xx, router ISR, 2 servidores NMS
                para Cisco Prime, 1 servidor HP para Stealtwatch.
            </p>
            <br>
            <p>
                Levantamiento, creación de plantillas, configuración, validación entorno y plan de pruebas, …
            </p>
            `
        },
        hyperflexAyuntRoquetas: {
            title: "Hyperflex Ayuntamiento de Roquetas: Año 2023",
            content: `
                <p>
                    Preparar conectividad de gestión de los Nexus, CIMC de los servers, despliegue del vcenter en servidor existente, despliegue del
                    cluster HX y upgrade a última versión, más migración de 27 máquinas.
                </p>
                `
        },
        telefonicaBancaMarch: {
            title: "Bolsa de horas: Telefonica - Banca March. Año 2022-2023",
            content: `
            <p>
                Llevamos más de 2 años, aportando bolsa de hora de mantenimiento al partner para que le ofrezca servicio de nivel 2 a su cliente
                Banca March, dando soporte en la solución Cisco ISE, (Update, parches, mejoras, autenticación, …) y para la parte del Wireless lan
                Controller.
            </p>
            `
        },
        telefonicaCajamar: {
            title: "Bolsa de horas: Telefonica- Cajamar. Año 2022-Actualidad",
            content: `
                <p>
                    Bolsa de horas de soporte anual para el mantenimiento de la parte de Cisco swithicng nivel 2 de la entiedad financiera.
                    Contratación a través de un partner.
                </p>
                `
        },

        partnerPremierCisco: {
            title: "Bolsa de horas: Partner Premier de Cisco. Año 2023-Actualidad",
            content: `
                <p>
                    Bolsa de horas de soporte anual para el mantenimiento de toda la parte de soluciones de Cisco colaboración. Solución de
                    problemas: Fallo Aplication Pandorring IVR DE c1, Attendant console Hospital de Móstoles, fallo llamadas entrantes, renovación
                    de certificados Cluster, …
                </p>
                `
        },
        clienteBingoRoma: {
            title: "Partner de Cisco: Cliente Bingo ROMA año 2024",
            content: `
                <p>
                    Soporte y configuración Webex Calling y Cube.
                </p>
                `
        },
        clienteGonvarri: {
            title: "Partner de Cisco: Cliente Gonvarri año 2024",
            content: `
                <p>
                    Migración de 22 controladoras Cisco 9800-L, 9800-40, depuración de configuraciones migradas, actualización a versiones
                    recomendadas y respaldo de las configuraciones.
                </p>
                <br>
                <p>
                    Actualmente dando soporte para validar el plan de migración que hace el propio cliente.
                </p>
                `
        },
        serviciosCiscoColaboracion: {
            title: "Partner de Cisco: Servicios de Cisco Colaboración: Empresa de teleasistencia año 2024",
            content: `
                <p>
                    Servicios profesionales para la migracion de Solucion de Colaborarion (CUCM, CUIC, Gateways, Telefonos)
                </p>
                <br>
                <ul>
                    <li>
                        Traspaso de tareas del Proyecto
                    </li>
                    <li>
                        Participacion en reuniones de planificacion, acorde el proyecto
                    </li>
                    <li>
                        Tareas de coordinacion general
                    </li>
                    <li>
                        Tareas de preconfiguracion equipos nuevos
                    </li>
                    <li>
                        Pruebas de solucion nueva, antes de migracion
                    </li>
                    <li>
                        Ventanas de mantenimiento Migracion
                    </li>
                    <li>
                        Soporte de 1 semana post migracion
                    </li>
                </ul>
                `
        }
    };

    document.getElementById('exampleModalLabel').innerText = contenidos[proyecto].title;
    document.getElementById('modalContent').innerHTML = contenidos[proyecto].content;
}
