<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <section class="max-w-7xl mx-auto md:py-16 md:px-4 mb-10 mb:mb-0">
        <div class="md:rounded-xl md:border-4 md:border-black px-6 md:px-24 py-10 bg-light_grey">
            <supertitle class="text--supertitle text-base md:text-xl mb-5">Formulario Deskrive Labs</supertitle>
            <h1 class="text--h1 mb-5 md:mb-10">¿Quieres desarrollar un producto? <br> <span class="text-dark_green">Te ayudamos a desarrollarlo</span></h1>
            <p class="text--p my-5 md:hidden">
                En Deskrive, no solo creamos aplicaciones; damos vida a sueños. Nuestro Product Studio es el escenario donde tu visión se convierte en una experiencia tangible. Desde el concepto inicial hasta la implementación completa, estamos comprometidos a hacer que tu idea cobre vida de manera espectacular.
            </p>
            <form action="">
                <h3 class="text--h3">Información de contacto</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4">
                    <input type="text" class="input--grey my-2 w-full" placeholder="Nombre completo">
                    <input type="email" class="input--grey my-2 w-full" placeholder="Correo electrónico">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4">
                    <input type="text" class="input--grey my-2 w-full" placeholder="Empresa">
                    <input type="tel" class="input--grey my-2 w-full" placeholder="Teléfono">
                </div>
                <div class="mb-16">
                    <textarea name="" id="" cols="30" rows="10" class="input--grey my-2 w-full" placeholder="Cuéntanos sobre tu proyecto"></textarea>
                </div>
                <div>
                    <fieldset class="mb-8">
                        <legend class="text--h3 mb-5">¿En qué solución te encuentras interesado?</legend>
                        <div class="flex flex-col md:flex-row">
                            <div class="m-1">
                                <input type="radio" id="appWeb" name="solucion" value="appWeb" />
                                <label class="text--p" for="appWeb">Aplicación web</label>
                            </div>
                            <div class="m-1">
                                <input type="radio" id="appIOS" name="solucion" value="appIOS" />
                                <label class="text--p" for="appIOS">Aplicación IOS</label>
                            </div>
                            <div class="m-1">
                                <input type="radio" id="appAndroid" name="solucion" value="appAndroid" />
                                <label class="text--p" for="appAndroid">Aplicación Android</label>
                            </div>
                            <div class="m-1">
                                <input type="radio" id="desarrolloSoftware" name="solucion" value="desarrolloSoftware" />
                                <label class="text--p" for="desarrolloSoftware">Desarrollo de software</label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="mb-8">
                        <legend class="text--h3 mb-5">¿Cómo puede Deskrive ayudar a tu idea?</legend>
                        <div class="flex flex-col md:flex-row">
                            <div class="m-1">
                                <input type="radio" id="completo" name="tipoAyuda" value="completo" />
                                <label class="text--p" for="completo">Servicio completo</label>
                            </div>
                            <div class="m-1">
                                <input type="radio" id="prototipo" name="tipoAyuda" value="prototipo" />
                                <label class="text--p" for="prototipo">Prototipo</label>
                            </div>
                            <div class="m-1">
                                <input type="radio" id="mvp" name="tipoAyuda" value="mvp" />
                                <label class="text--p" for="mvp">MVP</label>
                            </div>
                            <div class="m-1">
                                <input type="radio" id="existente" name="tipoAyuda" value="existente" />
                                <label class="text--p" for="existente">Con un producto existente</label>
                            </div>
                    </fieldset>
                    <fieldset class="mb-8">
                        <legend class="text--h3 mb-5">¿Cuál es tu presupuesto asignado?</legend>
                        <div class="flex flex-col md:flex-row">
                            <div class="m-1">
                                <input type="radio" id="menos200" name="presupuesto" value="menos200" />
                                <label class="text--p" for="menos200">Menos de $200K</label>
                            </div>
                            <div class="m-1">
                                <input type="radio" id="200a500" name="presupuesto" value="200a500" />
                                <label class="text--p" for="200a500">$200K a $500K</label>
                            </div>
                            <div class="m-1">
                                <input type="radio" id="500a1M" name="presupuesto" value="500a1M" />
                                <label class="text--p" for="500a1M">$500K a $1M</label>
                            </div>
                            <div class="m-1">
                                <input type="radio" id="mas1M" name="presupuesto" value="mas1M" />
                                <label class="text--p" for="mas1M">Más de $1M</label>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="flex flex-col-reverse md:flex-row p-1">
                    <div class="mt-8 md:mt-0 md:mr-8">
                        <button class="btn btn--yellow" type="button">
                            Enviar solicitud
                        </button>
                    </div>
                    <div class="md:max-w-xl">
                        <p class="text--p">A nosotros tampoco nos gusta el SPAM, en caso de no tener respuesta únicamente recibirás un máximo de 3 correos y 2 mensajes de WhatsApp. Consulta tu bandeja de SPAM en caso de no recibir un correo de contacto. <span class="font-bold">Si odias los formularios, puedes escribirnos a hola@deskrive.com.</span></p>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>

<?php include 'partials/footer.php'; ?>