const toggleShowMenu = () => {
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenu.classList.toggle('notShowed');
}

const procesos = {
    'kickOff': {
        title: 'Kick-Off',
        desctiption: 'El equipo asignado por Deskrive para el desarrollo de la aplicación web, se encarga de la planificación de todo el proyecto, se monta el proyecto en el Deskrive Framework para planificar todos los módulos que requerirá la aplicación web y la arquitectura de la misma.'
    },
    'planeacion': {
        title: 'Planeación',
        desctiption: 'El equipo asignado por Deskrive para el desarrollo de la aplicación web, se encarga de la planificación de todo el proyecto, se monta el proyecto en el Deskrive Framework para planificar todos los módulos que requerirá la aplicación web y la arquitectura de la misma.'
    },
    'wireframe': {
        title: 'Wireframe',
        desctiption: 'El equipo de desarrollo de Deskrive en conjunto con el equipo de diseño y el cliente se encargará de realizar el prototipado y wireframe de la aplicación web, así como la creación del flujo de datos y arquitectura de la base de datos. Esta etapa es importante para que se definan todas las funcionalidades que requiere la aplicación web y están presentes en la cotización entregada al cliente.'
    },
    'diseno': {
        title: 'Diseño',
        desctiption: 'Una vez aprobado el wireframe, flujo de datos y prototipo por el cliente, el equipo de diseño se encargará de realizar el diseño de interfaz de la aplicación web, diseño gráfico, de iconos, edición de imágenes y toda la parte visual de la interfaz. El cliente podrá ver en tiempo real el trabajo realizado por los diseñadores por medio de un link en la plataforma Figma. Se establecerán varias reuniones virtuales para terminar el diseño en conjunto con el cliente, no hay límite en el número de cambios que el cliente puede hacer en esta etapa. Es importante contar con la aprobación definitiva del cliente para pasar a la etapa de desarrollo.'
    },
    'desarrollo': {
        title: 'Desarrollo',
        desctiption: 'Una vez que el cliente aprueba el diseño de la aplicación web, el equipo de desarrollo Front-End se encargará de maquetar toda la interfaz en código puro con los lenguajes de programación y tecnologías seleccionadas para el proyecto. Desarrollaremos una interfaz completamente funcional y responsiva para una experiencia de usuario intuitiva. De la misma forma, el equipo de desarrollo Back- End se encargará de desarrollar todas las funcionalidades, módulos y lógica de la aplicación web.'
    },
    'qa': {
        title: 'QA’s y pruebas',
        desctiption: 'En esta etapa el equipo de QA’s (Quality Assurance) se encarga de realizar pruebas en la plataforma para verificar todas las funcionalidades. El QA es un proceso de aseguramiento de calidad que implica la revisión y prueba exhaustiva sistema o software desarrollado para detectar y corregir errores, fallos o defectos antes de que se ponga en producción y se haga público. En el servicio de QA se verifican diferentes aspectos, como la funcionalidad, la seguridad, la compatibilidad, el rendimiento, la usabilidad y la accesibilidad del sistema desarrollado.'
    },
    'lanzamiento': {
        title: 'Lanzamiento',
        desctiption: 'En esta etapa se hacen las configuraciones del servidor de producción del cliente, se monta la base de datos y se lanza la aplicación web en modo “Beta” para que los usuarios de la aplicación web puedan comenzar a utilizarla.'
    },
    'mantenimiento': {
        title: 'Mantenimiento y soporte',
        desctiption: 'Brindamos servicio de mantenimiento y soporte a la plataforma web desarrollada, con esto, nos aseguramos de mantener actualizado, seguro, y optimizada la plataforma web, así como solucionar cualquier error en programación que pudiera presentar.'
    },

};

const setProcesoDeTrabajo = (procesoSeleccionado) => {
    const proceso = procesos[procesoSeleccionado];
    
    // Oculta y actualiza título del proceso con animación de salida
    const titleProceso = document.getElementById('titleProceso');
    titleProceso.classList.add('fadeOut');
    setTimeout(() => {
        titleProceso.innerHTML = proceso.title;
        titleProceso.classList.remove('fadeOut');
        titleProceso.classList.add('fadeIn');
        titleProceso.style.display = 'block';
    }, 500); // 500ms es la duración de la animación

    // Oculta y actualiza descripción del proceso con animación de salida
    const descriptionProceso = document.getElementById('descriptionProceso');
    descriptionProceso.classList.add('fadeOut');
    setTimeout(() => {
        descriptionProceso.innerHTML = proceso.desctiption || 'No se encontró descripción para este proceso';
        descriptionProceso.classList.remove('fadeOut');
        descriptionProceso.classList.add('fadeIn');
        descriptionProceso.style.display = 'block';
    }, 500); // 500ms es la duración de la animación

    // Desactiva clases de proceso activo en todos los elementos
    const proceso__items = document.querySelectorAll('.proceso__item');
    proceso__items.forEach(item => {
        item.classList.remove('proceso--active');
    });

    // Activa clase de proceso activo en el elemento seleccionado
    const proceso__item = document.getElementById(procesoSeleccionado);
    if (proceso__item) {
        proceso__item.classList.add('proceso--active');
    } else {
        console.error('El elemento de proceso seleccionado no existe');
    }
}