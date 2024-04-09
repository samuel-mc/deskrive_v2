<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>
    <!-- Seccion hero -->
    <section class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 p-4 md:p-10">
        <div>
            <h1 class="text--h1 text-3xl md:text-4xl mb-3">Innovación <span class="text-dark_green">Web a tu Alcance</span></h1>
            <p class="text--p mb-4">
                En Deskrive, nos especializamos en dar vida a tus visiones en línea. Ofrecemos desarrollo web personalizado y soluciones a medida que se adaptan a tus necesidades específicas. Nuestra misión es impulsar tu éxito digital. Únete a nosotros y experimenta la excelencia en diseño, innovación y desarrollo web
            </p>
            <img src="<?php echo __ROOT__; ?>/public/img/home/img_hero.png" alt="imagen" class="w-full max-w-md mx-auto md:hidden">
            <div class="mb-9 flex flex-col lg:flex-row justify-center">
                <a href="#" class="btn btn--yellow text-center mx-16 my-1 md:mx-1">Agendar una reunión</a>
                <a href="#" class="btn btn--light-green text-center mx-16 my-1 md:mx-1">Enviar WhatsApp</a>
            </div>
        </div>
        <div>
            <img src="<?php echo __ROOT__; ?>/public/img/home/img_hero.png" alt="imagen" class="w-full max-w-md mx-auto hidden md:block">
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
            <h2 class="text--h2 text-center mb-8">Nuestras <span class="text-dark_green">soluciones web</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6 md:mb-24">
                <div class="bg-white rounded flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/soluciones1.png" alt="logo de la empresa" class="w-full max-w-56 my-14 mx-auto">
                    <main class="">
                        <div class="text-center my-6">
                            <h3 class="text--h3">Deskrive <span class="text-dark_green">Web Design</span></h3>
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
                            <h3 class="text--h3">Deskrive <span class="text-dark_green">eCommerce</span></h3>
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
                            <h3 class="text--h3">Deskrive <span class="text-dark_green">Web Development</span></h3>
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
                            <h3 class="text--h3">Deskrive <span class="text-dark_green">Labs</span></h3>
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
    <section class="max-w-7xl mx-auto border-4 border-black rounded-xl my-9 py-10 md:py-20 px-7 md:px-28">
        <div class="splide mb-12" id="carruselInfo">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide grid grid-cols-5 gap-12">
                        <div class="col-span-5 md:col-span-3">
                            <h2 class="text--h2 mb-4">Desarrollo web a la medida</h2>
                            <p class="text--p">
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
                            <p class="mb-4 text--p">
                                A diferencia de muchas agencias de Marketing, en Deskrive, somos especialistas en el desarrollo de páginas web, eCommerce, aplicaciones web y soluciones empresariales a la medida. Nuestro enfoque se centra en la creación de soluciones personalizadas, no en la adaptación de plantillas o plataformas pre-hechas.  
                            </p>
                            <p class="text--p">
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
                            <p class="mb-4 text--p">
                                En Deskrive, creemos en el poder de la colaboración. Entendemos que nuestros clientes son los expertos en sus respectivos campos y, por lo tanto, adoptamos un enfoque de trabajo conjunto para desarrollar soluciones que realmente cumplan con sus necesidades y objetivos.
                            </p>
                            <p class="mb-4 text--p">
                                Cada proyecto se realiza en estrecha colaboración con las áreas de marketing, comercial, ventas o sistemas de nuestros clientes, según sea necesario. Dependiendo del alcance de cada proyecto, asignamos un equipo especializado para su desarrollo.
                            </p>
                            <p class="text--p">
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
                            <p class="mb-4 text--p">
                                En el mundo de la tecnología, la distinción entre un programador, un equipo de sistemas y un desarrollador puede no ser evidente, pero las diferencias son cruciales al elegir a los expertos adecuados para tu proyecto web.
                            </p>
                            <p class="mb-4 text--p">
                                Un programador o un equipo de sistemas están tradicionalmente centrados en el mantenimiento y soporte de sistemas ya existentes. Sin embargo, cuando se trata de desarrollar una solución web desde cero, es donde entran los desarrolladores de Deskrive.
                            </p>
                            <p class="text--p">
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
                    <li class="splide__slide text--p p-1">
                        Desarrollo web a la medida
                    </li>
                    <li class="splide__slide text--p p-1">
                        ¿Por qué Deskrive y no una agencia de Marketing?
                    </li>
                    <li class="splide__slide text--p p-1">
                        Trabajo colaborativo
                    </li>
                    <li class="splide__slide text--p p-1">
                        Programador vs desarrollador
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Casos de exito -->
    <section class="max-w-7xl mx-auto py-6 px-2">
        <header class="max-w-3xl text-center mx-auto mb-9">
            <supertitle class="text--supertitle">Casos de éxito</supertitle>
            <h2 class="text--h2 mb-3">Deskrive en acción</h2>
            <p class="text--p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia</p>
        </header>
        <!-- Cartas que se muestra en la version desktop -->
        <main class="grid grid-cols-3 gap-6 hidden md:grid">
            <div class="rounded-xl" style="background-color: #EEFFDB;">
                <div class="p-6">
                    <h3 class="text--h3">ArdyssLife</h3>
                    <p class="text--p">
                        La empresa ArdyssLife es reconocida a nivel nacional y en Estados Unidos, es una empresa que se dedica al multinivel con una gama amplia de productos para el cuidado personal.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/casoExito1.png" alt="logo de la empresa" class="w-9/12">
                </div>
            </div>
            <div class="rounded-xl" style="background-color: #E9FFF9;">
                <div class="p-6">
                    <h3 class="text--h3">Atend</h3>
                    <p class="text--p">
                        La empresa ArdyssLife es reconocida a nivel nacional y en Estados Unidos, es una empresa que se dedica al multinivel con una gama amplia de productos para el cuidado personal.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/casoExito2.png" alt="logo de la empresa" class="w-9/12">
                </div>
            </div>
            <div class="rounded-xl" style="background-color: #F9F9FF;">
                <div class="p-6">
                    <h3 class="text--h3">IEEG</h3>
                    <p class="text--p">
                        La empresa ArdyssLife es reconocida a nivel nacional y en Estados Unidos, es una empresa que se dedica al multinivel con una gama amplia de productos para el cuidado personal.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/casoExito3.png" alt="logo de la empresa" class="w-9/12">
                </div>
            </div>
            <div class="rounded-xl" style="background-color: #FFD0B4;">
                <div class="p-6">
                    <h3 class="text--h3">Query</h3>
                    <p class="text--p">
                        La empresa ArdyssLife es reconocida a nivel nacional y en Estados Unidos, es una empresa que se dedica al multinivel con una gama amplia de productos para el cuidado personal.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/casoExito4.png" alt="logo de la empresa" class="w-9/12">
                </div>
            </div>
            <div class="rounded-xl col-span-2 flex" style="background-color: #E9EBED;">
                <div class="p-6">
                    <h3 class="text--h3">Talleres De Los Ballesteros</h3>
                    <p class="text--p">
                        La empresa ArdyssLife es reconocida a nivel nacional y en Estados Unidos, es una empresa que se dedica al multinivel con una gama amplia de productos para el cuidado personal. La empresa ArdyssLife es reconocida a nivel nacional y en Estados Unidos, es una empresa que se dedica al multinivel con una gama amplia de productos para el cuidado personal.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/home/casoExito5.png" alt="logo de la empresa" class="w-full">
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
                                <h3 class="text--h3">ArdyssLife</h3>
                                <p class="text--p">
                                    La empresa ArdyssLife es reconocida a nivel nacional y en Estados Unidos, es una empresa que se dedica al multinivel con una gama amplia de productos para el cuidado personal.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/home/casoExito1.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #E9FFF9;">
                            <div class="p-6">
                                <h3 class="text--h3">Atend</h3>
                                <p class="text--p">
                                    La empresa ArdyssLife es reconocida a nivel nacional y en Estados Unidos, es una empresa que se dedica al multinivel con una gama amplia de productos para el cuidado personal.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/home/casoExito2.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #F9F9FF;">
                            <div class="p-6">
                                <h3 class="text--h3">IEEG</h3>
                                <p class="text--p">
                                    La empresa ArdyssLife es reconocida a nivel nacional y en Estados Unidos, es una empresa que se dedica al multinivel con una gama amplia de productos para el cuidado personal.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/home/casoExito3.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #FFD0B4;">
                            <div class="p-6">
                                <h3 class="text--h3">Query</h3>
                                <p class="text--p">
                                    La empresa ArdyssLife es reconocida a nivel nacional y en Estados Unidos, es una empresa que se dedica al multinivel con una gama amplia de productos para el cuidado personal.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/home/casoExito4.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #E9EBED;">
                            <div class="p-6">
                                <h3 class="text--h3">Talleres De Los Ballesteros</h3>
                                <p class="text--p">
                                    La empresa ArdyssLife es reconocida a nivel nacional y en Estados Unidos, es una empresa que se dedica al multinivel con una gama amplia de productos para el cuidado personal. La empresa ArdyssLife es reconocida a nivel nacional y en Estados Unidos, es una empresa que se dedica al multinivel con una gama amplia de productos para el cuidado personal.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/home/casoExito5.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>


    <!-- Seccion obtiene una asesoría gratis -->
    <?php include 'components/obtenUnaAsesoria.php'; ?>

    <!-- Seccion nuestros servicios -->
    <section class="bg-light_grey">
        <div class="max-w-7xl mx-auto py-10 px-4">
            <header class="max-w-3xl text-center mx-auto mb-9">
                <h2 class="text--h2">Nuestros servicios</h2>
                <p class="text--p">Servicios que complementan nuestras soluciones web</p>
            </header>
            <main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/vector_servicios_hosting.png" alt="logo de la empresa" class="w-full max-w-16">
                        <h3 class="text--h3">Hosting</h3>
                    </div>
                    <p class="text--p">En Deskrive, ofrecemos soluciones de alojamiento web robustas y confiables. Trabajamos con proveedores que garantizan alta disponibilidad, rendimiento optimizado y seguridad superior, lo que significa que tu proyecto web estará accesible, rápido y protegido en todo momento.</p>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/vector_servicios_diseno_grafico.png" alt="logo de la empresa" class="w-full max-w-28">
                        <h3 class="text--h3">Diseño gráfico</h3>
                    </div>
                    <p class="text--p">
                        Nuestro equipo de diseño gráfico crea impresionantes visuales que fortalecen tu marca y captan la atención del usuario. Desde logotipos y gráficos para sitios web hasta material de marketing, diseñamos con el objetivo de comunicar efectivamente tu mensaje y reflejar tu identidad de marca.
                    </p>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/vector_servicios_crm.png" alt="logo de la empresa" class="w-full max-w-32">
                        <h3 class="text--h3">Integraciones CRM</h3>
                    </div>
                    <p class="text--p">
                        Facilitamos la integración de tus sistemas con soluciones CRM líderes en el mercado. Estas integraciones permiten una gestión de relaciones con los clientes más eficiente, mejorando el seguimiento de los leads, el servicio al cliente y la estrategia de ventas.
                    </p>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/vector_servicios_mantenimiento_web.png" alt="logo de la empresa" class="w-full max-w-32">
                        <h3 class="text--h3">Mantenimiento web</h3>
                    </div>
                    <p class="text--p">
                        Garantizamos que tu proyecto web se mantenga al día y funcione de manera óptima con nuestro servicio de mantenimiento web. Nos encargamos de las actualizaciones necesarias, el monitoreo del rendimiento, la solución de problemas y la implementación de mejoras continuas.
                    </p>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/vector_servicios_consultoria_web.png" alt="logo de la empresa" class="w-full max-w-32">
                        <h3 class="text--h3">Consultoría web</h3>
                    </div>
                    <p class="text--p">
                        Nuestro servicio de consultoría web te proporciona el asesoramiento estratégico necesario para maximizar tu presencia en línea. Analizamos tu sitio web actual, identificamos áreas de mejora y trazamos un plan para optimizar tu estrategia digital.
                    </p>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/vector_servicios_desarrollo_apis.png" alt="logo de la empresa" class="w-full max-w-32">
                        <h3 class="text--h3">Desarrollo de APIS</h3>
                    </div>
                    <p class="text--p">
                        Creamos APIs personalizadas que permiten a tus sistemas y aplicaciones interactuar de manera eficiente. Nuestros servicios de desarrollo de APIs facilitan la integración, el intercambio de datos y la funcionalidad entre diferentes software, mejorando así la eficiencia operativa.
                    </p>
                </div>

            </main>
            <footer class="text-center mt-8">
                <a href="" class="btn btn--black">
                    <span class="mr-5">Consulta nuestros servicios</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </footer>
        </div>
    </section>

    <?php include 'components/contacto.php'; ?>


    <!-- Seccion lo que nuestros clientes opinan -->
    <section class="max-w-7xl mx-auto py-12 px-4">
        <h2 class="text--h2 mb-6 max-w-2xl">Lo que nuestros clientes opinan de nuestro trabajo</h2>
        <div id="carouselOpinionesClientes" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide p-9 text-white rounded-xl bg-black">
                        <p class="text--p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam efficitur lectus at tempor posuere. Proin quis tincidunt nibh. Ut suscipit risus sem, non aliquam augue lobortis vitae. Nullam quam turpis, dignissim eu elementum sed, pretium at augue. Aliquam porta id magna eu ullamcorper.
                        </p>
                        <div class="mt-10">
                            <h5 class="text--h5">Nombre del testimonio </h5>
                            <h5 class="text--h5">Empresa</h5>
                        </div>
                    </li>
                    <li class="splide__slide p-9 text-white rounded-xl bg-black">
                        <p class="text--p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam efficitur lectus at tempor posuere. Proin quis tincidunt nibh. Ut suscipit risus sem, non aliquam augue lobortis vitae. Nullam quam turpis, dignissim eu elementum sed, pretium at augue. Aliquam porta id magna eu ullamcorper.
                        </p>
                        <div class="mt-10">
                            <h5 class="text--h5">Nombre del testimonio </h5>
                            <h5 class="text--h5">Empresa</h5>
                        </div>
                    </li>
                    <li class="splide__slide p-9 text-white rounded-xl bg-black">
                        <p class="text--p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam efficitur lectus at tempor posuere. Proin quis tincidunt nibh. Ut suscipit risus sem, non aliquam augue lobortis vitae. Nullam quam turpis, dignissim eu elementum sed, pretium at augue. Aliquam porta id magna eu ullamcorper.
                        </p>
                        <div class="mt-10">
                            <h5 class="text--h5">Nombre del testimonio </h5>
                            <h5 class="text--h5">Empresa</h5>
                        </div>
                    </li>
                    <li class="splide__slide p-9 text-white rounded-xl bg-black">
                        <p class="text--p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam efficitur lectus at tempor posuere. Proin quis tincidunt nibh. Ut suscipit risus sem, non aliquam augue lobortis vitae. Nullam quam turpis, dignissim eu elementum sed, pretium at augue. Aliquam porta id magna eu ullamcorper.
                        </p>
                        <div class="mt-10">
                            <h5 class="text--h5">Nombre del testimonio </h5>
                            <h5 class="text--h5">Empresa</h5>
                        </div>
                    </li>
                    <li class="splide__slide p-9 text-white rounded-xl bg-black">
                        <p class="text--p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam efficitur lectus at tempor posuere. Proin quis tincidunt nibh. Ut suscipit risus sem, non aliquam augue lobortis vitae. Nullam quam turpis, dignissim eu elementum sed, pretium at augue. Aliquam porta id magna eu ullamcorper.
                        </p>
                        <div class="mt-10">
                            <h5 class="text--h5">Nombre del testimonio </h5>
                            <h5 class="text--h5">Empresa</h5>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="splide__arrows splide__arrows--ltr">
                <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide" aria-controls="splide01-track">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide" aria-controls="splide01-track">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>

    <section class="bg-black py-10 px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="text--h2 text-white text-center mb-10">Proceso de trabajo</h2>
            <div class="max-w-4xl mx-auto mb-10">
                <h3 class="text--h3 text-white text-center mb-5 animated fadeIn" id="titleProceso">Kick-Off</h3>
                <p class="text--p text-white animated fadeIn" id="descriptionProceso">El equipo asignado por Deskrive para el desarrollo de la aplicación web, se encarga de la planificación de todo el proyecto, se monta el proyecto en el Deskrive Framework para planificar todos los módulos que requerirá la aplicación web y la arquitectura de la misma.</p>
            </div>
            <div class="relative">
                <div class="contenedor-linea"></div>
                <div class="flex justify-between relative">
                    <div class="proceso__item proceso--active proceso__item--first" id="kickOff">
                        <p class="text-base">Kick-Off</p>
                        <button class="btn--proceso" onclick="setProcesoDeTrabajo('kickOff')"></button>
                        <span></span>
                    </div>
                    <div class="proceso__item" id="planeacion">
                        <span></span>
                        <button class="btn--proceso" onclick="setProcesoDeTrabajo('planeacion')"></button>
                        <p class="text-base">Planeación</p>
                    </div>
                    <div class="proceso__item" id="wireframe">
                        <p class="text-base">Wireframe</p>
                        <button class="btn--proceso" onclick="setProcesoDeTrabajo('wireframe')"></button>
                        <span></span>
                    </div>
                    <div class="proceso__item" id="diseno">
                        <span></span>
                        <button class="btn--proceso" onclick="setProcesoDeTrabajo('diseno')"></button>
                        <p class="text-base">Diseño</p>
                    </div>
                    <div class="proceso__item" id="desarrollo">
                        <p class="text-base">Desarrollo</p>
                        <button class="btn--proceso" onclick="setProcesoDeTrabajo('desarrollo')"></button>
                        <span></span>
                    </div>
                    <div class="proceso__item" id="qa">
                        <span></span>
                        <button class="btn--proceso" onclick="setProcesoDeTrabajo('qa')"></button>
                        <p class="text-base">QA’s y pruebas.</p>
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

        </div>
    </section>

    <!-- Seccion tecnologias que usamos -->
    <section class="max-w-7xl mx-auto py-6">
        <h2 class="text--h2 text-center mb-6">Tecnologías que utilizamos</h2>
        <div id="carouselTecnologias" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_html.png" alt="logo html" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_js.png" alt="logo js" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_php.png" alt="logo php" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_net.png" alt="logo net" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_reactjs.png" alt="logo react" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_shopify.png" alt="logo shopify" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_figma.png" alt="logo figma" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_tailwind.png" alt="logo tailwind" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_node.png" alt="logo node" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/logo_tiendanube.png" alt="logo tiendanube" class="w-full">
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
        perPage: 4,
        focus: 'center',
        perMove: 1,
        isNavigation: false,
        autoScroll: {
            speed: 1,
        },
    });

    splide.mount();

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

    var carouselTecnologias = new Splide('#carouselTecnologias', {
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
                perPage: 6,
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
    carouselTecnologias.mount();

    var carouselOpinionesClientes = new Splide('#carouselOpinionesClientes', {
        // arrows: false,
        pagination: false,
        type: 'loop',
        gap: '1.6rem',
        perPage: 3,
        perMove: 1,
        isNavigation: false,
        autoScroll: {
            speed: 1,
        },
        breakpoints: {
            1024: {
                perPage: 2,
            },
            768: {
                perPage: 1,
                arrows: false,
                pagination: true,
            },
        }
    });
    carouselOpinionesClientes.mount();
</script>

<?php include 'partials/footer.php'; ?>