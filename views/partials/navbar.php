<!-- Header utilizado en la version desktop -->
<header class="bg-white hidden lg:block" id="desktopMenu">
    <div class="max-w-7xl mx-auto py-4 flex-col md:flex-row justify-between lg:flex border-b-4 border-light_green">
        <a href="<?php echo __ROOT__; ?>"><img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="w-60 ml-8" alt="logo de la empresa"></a>
        <nav>
            <ul class="flex text-xl items-center h-full roboto-regular text-xl">
                <li class="mr-4"><a class="border-b-2 border-transparent hover:border-yellow transition-all" href="<?php echo __ROOT__; ?>">Inicio</a></li>
                <li class="mr-4"><a class="border-b-2 border-transparent hover:border-yellow transition-all" href="<?php echo __ROOT__; ?>nosotros">Soluciones web</a></li>
                <li class="mr-4"><a class="border-b-2 border-transparent hover:border-yellow transition-all" href="<?php echo __ROOT__; ?>about">Nosotros</a></li>
                <li class="mr-4"><a class="border-b-2 border-transparent hover:border-yellow transition-all" href="<?php echo __ROOT__; ?>multimedia">Contacto</a></li>
                <li><a href="<?php echo __ROOT__; ?>#contacto" class="btn btn--yellow poppins-semibold">Agendar una reunión</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Header utilizado en la version mobile -->
<header class="bg-white py-2 px-4 lg:hidden w-full">
    <div class="flex justify-between">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="w-32 object-contain">
        <button class="btn btn--yellow p-2 w-10 h-10" onclick="toggleShowMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>
<!-- Menu desplegado al presionar el boton en header mobile -->
<nav class="h-screen notShowed fixed z-10 top-0 bg-white w-full" id="mobileMenu">
    <div class="flex flex-col justify-between px-4 py-8">
        <div class="text-right p-4">
            <button class="text-orange text-2xl" onclick="toggleShowMenu()">
                <i class="fa-solid fa-x"></i>
            </button>
        </div>
        <div class="my-10">
            <ul class="flex flex-col text-xl items-center h-full roboto-regular text-xl">
                <li class="my-2"><a class="border-b-2 border-transparent hover:border-yellow transition-all" href="<?php echo __ROOT__; ?>">Inicio</a></li>
                <li class="my-2"><a class="border-b-2 border-transparent hover:border-yellow transition-all" href="<?php echo __ROOT__; ?>nosotros">Soluciones web</a></li>
                <li class="my-2"><a class="border-b-2 border-transparent hover:border-yellow transition-all" href="<?php echo __ROOT__; ?>about">Nosotros</a></li>
                <li class="my-2"><a class="border-b-2 border-transparent hover:border-yellow transition-all" href="<?php echo __ROOT__; ?>multimedia">Contacto</a></li>
                <li class="mt-10"><a href="<?php echo __ROOT__; ?>#contacto" class="btn btn--yellow poppins-semibold">Agendar una reunión</a></li>
            </ul>
        </div>
    </div>
</nav>