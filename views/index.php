<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>
    <!-- Seccion hero -->
    <section class="max-w-7xl mx-auto grid grid-cols-12 py-10 px-3">
        <div class="flex justify-center items-center col-span-3 p-4">
            <img src="<?php echo __ROOT__; ?>/public/img/home/hero1.png" alt="logo de la empresa" class="w-full max-w-64 hidden md:block">
        </div>
        <div class="text-center col-span-12 md:col-span-6">
            <h1 class="text-xl md:text-4xl poppins-semibold mb-4">Innovación Web a tu Alcance</h1>
            <p class="poppins-regular text-xs md:text-sm mb-4">
                En Deskrive, nos especializamos en dar vida a tus visiones en línea. Ofrecemos desarrollo web personalizado y soluciones a medida que se adaptan a tus necesidades específicas. Nuestra misión es impulsar tu éxito digital. Únete a nosotros y experimenta la excelencia en diseño, innovación y desarrollo web
            </p>
            <div class="mb-9 flex flex-col lg:flex-row justify-center">
                <a href="#" class="btn btn--yellow m-1">Agendar una reunión</a>
                <a href="#" class="btn btn--light-green m-1">Enviar WhatsApp</a>
            </div>
            <img src="<?php echo __ROOT__; ?>/public/img/home/hero3.png" alt="logo de la empresa" class="w-full max-w-64 mx-auto hidden md:block">
        </div>
        <div class="flex justify-center items-center col-span-3 p-4">
            <img src="<?php echo __ROOT__; ?>/public/img/home/hero2.png" alt="logo de la empresa" class="w-full max-w-64 hidden md:block">
        </div>
    </section>

    <!-- Seccion de quienes somos -->
    <section class="max-w-7xl mx-6 xl:mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 bg-light_green rounded-lg py-7 px-4 border-4 border-dark_green">
        <div class="text-white">
            <h2 class="text--h2 mb-5">¿Quiénes somos?</h2>
            <p class="text-sm poppins-regular">Somos Deskrive, una empresa de consultoría tecnológica y de desarrollo de software comprometida en ofrecer soluciones web innovadoras y de alta calidad a nuestros clientes. Nos especializamos en los servicios de desarrollo de páginas web, eCommerce, aplicaciones web y móviles, desarrollo de sistemas para soluciones empresariales a la medida y diseño gráfico. Nuestra experiencia y enfoque en desarrollo web nos han permitido establecer una sólida base de clientes en toda la República Mexicana, Estados Unidos y Centroamérica. </p>
        </div>
        <div class="hidden md:block">
            <div class="bg-white p-6 rounded-lg w-full h-full">
                <img src="<?php echo __ROOT__; ?>/public/img/home/qSomos.png" alt="logo de la empresa" class="w-full max-w-md mx-auto">
            </div>
        </div>
    </section>

    <!-- Seccion de clientes -->
    <section class="max-w-7xl mx-auto my-10">
        <h2 class="text--h2 mb-5 text-center">Empresas que han confiado en nosotros</h2>
        <div class="grid-cols-6 mb-8 hidden md:grid">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_ieeg.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_coop.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_gsg.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_talleres.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_atend.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_tanko.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_ardyss.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_equilatera.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_edenika.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_theseatco.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_rodhe.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_evergo.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_ufresh.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_query.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_rabee.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_indexity.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_solarever.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_litcapital.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_jfe.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_edrive.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_flytek.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_hcmedical.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_lifeexperts.png" alt="logo de la empresa" class="w-full">
            <img src="<?php echo __ROOT__; ?>/public/img/home/logo_envisonet.png" alt="logo de la empresa" class="w-full">
        </div>
        <div id="carouselClientes" class="splide block md:hidden mb-8">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_ieeg.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_coop.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_gsg.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_talleres.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_atend.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_tanko.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_ardyss.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_equilatera.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_edenika.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_theseatco.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_rodhe.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_evergo.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_ufresh.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_query.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_rabee.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_indexity.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_solarever.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_litcapital.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_jfe.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_edrive.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_flytek.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_hcmedical.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_lifeexperts.png" alt="logo de la empresa" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_envisonet.png" alt="logo de la empresa" class="w-full">
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn--white">
                <span class="mr-4">Ver casos de éxito</span>
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </section>

    <!-- Seccion de soluciones web -->
    <section class="bg-light_grey">
        <div class="max-w-7xl mx-auto py-8">
            <h2 class="text--h2 text-center">Nuestras soluciones web</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6 md:mb-24">
                <div class="bg-white rounded flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/soluciones1.png" alt="logo de la empresa" class="w-full max-w-56 my-14 mx-auto">
                    <main class="">
                        <div class="text-center my-6">
                            <h3 class="text--h3">Deskrive Web Design</h3>
                            <h4 class="text--h4">Desarrollo de página web</h4>
                        </div>
                        <a href="" class="btn btn--black poppins-semibold text-base py-4 px-16 rounded flex justify-between items-center w-full">
                            Conocer más
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </main>
                </div>
                <div class="bg-white rounded flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/soluciones2.png" alt="logo de la empresa" class="w-full max-w-56 my-14 mx-auto">
                    <main class="">
                        <div class="text-center my-6">
                            <h3 class="text--h3">Deskrive eCommerce</h3>
                            <h4 class="text--h4">Desarrollo de tienda en línea</h4>
                        </div>
                        <a href="" class="btn btn--black poppins-semibold text-base py-4 px-16 rounded flex justify-between items-center w-full">
                            Conocer más
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </main>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/soluciones3.png" alt="logo de la empresa" class="w-full max-w-56 my-14 mx-auto">
                    <main class="">
                        <div class="text-center my-6">
                            <h3 class="text--h3">Deskrive Web Development</h3>
                            <h4 class="text--h4">Desarrollo de aplicaciones web</h4>
                        </div>
                        <a href="" class="btn btn--black poppins-semibold text-base py-4 px-16 rounded flex justify-between items-center w-full">
                            Conocer más
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </main>
                </div>
                <div class="bg-white rounded flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/soluciones4.png" alt="logo de la empresa" class="w-full max-w-56 my-14 mx-auto">
                    <main class="">
                        <div class="text-center my-6">
                            <h3 class="text--h3">Deskrive Labs</h3>
                            <h4 class="text--h4">Desarrollo de productos tecnológicos</h4>
                        </div>
                        <a href="" class="btn btn--black poppins-semibold text-base py-4 px-16 rounded flex justify-between items-center w-full">
                            Conocer más
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </main>
                </div>
            </div>
            <div class="mt-20 text-center flex flex-col md:flex-row items-center justify-center">
                <a href="" class="btn btn--yellow h-fit w-full max-w-60">Agendar una reunión</a>
                <a href="" class="btn btn--light-green m-4 h-fit w-full max-w-60">Enviar WhatsApp</a>
                <a href="" class="btn btn--white h-fit w-full max-w-60">Solicitar información</a>
            </div>
        </div>
    </section>

    <!-- Seccion de informacion sobre nosotros -->
    <section class="max-w-7xl mx-auto border-4 border-black rounded-xl py-10 md:py-20 px-7 md:px-28">
        <div class="splide mb-12" id="carruselInfo">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide grid grid-cols-5 gap-12">
                        <div class="col-span-5 md:col-span-3">
                            <h2 class="text--h2 mb-4">Desarrollo web a la medida</h2>
                            <p>
                                En Deskrive somos especialistas en el desarrollo de páginas web, eCommerce, aplicaciones y soluciones web completamente personalizados y a la medida. Entendemos que cada cliente tiene objetivos y requisitos específicos, y es por eso que nos sumergimos en un proceso de planificación detallado y minucioso. Nuestro equipo de expertos se dedica a comprender a fondo su visión, objetivos y audiencia para diseñar una estrategia de desarrollo web completamente adaptada a sus necesidades. En Deskrive, creemos que la personalización es clave para el éxito de cualquier proyecto web.  Nuestra dedicación a la personalización y a la adaptación a las necesidades de cada cliente nos distingue como una agencia de desarrollo web confiable y de calidad. 
                            </p>
                        </div>
                        <div class="hidden md:block col-span-2 m-auto">
                            <img src="<?php echo __ROOT__; ?>/public/img/home/webALM.png" alt="logo de la empresa" class="w-full max-w-56 mx-auto">
                        </div>
                    </li>
                    <li class="splide__slide grid grid-cols-5 gap-12">
                        <div class="col-span-5 md:col-span-3">
                            <h2 class="text--h2 mb-4">¿Por qué Deskrive y no una agencia de Marketing?</h2>
                            <p class="mb-4">
                                A diferencia de muchas agencias de Marketing, en Deskrive, somos especialistas en el desarrollo de páginas web, eCommerce, aplicaciones web y soluciones empresariales a la medida. Nuestro enfoque se centra en la creación de soluciones personalizadas, no en la adaptación de plantillas o plataformas pre-hechas.  
                            </p>
                            <p>
                                Somos expertos en la integración de todas las APIs de Google y Facebook, como Google Analytics, Search Console, Ads, Facebook Pixel, y más. Este nivel de especialización nos permite ofrecer una gama de servicios que van más allá de lo que una típica agencia de marketing puede ofrecer. Si buscas una solución web verdaderamente personalizada y efectiva, es mejor contratar a una agencia especializada en desarrollo de soluciones web como Deskrive
                            </p>
                        </div>
                        <div class="hidden md:block col-span-2 m-auto">
                            <img src="<?php echo __ROOT__; ?>/public/img/home/porqueDeskrive.png" alt="logo de la empresa" class="w-full max-w-56 mx-auto">
                        </div>
                    </li>
                    <li class="splide__slide grid grid-cols-5 gap-12">
                        <div class="col-span-5 md:col-span-3">
                            <h2 class="text--h2 mb-4">Trabajo colaborativo</h2>
                            <p class="mb-4">
                                En Deskrive, creemos en el poder de la colaboración. Entendemos que nuestros clientes son los expertos en sus respectivos campos y, por lo tanto, adoptamos un enfoque de trabajo conjunto para desarrollar soluciones que realmente cumplan con sus necesidades y objetivos.
                            </p>
                            <p class="mb-4">
                                Cada proyecto se realiza en estrecha colaboración con las áreas de marketing, comercial, ventas o sistemas de nuestros clientes, según sea necesario. Dependiendo del alcance de cada proyecto, asignamos un equipo especializado para su desarrollo.
                            </p>
                            <p>
                                Nuestros clientes pueden ver progresivamente el avance de su proyecto, permitiendo un control más directo y una retroalimentación oportuna.
                            </p>
                        </div>
                        <div class="hidden md:block col-span-2 m-auto">
                            <img src="<?php echo __ROOT__; ?>/public/img/home/trabajoCol.png" alt="logo de la empresa" class="w-full max-w-56 mx-auto">
                        </div>
                    </li>
                    <li class="splide__slide grid grid-cols-5 gap-12">
                        <div class="col-span-5 md:col-span-3">
                            <h2 class="text--h2 mb-4">Programador vs desarrollador</h2>
                            <p class="mb-4">
                                En el mundo de la tecnología, la distinción entre un programador, un equipo de sistemas y un desarrollador puede no ser evidente, pero las diferencias son cruciales al elegir a los expertos adecuados para tu proyecto web.
                            </p>
                            <p class="mb-4">
                                Un programador o un equipo de sistemas están tradicionalmente centrados en el mantenimiento y soporte de sistemas ya existentes. Sin embargo, cuando se trata de desarrollar una solución web desde cero, es donde entran los desarrolladores de Deskrive.
                            </p>
                            <p>
                                Elegir a Deskrive significa apostar por un equipo multidisciplinario que entiende cada faceta del desarrollo web. Nuestro enfoque integrado garantiza que tu proyecto se desarrollará con la más alta calidad, la última tecnología y una atención inigualable a los detalles.
                            </p>
                        </div>
                        <div class="hidden md:block col-span-2 m-auto">
                            <img src="<?php echo __ROOT__; ?>/public/img/home/programadorVs.png" alt="logo de la empresa" class="w-full max-w-56 mx-auto">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="splide" id="carruselThumbnailInfo">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        Desarrollo web a la medida
                    </li>
                    <li class="splide__slide">
                        ¿Por qué Deskrive y no una agencia de Marketing?
                    </li>
                    <li class="splide__slide">
                        Trabajo colaborativo
                    </li>
                    <li class="splide__slide">
                        Programador vs desarrollador
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>

<script src="<?php echo __ROOT__; ?>/public/js/splide/dist/js/splide.min.js"></script>
<script>
    var splide = new Splide('#carouselClientes', {
        autoplay: true,
        arrows: false,
        pagination: false,
        type: 'loop',
        gap: '1.6rem',
        perPage: 3,
        perMove: 1,
        isNavigation: false,
        // breakpoints: {
        //     1024: {
        //         perPage: 1,
        //         gap: '1rem',
        //     },
        //     480: {
        //         perPage: 1,
        //         gap: '1rem',
        //     },
        // },
        autoScroll: {
            speed: 1,
        },
    });

    splide.mount();


    // carruselInfo
    // carruselThumbnailInfo
    var carruselInfo = new Splide('#carruselInfo', {
        // autoplay: true,
        arrows: false,
        pagination: false,
        type: 'loop',
        gap: '1.6rem',
        perPage: 1,
        perMove: 1,
        isNavigation: false,
        // breakpoints: {
        //     1024: {
        //         perPage: 1,
        //         gap: '1rem',
        //     },
        //     480: {
        //         perPage: 1,
        //         gap: '1rem',
        //     },
        // },
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
        perPage: 4,
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
</script>

<?php include 'partials/footer.php'; ?>