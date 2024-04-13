<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <!-- Seccion hero -->
    <section class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 p-4 md:p-10" id="">
        <div>
            <supertitle class="text--supertitle font-bold">Deskrive Care</supertitle>
            <h1 class="text--h2 text-3xl md:text-4xl my-3">Mantenimiento y soporte<spam class="text--h2 text-3xl md:text-4xl mb-3 text-dark_green"> <br>  para tus proyectos web</spam></h1>

            <p class="text--p mb-4">
            ¡Tu sitio web siempre en buenas manos! Con nuestro equipo experto y dedicado, cuidamos de todos los aspectos técnicos para que puedas enfocarte en lo que realmente importa: hacer crecer tu negocio. Desde actualizaciones de seguridad hasta soporte 24/7. Deja que Deskrive cuide de tu presencia en línea mientras tú te concentras en conquistar el negocio virtual.
            </p>
                <button class="btn btn--black font-semibold">
                    Agendar una reunión <i class="fas fa-arrow-right pl-5"></i>
                </button>
        </div>
        <div>
            <img src="<?php echo __ROOT__; ?>/public/img/care/img_hero.png" alt="imagen" class="w-full max-w-md mx-auto hidden md:block">
        </div>
    </section>

    <section class="sticky w-full z-20 top-0 bg-white py-2 px-4 md:px-10">
        <div class="max-w-7xl mx-auto">
            <ul id="submenu"  class="flex items-center justify-start h-full poppins-regular text-sm md:text-xl bg-light_grey rounded-full overflow-auto whitespace-nowrap">
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 transition-all">
                    <a class="border-b-2 border-transparent text-center" href="#"><i class="fas fa-arrow-up px-5"></i></a>
                </li>
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 focus:bg-black focus:text-white transition-all">
                    <a class="border-b-2 border-transparent" href="#mantenimientoSection">Mantenimiento integral</a>
                </li>
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 focus:bg-black focus:text-white transition-all">
                    <a class="border-b-2 border-transparent" href="#comoFuncionaSection">¿Cómo funciona?</a>
                </li>
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 focus:bg-black focus:text-white transition-all">
                    <a class="border-b-2 border-transparent" href="#porqueSection">¿Por qué Deskrive?</a>
                </li>
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 focus:bg-black focus:text-white transition-all">
                    <a class="border-b-2 border-transparent" href="#plataformasSection">Plataformas que damos servicio</a>
                </li>
            </ul>
        </div>
    </section>


    <!-- Seccion mantenimiento -->
    <section class="max-w-7xl mx-6 xl:mx-auto py-7 px-4 bg-light_grey" id="mantenimientoSection">
        <header class="max-w-3xl mb-9">
            <h2 class="text--h2 mb-2">Mantenimiento web integral</h2>
        </header>
        <main class="flex flex-col-reverse md:grid gap-6 md:grid-cols-2">
            <div class="flex items-center">
                <img src="<?php echo __ROOT__; ?>/public/img/care/mantenimiento.png" alt="Por que?" class="w-full">
            </div>

            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white text-black rounded-t-lg px-4 pt-3" data-inactive-classes="text-black">
                <h2 id="accordion-flush-heading-1">
                    <button type="button" class="flex items-center justify-between w-full py-5 pl-4 gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                        <div class="">
                            <i class="fa-solid fa-circle fa-xl pr-2" style="color: #B0B0B0;"></i>
                            <span class="font-bold">Actualizaciones y Parches de Seguridad</span>
                        </div>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-1" class="hidden bg-white px-4 pb-3 rounded-b-lg" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 pl-5">
                        <p class="mb-2">
                        Garantiza que tu plataforma esté siempre protegida contra amenazas digitales. Nuestro equipo experto aplica de manera proactiva los últimos parches y mejoras de seguridad, fortaleciendo las defensas de tu sitio y asegurando una presencia en línea segura para tu negocio.
                        </p>
                    </div>
                </div>

                <h2 id="accordion-flush-heading-2">
                   <button type="button" class="flex items-center justify-between w-full py-5 pl-4 gap-3" data-accordion-target="#accordion-flush-body-2" aria-expanded="true" aria-controls="accordion-flush-body-2">
                        <div class="">
                            <i class="fa-solid fa-circle fa-xl pr-2" style="color: #B0B0B0;"></i>
                            <span class="font-bold">Optimización de Rendimiento</span>
                        </div>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-2" class="hidden bg-white px-4 pb-3 rounded-b-lg" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 pl-5">
                        <p class="mb-2">
                        Analizamos y optimizamos diversos elementos clave, como los tiempos de carga de página, los mecanismos de almacenamiento en caché y la eficiencia del código, para potenciar la velocidad y la capacidad de respuesta de tu sitio. Experimenta páginas que se cargan más rápido, tasas de rebote reducidas y una mayor satisfacción del usuario, lo que se traduce en mejores clasificaciones en los motores de búsqueda y un aumento en las conversiones.
                        </p>
                    </div>
                </div>

                <h2 id="accordion-flush-heading-3">
                   <button type="button" class="flex items-center justify-between w-full py-5 pl-4 gap-3" data-accordion-target="#accordion-flush-body-3" aria-expanded="true" aria-controls="accordion-flush-body-3">
                        <div class="">
                            <i class="fa-solid fa-circle fa-xl pr-2" style="color: #B0B0B0;"></i>
                            <span class="font-bold">Actualización de Contenido</span>
                        </div>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-3" class="hidden bg-white px-4 pb-3 rounded-b-lg" aria-labelledby="accordion-flush-heading-3">
                    <div class="py-5 pl-5">
                        <p class="mb-2">
                        En Deskrive, entendemos que la actualización constante del contenido es esencial para mantener relevancia y atraer a su audiencia. Nuestro servicio de Gestión de Contenidos está diseñado para brindarle la flexibilidad y agilidad necesarias sin preocuparse por el aspecto gráfico.
                        </p>
                    </div>
                </div>

                <h2 id="accordion-flush-heading-4">
                   <button type="button" class="flex items-center justify-between w-full py-5 pl-4 gap-3" data-accordion-target="#accordion-flush-body-4" aria-expanded="true" aria-controls="accordion-flush-body-4">
                        <div class="">
                            <i class="fa-solid fa-circle fa-xl pr-2" style="color: #B0B0B0;"></i>
                            <span class="font-bold">Actualización de Diseño</span>
                        </div>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-4" class="hidden bg-white px-4 pb-3 rounded-b-lg" aria-labelledby="accordion-flush-heading-4">
                    <div class="py-5 pl-5">
                        <p class="mb-2">
                        En Deskrive, nos encargamos de mantener tu sitio web actualizado y a la vanguardia con nuestro servicio de Actualización de Diseño. Nuestro equipo experto se asegura de que tu sitio no solo se vea increíble, sino que también esté al día con las últimas tendencias en diseño web. Desde la renovación de la interfaz de usuario hasta la optimización de la experiencia del usuario, trabajamos para asegurarnos de que tu sitio siempre destaque entre la competencia.
                        </p>
                    </div>
                </div>

                <h2 id="accordion-flush-heading-5">
                   <button type="button" class="flex items-center justify-between w-full py-5 pl-4 gap-3" data-accordion-target="#accordion-flush-body-5" aria-expanded="true" aria-controls="accordion-flush-body-2">
                        <div class="">
                            <i class="fa-solid fa-circle fa-xl pr-2" style="color: #B0B0B0;"></i>
                            <span class="font-bold">Respaldo y Recuperación de Respaldos</span>
                        </div>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-5" class="hidden bg-white px-4 pb-3 rounded-b-lg" aria-labelledby="accordion-flush-heading-5">
                    <div class="py-5 pl-5">
                        <p class="mb-2">
                        Nuestro servicio de Copias de Seguridad está diseñado para ofrecerle tranquilidad y seguridad, garantizando la disponibilidad y protección de sus datos. En caso de perdida o hackeo del sitio web, contamos con copias de seguridad para restablecer el mismo.
                        </p>
                    </div>
                </div>

                <h2 id="accordion-flush-heading-6">
                   <button type="button" class="flex items-center justify-between w-full py-5 pl-4 gap-3" data-accordion-target="#accordion-flush-body-6" aria-expanded="true" aria-controls="accordion-flush-body-6">
                        <div class="">
                            <i class="fa-solid fa-circle fa-xl pr-2" style="color: #B0B0B0;"></i>
                            <span class="font-bold">Soporte de Emergencia</span>
                        </div>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-6" class="hidden bg-white px-4 pb-3 rounded-b-lg" aria-labelledby="accordion-flush-heading-6">
                    <div class="py-5 pl-5">
                        <p class="mb-2">
                        Ofrecemos asistencia prioritaria y rápida para problemas críticos que puedan surgir en tu sitio web. Nuestro equipo dedicado está disponible para abordar rápidamente cualquier problema urgente que pueda surgir. Ya sea una caída del sitio web, una violación de seguridad o un fallo de funcionalidad, brindamos un soporte rápido y confiable para que tu sitio vuelva a funcionar sin problemas.
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </section>


    <!-- Seccion como funciona -->
    <section class="max-w-7xl mx-0 xl:mx-auto py-7 px-4 my-4 bg-black text-white" id="comoFuncionaSection">
        <header class="max-w-3xl mb-9 w-full lg:w-1/2 p-4">
            <h2 class="text--h2 mb-2">¿Cómo funciona?</h2>
            <p class="text--p px-3">
                ¡Mantener tu sitio web al día nunca ha sido tan fácil! Con Deskrive Care, tenemos tres formas geniales de hacerlo: Paga por Uso, Horas de Retención o un equipo de desarrolladores dedicados. Tú eliges cómo quieres mantener tu sitio brillando en la web. ¡Nosotros nos encargamos del resto!
                </p>
        </header>
        <main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <img src="<?php echo __ROOT__; ?>/public/img/care/icon_ppe.png" alt="Pago por evento">
                </div>
                <h3 class="text--h3">Pago por evento</h3>
                <p class="text--p">
                ¿Tienes un sitio web pequeño y solo necesitas actualizaciones de vez en cuando? ¡Esta opción es para ti! Paga por las actualizaciones y servicios de monitoreo a medida que los necesites. Solo tienes que pedirnos lo que necesitas y ¡nosotros nos encargamos!
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <img src="<?php echo __ROOT__; ?>/public/img/care/icon_horas.png" alt="Horas de trabajo">
                </div>
                <h3 class="text--h3">Horas de trabajo</h3>
                <p class="text--p">
                ¿Necesitas ayuda rápida cuando surgen problemas inesperados? Con las horas de retención, pagas por un número fijo de horas de desarrollo cada mes. Úsalas como quieras para diferentes tareas según tus necesidades inmediatas. Ideal para sitios web en desarrollo activo donde se requiere un proceso de trabajo ágil.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <img src="<?php echo __ROOT__; ?>/public/img/care/icon_desarrollador.png" alt="Desarrollador dedicado">
                </div>
                <h3 class="text--h3">Desarrollador dedicado</h3>
                <p class="text--p">
                ¿Quieres tener a un desarrollador experto a tu disposición en todo momento? Con nuestro servicio de desarrollador dedicado, tendrás a un profesional experimentado listo para trabajar en tus necesidades de mantenimiento de sitio web de inmediato. ¡Esto significa tiempos de respuesta más rápidos y un sitio web siempre actualizado y funcionando sin problemas!
                </p>
            </div>
        </main>
    </section>


    <!-- Seccion porque nosotros -->
    <section class="max-w-7xl mx-0 xl:mx-auto py-7 px-4 my-4 bg-light_grey" id="porqueSection">
        <header class="max-w-3xl mb-9 w-full lg:w-1/2 p-4">
            <h2 class="text--h2 mb-2">¿Por qué nosotros?</h2>
            <p class="text--p px-3">
            Ofrecemos una combinación única de experiencia, capacidad técnica, comunicación fluida y un compromiso inquebrantable con la satisfacción del cliente. Con más de una década de experiencia en la industria y una amplia gama de proyectos exitosos a nivel global, somos tu socio ideal para cualquier desafío tecnológico.
            </p>
        </header>
        <main class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4">
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <img src="<?php echo __ROOT__; ?>/public/img/care/icon_experiencia.png" alt="Experiencia">
                </div>
                <h3 class="text--h3">Experiencia</h3>
                <p class="text--p">
                Con más de una década de trayectoria en la industria y la realización exitosa de casi 200 proyectos tecnológicos a nivel global, nuestra experiencia habla por sí misma. 
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <img src="<?php echo __ROOT__; ?>/public/img/care/icon_capacidad.png" alt="Capacidad Técnica">
                </div>
                <h3 class="text--h3">Capacidad Técnica</h3>
                <p class="text--p">
                En Deskrive, reunimos a un equipo diverso y altamente especializado en todas las áreas del desarrollo web. Desde talentosos desarrolladores front-end y back-end hasta creativos diseñadores UX/UI y arquitectos de software, contamos con el personal técnico adecuado para brindar soporte y mantenimiento a tu sitio web.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <img src="<?php echo __ROOT__; ?>/public/img/care/icon_comunicacion.png" alt="Comunicación fluida">
                </div>
                <h3 class="text--h3">Comunicación fluida</h3>
                <p class="text--p">
                Valoramos tu opinión y te involucramos activamente en la toma de decisiones. Nos aseguramos de que tu visión y objetivos estén alineados con nuestras estrategias de desarrollo. Con una comunicación abierta y un enfoque colaborativo, creamos un entorno de trabajo productivo y eficiente que garantiza resultados excepcionales.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <img src="<?php echo __ROOT__; ?>/public/img/care/icon_atencion.png" alt="Soporte y atención al cliente">
                </div>
                <h3 class="text--h3">Soporte y atención al cliente</h3>
                <p class="text--p">
                Estamos disponibles para atender cualquier consulta, brindar orientación técnica y ofrecer soluciones rápidas a cualquier problema que surja. Puedes contar con nuestro apoyo en cada paso del camino. Nos esforzamos por superar tus expectativas mediante una atención personalizada y un enfoque centrado en el cliente que garantiza tu satisfacción total.
                </p>
            </div>
        </main>
    </section>


    <!-- Seccion damosSoporte -->
    <section class="max-w-7xl mx-0 xl:mx-auto py-7 px-4 my-4" id="plataformasSection">
        <header class="max-w-3xl mb-9 w-full lg:w-1/2 p-4 text-center mx-auto">
            <h2 class="text--h2 mb-2">Plataformas a las que damos soporte</h2>
            <p class="text--p px-3">
            Ofrecemos servicios integrales de mantenimiento y soporte de sitios web, aplicaciones web, sistemas eCommerce y soluciones web desarrolladas a la medida.
            </p>
        </header>
        <main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
            <div class="flex flex-col gap-2">
                <div>
                    <i class="fa-solid fa-circle-check mr-2"></i><span>Sitios web estáticos</span>
                </div>
                <div>
                    <i class="fa-solid fa-circle-check mr-2"></i><span>WordPress</span>
                </div>
                <div>
                    <i class="fa-solid fa-circle-check mr-2"></i><span>Shopify</span>
                </div>
                <div>
                    <i class="fa-solid fa-circle-check mr-2"></i><span>WooCommerce</span>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <div>
                    <i class="fa-solid fa-circle-check mr-2"></i><span>Tiendanube</span>
                </div>
                <div>
                    <i class="fa-solid fa-circle-check mr-2"></i><span>eCommerce a la medida.</span>
                </div>
                <div>
                    <i class="fa-solid fa-circle-check mr-2"></i><span>Aplicaciones web con ReactJS / VueJS y    Angular</span>
                </div>
                <div>
                    <i class="fa-solid fa-circle-check mr-2"></i><span>Aplicaciones web con Laravel</span>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <div>
                    <i class="fa-solid fa-circle-check mr-2"></i><span>Soluciones web nativas desarrolladas en PHP, JavaScript, CSS, HTML y Python.</span>
                </div>
                <div>
                    <i class="fa-solid fa-circle-check mr-2"></i><span>Aplicaciones web o sistemas en C# y .net.</span>
                </div>
                <div>
                    <i class="fa-solid fa-circle-check mr-2"></i><span>Aplicaciones móviles con React Native.</span>
                </div>
                <div>
                    <i class="fa-solid fa-circle-check mr-2"></i><span>Desarrollos y sistemas a la medida.</span>
                </div>
            </div>
            
        </main>
    </section>





</main>

<script src="<?php echo __ROOT__; ?>/public/js/splide/dist/js/splide.min.js"></script>
<script>



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