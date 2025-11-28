<?php
// Home: header transparente sobre la imagen
$is_home_page = true;
include __DIR__ . '/includes/header.php';
?>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(6px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.35s ease-out;
    }
</style>

<!-- Hero Section with Background Image -->
<section class="relative min-h-screen flex flex-col pt-24 sm:pt-28">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img
            src="https://images.unsplash.com/photo-1649508874905-e0d08ad58fa2?q=80&w=1176&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Hero background"
            class="w-full h-full object-cover"
            onerror="this.onerror=null;this.src='https://placehold.co/1176x1600/1A1A1A/FFFFFF?text=Fondo+Quilamas'" />
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/40 to-black/60"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 flex-1 flex items-center">
        <div class="container mx-auto px-4 sm:px-8 lg:px-16 py-12 sm:py-20 pb-24 sm:pb-32">
            <div class="max-w-5xl mx-auto text-center space-y-6 sm:space-y-10">
                <div class="inline-block px-4 sm:px-6 py-2 border border-white/30 backdrop-blur-sm rounded-full">
                    <p class="text-white/90 tracking-[0.2em] sm:tracking-[0.3em] uppercase text-[10px] sm:text-xs">
                        Consulta Abierta 2025
                    </p>
                </div>

                <h1 class="text-white text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-serif leading-[1.1] sm:leading-[1.05] tracking-tight px-4">
                    Equilibrio Mental
                    <br />
                    para una Vida Plena
                </h1>

                <p class="text-white/90 text-base sm:text-lg md:text-xl lg:text-2xl max-w-3xl mx-auto leading-relaxed tracking-wide px-4">
                    Un espacio de calma y profesionalidad donde la psicología se
                    encuentra con la empatía. Terapia basada en la evidencia.
                </p>

                <div class="pt-4 sm:pt-8 px-4">
                    <a
                        href="servicios.php"
                        class="bg-white text-black hover:bg-accent-purple hover:text-white px-8 sm:px-12 py-5 sm:py-7 h-auto text-base sm:text-lg tracking-wide transition-all w-full sm:w-auto rounded-lg shadow-xl hover:shadow-2xl inline-flex items-center justify-center">
                        Explorar Servicios
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Card Section - Overlapping -->
    <div id="servicios" class="relative z-20 container mx-auto px-4 sm:px-8 lg:px-16 pb-8 sm:pb-16 mt-[-80px] sm:mt-[-100px]">
        <div class="bg-white shadow-2xl border-0 rounded-xl">
            <div class="p-6 sm:p-10 lg:p-16">
                <div class="text-center mb-8 sm:mb-12">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-primary-dark mb-4 sm:mb-6 tracking-tight px-2">
                        Psicología Integradora y Humana
                    </h2>
                    <p class="text-secondary-gray text-base sm:text-lg tracking-wide px-2">
                        Acompañamiento personalizado adaptado a tus necesidades y
                        ritmo vital
                    </p>
                </div>

                <!-- Custom Tabs -->
                <div class="max-w-5xl mx-auto">
                    <!-- Tab Headers -->
                    <div id="service-tabs-header" class="grid grid-cols-3 gap-0 mb-8 sm:mb-12 border-b border-gray-200">
                        <button
                            data-service="individual"
                            class="service-tab-button py-4 sm:py-6 text-center transition-all relative text-primary-dark">
                            <div class="flex flex-col items-center gap-2 sm:gap-3">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                    <circle cx="12" cy="7" r="4" />
                                </svg>
                                <span class="text-sm sm:text-base lg:text-lg tracking-wide">Individual</span>
                            </div>
                            <div class="service-tab-indicator absolute bottom-0 left-0 right-0 h-0.5 bg-primary-dark"></div>
                        </button>

                        <button
                            data-service="pareja"
                            class="service-tab-button py-4 sm:py-6 text-center transition-all relative border-l border-r border-gray-100 text-gray-400 hover:text-gray-600">
                            <div class="flex flex-col items-center gap-2 sm:gap-3">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                                <span class="text-sm sm:text-base lg:text-lg tracking-wide">Pareja</span>
                            </div>
                            <div class="service-tab-indicator absolute bottom-0 left-0 right-0 h-0.5 bg-primary-dark hidden"></div>
                        </button>

                        <button
                            data-service="online"
                            class="service-tab-button py-4 sm:py-6 text-center transition-all relative text-gray-400 hover:text-gray-600">
                            <div class="flex flex-col items-center gap-2 sm:gap-3">
                                <!-- Icono tipo cámara / online -->
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                                    <circle cx="12" cy="13" r="4" />
                                </svg>
                                <span class="text-sm sm:text-base lg:text-lg tracking-wide">Online</span>
                            </div>
                            <div class="service-tab-indicator absolute bottom-0 left-0 right-0 h-0.5 bg-primary-dark hidden"></div>
                        </button>
                    </div>

                    <!-- Tab Content -->
                    <div id="service-tabs-content" class="text-center max-w-3xl mx-auto py-6 sm:py-8 px-2">
                        <div data-service="individual" class="service-content space-y-6 sm:space-y-8 animate-fade-in">
                            <h3 class="text-2xl sm:text-3xl font-serif text-primary-dark tracking-tight">
                                Terapia Individual
                            </h3>
                            <p class="text-secondary-gray text-base sm:text-lg leading-relaxed tracking-wide">
                                Un proceso de autoconocimiento profundo para gestionar
                                la ansiedad, el estrés y fortalecer tu autoestima.
                                Trabaja en tu crecimiento personal con herramientas
                                terapéuticas basadas en la evidencia.
                            </p>
                            <a
                                href="servicios.php"
                                class="border-2 border-primary-dark text-primary-dark bg-transparent hover:bg-accent-purple hover:text-white hover:border-accent-purple px-8 sm:px-10 h-11 sm:h-12 tracking-wide transition-all w-full sm:w-auto rounded-lg inline-flex items-center justify-center">
                                Ver Detalles
                            </a>

                        </div>

                        <div data-service="pareja" class="service-content hidden space-y-6 sm:space-y-8">
                            <h3 class="text-2xl sm:text-3xl font-serif text-primary-dark tracking-tight">
                                Terapia de Pareja
                            </h3>
                            <p class="text-secondary-gray text-base sm:text-lg leading-relaxed tracking-wide">
                                Herramientas efectivas para mejorar la comunicación,
                                resolver conflictos y reconectar emocionalmente. Un
                                espacio seguro para fortalecer vuestra relación.
                            </p>
                            <a
                                href="servicios.php"
                                class="border-2 border-primary-dark text-primary-dark bg-transparent hover:bg-accent-purple hover:text-white hover:border-accent-purple px-8 sm:px-10 h-11 sm:h-12 tracking-wide transition-all w-full sm:w-auto rounded-lg inline-flex items-center justify-center">
                                Ver Detalles
                            </a>

                        </div>

                        <div data-service="online" class="service-content hidden space-y-6 sm:space-y-8">
                            <h3 class="text-2xl sm:text-3xl font-serif text-primary-dark tracking-tight">
                                Terapia Online
                            </h3>
                            <p class="text-secondary-gray text-base sm:text-lg leading-relaxed tracking-wide">
                                La misma cercanía y profesionalidad desde la comodidad
                                de tu hogar, sin barreras geográficas. Sesiones por
                                videollamada con total confidencialidad.
                            </p>
                            <a
                                href="servicios.php"
                                class="border-2 border-primary-dark text-primary-dark bg-transparent hover:bg-accent-purple hover:text-white hover:border-accent-purple px-8 sm:px-10 h-11 sm:h-12 tracking-wide transition-all w-full sm:w-auto rounded-lg inline-flex items-center justify-center">
                                Ver Detalles
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Methodology Section -->
<section id="sobre-mi" class="py-16 sm:py-24 lg:py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="grid lg:grid-cols-2 gap-12 sm:gap-16 lg:gap-20 items-center max-w-7xl mx-auto">
            <!-- Image -->
            <div class="order-2 lg:order-1">
                <div class="aspect-[4/5] overflow-hidden rounded-xl shadow-lg">
                    <img
                        src="https://images.unsplash.com/photo-1524758870432-af57e54afa26?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Naturaleza"
                        class="w-full h-full object-cover"
                        onerror="this.onerror=null;this.src='https://placehold.co/1080x1350/999999/FFFFFF?text=Imagen+Metodologia'" />
                </div>
            </div>

            <!-- Content -->
            <div class="space-y-6 sm:space-y-8 order-1 lg:order-2">
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-serif text-primary-dark tracking-tight leading-[1.1]">
                    Metodología TCC Integrativa
                </h2>

                <p class="text-lg sm:text-xl text-secondary-gray leading-relaxed tracking-wide">
                    Mi enfoque se fundamenta en la
                    <strong>Terapia Cognitivo-Conductual (TCC) integrativa</strong>,
                    combinando técnicas basadas en la evidencia con un
                    acompañamiento humano y personalizado.
                </p>

                <p class="text-lg sm:text-xl text-secondary-gray leading-relaxed tracking-wide">
                    No se trata solo de hablar, sino de
                    <strong>actuar y transformar</strong> tu realidad desde la
                    primera sesión con herramientas prácticas y resultados medibles.
                </p>

                <div class="pt-4 sm:pt-6 space-y-5 sm:space-y-6">
                    <div class="flex items-start gap-3 sm:gap-4">
                        <div class="w-10 sm:w-12 h-0.5 bg-accent-purple mt-2 sm:mt-3 flex-shrink-0 rounded-full"></div>
                        <div>
                            <h4 class="text-lg sm:text-xl text-primary-dark mb-1 sm:mb-2 tracking-wide">
                                Basado en Evidencia
                            </h4>
                            <p class="text-secondary-gray text-sm sm:text-base tracking-wide">
                                Técnicas científicamente validadas
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 sm:gap-4">
                        <div class="w-10 sm:w-12 h-0.5 bg-accent-purple mt-2 sm:mt-3 flex-shrink-0 rounded-full"></div>
                        <div>
                            <h4 class="text-lg sm:text-xl text-primary-dark mb-1 sm:mb-2 tracking-wide">
                                Enfoque Práctico
                            </h4>
                            <p class="text-secondary-gray text-sm sm:text-base tracking-wide">
                                Herramientas aplicables en tu día a día
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 sm:gap-4">
                        <div class="w-10 sm:w-12 h-0.5 bg-accent-purple mt-2 sm:mt-3 flex-shrink-0 rounded-full"></div>
                        <div>
                            <h4 class="text-lg sm:text-xl text-primary-dark mb-1 sm:mb-2 tracking-wide">
                                Acompañamiento Humano
                            </h4>
                            <p class="text-secondary-gray text-sm sm:text-base tracking-wide">
                                Espacio seguro sin juicio
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section id="proceso" class="py-16 sm:py-24 lg:py-32 bg-[#FAFAFA]">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="text-center mb-12 sm:mb-16 lg:mb-20">
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-serif text-primary-dark mb-4 sm:mb-6 tracking-tight px-2">
                El Proceso
            </h2>
            <p class="text-lg sm:text-xl text-secondary-gray max-w-2xl mx-auto tracking-wide px-4">
                Un camino estructurado diseñado para tu transformación
            </p>
        </div>

        <!-- ProcesoSlider Component -->
        <div id="proceso-slider" class="max-w-5xl mx-auto space-y-8 sm:space-y-12">
            <!-- Timeline -->
            <div class="relative px-2">
                <!-- Línea horizontal (solo en desktop) -->
                <div class="hidden md:block absolute top-6 sm:top-7 left-0 right-0 h-px bg-[#E0E0E0]"></div>

                <div id="process-steps" class="flex justify-between gap-2 sm:gap-4 md:gap-0">
                    <!-- Step 1 (Default Active) -->
                    <button data-index="0" class="process-step-button flex-1 flex flex-col items-center gap-2 sm:gap-3 group">
                        <div class="relative flex items-center justify-center">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full border-2 flex items-center justify-center transition-all bg-accent-purple border-accent-purple text-white">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 22l-4-4-4 4" />
                                    <path d="M12 2v16" />
                                    <path d="M16 4h4c1.1 0 2 .9 2 2v14c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2h4" />
                                </svg>
                            </div>
                        </div>
                        <div class="text-center space-y-0.5 sm:space-y-1">
                            <div class="text-[9px] sm:text-[11px] tracking-[0.2em] sm:tracking-[0.3em] uppercase text-[#999999]">
                                Paso 01
                            </div>
                            <div class="text-xs sm:text-sm md:text-base font-medium tracking-wide text-primary-dark">
                                Conexión y Escucha
                            </div>
                        </div>
                    </button>
                    <!-- Step 2 -->
                    <button data-index="1" class="process-step-button flex-1 flex flex-col items-center gap-2 sm:gap-3 group">
                        <div class="relative flex items-center justify-center">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full border-2 flex items-center justify-center transition-all bg-white border-[#CFCFCF] text-primary-dark group-hover:border-accent-purple">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <circle cx="12" cy="12" r="6" />
                                    <circle cx="12" cy="12" r="2" />
                                </svg>
                            </div>
                        </div>
                        <div class="text-center space-y-0.5 sm:space-y-1">
                            <div class="text-[9px] sm:text-[11px] tracking-[0.2em] sm:tracking-[0.3em] uppercase text-[#999999]">
                                Paso 02
                            </div>
                            <div class="text-xs sm:text-sm md:text-base font-medium tracking-wide text-[#999999] group-hover:text-primary-dark">
                                Exploración y Plan
                            </div>
                        </div>
                    </button>
                    <!-- Step 3 -->
                    <button data-index="2" class="process-step-button flex-1 flex flex-col items-center gap-2 sm:gap-3 group">
                        <div class="relative flex items-center justify-center">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full border-2 flex items-center justify-center transition-all bg-white border-[#CFCFCF] text-primary-dark group-hover:border-accent-purple">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M15 14c.2-1 .2-2 0-3-.3-.9-1-1.7-2.3-2.3-.6-.3-1.3-.5-2-.6-1.5-.2-2.8-.2-4.1.2-1.3.4-2.4 1.2-3.1 2.3-.7 1.1-.9 2.5-.7 4 .2 1.5.8 2.8 1.9 3.9.7.7 1.6 1.3 2.6 1.7 1.4.5 2.8.7 4.2.5 1.4-.1 2.7-.6 3.9-1.3.8-.5 1.6-1.1 2.2-1.8.8-.9 1.4-2.1 1.7-3.4.3-1.3.3-2.7 0-4-.2-1.3-.7-2.6-1.5-3.7-.8-1.1-1.8-2-3-2.6-1.2-.7-2.6-1-4-1.2-.5-.1-1-.1-1.5-.1" />
                                    <path d="M12 18V19" />
                                    <path d="M12 19a1 1 0 0 0 0 2h0a1 1 0 0 0 0-2" />
                                </svg>
                            </div>
                        </div>
                        <div class="text-center space-y-0.5 sm:space-y-1">
                            <div class="text-[9px] sm:text-[11px] tracking-[0.2em] sm:tracking-[0.3em] uppercase text-[#999999]">
                                Paso 03
                            </div>
                            <div class="text-xs sm:text-sm md:text-base font-medium tracking-wide text-[#999999] group-hover:text-primary-dark">
                                Herramientas y Transformación
                            </div>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Detalle del paso activo -->
            <div id="process-content" class="bg-white border border-[#E5E5E5] px-6 sm:px-8 md:px-10 py-8 sm:py-10 lg:py-12 shadow-sm rounded-xl">
                <div id="process-detail-0" class="process-detail space-y-3 sm:space-y-4 animate-fade-in">
                    <div class="text-[10px] sm:text-xs tracking-[0.25em] sm:tracking-[0.3em] text-[#999999] uppercase">
                        Paso 01
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-serif text-primary-dark tracking-tight">
                        Conexión y Escucha
                    </h3>
                    <p class="text-secondary-gray text-base sm:text-lg leading-relaxed tracking-wide">
                        En nuestra primera videollamada, creo un espacio seguro donde te escucho sin juicio. Comprendemos juntos tu situación única.
                    </p>
                </div>
                <div id="process-detail-1" class="process-detail space-y-3 sm:space-y-4 hidden">
                    <div class="text-[10px] sm:text-xs tracking-[0.25em] sm:tracking-[0.3em] text-[#999999] uppercase">
                        Paso 02
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-serif text-primary-dark tracking-tight">
                        Exploración y Plan
                    </h3>
                    <p class="text-secondary-gray text-base sm:text-lg leading-relaxed tracking-wide">
                        Definimos objetivos terapéuticos claros y realistas. Creamos un plan personalizado que se adapta a tu ritmo.
                    </p>
                </div>
                <div id="process-detail-2" class="process-detail space-y-3 sm:space-y-4 hidden">
                    <div class="text-[10px] sm:text-xs tracking-[0.25em] sm:tracking-[0.3em] text-[#999999] uppercase">
                        Paso 03
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-serif text-primary-dark tracking-tight">
                        Herramientas y Transformación
                    </h3>
                    <p class="text-secondary-gray text-base sm:text-lg leading-relaxed tracking-wide">
                        Aplicas estrategias prácticas. Observas cambios tangibles y consolidas tu bienestar de forma duradera.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Target Audience Section -->
<section class="py-16 sm:py-24 lg:py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="text-center mb-12 sm:mb-16 lg:mb-20">
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-serif text-primary-dark mb-4 sm:mb-6 tracking-tight px-2">
                ¿Para Quién es Esto?
            </h2>
            <p class="text-lg sm:text-xl text-secondary-gray max-w-3xl mx-auto tracking-wide px-4">
                Si te identificas con alguna de estas situaciones, puedo
                acompañarte en tu proceso de cambio
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-12 lg:gap-16 max-w-7xl mx-auto">
            <!-- Card 1 -->
            <div class="space-y-5 sm:space-y-6 group">
                <div class="aspect-[4/3] overflow-hidden rounded-xl shadow-lg">
                    <img
                        src="https://images.unsplash.com/photo-1551845728-6820a30c64e2?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Ansiedad"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        onerror="this.onerror=null;this.src='https://placehold.co/1080x810/888888/FFFFFF?text=Ansiedad'" />
                </div>

                <div class="space-y-3 sm:space-y-4 pt-2">
                    <div class="inline-flex items-center justify-center w-12 h-12 border border-primary-dark rounded-lg">
                        <svg class="w-6 h-6 text-primary-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                        </svg>
                    </div>

                    <h3 class="text-xl sm:text-2xl font-serif text-primary-dark tracking-tight">
                        Ansiedad y Estrés
                    </h3>
                    <p class="text-secondary-gray text-base sm:text-lg leading-relaxed tracking-wide">
                        Si te sientes abrumado por la preocupación constante, el
                        estrés del día a día o ataques de ansiedad que limitan tu
                        vida.
                    </p>

                    <a
                        href="servicios.php"
                        class="inline-flex items-center text-primary-dark hover:gap-3 gap-2 transition-all tracking-wide font-medium">
                        Saber más
                        <span class="text-xl leading-none">→</span>
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="space-y-5 sm:space-y-6 group">
                <div class="aspect-[4/3] overflow-hidden rounded-xl shadow-lg">
                    <img
                        src="https://images.unsplash.com/photo-1511988617509-a57c8a288659?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Autoestima"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        onerror="this.onerror=null;this.src='https://placehold.co/1080x810/AAAAAA/FFFFFF?text=Autoestima'" />
                </div>

                <div class="space-y-3 sm:space-y-4 pt-2">
                    <div class="inline-flex items-center justify-center w-12 h-12 border border-primary-dark rounded-lg">
                        <svg class="w-6 h-6 text-primary-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>

                    <h3 class="text-xl sm:text-2xl font-serif text-primary-dark tracking-tight">
                        Autoestima y Relaciones
                    </h3>
                    <p class="text-secondary-gray text-base sm:text-lg leading-relaxed tracking-wide">
                        Si buscas mejorar tu autoconcepto, establecer límites
                        saludables y construir vínculos más auténticos.
                    </p>

                    <a
                        href="servicios.php"
                        class="inline-flex items-center text-primary-dark hover:gap-3 gap-2 transition-all tracking-wide font-medium">
                        Saber más
                        <span class="text-xl leading-none">→</span>
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="space-y-5 sm:space-y-6 group sm:col-span-2 lg:col-span-1">
                <div class="aspect-[4/3] overflow-hidden rounded-xl shadow-lg">
                    <img
                        src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Burnout"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        onerror="this.onerror=null;this.src='https://placehold.co/1080x810/BBBBBB/FFFFFF?text=Profesionales'" />
                </div>

                <div class="space-y-3 sm:space-y-4 pt-2">
                    <div class="inline-flex items-center justify-center w-12 h-12 border border-primary-dark rounded-lg">
                        <!-- Icono maletín -->
                        <svg class="w-6 h-6 text-primary-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 7h16a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2z" />
                            <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" />
                            <path d="M2 13h20" />
                        </svg>
                    </div>

                    <h3 class="text-xl sm:text-2xl font-serif text-primary-dark tracking-tight">
                        Profesionales en Transición
                    </h3>
                    <p class="text-secondary-gray text-base sm:text-lg leading-relaxed tracking-wide">
                        Si estás enfrentando burnout, decisiones de carrera complejas
                        o necesitas encontrar equilibrio vital.
                    </p>

                    <a
                        href="servicios.php"
                        class="inline-flex items-center text-primary-dark hover:gap-3 gap-2 transition-all tracking-wide font-medium">
                        Saber más
                        <span class="text-xl leading-none">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="py-16 sm:py-24 lg:py-32 bg-[#333333] text-white">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="max-w-5xl mx-auto text-center space-y-8 sm:space-y-12">
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-serif leading-[1.1] tracking-tight px-2">
                El primer paso es el más difícil.
                <br class="hidden sm:block" />
                <span class="sm:hidden"> </span>
                Te acompaño en el resto.
            </h2>

            <p class="text-lg sm:text-xl lg:text-2xl text-white/70 leading-relaxed max-w-3xl mx-auto tracking-wide px-4">
                Agenda tu sesión exploratoria sin compromiso. Un espacio de 50
                minutos donde conocernos y explorar cómo puedo ayudarte.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center items-center pt-4 sm:pt-8 px-4">
                <a
                    href="contacto.php"
                    class="bg-white text-primary-dark hover:bg-[#333333] border-2 border-transparent hover:border-white hover:text-white px-8 sm:px-12 py-5 sm:py-7 text-base sm:text-lg h-auto tracking-wide rounded-lg shadow-xl inline-flex items-center justify-center">
                    Reservar Sesión Exploratoria
                </a>

                <a
                    href="contacto.php"
                    class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-primary-dark px-8 sm:px-12 py-5 sm:py-7 text-base sm:text-lg h-auto tracking-wide rounded-lg shadow-xl transition-all inline-flex items-center justify-center">
                    Enviar Mensaje
                </a>
            </div>

            <div class="pt-8 sm:pt-12 text-white/50 text-sm sm:text-base tracking-wide px-4">
                <p>contacto@quilamas.com | +34 600 000 000</p>
            </div>
        </div>
    </div>
</section>

<script>
    function setupServiceTabs() {
        const tabButtons = document.querySelectorAll('.service-tab-button');
        const contents = document.querySelectorAll('.service-content');

        if (!tabButtons.length || !contents.length) return;

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-service');
                if (!target) return;

                // Reset botones
                tabButtons.forEach(btn => {
                    btn.classList.remove('text-primary-dark');
                    btn.classList.add('text-gray-400');
                    btn.querySelectorAll('.service-tab-indicator').forEach(ind => {
                        ind.classList.add('hidden');
                    });
                });

                // Activar botón actual
                button.classList.remove('text-gray-400');
                button.classList.add('text-primary-dark');
                button.querySelectorAll('.service-tab-indicator').forEach(ind => {
                    ind.classList.remove('hidden');
                });

                // Mostrar contenido correspondiente
                contents.forEach(content => {
                    if (content.getAttribute('data-service') === target) {
                        content.classList.remove('hidden');
                        // Forzar reflujo para reiniciar la animación
                        content.classList.remove('animate-fade-in');
                        void content.offsetWidth;
                        content.classList.add('animate-fade-in');
                    } else {
                        content.classList.add('hidden');
                    }
                });
            });
        });
    }

    function setupProcessSlider() {
        const stepButtons = document.querySelectorAll('.process-step-button');
        const details = document.querySelectorAll('.process-detail');

        if (!stepButtons.length || !details.length) return;

        stepButtons.forEach(button => {
            button.addEventListener('click', () => {
                const index = parseInt(button.getAttribute('data-index'), 10);
                if (isNaN(index)) return;

                // Actualizar estados de los steps
                stepButtons.forEach((btn, i) => {
                    const circle = btn.querySelector('.rounded-full');
                    const label = btn.querySelector('.font-medium');

                    if (i === index) {
                        // Activo
                        if (circle) {
                            circle.classList.remove('bg-white', 'border-[#CFCFCF]', 'text-primary-dark');
                            circle.classList.add('bg-accent-purple', 'border-accent-purple', 'text-white');
                        }
                        if (label) {
                            label.classList.remove('text-[#999999]');
                            label.classList.add('text-primary-dark');
                        }
                    } else {
                        // Inactivo
                        if (circle) {
                            circle.classList.remove('bg-accent-purple', 'border-accent-purple', 'text-white');
                            circle.classList.add('bg-white', 'border-[#CFCFCF]', 'text-primary-dark');
                        }
                        if (label) {
                            label.classList.remove('text-primary-dark');
                            label.classList.add('text-[#999999]');
                        }
                    }
                });

                // Mostrar detalle correspondiente
                details.forEach((detail, i) => {
                    if (i === index) {
                        detail.classList.remove('hidden');
                        detail.classList.remove('animate-fade-in');
                        void detail.offsetWidth;
                        detail.classList.add('animate-fade-in');
                    } else {
                        detail.classList.add('hidden');
                    }
                });
            });
        });
    }

    function setupHeroScroll() {
        const btn = document.querySelector('#hero-explorar-servicios');
        if (!btn) return;

        btn.addEventListener('click', () => {
            const target = document.getElementById('servicios');
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        setupServiceTabs();
        setupProcessSlider();
        setupHeroScroll();
    });
</script>


<?php include __DIR__ . '/includes/footer.php'; ?>