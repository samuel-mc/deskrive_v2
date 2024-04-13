<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>
    <!-- Seccion hero -->
    <section class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 p-4 md:p-10" id="">
        <div>
            <supertitle class="text--supertitle font-bold">Desarrollo web</supertitle>
            <h1 class="text--h2 text-3xl md:text-4xl my-3">Construyendo Conexiones a <br>través <spam class="text--h2 text-3xl md:text-4xl mb-3 text-dark_green"> de Aplicaciones Web <br>Innovadoras</spam></h1>
            <p class="text--p mb-4">
            ¡Bienvenido a la transformación digital! En Deskrive, no solo creamos aplicaciones web; forjamos experiencias digitales que cautivan, inspiran y transforman. Desde la concepción hasta la implementación, nuestro equipo de expertos trabaja incansablemente para convertir tus ideas en realidades digitales extraordinarias. ¿Estás listo para llevar tu negocio al siguiente nivel?
            </p>
                <button class="btn btn--black font-semibold">
                    Agendar una reunión <i class="fas fa-arrow-right pl-5"></i>
                </button>
        </div>
        <div>
            <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/img_hero.png" alt="imagen" class="w-full max-w-md mx-auto hidden md:block">
        </div>
    </section>

    <section class="sticky w-full z-20 top-0 bg-white py-2 px-4 md:px-10">
        <div class="max-w-7xl mx-auto">
            <ul id="submenu"  class="flex items-center justify-start h-full poppins-regular text-sm md:text-xl bg-light_grey rounded-full overflow-auto whitespace-nowrap">
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 transition-all">
                    <a class="border-b-2 border-transparent text-center" href="#"><i class="fas fa-arrow-up px-5"></i></a>
                </li>
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 focus:bg-black focus:text-white transition-all">
                    <a class="border-b-2 border-transparent" href="#clientesSection">Clientes</a>
                </li>
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 focus:bg-black focus:text-white transition-all">
                    <a class="border-b-2 border-transparent" href="#serviciosSection">Servicios</a>
                </li>
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 focus:bg-black focus:text-white transition-all">
                    <a class="border-b-2 border-transparent" href="#caracteristicasSection">Características</a>
                </li>
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 focus:bg-black focus:text-white transition-all">
                    <a class="border-b-2 border-transparent" href="#porqueSection">¿Por qué Deskrive?</a>
                </li>
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 focus:bg-black focus:text-white transition-all">
                    <a class="border-b-2 border-transparent" href="#procesoSection">Proceso de desarrollo</a>
                </li>
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 focus:bg-black focus:text-white transition-all">
                    <a class="border-b-2 border-transparent" href="#solucionesEscalablesSection">Soluciones escalables</a>
                </li>
            </ul>
        </div>
    </section>

    <!-- Seccion nuestros clientes -->
    <section class="max-w-7xl mx-auto p-4 md:p-10" id="clientesSection">
        <div class="text-center">
            <supertitle class="text--supertitle font-bold">Nuestros clientes</supertitle>
            <h1 class="text--h2 text-3xl md:text-4xl my-3">Clientes que <span class="text-dark_green"> Triunfan en la Web</span></h1>
        </div>
        <div id="carouselClientes" class="splide">
            <div class="splide__track">
                <ul class="splide__list flex justify-center">
                <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/logo_ardysslife.png" alt="logo ardysslife" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/logo_query.png" alt="logo query" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/logo_seatco.png" alt="logo theseatco" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/logo_flytek.png" alt="logo flytek" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/logo_evergo.png" alt="logo evergo" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/logo_solarever.png" alt="logo olarever" class="w-full">
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Seccion servicios -->
    <section class="bg-light_grey" id="serviciosSection">
        <div class="max-w-7xl mx-auto py-10 px-4">
            <header class="max-w-3xl text-center mx-auto mb-9">
                <h2 class="text--h2">Servicios</h2>
            </header>
            <main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/aplicacionesweb.png" alt="aplicaciones web" class="w-full">
                        <h3 class="text--h3">Aplicaciones web / Web Apps</h3>
                    </div>
                    <p class="text--p">
                    Creamos aplicaciones web personalizadas que se adaptan a las necesidades únicas de tu negocio. Con un enfoque en la usabilidad, la escalabilidad y la seguridad, nuestras aplicaciones web ofrecen una experiencia de usuario excepcional en todos los dispositivos.
                    </p>
                    <div class="flex gap-2 flex-col lg:flex-row text--p items-center">
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Aplicaciones web</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/frontend.png" alt="frontend" class="w-full">
                        <h3 class="text--h3">Front-end development</h3>
                    </div>
                    <p class="text--p">
                    Nuestro equipo de desarrolladores front-end transforma diseños creativos en experiencias interactivas para tus usuarios. Utilizando las últimas tecnologías y prácticas de desarrollo, creamos interfaces de usuario intuitivas y receptivas que destacan la identidad de tu marca y optimizan la participación del usuario.
                    </p>
                    <div class="flex gap-2 flex-col lg:flex-row text--p items-center">
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">React JS</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Angular</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">JavaScript</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/backend.png" alt="backend" class="w-full">
                        <h3 class="text--h3">Back-end development</h3>
                    </div>
                    <p class="text--p">
                    Cada aplicación web contiene un sólido sistema de back-end que garantiza un funcionamiento fluido y seguro. Desde la gestión de bases de datos hasta la lógica de negocio, nuestros desarrolladores back-end construyen la infraestructura necesaria para respaldar tus aplicaciones web y garantizar su rendimiento óptimo en todo momento.
                    </p>
                    <div class="flex gap-2 flex-col xl:flex-row text--p items-center  whitespace-nowrap">
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">PHP</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">-net</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">NodeJS</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Laravel</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/cloud.png" alt="cloud" class="w-full">
                        <h3 class="text--h3">Cloud development</h3>
                    </div>
                    <p class="text--p">
                    Aprovecha el poder y la flexibilidad de la computación en la nube con nuestras soluciones de desarrollo cloud. Desde la migración de aplicaciones existentes hasta el desarrollo de nuevas aplicaciones nativas de la nube, ayudamos a tu negocio a aprovechar al máximo los servicios en la nube.
                    </p>
                    <div class="flex gap-2 flex-col lg:flex-row text--p items-center">
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Digital Ocean</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">AWS</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Google Cloud</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/react.png" alt="react" class="w-full">
                        <h3 class="text--h3">React native hybrid app</h3>
                    </div>
                    <p class="text--p">
                    Llevamos tus ideas más allá de las aplicaciones web y las llevamos a dispositivos móviles iOS y Android con una sola base de código. Desarrollamos aplicaciones híbridas con un rendimiento excepcional y una experiencia de usuario nativa, permitiéndote llegar a una audiencia más amplia sin comprometer la calidad o la funcionalidad.
                    </p>
                    <div class="flex gap-2 flex-col lg:flex-row text--p items-center">
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">React Native</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">IOS</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Android</span>
                    </div>
                </div>
            </main>
        </div>
    </section>



    <!-- Seccion caracteristicas -->
    <section class="max-w-7xl mx-6 xl:mx-auto bg-light_green py-7 px-4 text-white" id="caracteristicasSection">
        <header class="max-w-3xl text-center mx-auto mb-9">
            <supertitle class="text--supertitle font-bold">Características del servicio</supertitle>
            <h2 class="text--h2 my-3">Innovación en Cada Línea de Código</h2>
        </header>
        <main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between gap-4">
                    <div>
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/escalables.png" alt="Proyectos escalables" class="w-24">
                    </div>
                    <h4 class="text--h4 font-bold">Proyectos escalables.</h4>
                </div>
                <p class="text--p">
                Nuestras soluciones de desarrollo web están diseñadas para crecer con tu negocio. Implementamos una arquitectura flexible y modular que permite que tu aplicación crezca y se adapte según las necesidades cambiantes del negocio.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between gap-4">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/propiedad.png" alt="Propiedad de código" class="w-32">
                    <h4 class="text--h4 font-bold">Propiedad de código</h4>
                </div>
                <p class="text--p">
                Con un desarrollo en código puro garantizamos que el cliente sea dueño completo del código y producto final. Esto significa que tienes el control total sobre tu proyecto, desde su desarrollo hasta su implementación sin restricciones ni limitaciones.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between gap-4">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/centradoUsuario.png" alt="Diseño centrado en usuario" class="w-32">
                    <h4 class="text--h4 font-bold">Diseño centrado en usuario</h4>
                </div>
                <p class="text--p">
                Nuestro enfoque de diseño centrado en el usuario se basa en la comprensión profunda de tus clientes y sus necesidades. Creamos interfaces intuitivas y experiencias de usuario excepcionales.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/medida.png" alt="Desarrollo a la medida" class="w-32">
                    <h4 class="text--h4 font-bold">Desarrollo a la medida</h4>
                </div>
                <p class="text--p">
                Cada proyecto es único, y nuestro enfoque de desarrollo a medida garantiza que cada aspecto de tu aplicación web se adapte perfectamente a tus requisitos específicos y objetivos comerciales. Desde la funcionalidad hasta la estética, cada línea de código está personalizada para ti.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/responsivo.png" alt="Desarrollo responsivo" class="w-24">
                    <h4 class="text--h4 font-bold">Desarrollo responsivo</h4>
                </div>
                <p class="text--p">
                Desarrollamos aplicaciones web que se ven y funcionan perfectamente en todos los dispositivos y tamaños de pantalla. Utilizando técnicas de diseño responsivo, garantizamos una experiencia de usuario consistente y de alta calidad.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/modular.png" alt="Desarrollo modular" class="w-32">
                    <h4 class="text--h4 font-bold">Desarrollo modular</h4>
                </div>
                <p class="text--p">
                Construimos tu aplicación web en bloques independientes y reutilizables llamados módulos. Esta aproximación no solo acelera el proceso de desarrollo, sino que también facilita futuras actualizaciones y expansiones, garantizando una flexibilidad y mantenimiento óptimos a lo largo del tiempo.
                </p>
            </div>
        </main>
    </section>


    <!-- Seccion por qué -->
    <section class="max-w-7xl mx-6 xl:mx-auto py-7 px-4" id="porqueSection">
        <header class="max-w-3xl text-center mx-auto mb-9">
            <h2 class="text--h2 mb-2">¿Por qué desarrollar tu tienda en línea <span class="text-dark_green"> con Deskrive?</span></h2>
        </header>
        <main class="flex flex-col-reverse md:grid gap-6 md:grid-cols-2">
            <div class="flex items-center">
                <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/porque.png" alt="Por que?" class="w-full">
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-4">
                    <hr class="h-px bg-gray-700 border-0">
                    <h3 class="text--h3 font-bold px-3">Más que programadores somos desarrolladores.</h3>
                    <p class="text--p px-3">
                    En Deskrive, no solo somos expertos en escribir código; somos desarrolladores de aplicaciones web apasionados por crear soluciones digitales excepcionales. Nos enfocamos en el desarrollo integral de aplicaciones web, desde la concepción inicial hasta la implementación final, garantizando resultados de calidad.
                    </p>
                </div>
                <div class="flex flex-col gap-4">
                    <hr class="h-px bg-gray-700 border-0">
                    <h3 class="text--h3 font-bold px-3">Equipo altamente especializado.</h3>
                    <p class="text--p px-3">
                    Contamos con un equipo altamente especializado compuesto por expertos en diversas áreas clave del desarrollo web. Desde diseñadores web y especialistas en experiencia de usuario (UX) y diseño de interfaces de usuario (UI), hasta desarrolladores front-end y back-end, nuestro equipo posee la combinación perfecta de habilidades y experiencia para hacer realidad cualquier visión digital.
                    </p>
                </div>
                <div class="flex flex-col gap-4">
                    <hr class="h-px bg-gray-700 border-0">
                    <h3 class="text--h3 font-bold px-3">Cultura de cooperación.</h3>
                    <p class="text--p px-3">
                    En Deskrive, creemos en la colaboración y el trabajo en equipo como pilares fundamentales de nuestro proceso de desarrollo. Fomentamos una cultura de cooperación donde cada miembro del equipo aporta sus conocimientos y perspectivas únicas para ofrecer soluciones integrales y creativas que superen las expectativas de nuestros clientes. Trabajamos de la mano con nuestros clientes para crear un producto perfecto.
                    </p>
                </div>
                <div class="flex flex-col gap-4">
                    <hr class="h-px bg-gray-700 border-0">
                    <h3 class="text--h3 font-bold px-3">Proceso simplificado.</h3>
                    <p class="text--p px-3">
                    Nuestro enfoque se centra en simplificar el proceso de desarrollo web para nuestros clientes, eliminando el estrés y la complejidad innecesaria. Desde la planificación inicial hasta la entrega final, seguimos un proceso simplificado y transparente que garantiza una comunicación clara, plazos cumplidos y resultados excepcionales en cada etapa del proyecto.
                    </p>
                </div>
            </div>
        </main>
    </section>

    <?php include 'components/hablemosProyecto.php'; ?>

    
    <section class="max-w-7xl mx-auto my-4 bg-black py-10 px-4" id="procesoSection">
        <h2 class="text--h2 text-white text-center mb-10">Proceso de trabajo</h2>
        <div class="max-w-4xl mx-auto mb-10">
            <h3 class="text--h3 text-white text-center mb-5 animated fadeIn" id="titleProceso">Kick-Off</h3>
            <p class="text--p text-white animated fadeIn" id="descriptionProceso">El equipo asignado por Deskrive para el desarrollo de la aplicación web, se encarga de la planificación de todo el proyecto, se monta el proyecto en el Deskrive Framework para planificar todos los módulos que requerirá la aplicación web y la arquitectura de la misma.</p>
        </div>
        <div class="relative">
            <div class="contenedor-linea"></div>
            <div class="flex justify-between relative">
                <div class="proceso__item proceso--active proceso__item--first" id="kickOff">
                    <p class="text-base">Discovery session</p>
                    <button class="btn--proceso" onclick="setProcesoDeTrabajo('kickOff')"></button>
                    <span></span>
                </div>
                <div class="proceso__item" id="wireframe">
                    <span></span>
                    <button class="btn--proceso" onclick="setProcesoDeTrabajo('wireframe')"></button>
                    <p class="text-base">Wireframe</p>
                </div>
                <div class="proceso__item" id="planeacion">
                    <p class="text-base">Diseño de interfaz</p>
                    <button class="btn--proceso" onclick="setProcesoDeTrabajo('planeacion')"></button>
                    <span></span>
                </div>
                <div class="proceso__item" id="diseno">
                    <span></span>
                    <button class="btn--proceso" onclick="setProcesoDeTrabajo('diseno')"></button>
                    <p class="text-base">Prototipado</p>
                </div>
                <div class="proceso__item" id="desarrollo">
                    <p class="text-base">Desarrollo front-end</p>
                    <button class="btn--proceso" onclick="setProcesoDeTrabajo('desarrollo')"></button>
                    <span></span>
                </div>
                <div class="proceso__item" id="qa">
                    <span></span>
                    <button class="btn--proceso" onclick="setProcesoDeTrabajo('qa')"></button>
                    <p class="text-base">Desarrollo back-end</p>
                </div>
                <div class="proceso__item" id="lanzamiento">
                    <p class="text-base">Lanzamiento</p>
                    <button class="btn--proceso" onclick="setProcesoDeTrabajo('lanzamiento')"></button>
                    <span></span>
                </div>
                <div class="proceso__item proceso__item--last" id="mantenimiento">
                    <span></span>
                    <button class="btn--proceso" onclick="setProcesoDeTrabajo('mantenimiento')"></button>
                    <p class="text-base">Mantenimiento y soporte</p>
                </div>
            </div>
        </div>
    </section>


    <?php include 'components/solucionesEscalables.php'; ?>


    <?php include 'components/industrias.php'; ?>




    <!-- Casos de exito -->
    <section class="max-w-7xl mx-auto py-6 px-2" id="casosExitoSection">
        <header class="max-w-3xl text-center mx-auto mb-9">
            <supertitle class="text--supertitle">Casos de éxito</supertitle>
            <h2 class="text--h2 mb-3">Deskrive en acción</h2>
            <p class="text--p">Descubre cómo nuestras soluciones web han transformado empresas en historias de éxito inspiradoras. Prepárate para ser inspirado por nuestros logros reales</p>
        </header>
        <!-- Cartas que se muestra en la version desktop -->
        <main class="grid grid-cols-3 gap-6 hidden md:grid">
            <div class="rounded-xl" style="background-color: #EEFFDB;">
                <div class="p-6">
                    <h3 class="text--h3">Ardysslife</h3>
                    <p class="text--p">
                    Ardysslife es una empresa de multinivel estadounidense. Desarrollamos una aplicación web y de eCommerce ayudando a incrementar sus ventas en línea y ofrecer una mejor experiencia de compra a sus clientes.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/casoExito1.png" alt="logo de la empresa" class="w-9/12">
                </div>
            </div>
            <div class="rounded-xl" style="background-color: #FFE0D8;">
                <div class="p-6">
                    <h3 class="text--h3">The SeatCo</h3>
                    <p class="text--p">
                    The SeatCo es una empresa estadounidense de venta de productos para restaurantes y empresas de eventos. Desarrollamos una plataforma a la medida como herramienta para que los usuarios puedan cotizar.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/casoExito2.png" alt="logo de la empresa" class="w-9/12">
                </div>
            </div>
            <div class="rounded-xl" style="background-color: #C5C5C5;">
                <div class="p-6">
                    <h3 class="text--h3">Grupo Orraca</h3>
                    <p class="text--p">
                    Grupo Orraca es un grupo con varios restaurantes en México y Estados Unidos, desarrollamos el sitio web del grupo y de los restaurantes, los clientes pueden reservar en línea.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/casoExito3.png" alt="logo de la empresa" class="w-9/12">
                </div>
            </div>
            <div class="rounded-xl" style="background-color: #C3D9FF;">
                <div class="p-6">
                    <h3 class="text--h3">Tecnika</h3>
                    <p class="text--p">
                    Tecnika es una empresa de servicios tecnológicos con presencia en todo el país, desarrollamos un nuevo sitio web en Wordpress para promocionar sus servicios en línea.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/casoExito4.png" alt="logo de la empresa" class="w-9/12">
                </div>
            </div>
            <div class="rounded-xl col-span-2 flex" style="background-color: #FFD0B4;">
                <div class="p-6">
                    <h3 class="text--h3">Query</h3>
                    <p class="text--p">
                    Desarrollamos una aplicación web para Query, una empresa que por medio de su producto, conecta empresas que buscan desarrolladores, una especie de Indeed para el entorno de programadores.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/casoExito5.png" alt="logo de la empresa" class="w-full">
                </div>
            </div>
        </main>

        <!-- Carrusel que se muestra en la version mobile -->
        <div class="splide block md:hidden" id="carruselCasos">
            <div class="splide__track">
                <div class="splide__list">
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #EEFFDB;">
                            <div class="p-6">
                                <h3 class="text--h3">Ardysslife</h3>
                                <p class="text--p">
                                Ardysslife es una empresa de multinivel estadounidense. Desarrollamos una aplicación web y de eCommerce ayudando a incrementar sus ventas en línea y ofrecer una mejor experiencia de compra a sus clientes.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/casoExito1.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #FFE0D8;">
                            <div class="p-6">
                                <h3 class="text--h3">The SeatCo</h3>
                                <p class="text--p">
                                The SeatCo es una empresa estadounidense de venta de productos para restaurantes y empresas de eventos. Desarrollamos una plataforma a la medida como herramienta para que los usuarios puedan cotizar.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/casoExito2.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #C5C5C5;">
                            <div class="p-6">
                                <h3 class="text--h3">Grupo Orraca</h3>
                                <p class="text--p">
                                Grupo Orraca es un grupo con varios restaurantes en México y Estados Unidos, desarrollamos el sitio web del grupo y de los restaurantes, los clientes pueden reservar en línea.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/casoExito3.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #C3D9FF;">
                            <div class="p-6">
                                <h3 class="text--h3">Tecnika</h3>
                                <p class="text--p">
                                Tecnika es una empresa de servicios tecnológicos con presencia en todo el país, desarrollamos un nuevo sitio web en Wordpress para promocionar sus servicios en línea.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/casoExito4.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #FFD0B4;">
                            <div class="p-6">
                                <h3 class="text--h3">Query</h3>
                                <p class="text--p">
                                Desarrollamos una aplicación web para Query, una empresa que por medio de su producto, conecta empresas que buscan desarrolladores, una especie de Indeed para el entorno de programadores.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/servicioWebDevelop/casoExito5.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                            
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>


    <?php include 'components/obtenUnaAsesoria.php'; ?>
    <?php include 'components/bannerDisenoTiempoReal.php'; ?>
    <?php include 'components/bannerMantenimiento.php'; ?>
    <?php 
        $pag="serviciosWebDevelop";
        include 'components/preguntasFrec.php'; ?>

