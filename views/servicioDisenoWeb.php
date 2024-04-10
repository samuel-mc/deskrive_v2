<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>
    <!-- Seccion hero -->
    <section class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 p-4 md:p-10">
        <div>
            <supertitle class="text--supertitle font-bold">Desarrollo de páginas web</supertitle>
            <h1 class="text--h2 text-3xl md:text-4xl my-3">Impulsando tu Negocio,</h1>
            <h1 class="text--h2 text-3xl md:text-4xl mb-3 text-dark_green"> Una Página a la Vez</h1>
            <div class="mb-4">
                <p class="text--p font-bold mb-3">Páginas web personalizadas</p>
                <p class="text--p font-bold mb-3">Especialistas en desarrollo web</p>
                <p class="text--p font-bold mb-3">Característica</p>
            </div>
            <p class="text--p mb-4">
                Nuestro servicio de desarrollo de páginas web está diseñado para impulsar el éxito de tu empresa en el mundo digital. Tu empresa merece un sitio web que refleje su grandeza, y estamos aquí para hacerlo realidad.
            </p>
                <button class="btn btn--black font-semibold">
                    Agendar una reunión <i class="fas fa-arrow-right pl-5"></i>
                </button>
        </div>
        <div>
            <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/img_hero.png" alt="imagen" class="w-full max-w-md mx-auto hidden md:block">
        </div>
    </section>


    <!-- Seccion hero -->
    <section class="max-w-7xl mx-auto p-4 md:p-10">
        <div class="text-center">
            <supertitle class="text--supertitle font-bold">Nuestros clientes</supertitle>
            <h1 class="text--h2 text-3xl md:text-4xl my-3">Clientes que <span class="text-dark_green"> Triunfan en la Web</span></h1>
        </div>
        <div id="carouselClientes" class="splide">
            <div class="splide__track">
                <ul class="splide__list flex justify-center">
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/logo_ieeg.png" alt="logo ieeg" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/logo_coop.png" alt="logo coop" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/logo_solarever.png" alt="logo solarever" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/logo_litcapital.png" alt="logo litcapital" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/logo_flytek.png" alt="logo flytek" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/logo_atend.png" alt="logo atend" class="w-full">
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Seccion servicios -->
    <section class="bg-light_grey">
        <div class="max-w-7xl mx-auto py-10 px-4">
            <header class="max-w-3xl text-center mx-auto mb-9">
                <h2 class="text--h2">Servicios</h2>
            </header>
            <main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/landing.png" alt="landing" class="w-full">
                        <h3 class="text--h3">Landing pages</h3>
                    </div>
                    <p class="text--p">
                    Destaca con una presencia en línea impactante y eficaz. Nuestras landing pages están diseñadas para convertir visitantes en clientes. Desde la captura de leads hasta promociones específicas, creamos páginas de destino atractivas y optimizadas que impulsan la acción y generan resultados tangibles.
                    </p>
                    <div class="flex gap-2 flex-col lg:flex-row text--p items-center">
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Conversión de leads</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Integración con CRM</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between gap-4">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/paginasweb.png" alt="Paginas web" class="w-full">
                        <h3 class="text--h3">Páginas web</h3>
                    </div>
                    <p class="text--p">
                    Nuestras páginas web en código puro ofrecen una experiencia única, sin limitaciones de diseño. Con un enfoque meticuloso en el diseño y la funcionalidad, creamos sitios web a la medida que reflejan la identidad de tu marca y satisfacen las necesidades específicas de tu negocio.
                    </p>
                    <div class="flex gap-2 flex-col text--p">
                        <div class="flex gap-2 flex-col lg:flex-row gap-2">
                            <span class="btn--white rounded-full px-4 py-1 border border-black-500">Personalizable</span>
                            <span class="btn--white rounded-full px-4 py-1 border border-black-500">Propiedad de código</span>
                        </div>
                        <div class="py-1">
                            <span class="btn--white rounded-full px-4 py-1 border border-black-500">Funcionalidades a la medida</span>
                        </div>
                    </div>

                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/wordpress.png" alt="Wordpress" class="w-full">
                        <h3 class="text--h3">WordPress</h3>
                    </div>
                    <p class="text--p">
                    Obtén el control total de tu presencia en línea con sitios web autoadministrables en WordPress. Diseñados para la facilidad de uso y la flexibilidad, te proporcionamos un sitio web dinámico y fácil de actualizar, nuestros sitios web con WordPress te brindan la libertad de actualizar los contenidos del sitio web sin complicaciones técnicas.
                    </p>
                    <div class="flex gap-2 flex-col lg:flex-row text--p items-center">
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Elementor</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Autoadministrable</span>
                    </div>
                </div>
            </main>
        </div>
    </section>



    <!-- Seccion caracteristicas -->
    <section class="max-w-7xl mx-6 xl:mx-auto bg-light_green py-7 px-4 text-white">
        <header class="max-w-3xl text-center mx-auto mb-9">
            <supertitle class="text--supertitle font-bold">Características del servicio</supertitle>
            <h2 class="text--h2 my-3">Los secretos detrás de nuestras páginas web</h2>
        </header>
        <main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between">
                    <div>
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/responsivo.png" alt="Diseño responsivo" class="w-32">
                    </div>
                    <h4 class="text--h4 font-bold">Diseño responsivo</h4>
                </div>
                <p class="text--p">
                Las páginas web que desarrollamos siempre se adaptan para brindar la mejor experiencia posible en cualquier dispositivo, desde un celular hasta una computadora de escritorio.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/disenowow.png" alt="Diseños con el factor ¡WOW!" class="w-32">
                    <h4 class="text--h4 font-bold">Diseños con el factor ¡WOW!</h4>
                </div>
                <p class="text--p">
                Todos nuestros diseños de páginas web son completamente únicos, personalizados y hechos a la medida para cada cliente. No utilizamos plantillas.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/soporte.png" alt="Soporte que deja huella" class="w-32">
                    <h4 class="text--h4 font-bold">Soporte que deja huella</h4>
                </div>
                <p class="text--p">
                Ofrecemos soporte y mantenimiento para los sitios web que desarrollamos. ¿Tienes una pregunta? ¿Quieres realizar un cambio? o ¿Quieres optimizar tu sitio web? nuestro servicio de mantenimiento de sitios web mantendrá tu sitio actualizado y sin errores.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/funcionesmedida.png" alt="Funciones a la medida de tu éxito" class="w-32">
                    <h4 class="text--h4 font-bold">Funciones a la medida de tu éxito</h4>
                </div>
                <p class="text--p">
                Desarrollamos páginas web que se adaptan a las necesidades y requerimientos específicas de la empresa. Implementamos funcionalidades y soluciones específicas para el cliente.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/sincambios.png" alt="Sin contar los cambios" class="w-32">
                    <h4 class="text--h4 font-bold">Sin contar los cambios</h4>
                </div>
                <p class="text--p">
                Con nuestra política de "Sin Contar los Cambios", puedes modificar y ajustar el diseño de la página web tantas veces como sean necesarias, sin preocuparte por límites ni cargos adicionales. Tu satisfacción es nuestra prioridad.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/amigonavegadores.png" alt="Amigo de todos los navegadores" class="w-32">
                    <h4 class="text--h4 font-bold">Amigo de todos los navegadores</h4>
                </div>
                <p class="text--p">
                Tu sitio web será amigable y se llevará bien con todos los navegadores, desde Chrome hasta Firefox, Safari y Edge. No importa cuál prefieras, tu sitio web siempre lucirá y funcionará de manera excepcional.
                </p>
            </div>
        </main>
    </section>



    <!-- Seccion por qué -->
    <section class="max-w-7xl mx-6 xl:mx-auto py-7 px-4">
        <header class="max-w-3xl text-center mx-auto mb-9">
            <h2 class="text--h2 mb-2">¿Por qué desarrollar mi sitio web <span class="text-dark_green"> con Deskrive?</span></h2>
        </header>
        <main class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="flex items-center">
                <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/porque.png" alt="Diseño responsivo" class="w-full  hidden lg:block">
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-4">
                    <hr class="h-px bg-gray-700 border-0">
                    <h3 class="text--h3 font-bold px-3">Equipo experto en desarrollo y diseño web.</h3>
                    <p class="text--p px-3">
                        Nuestro equipo altamente especializado, compuesto por diseñadores gráficos, diseñadores web, desarrolladores y expertos en desarrollo de soluciones web. Su experiencia y creatividad se unen para dar vida a tu visión digital, garantizando un sitio web que destaque en todos los aspectos.
                    </p>
                </div>
                <div class="flex flex-col gap-4">
                    <hr class="h-px bg-gray-700 border-0">
                    <h3 class="text--h3 font-bold px-3">Mobile-First Principios de Desarrollo Responsivo.</h3>
                    <p class="text--p px-3">
                        En Deskrive, priorizamos la experiencia del usuario en dispositivos móviles. Nuestros sitios web son diseñados y desarrollados con un enfoque "mobile-first", lo que significa que se verán y funcionarán perfectamente en smartphones y tabletas, asegurando que tu audiencia pueda acceder sin problemas desde cualquier dispositivo.
                    </p>
                </div>
                <div class="flex flex-col gap-4">
                    <hr class="h-px bg-gray-700 border-0">
                    <h3 class="text--h3 font-bold px-3">Desarrollo Personalizado y a la Medida.</h3>
                    <p class="text--p px-3">
                        En Deskrive, creemos en la singularidad de cada proyecto. Nuestros sitios web son desarrollados desde cero, completamente personalizados para satisfacer tus necesidades específicas. No utilizamos plantillas genéricas; en su lugar, creamos soluciones web únicas y adaptadas a tus objetivos.
                    </p>
                </div>
                <div class="flex flex-col gap-4">
                    <hr class="h-px bg-gray-700 border-0">
                    <h3 class="text--h3 font-bold px-3">Certificación SEMRUSH para SEO, Rendimiento y Velocidad.</h3>
                    <p class="text--p px-3">
                        Al finalizar el desarrollo de tu sitio web, te entregamos un certificado que válida que tu sitio web cumple con las mejores prácticas en SEO, rendimiento y velocidad. Esto asegura que tu sitio esté en óptimas condiciones para destacar en los motores de búsqueda y brindar una experiencia rápida a los usuarios.
                    </p>
                </div>
            </div>
        </main>
    </section>

    <?php include 'components/hablemosProyecto.php'; ?>

    
    <!-- Casos de exito -->
    <section class="max-w-7xl mx-auto py-6 px-2">
        <header class="max-w-3xl text-center mx-auto mb-9">
            <supertitle class="text--supertitle">Casos de éxito</supertitle>
            <h2 class="text--h2 mb-3">Deskrive en acción</h2>
            <p class="text--p">Descubre cómo nuestras soluciones web han transformado empresas en historias de éxito inspiradoras. Prepárate para ser inspirado por nuestros logros reales</p>
        </header>
        <!-- Cartas que se muestra en la version desktop -->
        <main class="grid grid-cols-3 gap-6 hidden md:grid">
            <div class="rounded-xl" style="background-color: #D9D9D9;">
                <div class="p-6">
                    <h3 class="text--h3">Flytek</h3>
                    <p class="text--p">
                        Flytek es una empresa de fabricación de drones especializados para distintas industrias. Desarrollamos un sitio web a la medida para promocionar sus drones y atraer nuevos clientes.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/casoExito1.png" alt="logo de la empresa" class="w-9/12">
                </div>
            </div>
            <div class="rounded-xl" style="background-color: #CEECFF;">
                <div class="p-6">
                    <h3 class="text--h3">LIT Capital</h3>
                    <p class="text--p">
                        Lit Capital es un fondo de inversión, desarrollamos un sitio web a la medida, como herramienta de promoción para nuevos prospectos, los usuarios pueden simular sus inversiones dentro del sitio.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/casoExito2.png" alt="logo de la empresa" class="w-9/12">
                </div>
            </div>
            <div class="rounded-xl" style="background-color: #EEFFDB;">
                <div class="p-6">
                    <h3 class="text--h3">U-Fresh</h3>
                    <p class="text--p">
                        U-Fresh es una empresa de fabricación de bolsas, Desarrollamos un sitio web en WordPress, donde buscan promocionar los beneficios y características de sus productos.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/casoExito3.png" alt="logo de la empresa" class="w-9/12">
                </div>
            </div>
            <div class="rounded-xl" style="background-color: #F9F9FF;">
                <div class="p-6">
                    <h3 class="text--h3">IEEG</h3>
                    <p class="text--p">
                        Desarrollamos multiples proyectos para el Instituto Electroal del Estado de Guanajuato, entre ellos la renovación de su sitio web y el desarrollo de una herramienta para gestionar miles de archivos.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/casoExito4.png" alt="logo de la empresa" class="w-9/12">
                </div>
            </div>
            <div class="rounded-xl col-span-2 flex" style="background-color: #F2F1ED;">
                <div class="p-6">
                    <h3 class="text--h3">CoopSpirits</h3>
                    <p class="text--p">
                        CoopSpirits es una empresa de distribución de marcas de bebidas alcohólicas, desarrollamos un sitio web a la medida como herramienta para promocionar sus servicios de distribución de marcas y dar a conocer las marcas que distribuyen.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/casoExito5.png" alt="logo de la empresa" class="w-full">
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
                                <h3 class="text--h3">Flytek</h3>
                                <p class="text--p">
                                    Flytek es una empresa de fabricación de drones especializados para distintas industrias. Desarrollamos un sitio web a la medida para promocionar sus drones y atraer nuevos clientes.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/casoExito1.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #E9FFF9;">
                            <div class="p-6">
                                <h3 class="text--h3">LIT Capital</h3>
                                <p class="text--p">
                                    Lit Capital es un fondo de inversión, desarrollamos un sitio web a la medida, como herramienta de promoción para nuevos prospectos, los usuarios pueden simular sus inversiones dentro del sitio.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/casoExito2.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #F9F9FF;">
                            <div class="p-6">
                                <h3 class="text--h3">U-Fresh</h3>
                                <p class="text--p">
                                    U-Fresh es una empresa de fabricación de bolsas, Desarrollamos un sitio web en WordPress, donde buscan promocionar los beneficios y características de sus productos.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/casoExito3.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #FFD0B4;">
                            <div class="p-6">
                                <h3 class="text--h3">IEEG</h3>
                                <p class="text--p">
                                    Desarrollamos multiples proyectos para el Instituto Electroal del Estado de Guanajuato, entre ellos la renovación de su sitio web y el desarrollo de una herramienta para gestionar miles de archivos.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/casoExito4.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #E9EBED;">
                            <div class="p-6">
                                <h3 class="text--h3">CoopSpirits</h3>
                                <p class="text--p">
                                    CoopSpirits es una empresa de distribución de marcas de bebidas alcohólicas, desarrollamos un sitio web a la medida como herramienta para promocionar sus servicios de distribución de marcas y dar a conocer las marcas que distribuyen.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/casoExito5.png" alt="logo de la empresa" class="w-9/12">
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
        $pag="serviciosDisenoWeb";
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
</script>

<?php include 'partials/footer.php'; ?>