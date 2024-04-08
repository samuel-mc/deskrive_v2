<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main>
    <!-- Hero de la seccion "quienes somos" -->
    <section class="max-w-7xl mx-auto grid grid-cols-2 gap-4 p-4 md:p-10">
        <div class="col-span-2 md:col-span-1">
            <h1 class="text--h2 mb-6">¿Quiénes somos?</h1>
            <div>
                <p class="text--p mb-4">
                    Somos Deskrive, una empresa de consultoría tecnológica y de desarrollo de software comprometida en ofrecer soluciones web innovadoras y de alta calidad a nuestros clientes. Nos especializamos en los servicios de desarrollo de páginas web, eCommerce, aplicaciones web y móviles, desarrollo de sistemas para soluciones empresariales a la medida y diseño gráfico. Nuestra experiencia y enfoque en desarrollo web nos han permitido establecer una sólida base de clientes en toda la República Mexicana, Estados Unidos y Centroamérica.
                </p>
                <p class="text--p mb-1">
                    Nuestro equipo de expertos en desarrollo web está constantemente actualizado con las últimas tecnologías y tendencias del mercado. Utilizamos herramientas y lenguajes de programación de vanguardia para garantizar que cada proyecto que desarrollemos sea sólido, escalable y seguro.
                </p>
                <p class="text--p">
                    Nuestro enfoque centrado en el cliente nos permite comprender a fondo sus objetivos y necesidades, y trabajar en estrecha colaboración con ellos para crear soluciones web que se adapten perfectamente a sus necesidades.
                </p>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <img src="<?php echo __ROOT__; ?>/public/img/about/vector_aboutus.png" alt="logo de la empresa" class="w-full max-w-md hidden md:block">
        </div>
    </section>

    <!-- Banner "el team Deskrive ... " -->
    <section class="bg-light_grey mx-auto">
        <div class="max-w-7xl mx-auto p-4 md:p-10 grid grid-cols-2 gap-4">
            <div class="flex justify-center items-center">
                <img src="<?php echo __ROOT__; ?>/public/img/about/vector_aboutus2.png" alt="team Deskrive" class="w-full max-w-sm hidden md:block">
            </div>
            <div class="col-span-2 md:col-span-1">
                <h2 class="text--h2 mb-4">El Dream Team <span class="text-dark_green">de Deskrive</span></h2>
                <p class="text--p">
                    En Deskrive, contamos con un equipo altamente capacitado y apasionado de desarrolladores especializados en tecnologías web. Nuestro equipo está formado por expertos de desarrollo Back-End, Front-End, Fullstack, arquitectos de software y diseñadores UI y UX. Personas apasionadas por el desarrollo web, el diseño y la tecnología, con una amplia experiencia en desarrollo de soluciones web a la medida.
                </p>
            </div>
        </div>
    </section>

    <!-- Banner "nuestros valores" -->
    <section class="bg-light_green">
        <div class="max-w-7xl mx-auto p-4 py-10">
            <h2 class="text--h2 text-white text-center mb-10">Nuestos valores</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 px-28 md:px-4">
                <div class="rounded-xl bg-white aspect-square px-4 pt-10 pb-5 grid">
                    <img src="<?php echo __ROOT__; ?>/public/img/about/icono_calidad.png" alt="icono de calidad" class="w-full place-self-center max-w-28">
                    <div class="flex justify-center items-end">
                        <h5 class="text--h5">Calidad</h5>
                    </div>
                </div>
                <div class="rounded-xl bg-white aspect-square px-4 pt-10 pb-5 grid">
                    <img src="<?php echo __ROOT__; ?>/public/img/about/icono_innovacion.png" alt="icono de innovación" class="w-full place-self-center max-w-12">
                    <div class="flex justify-center items-end">
                        <h5 class="text--h5">Innovación</h5>
                    </div>
                </div>
                <div class="rounded-xl bg-white aspect-square px-4 pt-10 pb-5 grid">
                    <img src="<?php echo __ROOT__; ?>/public/img/about/icono_transparencia.png" alt="icono de transparencia" class="w-full place-self-center max-w-28">
                    <div class="flex justify-center items-end">
                        <h5 class="text--h5">Transparencia</h5>
                    </div>
                </div>
                <div class="rounded-xl bg-white aspect-square px-4 pt-10 pb-5 grid">
                    <img src="<?php echo __ROOT__; ?>/public/img/about/icono_colaboracion.png" alt="icono de colaboración" class="w-full place-self-center max-w-16">
                    <div class="flex justify-center items-end">
                        <h5 class="text--h5">Colaboración</h5>
                    </div>
                </div>
                <div class="rounded-xl bg-white aspect-square px-4 pt-10 pb-5 grid">
                    <img src="<?php echo __ROOT__; ?>/public/img/about/icono_compromiso.png" alt="icono de compromiso" class="w-full place-self-center max-w-14">
                    <div class="flex justify-center items-end">
                        <h5 class="text--h5">Compromiso</h5>
                    </div>
                </div>
                <div class="rounded-xl bg-white aspect-square px-4 pt-10 pb-5 grid">
                    <img src="<?php echo __ROOT__; ?>/public/img/about/icono_eficiencia.png" alt="icono de eficiencia" class="w-full place-self-center max-w-14">
                    <div class="flex justify-center items-end">
                        <h5 class="text--h5">Eficiencia</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner "mision y vision" -->
    <section class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 p-4 md:p-10">
        <div>
            <h2 class="text--h2 mb-8">Nuestra misión</h2>
            <p class="text--p">
                En Deskrive, contamos con un equipo altamente capacitado y apasionado de desarrolladores especializados en tecnologías web. Nuestro equipo está formado por expertos de desarrollo Back-End, Front-End, Fullstack, arquitectos de software y diseñadores UI y UX. Personas apasionadas por el desarrollo web, el diseño y la tecnología, con una amplia experiencia en desarrollo de soluciones web a la medida.
            </p>
        </div>
        <div>
            <h2 class="text--h2 mb-8">Nuestra visión</h2>
            <p class="text--p">
                En Deskrive, contamos con un equipo altamente capacitado y apasionado de desarrolladores especializados en tecnologías web. Nuestro equipo está formado por expertos de desarrollo Back-End, Front-End, Fullstack, arquitectos de software y diseñadores UI y UX. Personas apasionadas por el desarrollo web, el diseño y la tecnología, con una amplia experiencia en desarrollo de soluciones web a la medida.
            </p>
        </div>
    </section>

    <!-- Banner "imagen personas reunidas" -->
    <section>
        <img src="<?php echo __ROOT__; ?>/public/img/about/img_personas_reunidas.png" alt="imagen de personas reunidas" class="w-full">
    </section>

</main>
<?php include 'partials/footer.php'; ?>