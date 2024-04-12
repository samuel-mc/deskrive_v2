<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <section class="max-w-7xl mx-auto py-16 px-4 md:relative">
        <div class="rounded-xl md:border-4 md:border-black px-4 md:px-24 py-10 md:bg-light_grey">
            <header>
                <h1 class="text--h1 text-center mb-5">¡Gracias por contactarnos!</h1>
                <p class="text--p md:text-center">
                    En breve uno de nuestros especialistas en desarrollo web se pondrá en contacto contigo por medio
                    de <span class="text-dark_green">correo electrónico</span> o <span class="text-dark_green">WhatsApp</span>.
                    <span class="font-bold">Puedes agendar una reunión directamente con nuestros especialistas.</span>
                </p>
            </header>
            <main class="mt-8 md:mb-32">
                <h2 class="text--h2 text-center">Agenda una reunión con nosotros</h2>
            </main>
        </div>
        <div class="md:relative md:-top-48" id="agendaCalendly">
            <!-- Principio del widget integrado de Calendly -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/deskrive/meetnew?primary_color=2ecc71" style="min-width:320px;height:700px;"></div>
            <!-- Final del widget integrado de Calendly -->
        </div>
    </section>
</main>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>

<?php include 'partials/footer.php'; ?>