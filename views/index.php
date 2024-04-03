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
</main>
<?php include 'partials/footer.php'; ?>