</main>

<script src="<?php echo __ROOT__; ?>/public/js/splide/dist/js/splide.min.js"></script>
<script>

    
    var carouselClientes = new Splide('#carouselClientes', {
        fixedWidth: 170,
        fixedHeight: 70,
        arrows: false,
        pagination: false,
        gap: '1.6rem',
        perPage: 10,
        isNavigation: false,
        autoScroll: {
            speed: 1,
        },
        breakpoints: {
            1024: {
                perPage: 5,
                perMove: 1,
                type: 'loop',
                focus: 'center',
            },
            768: {
                perPage: 4,
                perMove: 1,
                type: 'loop',
                focus: 'center',
            },
        },
    });
    carouselClientes.mount();


    var carruselCasos = new Splide('#carruselCasos', {
        arrows: false,
        type: 'loop',
        gap: '1.6rem',
        perPage: 1,
        perMove: 1,
        isNavigation: false,
        autoScroll: {
            speed: 1,
        },
    });
    carruselCasos.mount();


    document.addEventListener("DOMContentLoaded", function() {

        var links = document.querySelectorAll("#submenu li");
        console.log(links);
        links.forEach(function(link) {
            link.addEventListener("click", function(event) {
                // Remueve las clases de los enlaces no seleccionados
                links.forEach(function(link) {
                    link.classList.remove("bg-black", "text-white");
                });
                // Agrega las clases al enlace seleccionado
                link.classList.add("bg-black","text-white");
            });
        });


        var menuItems = document.querySelectorAll(".menu-item");
        var sections = document.querySelectorAll("section");
        window.addEventListener("scroll", function() {
            var currentSection = "";

            //SELECIONAR SECCION EN PANTALLA ACTUALMENTE
            sections.forEach(function(section) {
                var sectionTop = section.offsetTop;
                var sectionHeight = section.clientHeight;
                if (window.pageYOffset >= sectionTop - sectionHeight / 3) {
                    currentSection = section.getAttribute("id");
                }
            });

            //SELECIONAR OPCION DEL MENU DE LA SECCION
            menuItems.forEach(function(item) {
                link = item.querySelector("a");

                item.classList.remove("bg-black", "text-white");
                if (link.getAttribute("href").slice(1) === currentSection) {
                    item.classList.add("bg-black","text-white");
                }
            });
        });
    });

</script>

<?php include 'partials/footer.php'; ?>