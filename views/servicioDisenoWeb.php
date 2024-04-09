<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>
    <!-- Seccion hero -->
    <section class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 p-4 md:p-10">
        <div>
            <supertitle class="text--supertitle font-bold">Desarrollo de páginas web</supertitle>
            <h1 class="text--h2 text-3xl md:text-4xl mb-3">Impulsando tu Negocio, Una Página a la Vez</span></h1>
            <div class="mb-4">
                <p class="text--p font-bold">Páginas web personalizadas</p>
                <p class="text--p font-bold">Especialistas en desarrollo web</p>
                <p class="text--p font-bold">Característica</p>
            </div>
            <p class="text--p mb-4">
            Nuestro servicio de desarrollo de páginas web está diseñado para impulsar el éxito de tu empresa en el mundo digital. Tu empresa merece un sitio web que refleje su grandeza, y estamos aquí para hacerlo realidad.
            </p>
            <a href="#" class="btn btn--black text-center my-1 mx-0 text--h5">Agendar una reunión</a>
        </div>
        <div>
            <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/img_hero.png" alt="imagen" class="w-full max-w-md mx-auto hidden md:block">
        </div>
    </section>


    <!-- Seccion hero -->
    <section class="max-w-7xl mx-auto p-4 md:p-10">
        <div class="text-center">
            <supertitle class="text--supertitle font-bold">Nuestros clientes</supertitle>
            <h1 class="text--h2 text-3xl md:text-4xl mb-3">Clientes que Triunfan en la Web</span></h1>
        </div>
        <div id="carouselClientes" class="splide">
            <div class="splide__track">
                <ul class="splide__list flex justify-center">
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_ieeg.png" alt="logo ieeg" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_coop.png" alt="logo coop" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_solarever.png" alt="logo solarever" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_litcapital.png" alt="logo litcapital" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_flytek.png" alt="logo flytek" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_atend.png" alt="logo atend" class="w-full">
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
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/paginasweb.png" alt="Paginas web" class="w-full">
                        <h3 class="text--h3">Páginas web</h3>
                    </div>
                    <p class="text--p">
                    Nuestras páginas web en código puro ofrecen una experiencia única, sin limitaciones de diseño. Con un enfoque meticuloso en el diseño y la funcionalidad, creamos sitios web a la medida que reflejan la identidad de tu marca y satisfacen las necesidades específicas de tu negocio.
                    </p>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioDisenoWeb/wordpress.png" alt="Wordpress" class="w-full">
                        <h3 class="text--h3">WordPress</h3>
                    </div>
                    <p class="text--p">
                    Obtén el control total de tu presencia en línea con sitios web autoadministrables en WordPress. Diseñados para la facilidad de uso y la flexibilidad, te proporcionamos un sitio web dinámico y fácil de actualizar, nuestros sitios web con WordPress te brindan la libertad de actualizar los contenidos del sitio web sin complicaciones técnicas.
                    </p>
                </div>
            </main>
        </div>
    </section>

    <?php include 'components/consultaGratis.php'; ?>



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
</script>

<?php include 'partials/footer.php'; ?>