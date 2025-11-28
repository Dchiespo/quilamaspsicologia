<?php
// Página de contacto → header normal (fondo blanco)
$is_home_page = false;
include __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section id="hero" class="py-24 sm:py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="max-w-4xl mx-auto text-center mb-16 sm:mb-20">
            <h1 class="text-5xl lg:text-7xl font-serif text-primary-dark mb-8 tracking-tight leading-[1.1]">
                Hablemos.
                <br />
                Da el primer paso.
            </h1>
            <p class="text-lg sm:text-xl text-secondary-gray leading-relaxed tracking-wide max-w-2xl mx-auto">
                Estoy aquí para escucharte. Completa el formulario o contáctame
                directamente. Respondo en menos de 24 horas.
            </p>
        </div>

        <!-- Grid de Formulario e Información -->
        <div class="grid lg:grid-cols-2 gap-16 max-w-7xl mx-auto">
            <!-- Información de Contacto (Orden 1 en móvil, 2 en desktop) -->
            <div class="order-1 lg:order-2 space-y-8">
                <div>
                    <h2 class="text-3xl font-serif text-primary-dark mb-6 tracking-tight">
                        Información de Contacto
                    </h2>
                    <p class="text-secondary-gray text-lg leading-relaxed tracking-wide mb-10">
                        Prefiero conocerte primero. Cada consulta es única y merece
                        una respuesta personalizada.
                    </p>
                </div>

                <!-- Detalles de Contacto -->
                <div class="space-y-8">
                    <!-- Email -->
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 border border-primary-dark flex items-center justify-center flex-shrink-0 rounded">
                            <!-- Icon: Mail -->
                            <svg class="w-5 h-5 text-primary-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 6-10 7L2 6" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl text-primary-dark mb-2 tracking-wide font-medium">
                                Email
                            </h3>
                            <a
                                href="mailto:contacto@quilamas.com"
                                class="text-secondary-gray hover:text-accent-purple transition-colors tracking-wide"
                            >
                                contacto@quilamas.com
                            </a>
                        </div>
                    </div>

                    <!-- Teléfono -->
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 border border-primary-dark flex items-center justify-center flex-shrink-0 rounded">
                            <!-- Icon: Phone -->
                            <svg class="w-5 h-5 text-primary-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-4.7-2.61 19.5 19.5 0 0 1-2.6-4.7A19.79 19.79 0 0 1 2 6.18V4a2 2 0 0 1 2-2h3.6a2 2 0 0 1 1.95 1.54l.7 4.47a2 2 0 0 1-.5 1.77L5.82 12 7.7 13.88l3.65-3.41a2 2 0 0 1 1.77-.5l4.47.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl text-primary-dark mb-2 tracking-wide font-medium">
                                Teléfono
                            </h3>
                            <a
                                href="tel:+34600000000"
                                class="text-secondary-gray hover:text-accent-purple transition-colors tracking-wide"
                            >
                                +34 600 000 000
                            </a>
                        </div>
                    </div>

                    <!-- Dirección -->
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 border border-primary-dark flex items-center justify-center flex-shrink-0 rounded">
                            <!-- Icon: MapPin -->
                            <svg class="w-5 h-5 text-primary-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl text-primary-dark mb-2 tracking-wide font-medium">
                                Dirección
                            </h3>
                            <p class="text-secondary-gray tracking-wide">
                                C/ Paz 45, 28001 Madrid
                                <br />
                                España (Citas Presenciales y Online)
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Información Adicional -->
                <div class="pt-8 border-t border-[#E5E5E5] mt-12">
                    <h3 class="text-xl text-primary-dark mb-4 tracking-wide font-medium">
                        Horario de Atención
                    </h3>
                    <div class="space-y-2 text-secondary-gray tracking-wide">
                        <p>Lunes a Viernes: 9:00 - 20:00</p>
                        <p>Sábados: 10:00 - 14:00</p>
                        <p class="text-sm pt-2">
                            * Sesiones online disponibles fuera de este horario.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Formulario de Contacto (Orden 2 en móvil, 1 en desktop) -->
            <div id="contacto-form" class="order-2 lg:order-1 scroll-mt-20">
                <div class="bg-white border border-[#E5E5E5] p-8 sm:p-10 lg:p-12 shadow-md rounded-xl">
                    <h2 class="text-3xl font-serif text-primary-dark mb-8 tracking-tight">
                        Envíame un Mensaje
                    </h2>

                    <form id="contact-form" class="space-y-6">
                        <!-- Nombre Completo -->
                        <div class="space-y-2">
                            <label
                                for="nombre"
                                class="text-primary-dark tracking-wide font-medium text-sm"
                            >
                                Nombre Completo *
                            </label>
                            <input
                                id="nombre"
                                name="nombre"
                                type="text"
                                placeholder="Tu nombre"
                                required
                                class="w-full h-12 p-3 input-style rounded"
                            />
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="space-y-2">
                            <label
                                for="email"
                                class="text-primary-dark tracking-wide font-medium text-sm"
                            >
                                Correo Electrónico *
                            </label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                placeholder="tu@email.com"
                                required
                                class="w-full h-12 p-3 input-style rounded"
                            />
                        </div>

                        <!-- Asunto -->
                        <div class="space-y-2">
                            <label
                                for="asunto"
                                class="text-primary-dark tracking-wide font-medium text-sm"
                            >
                                Asunto
                            </label>
                            <input
                                id="asunto"
                                name="asunto"
                                type="text"
                                placeholder="Motivo de consulta"
                                required
                                class="w-full h-12 p-3 input-style rounded"
                            />
                        </div>

                        <!-- Mensaje -->
                        <div class="space-y-2">
                            <label
                                for="mensaje"
                                class="text-primary-dark tracking-wide font-medium text-sm"
                            >
                                Mensaje *
                            </label>
                            <textarea
                                id="mensaje"
                                name="mensaje"
                                placeholder="Cuéntame en qué puedo ayudarte..."
                                rows="6"
                                required
                                class="w-full p-3 input-style resize-none rounded"
                            ></textarea>
                        </div>

                        <!-- Botón de Envío -->
                        <button
                            type="submit"
                            class="w-full bg-primary-dark text-white border-2 border-primary-dark hover:bg-accent-purple hover:text-white hover:border-accent-purple h-12 tracking-wide transition-all rounded-lg text-lg font-medium"
                        >
                            Enviar Mensaje
                        </button>
                        <p class="text-secondary-gray/70 text-xs text-center pt-2">
                            Al enviar, aceptas la política de privacidad.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Información Adicional (Primera Sesión) -->
