<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>
    <!-- Seccion hero -->
    <section class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 p-4 md:p-10" id="">
        <div>
            <supertitle class="text--supertitle font-bold">Desarrollo web</supertitle>
            <h1 class="text--h2 text-3xl md:text-4xl my-3">Transformando Ideas <spam class="text--h2 text-3xl md:text-4xl mb-3 text-dark_green"> en <br>Tecnología</spam></h1>
            <div class="mb-4">
                <p class="text--p font-bold mb-3">Desarrollo de aplicaciones SaaS.</p>
                <p class="text--p font-bold mb-3">Desarrollo de WebApps</p>
                <p class="text--p font-bold mb-3">Desarrollo de aplicaciones móviles </p>
            </div>

            <p class="text--p mb-4">
            En Deskrive, no solo creamos aplicaciones; damos vida a sueños. Nuestro Product Studio es el escenario donde tu visión se convierte en una experiencia tangible. Desde el concepto inicial hasta la implementación completa, estamos comprometidos a hacer que tu idea cobre vida de manera espectacular.
            </p>
                <button class="btn btn--black font-semibold">
                    Agendar una reunión <i class="fas fa-arrow-right pl-5"></i>
                </button>
        </div>
        <div>
            <img src="<?php echo __ROOT__; ?>/public/img/labs/img_hero.png" alt="imagen" class="w-full max-w-md mx-auto hidden md:block">
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
                    <a class="border-b-2 border-transparent" href="#somosSocioSection">Tu socio tecnológico</a>
                </li>
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 focus:bg-black focus:text-white transition-all">
                    <a class="border-b-2 border-transparent" href="#porqueSection">¿Por qué Deskrive?</a>
                </li>
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 focus:bg-black focus:text-white transition-all">
                    <a class="border-b-2 border-transparent" href="#cicloDesarrolloSection">Ciclo de desarrollo</a>
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
                        <img src="<?php echo __ROOT__; ?>/public/img/labs/logo_ardysslife.png" alt="logo ardysslife" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/labs/logo_query.png" alt="logo query" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/labs/logo_seatco.png" alt="logo theseatco" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/labs/logo_flytek.png" alt="logo flytek" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/labs/logo_evergo.png" alt="logo evergo" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/labs/logo_solarever.png" alt="logo olarever" class="w-full">
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
                        <img src="<?php echo __ROOT__; ?>/public/img/labs/gestionProducto.png" alt="Gestión de Producto" class="w-full">
                        <h3 class="text--h3">Gestión de Producto</h3>
                    </div>
                    <p class="text--p">
                    Nuestro servicio de gestión de producto se centra en comprender a fondo a los usuarios de tu plataforma. Desde la identificación de los segmentos de usuarios hasta la definición del Producto Mínimo Viable (MVP) y la recopilación de información valiosa a través de versiones beta, nos aseguramos de que tu producto esté perfectamente alineado con las necesidades del mercado.
                    </p>
                    <div class="flex gap-2 flex-col lg:flex-row text--p items-center">
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Aplicaciones web</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/labs/diseñoProducto.png" alt="Diseño de Producto" class="w-full">
                        <h3 class="text--h3">Diseño de Producto</h3>
                    </div>
                    <p class="text--p">
                    Nuestro equipo de diseño se encarga de convertir tu visión en una experiencia digital impactante. Desde la planificación inicial hasta el diseño de interfaz y la creación de prototipos de aplicaciones web, nos aseguramos de que cada detalle de tu producto sea diseñado con cuidado y atención a la experiencia del usuario.
                    </p>
                    <div class="flex gap-2 flex-col lg:flex-row text--p items-center">
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">React JS</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Angular</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">JavaScript</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/labs/desarrolloProducto.png" alt="Desarrollo de Producto" class="w-full">
                        <h3 class="text--h3">Desarrollo de Producto</h3>
                    </div>
                    <p class="text--p">
                    Nos especializamos en el desarrollo de aplicaciones web y software de alta calidad. Nuestro equipo de desarrolladores trabaja en estrecha colaboración contigo para convertir tu concepto en una realidad digital funcional y escalable, garantizando un rendimiento óptimo y una experiencia fluida para los usuarios.
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
                        <img src="<?php echo __ROOT__; ?>/public/img/labs/qa's.png" alt="QA's" class="w-full">
                        <h3 class="text--h3">QA's</h3>
                    </div>
                    <p class="text--p">
                    Nuestro equipo de Control de Calidad (QA) se encarga de garantizar la calidad y fiabilidad de tu producto. Realizamos pruebas exhaustivas para identificar y corregir cualquier error o defecto, asegurando que tu aplicación cumpla con los más altos estándares de calidad antes de su lanzamiento al mercado.
                    </p>
                    <div class="flex gap-2 flex-col lg:flex-row text--p items-center">
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Digital Ocean</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">AWS</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Google Cloud</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/labs/soporteMant.png" alt="Soporte y Mantenimiento" class="w-full">
                        <h3 class="text--h3">Soporte y Mantenimiento</h3>
                    </div>
                    <p class="text--p">
                    Ofrecemos servicios de soporte y mantenimiento continuos para garantizar que tu aplicación funcione de manera óptima en todo momento. Desde actualizaciones de seguridad hasta correcciones de errores y optimizaciones de rendimiento, estamos aquí para mantener tu producto en excelente estado y satisfacer las necesidades cambiantes de tu negocio y usuarios.
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

    <!-- Seccion somosSocio -->
    <section class="max-w-7xl mx-0 xl:mx-auto py-7 px-4 my-4" id="somosSocioSection">
        <div class="flex flex-col md:grid gap-6 md:grid-cols-2">
            <header class="max-w-3xl text-center mx-auto mb-9">
                <supertitle class="text--supertitle font-bold">Trabajamos de la mano con nuestros clientes</supertitle>
                <h2 class="text--h2 mb-2">Somos tu <span class="text-dark_green">socio tecnológico</span></h2>
            </header>
            <p class="text--p px-3">
            No solo somos tu proveedor de desarrollo web, somos tu socio tecnológico. Te acompañamos en todo el proceso de desarrollo de tu producto, aprovechando nuestra experiencia para agregar valor a tu idea. Nuestro equipo de especialistas está preparado para escalar la aplicación a medida que tu negocio crece, asegurándonos de que tu producto esté siempre un paso adelante en el mercado.
            </p>
        </div>
        <main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="grid grid-cols-1 gap-4">
                <img src="<?php echo __ROOT__; ?>/public/img/labs/somosCultura.png" alt="Cultura de ingeniería" class="w-48">
                <h3 class="text--h3">Cultura de ingeniería</h3>
                <p class="text--p">
                En Deskrive, cultivamos una auténtica cultura de ingeniería enfocada en la escalabilidad fluida, el mantenimiento fácil y el rendimiento impecable de tu producto. Nuestros equipos multifuncionales cuentan con el personal necesario para desarrollar cualquier producto tecnológico para nuestros clientes.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <img src="<?php echo __ROOT__; ?>/public/img/labs/somosCentrado.png" alt="Centrado en el usuario" class="w-48">
                <h3 class="text--h3">Centrado en el usuario</h3>
                <p class="text--p">
                En Deskrive, cultivamos una auténtica cultura de ingeniería enfocada en la escalabilidad fluida, el mantenimiento fácil y el rendimiento impecable de tu producto. Nuestros equipos multifuncionales cuentan con el personal necesario para desarrollar cualquier producto tecnológico para nuestros clientes.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <img src="<?php echo __ROOT__; ?>/public/img/labs/somosGestion.png" alt="Gestión de Producto" class="w-40">
                <h3 class="text--h3">Gestión de Producto</h3>
                <p class="text--p">
                Buscamos el ajuste producto-mercado mezclando los más altos estándares de nicho con nuestros propios enfoques de gestión para centrarnos en lo que realmente importa y mantenernos flexibles ante cambios de prioridades. Desde descubrir a los clientes hasta definir un producto mínimo viable, recopilar comentarios de los usuarios y tomar decisiones basadas en datos, estamos aquí para guiar tu producto hacia el éxito.
                </p>
            </div>
        </main>
    </section>


    <!-- Seccion cuentanos idea -->
    <section class="max-w-7xl mx-0 xl:mx-auto py-7 px-4 text-white bg-black" id="cuentanosSection">
        <main class="flex flex-col md:grid gap-6 md:grid-cols-2">
            <header class="max-w-3x mx-auto mb-9">
                <supertitle class="text--supertitle font-bold mb-3">Transformando Ideas en Innovación Digital</supertitle>
                <h2 class="text--h2 mb-2">Cuéntanos tu idea, desarrollamos tu producto.</h2>
            </header>
            <p class="text--p px-3">
            Nuestros clientes llegan con una idea para un producto tecnológico que podría revolucionar su empresa o industria, nosotros estamos aquí para convertirla en una realidad. Desde el primer concepto hasta el producto finalizado, nos especializamos en transformar las ideas de los equipos de marketing, innovación, ventas o comerciales de las empresas, en aplicaciones y soluciones digitales impactantes. Nuestro equipo de expertos se encarga de todo el proceso de desarrollo, ofreciendo nuestra experiencia y valor agregado para asegurar que tu producto no solo cumpla con tus expectativas, sino que también supere las de tus usuarios. Cuéntanos tu visión para que juntos la hagamos realidad.
            </p>
        </main>
        <div class="flex items-center justify-center ">
            <div>
                <img src="<?php echo __ROOT__; ?>/public/img/labs/cuentanosIdea.png" alt="Por que?" class="w-full">
            </div>
        </div>
    </section>


    <!-- Seccion por qué -->
    <section class="max-w-7xl mx-6 xl:mx-auto py-7 px-4" id="porqueSection">
        <header class="max-w-3xl text-center mx-auto mb-9">
            <h2 class="text--h2 mb-2">¿Por qué desarrollar tu tienda en línea <span class="text-dark_green"> con Deskrive?</span></h2>
        </header>
        <main class="flex flex-col-reverse md:grid gap-6 md:grid-cols-2">
            <div class="flex items-center">
                <img src="<?php echo __ROOT__; ?>/public/img/labs/porque.png" alt="Por que?" class="w-full">
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


    <!-- Seccion de informacion sobre nosotros -->
    <section class="max-w-7xl mx-auto border-4 border-black rounded-xl my-9 py-10 md:py-20 px-7 md:px-28" id="cicloDesarrolloSection">
        <div class="splide mb-12" id="carruselInfo">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide grid grid-cols-5 gap-12">
                        <div class="col-span-5 md:col-span-3">
                            <h2 class="text--h2 mb-4">Discovery session</h2>
                            <ul class="mb-4 list-disc">
                                <li class="text--p font-bold mb-3">Gestión de producto</li>
                                <li class="text--p font-bold mb-3">Análisis de datos</li>
                                <li class="text--p font-bold mb-3">Viabilidad de producto </li>
                                <li class="text--p font-bold mb-3">Marketing y ventas </li>
                            </ul>
                            <p class="text--p">
                            En esta etapa crucial del ciclo de desarrollo de productos, nos sumergimos en la exploración y validación de la idea del producto. Para evaluar una idea de producto, garantizar su viabilidad y maximizar las posibilidades de alcanzar un ajuste producto-mercado, llevamos a cabo sesiones detalladas con el cliente. Durante estas sesiones, nuestro objetivo es obtener una estrategia clara del producto, un plan de trabajo detallado y un equipo alineado con todos los contextos relevantes. Trabajamos en estrecha colaboración para definir la visión del producto, identificar los requisitos clave y establecer un camino claro hacia el éxito del producto. Esta etapa es fundamental para establecer una base sólida que guiará todo el proceso de desarrollo del producto y garantizará que estemos enfocados en construir algo que realmente resuene con el mercado y los usuarios.
                            </p>
                        </div>
                        <div class="hidden md:block col-span-2 m-auto">
                            <img src="<?php echo __ROOT__; ?>/public/img/labs/discovery.png" alt="logo de la empresa" class="w-full max-w-56 mx-auto">
                        </div>
                    </li>
                    <li class="splide__slide grid grid-cols-5 gap-12">
                        <div class="col-span-5 md:col-span-3">
                            <h2 class="text--h2 mb-4">Prototipo y validación</h2>
                            <ul class="mb-4 list-disc">
                                <li class="text--p font-bold mb-3">Gestión de producto</li>
                                <li class="text--p font-bold mb-3">Diseño de producto</li>
                                <li class="text--p font-bold mb-3">Marketing y ventas </li>
                            </ul>
                            <p class="text--p">
                            En esta etapa, adoptamos un enfoque ágil y centrado en el usuario para crear prototipos que nos permitan validar y refinar la idea del producto.  Diseñamos maquetas interactivas y prototipos de interfaz de usuario para que podamos obtener retroalimentación de la audiencia adecuada, priorizamos las optimizaciones y mejoras necesarias para avanzar a la siguiente etapa del proceso. Esta etapa es crucial para probar conceptos, identificar áreas de mejora y validar la viabilidad de nuestra idea de producto antes de avanzar hacia el desarrollo completo.
                            </p>
                        </div>
                        <div class="hidden md:block col-span-2 m-auto">
                            <img src="<?php echo __ROOT__; ?>/public/img/labs/prototipo.png" alt="logo de la empresa" class="w-full max-w-56 mx-auto">
                        </div>
                    </li>
                    <li class="splide__slide grid grid-cols-5 gap-12">
                        <div class="col-span-5 md:col-span-3">
                            <h2 class="text--h2 mb-4">Desarrollo de producto</h2>
                            <ul class="mb-4 list-disc">
                                <li class="text--p font-bold mb-3">Gestión de producto</li>
                                <li class="text--p font-bold mb-3">Diseño de producto</li>
                                <li class="text--p font-bold mb-3">Arquitectura de software </li>
                                <li class="text--p font-bold mb-3">Desarrollo de producto </li>
                            </ul>
                            <p class="text--p">
                            Combinamos nuestras habilidades de gestión de productos con nuestra experiencia en ingeniería de desarrollo de software y desarrollo web para construir una base sólida para el futuro producto. Pensamos detenidamente en la pila tecnológica, la arquitectura y diseño para garantizar que el producto sea fácil de escalar y mantener. Nuestro equipo de desarrollo se encarga del desarrollo en código de la aplicación web, sistema o aplicación móvil, asegurando que cada elemento del producto esté diseñado y construido con una visión a largo plazo en mente. Nos esforzamos por crear una solución robusta y flexible que pueda adaptarse y evolucionar junto con las necesidades cambiantes del mercado y los usuarios.
                            </p>
                        </div>
                        <div class="hidden md:block col-span-2 m-auto">
                            <img src="<?php echo __ROOT__; ?>/public/img/labs/desarrolloProducto.png" alt="logo de la empresa" class="w-full max-w-56 mx-auto">
                        </div>
                    </li>
                    <li class="splide__slide grid grid-cols-5 gap-12">
                        <div class="col-span-5 md:col-span-3">
                            <h2 class="text--h2 mb-4">Lanzamiento de MVP</h2>
                            <ul class="mb-4 list-disc">
                                <li class="text--p font-bold mb-3">Gestión de producto</li>
                                <li class="text--p font-bold mb-3">Diseño de producto</li>
                                <li class="text--p font-bold mb-3">Desarrollo de producto </li>
                                <li class="text--p font-bold mb-3">QA’s </li>
                                <li class="text--p font-bold mb-3">Marketing y ventas </li>
                            </ul>
                            <p class="text--p">
                            El lanzamiento del Producto Mínimo Viable (MVP) es crucial en nuestro proceso de desarrollo de productos. Los MVP son necesarios para atraer a los primeros usuarios, incorporarlos y utilizar sus comentarios para pulir la solución. Nuestra estrategia de desarrollo nos permite diseñar un MVP bien equilibrado que aporte valor a los usuarios finales y cumpla con los principales objetivos del negocio. Al mismo tiempo, utilizamos una variedad de técnicas de marketing, como la investigación de clientes, encuestas, etc., para aumentar las posibilidades de que un MVP alcance un ajuste producto-mercado. Nos esforzamos por lanzar un MVP que no solo satisfaga las necesidades iniciales de los usuarios, sino que también establezca una base sólida para futuras iteraciones y mejoras.
                            </p>
                        </div>
                        <div class="hidden md:block col-span-2 m-auto">
                            <img src="<?php echo __ROOT__; ?>/public/img/labs/lanzamiento.png" alt="logo de la empresa" class="w-full max-w-56 mx-auto">
                        </div>
                    </li>
                    <li class="splide__slide grid grid-cols-5 gap-12">
                        <div class="col-span-5 md:col-span-3">
                            <h2 class="text--h2 mb-4">Escalabilidad de producto</h2>
                            <ul class="mb-4 list-disc">
                                <li class="text--p font-bold mb-3">Gestión de producto</li>
                                <li class="text--p font-bold mb-3">Diseño de producto</li>
                                <li class="text--p font-bold mb-3">Desarrollo de producto </li>
                                <li class="text--p font-bold mb-3">QA’s </li>
                                <li class="text--p font-bold mb-3">Marketing y ventas </li>
                                <li class="text--p font-bold mb-3">Soporte y mantenimiento </li>
                            </ul>
                            <p class="text--p">
                            Una vez que el MVP ha tenido éxito en cuanto a los objetivos de la empresa, seguimos trabajando por mejorar el producto, agregando nuevas funcionalidades, módulos y escalando la plataforma. Cada solicitud debe ser verificada y revisada minuciosamente. Para garantizar un crecimiento constante, nos comunicamos con nuestra audiencia de producto, seguimos métricas, realizamos investigaciones y probamos todas las ideas e hipótesis con nuestro framework de desarrollo de productos. Nos esforzamos por mantener un crecimiento sostenible, priorizando las características y mejoras que agreguen un valor significativo tanto para nuestros usuarios como para el éxito a largo plazo de nuestro producto.
                            </p>
                        </div>
                        <div class="hidden md:block col-span-2 m-auto">
                            <img src="<?php echo __ROOT__; ?>/public/img/labs/escalabilidad.png" alt="logo de la empresa" class="w-full max-w-56 mx-auto">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="splide" id="carruselThumbnailInfo">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide text--p p-1">
                    Discovery session
                    </li>
                    <li class="splide__slide text--p p-1">
                    Prototipo y validación
                    </li>
                    <li class="splide__slide text--p p-1">
                        Desarrollo de producto
                    </li>
                    <li class="splide__slide text--p p-1">
                        Lanzamiento de MVP
                    </li>
                    <li class="splide__slide text--p p-1">
                        Escalabilidad de producto
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <?php include 'components/solucionesEscalables.php'; ?>

    <?php include 'components/stackTecnologico.php'; ?>

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
                    <img src="<?php echo __ROOT__; ?>/public/img/labs/casoExito1.png" alt="logo de la empresa" class="w-9/12">
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
                    <img src="<?php echo __ROOT__; ?>/public/img/labs/casoExito2.png" alt="logo de la empresa" class="w-9/12">
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
                    <img src="<?php echo __ROOT__; ?>/public/img/labs/casoExito3.png" alt="logo de la empresa" class="w-9/12">
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
                    <img src="<?php echo __ROOT__; ?>/public/img/labs/casoExito4.png" alt="logo de la empresa" class="w-9/12">
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
                    <img src="<?php echo __ROOT__; ?>/public/img/labs/casoExito5.png" alt="logo de la empresa" class="w-full">
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
                                <img src="<?php echo __ROOT__; ?>/public/img/labs/casoExito1.png" alt="logo de la empresa" class="w-9/12">
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
                                <img src="<?php echo __ROOT__; ?>/public/img/labs/casoExito2.png" alt="logo de la empresa" class="w-9/12">
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
                                <img src="<?php echo __ROOT__; ?>/public/img/labs/casoExito3.png" alt="logo de la empresa" class="w-9/12">
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
                                <img src="<?php echo __ROOT__; ?>/public/img/labs/casoExito4.png" alt="logo de la empresa" class="w-9/12">
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
                                <img src="<?php echo __ROOT__; ?>/public/img/labs/casoExito5.png" alt="logo de la empresa" class="w-9/12">
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
        $pag="labs";
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



    var carruselInfo = new Splide('#carruselInfo', {
        arrows: false,
        pagination: false,
        type: 'loop',
        gap: '1.6rem',
        perPage: 1,
        perMove: 1,
        isNavigation: false,
        autoScroll: {
            speed: 1,
        },
    });
    var carruselThumbnailInfo = new Splide('#carruselThumbnailInfo', {
        rewind: true,
        isNavigation: true,
        focus: 'center',
        pagination: false,
        arrows: false,
        cover: true,
        perPage: 5,
        gap: '1.6rem',
        breakpoints: {
            720: {
                perPage: 3,
                gap: '1rem',
                arrows: true,
            },
            480: {
                perPage: 2,
                gap: '1rem',
                arrows: true,
            },
        },
    });

    carruselInfo.sync(carruselThumbnailInfo);
    carruselInfo.mount();
    carruselThumbnailInfo.mount();




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