<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>
    <!-- Seccion hero -->
    <section class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 p-4 md:p-10" id="">
        <div>
            <supertitle class="text--supertitle font-bold">Desarrollo de eCommerce</supertitle>
            <h1 class="text--h2 text-3xl md:text-4xl my-3">Elevando Tu Comercio</h1>
            <h1 class="text--h2 text-3xl md:text-4xl mb-3 text-dark_green"> al Siguiente Nivel</h1>
            <div class="mb-4">
                <p class="text--p font-bold mb-3">Experiencias únicas de compras para tus clientes.</p>
                <p class="text--p font-bold mb-3">Shopify, Woocommerce o ecommerce a la medida.</p>
                <p class="text--p font-bold mb-3">Integraciones con Meta Pixel y Google Shopping.</p>
            </div>
            <p class="text--p mb-4">
                En Deskrive, diseñamos experiencias de compra en línea excepcionales. Desde el diseño de la tienda hasta la gestión de pedidos, te cubrimos en cada paso. Convierte visitantes en clientes leales con nuestro enfoque estratégico en el desarrollo de eCommerce.
            </p>
                <button class="btn btn--black font-semibold">
                    Agendar una reunión <i class="fas fa-arrow-right pl-5"></i>
                </button>
        </div>
        <div>
            <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/img_hero.png" alt="imagen" class="w-full max-w-md mx-auto hidden md:block">
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
                    <a class="border-b-2 border-transparent" href="#solucionSection">Solución integral</a>
                </li>
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 focus:bg-black focus:text-white transition-all">
                    <a class="border-b-2 border-transparent" href="#porqueSection">¿Por qué Deskrive?</a>
                </li>
                <li class="menu-item rounded-full px-4 py-3 lg:hover:bg-gray-300 focus:bg-black focus:text-white transition-all">
                    <a class="border-b-2 border-transparent" href="#integracionesExitoSection">Integraciones MKT</a>
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
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/logo_ardysslife.png" alt="logo ardysslife" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/logo_talleres.png" alt="logo talleres" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/logo_edenika.png" alt="logo edenika" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/logo_theseatco.png" alt="logo theseatco" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/logo_rodhe.png" alt="logo rodhe" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/logo_evergo.png" alt="logo evergo" class="w-full">
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
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/shopify.png" alt="landing" class="w-full">
                        <h3 class="text--h3">Shopify y WooCommerce</h3>
                    </div>
                    <p class="text--p">
                    Potenciamos tu presencia en línea con nuestra experiencia en el desarrollo de tiendas eCommerce en plataformas líderes como Shopify y WooCommerce. Desde la configuración inicial hasta el lanzamiento, te ayudamos a crear una tienda en línea profesional y funcional que impulse el crecimiento de tu negocio.
                    </p>
                    <div class="flex gap-2 flex-col lg:flex-row text--p items-center">
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Shopify</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">WooCommerce</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Elementor</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/metaPixel.png" alt="Wordpress" class="w-full">
                        <h3 class="text--h3">Meta Pixel y Google</h3>
                    </div>
                    <p class="text--p">
                    Maximiza el rendimiento de tu eCommerce con nuestra integración de Meta Pixel y Google Suite. Obtén insights sobre el comportamiento de tus usuarios y optimiza tus estrategias de marketing con datos precisos y detallados. Te ayudamos a aprovechar al máximo estas poderosas herramientas e impulsar el éxito de tu negocio en línea.
                    </p>
                    <div class="flex gap-2 flex-col lg:flex-row text--p items-center">
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Personalizada</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Propiedad de código</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex flex-col justify-between">
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/metaPixel.png" alt="Wordpress" class="w-full">
                        <h3 class="text--h3">Meta Pixel y Google</h3>
                    </div>
                    <p class="text--p">
                    Maximiza el rendimiento de tu eCommerce con nuestra integración de Meta Pixel y Google Suite. Obtén insights sobre el comportamiento de tus usuarios y optimiza tus estrategias de marketing con datos precisos y detallados. Te ayudamos a aprovechar al máximo estas poderosas herramientas e impulsar el éxito de tu negocio en línea.
                    </p>
                    <div class="flex gap-2 flex-col xl:flex-row text--p items-center  whitespace-nowrap">
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Meta Pixel</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Analytics</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Tag Manager</span>
                        <span class="btn--white rounded-full px-4 py-1 border border-black-500">Ads</span>
                    </div>
                </div>
            </main>
        </div>
    </section>



    <!-- Seccion caracteristicas -->
    <section class="max-w-7xl mx-6 xl:mx-auto bg-light_green py-7 px-4 text-white" id="caracteristicasSection">
        <header class="max-w-3xl text-center mx-auto mb-9">
            <supertitle class="text--supertitle font-bold">Características del servicio</supertitle>
            <h2 class="text--h2 my-3">Innovación eCommerce a tu alcance</h2>
        </header>
        <main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between">
                    <div>
                        <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/disenoMedida.png" alt="Diseño personalizado y a la medida." class="w-20">
                    </div>
                    <h4 class="text--h4 font-bold">Diseño personalizado y a la medida.</h4>
                </div>
                <p class="text--p">
                Descubre la esencia única de tu negocio con nuestro diseño personalizado y a la medida para eCommerce, creamos soluciones digitales que reflejan la identidad de tu marca y se adaptan perfectamente a tus objetivos comerciales.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/fronteraTec.png" alt="Liderando la frontera tecnológica" class="w-20">
                    <h4 class="text--h4 font-bold">Liderando la frontera tecnológica</h4>
                </div>
                <p class="text--p">
                Nuestro equipo profesional lidera la vanguardia en la exploración y prueba de las últimas innovaciones en eCommerce. Desde tecnología de pasarelas de pago hasta comercio móvil.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/experienciaUsuario.png" alt="Experiencia de usuario excepcional" class="w-32">
                    <h4 class="text--h4 font-bold">Experiencia de usuario excepcional</h4>
                </div>
                <p class="text--p">
                En Deskrive, nos comprometemos a ofrecer una experiencia de usuario excepcional para los compradores de tu eCommerce. Desde la navegación intuitiva hasta el proceso de compra cada aspecto está diseñado para garantizar la máxima satisfacción del cliente.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/pasarelasPago.png" alt="Avanzadas pasarelas de pago." class="w-8">
                    <h4 class="text--h4 font-bold">Avanzadas pasarelas de pago.</h4>
                </div>
                <p class="text--p">
                Descubre la comodidad y seguridad de nuestras avanzadas pasarelas de pago. En Deskrive, ofrecemos soluciones de pago diseñadas para optimizar la experiencia del usuario y garantizar transacciones seguras en tu eCommerce.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/disenoResponsivo.png" alt="Diseño responsivo" class="w-20">
                    <h4 class="text--h4 font-bold">Diseño responsivo</h4>
                </div>
                <p class="text--p">
                Ofrecemos un desarrollo responsivo que garantice una experiencia fluida de compra en cualquier dispositivo, celulares, tabletas y computadoras, nuestros eCommerce están desarrollados para que los clientes puedan comprar desde cualquier lugar.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col justify-between">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/sistemaGestion.png" alt="sistema de gestión de contenidos" class="w-16">
                    <h4 class="text--h4 font-bold">Sistema de gestión de contenidos</h4>
                </div>
                <p class="text--p">
                Tu sitio web será amigable y se llevará bien con todos los navegadores, desde Chrome hasta Firefox, Safari y Edge. No importa cuál prefieras, tu sitio web siempre lucirá y funcionará de manera excepcional.
                </p>
            </div>
        </main>
    </section>


    <!-- Seccion solucion integral -->
    <section class="max-w-7xl mx-auto py-6 px-2 bg-black text-white mt-40 lg:sticky" id="solucionSection">
        <main class="flex flex-col-reverse md:grid gap-6 md:grid-cols-2">
            <div class="flex items-center justify-center lg:relative bottom-20">
                <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/solucionIntegral.png" alt="Solución integral">
            </div>
            <div class="flex flex-col gap-4 px-4 py-5 rounded-xl">
                <header class="max-w-3xl text-center mx-auto mb-9">
                    <h2 class="text--h2 mb-3">Solución integral para tu negocio</h2>            
                </header>
                <div class="flex flex-col gap-4">
                    <p class="text--p">
                        Las plataformas de eCommerce que ofrecemos, son un paquete completo para hacer crecer tu negocio en línea. Con nuestra solución completa e integral, te garantizamos que la experiencia de venta de tu negocio en línea, tanto para el cliente como operativamente, serán intuitivos y fácil de gestionar.
                    </p>
                    <ul class="list-disc">
                        <li>
                        ¿Quieres cargar detalles del producto con solo chascar los dedos? ¡Hecho! 
                        </li>
                        <li>
                        ¿Necesitas integrar tu pasarela de pago favorita? ¡Considéralo hecho! 

                        </li>
                        <li>
                        ¿Quieres saber toda la información y datos sobre lo que está sucediendo en tu eCommerce mientras tomas tu café mañanero? ¡Lo tenemos cubierto! 

                        </li>
                        <li>
                        cuando se trata de organizar tu tienda con categorías y taxonomías, ¡ni siquiera te preocupes! En resumen.
                        </li>
                    </ul>
                </div>
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
                <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/opinion.png" alt="Por que?" class="w-full">
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
                    <h3 class="text--h3 font-bold px-3">Expertos en plataformas de eCommerce</h3>
                    <p class="text--p px-3">
                    Contamos con un equipo de especialistas que tienen amplio conocimiento en las plataformas de eCommerce con WooCommerce y Shopify, nuestras tiendas en línea son desarrolladas a la medida sin utilizar plantillas o plugins ya prefabricados.
                    </p>
                </div>
            </div>
        </main>
    </section>

    <?php include 'components/hablemosProyecto.php'; ?>

    <section class="max-w-7xl mx-auto py-6 px-2" id="integracionSection">
        <header class="max-w-3xl text-center mx-auto mb-9">
            <h2 class="text--h2 mb-3">Integración con <span class="text-dark_green"> herramientas de Marketing</span> </h2>            
            <p class="text--p">
                Maximiza el Impacto de tus Campañas de Publicidad con Nuestra Suite de Integraciones de Herramientas de Marketing: Datos Precisos, Conversiones Potenciadas.
            </p>
        </header>
        <main class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div class="flex flex-col gap-4 bg-light_grey px-4 py-5 rounded-xl">
                <div class="flex flex-col gap-4">
                    <h3 class="text--h3 font-bold px-3">Suite de Google</h3>
                    <p class="text--p px-3">
                    Integramos la Google Suite para potenciar tu estrategia de marketing en línea. Conectamos Google Search Console para optimizar tu visibilidad en los resultados de búsqueda, Tag Manager para un seguimiento preciso de eventos, Google Ads para impulsar tus campañas publicitarias y Google Analytics para obtener insights valiosos sobre el comportamiento de tus usuarios. Con esta integración completa, maximizamos el rendimiento de tu eCommerce y te ayudamos a alcanzar tus objetivos comerciales de manera efectiva.
                    </p>
                    <hr class="h-px bg-gray-700 border-0">
                </div>
                <div class="flex flex-col gap-4">
                    <h3 class="text--h3 font-bold px-3">Suite de Google</h3>
                    <p class="text--p px-3">
                    Integramos las herramientas de seguimiento de Meta para potenciar tus campañas de marketing en Facebook e Instagram. Integrando el Meta Pixel y API de conversiones, te brindamos la capacidad de realizar campañas efectivas y dirigidas, maximizando el alcance y la efectividad de tus estrategias publicitarias en las plataformas de Meta.
                    </p>
                    <hr class="h-px bg-gray-700 border-0">
                </div>
                <div class="flex flex-col gap-4">
                    <h3 class="text--h3 font-bold px-3">Seguimiento de conversiones</h3>
                    <p class="text--p px-3">
                    Integramos las herramientas de seguimiento de Meta para potenciar tus campañas de marketing en Facebook e Instagram. Integrando el Meta Pixel y API de conversiones, te brindamos la capacidad de realizar campañas efectivas y dirigidas, maximizando el alcance y la efectividad de tus estrategias publicitarias en las plataformas de Meta.
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-center">
                <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/integracion.png" alt="Integracion">
            </div>
        </main>
    </section>


    <section class="max-w-7xl mx-auto py-6 px-2" id="casosExitoSection">
        <header class="max-w-3xl text-center mx-auto mb-9">
            <h2 class="text--h2 mb-3">Plataformas con las que desarrollamos</h2>
            <p class="text--p">
            Cada cliente llega con necesidades especificas, por ello, ofrecemos soluciones de desarrollo de eCommerce que se adaptan a sus requisitos específicos. Con nuestra experiencia y flexibilidad, garantizamos una solución que se ajuste perfectamente a tus objetivos comerciales y presupuesto.
            </p>
        </header>
    
        <main class="md:grid md:grid-cols-2 gap-6 flex flex-col text-white">
            <div class="rounded-xl" style="background-color: #9B5C8F;">
                <div class="flex justify-end items-center h-100 w-100 p-5">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/logo_wocommerce.png" alt="logo de la empresa" class="">
                </div>
                <div class="p-6">
                    <h3 class="text--h3">WooCommerce</h3>
                    <p class="text--p">
                    Potenciamos tu negocio en línea con una solución personalizada construida sobre la flexibilidad y la familiaridad de WooCommerce.
                    </p>
                </div>
            </div>
            <div class="rounded-xl" style="background-color: #95BF47;">
                <div class="flex justify-end items-center h-100 w-100 p-5">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/logo_shopify.png" alt="logo de la empresa" class="">
                </div>
                <div class="p-6">
                    <h3 class="text--h3">Shopify</h3>
                    <p class="text--p">
                    Transformamos tus ideas en una tienda en línea dinámica y profesional utilizando la robusta plataforma de eCommerce Shopify.
                    </p>
                </div>
            </div>
            <div class="rounded-xl col-span-2" style="background-color: #2ECC71;">
                <div class="flex justify-end items-center h-100 w-100 p-5">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/logo_ecommercemedida.png" alt="logo de la empresa" class="">
                </div>
                <div class="p-6 w-3/4">
                    <h3 class="text--h3">Plataforma a la medida</h3>
                    <p class="text--p">
                    Creamos experiencias únicas y adaptadas a las necesidades específicas de tu negocio, diseñando y desarrollando un eCommerce desde cero para satisfacer los requerimientos de funcionalidad, venta y comerciales de la empresa.
                    </p>
                </div>
            </div>
        </main>
    </section>

    <!-- Casos de exito -->
    <section class="max-w-7xl mx-auto py-6 px-2" id="casosExitoSection">
        <header class="max-w-3xl text-center mx-auto mb-9">
            <supertitle class="text--supertitle">Casos de éxito</supertitle>
            <h2 class="text--h2 mb-3">Deskrive en acción</h2>
            <p class="text--p">Descubre cómo nuestras soluciones web han transformado empresas en historias de éxito inspiradoras. Prepárate para ser inspirado por nuestros logros reales</p>
        </header>
        <!-- Cartas que se muestra en la version desktop -->
        <main class="grid grid-cols-3 gap-6 hidden md:grid">
            <div class="rounded-xl" style="background-color: #FFF9E2;">
                <div class="p-6">
                    <h3 class="text--h3">1212 Garden Supply</h3>
                    <p class="text--p">
                    1212 Garden Supply es una empresa que se dedica a la distribución y venta de productos de jardinería, desarrollamos un eCommerce como herramienta para aumentar sus ventas y presencia en línea.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/casoExito1.png" alt="logo de la empresa" class="w-9/12">
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
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/casoExito2.png" alt="logo de la empresa" class="w-9/12">
                </div>
            </div>
            <div class="rounded-xl" style="background-color: #ECFFD3;">
                <div class="p-6">
                    <h3 class="text--h3">Edenika</h3>
                    <p class="text--p">
                    Edenika es una empresa comercializadora de productos de jardinería, desarrollamos un eCommerce como herramienta para aumentar su presencia y ventas en línea.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/casoExito3.png" alt="logo de la empresa" class="w-9/12">
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
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/casoExito4.png" alt="logo de la empresa" class="w-9/12">
                </div>
            </div>
            <div class="rounded-xl col-span-2 flex" style="background-color: #E9EBED;">
                <div class="p-6">
                    <h3 class="text--h3">Talleres De Los Ballesteros</h3>
                    <p class="text--p">
                    Talleres De Los Ballesteros es una reconocida joyería con sucursales en todo México y Madrid, desarrollamos una plataforma, de eCommerce como herramienta para vender sus piezas, logrando aumentar su presencia y ventas en línea.
                    </p>
                </div>
                <div class="flex justify-end items-center h-100 w-100">
                    <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/casoExito5.png" alt="logo de la empresa" class="w-full">
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
                                <h3 class="text--h3">1212 Garden Supply</h3>
                                <p class="text--p">
                                1212 Garden Supply es una empresa que se dedica a la distribución y venta de productos de jardinería, desarrollamos un eCommerce como herramienta para aumentar sus ventas y presencia en línea.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/casoExito1.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #E9FFF9;">
                            <div class="p-6">
                                <h3 class="text--h3">The SeatCo</h3>
                                <p class="text--p">
                                The SeatCo es una empresa estadounidense de venta de productos para restaurantes y empresas de eventos. Desarrollamos una plataforma a la medida como herramienta para que los usuarios puedan cotizar.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/casoExito2.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #F9F9FF;">
                            <div class="p-6">
                                <h3 class="text--h3">Edenika</h3>
                                <p class="text--p">
                                Edenika es una empresa comercializadora de productos de jardinería, desarrollamos un eCommerce como herramienta para aumentar su presencia y ventas en línea.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/casoExito3.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #FFD0B4;">
                            <div class="p-6">
                                <h3 class="text--h3">Tecnika</h3>
                                <p class="text--p">
                                Tecnika es una empresa de servicios tecnológicos con presencia en todo el país, desarrollamos un nuevo sitio web en Wordpress para promocionar sus servicios en línea.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/casoExito4.png" alt="logo de la empresa" class="w-9/12">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="rounded-xl h-full" style="background-color: #E9EBED;">
                            <div class="p-6">
                                <h3 class="text--h3">Talleres De Los Ballesteros</h3>
                                <p class="text--p">
                                Talleres De Los Ballesteros es una reconocida joyería con sucursales en todo México y Madrid, desarrollamos una plataforma, de eCommerce como herramienta para vender sus piezas, logrando aumentar su presencia y ventas en línea.
                                </p>
                            </div>
                            <div class="flex justify-end items-center h-100 w-100">
                                <img src="<?php echo __ROOT__; ?>/public/img/servicioEcommerce/casoExito5.png" alt="logo de la empresa" class="w-9/12">
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
        $pag="serviciosEcommerce";
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