<section class="py-24 sm:py-32 bg-[#FAFAFA]">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl sm:4xl lg:text-5xl font-serif text-primary-dark mb-8 tracking-tight">
                Primera Sesión Exploratoria
            </h2>
            <p class="text-lg sm:text-xl text-secondary-gray leading-relaxed tracking-wide mb-10">
                La primera sesión es un espacio de 50 minutos donde nos conocemos,
                exploramos tu situación actual y definimos si puedo acompañarte en
                tu proceso.
            </p>

            <div class="grid md:grid-cols-3 gap-8 mt-12">
                <!-- Card 1: Sin Compromiso -->
                <div class="space-y-3">
                    <div class="w-12 h-0.5 bg-accent-purple mx-auto"></div>
                    <h3 class="text-xl text-primary-dark tracking-wide font-medium">
                        Sin Compromiso
                    </h3>
                    <p class="text-secondary-gray tracking-wide">
                        Decide después si deseas continuar
                    </p>
                </div>

                <!-- Card 2: Confidencial -->
                <div class="space-y-3">
                    <div class="w-12 h-0.5 bg-accent-purple mx-auto"></div>
                    <h3 class="text-xl text-primary-dark tracking-wide font-medium">
                        Confidencial
                    </h3>
                    <p class="text-secondary-gray tracking-wide">
                        Todo lo que compartas queda protegido
                    </p>
                </div>

                <!-- Card 3: Personalizada -->
                <div class="space-y-3">
                    <div class="w-12 h-0.5 bg-accent-purple mx-auto"></div>
                    <h3 class="text-xl text-primary-dark tracking-wide font-medium">
                        Personalizada
                    </h3>
                    <p class="text-secondary-gray tracking-wide">
                        Adaptada a tus necesidades específicas
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scripts específicos de la página de contacto -->
<script>
    // Función de utilidad para scroll suave (la usa el botón "Contactar" del header)
    function scrollToSection(id) {
        const element = document.getElementById(id);
        if (element) {
            element.scrollIntoView({ behavior: "smooth" });
            setTimeout(() => {
                window.scrollBy(0, -10);
            }, 500);
        }
    }

    // Manejo del formulario de contacto (simulación de envío)
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('contact-form');
        if (form) {
            form.addEventListener('submit', (e) => {
                e.preventDefault();

                const formData = new FormData(form);
                const data = Object.fromEntries(formData.entries());
                console.log("Formulario enviado (simulación):", data);

                const submitButton = form.querySelector('button[type="submit"]');
                submitButton.textContent = "¡Mensaje Enviado!";
                submitButton.classList.add('bg-green-600', 'border-green-600', 'hover:bg-green-700');
                submitButton.classList.remove('bg-primary-dark', 'border-primary-dark', 'hover:bg-accent-purple');

                setTimeout(() => {
                    submitButton.textContent = "Enviar Mensaje";
                    submitButton.classList.remove('bg-green-600', 'border-green-600', 'hover:bg-green-700');
                    submitButton.classList.add('bg-primary-dark', 'border-primary-dark', 'hover:bg-accent-purple');
                    form.reset();
                }, 3000);
            });
        }
    });
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
