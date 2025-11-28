<?php
// Página de servicios → header normal (fondo blanco)
$is_home_page = false;
include __DIR__ . '/includes/header.php';
?>

<!-- Hero Section / Banner Image (Servicios) -->
<section class="py-0 bg-white relative">
    <div class="relative w-full overflow-hidden">
        <div class="aspect-[16/9] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/9] xl:aspect-[18/7]">
            <!-- Imagen de Fondo -->
            <img
                src="https://images.unsplash.com/photo-1649508874905-e0d08ad58fa2?q=80&w=1176&auto=format&fit=crop"
                alt="Naturaleza serena"
                class="w-full h-full object-cover"
                onerror="this.onerror=null;this.src='https://placehold.co/1176x460/1A1A1A/FFFFFF?text=Servicios+Quilamas'" />
            <!-- Capa Oscura (Overlay) para mejorar la legibilidad del texto -->
            <div class="absolute inset-0 bg-black/60"></div>
        </div>
        <!-- Contenido del Hero (superpuesto) -->
        <div class="absolute inset-0 flex items-center justify-center text-white p-4 sm:p-6 md:p-8 lg:p-16">
            <div class="max-w-4xl mx-auto text-center space-y-4 sm:space-y-6 md:space-y-8 lg:space-y-10">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-serif tracking-tight leading-[1.1]">
                    Servicios de Psicología
                </h1>
                <p class="text-base sm:text-lg md:text-xl lg:text-2xl leading-relaxed tracking-wide max-w-3xl mx-auto text-white/90 px-2">
                    Un espacio profesional donde encontrarás el acompañamiento
                    psicológico que necesitas. Terapia personalizada, basada en
                    evidencia y centrada en tus objetivos de bienestar.
                </p>
                <div class="pt-2 sm:pt-4">
                    <a
                        href="contacto.php"
                        class="bg-accent-purple text-white hover:bg-[#a890bf] px-8 sm:px-10 md:px-12 py-4 sm:py-5 md:py-6 lg:py-7 h-auto text-sm sm:text-base lg:text-lg tracking-wide transition-all w-full sm:w-auto rounded-lg shadow-xl hover:shadow-2xl inline-flex items-center justify-center">
                        Agendar Primera Cita
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tipos de Servicios - Cards (solo desktop/tablet) -->
<section class="hidden md:block py-16 sm:py-24 lg:py-32 bg-[#FBFAFC]">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="text-center mb-12 sm:mb-20">
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-serif text-primary-dark mb-6 tracking-tight">
                Tipos de Servicios
            </h2>
            <p class="text-lg sm:text-xl text-secondary-gray max-w-3xl mx-auto tracking-wide">
                Selecciona el servicio que mejor se adapte a tus necesidades
            </p>
        </div>

        <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12 max-w-7xl mx-auto">
            <!-- Card 1 - Terapia Individual -->
            <button onclick="scrollToSection('individual')" class="group text-left">
                <div class="bg-white border-0 shadow-sm hover:shadow-xl transition-all duration-500 h-full overflow-hidden rounded-xl">
                    <div class="p-0">
                        <div class="aspect-[3/2] overflow-hidden">
                            <img
                                src="https://images.unsplash.com/photo-1604881991664-593b31b88488?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Terapia Individual"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                onerror="this.onerror=null;this.src='https://placehold.co/687x458/BBBBBB/FFFFFF?text=Individual'" />
                        </div>
                        <div class="p-8 space-y-4">
                            <div class="inline-flex items-center justify-center w-12 h-12 border border-primary-dark rounded-lg">
                                <!-- Icon: User -->
                                <svg class="w-6 h-6 text-primary-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                    <circle cx="12" cy="7" r="4" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-serif text-primary-dark tracking-tight">
                                Terapia Individual
                            </h3>
                            <p class="text-secondary-gray leading-relaxed tracking-wide">
                                Adultos y adolescentes. Un espacio seguro para trabajar en tu
                                bienestar emocional y crecimiento personal.
                            </p>
                            <div class="inline-flex items-center text-primary-dark group-hover:gap-3 gap-2 transition-all tracking-wide pt-2 font-medium">
                                Ver más
                                <span class="text-xl leading-none">→</span>
                            </div>
                        </div>
                    </div>
                </div>
            </button>

            <!-- Card 2 - Terapia de Pareja -->
            <button onclick="scrollToSection('pareja')" class="group text-left">
                <div class="bg-white border-0 shadow-sm hover:shadow-xl transition-all duration-500 h-full overflow-hidden rounded-xl">
                    <div class="p-0">
                        <div class="aspect-[3/2] overflow-hidden">
                            <img
                                src="https://images.unsplash.com/photo-1509873889234-3cdbfe2e6740?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Terapia de Pareja"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                onerror="this.onerror=null;this.src='https://placehold.co/687x458/AAAAAA/FFFFFF?text=Pareja'" />
                        </div>
                        <div class="p-8 space-y-4">
                            <div class="inline-flex items-center justify-center w-12 h-12 border border-primary-dark rounded-lg">
                                <!-- Icon: Users -->
                                <svg class="w-6 h-6 text-primary-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-serif text-primary-dark tracking-tight">
                                Terapia de Pareja
                            </h3>
                            <p class="text-secondary-gray leading-relaxed tracking-wide">
                                Fortalece tu relación. Mejora la comunicación y resuelve
                                conflictos con herramientas terapéuticas efectivas.
                            </p>
                            <div class="inline-flex items-center text-primary-dark group-hover:gap-3 gap-2 transition-all tracking-wide pt-2 font-medium">
                                Ver más
                                <span class="text-xl leading-none">→</span>
                            </div>
                        </div>
                    </div>
                </div>
            </button>

            <!-- Card 3 - Servicios Especializados -->
            <button onclick="scrollToSection('especializado')" class="group text-left">
                <div class="bg-white border-0 shadow-sm hover:shadow-xl transition-all duration-500 h-full overflow-hidden rounded-xl">
                    <div class="p-0">
                        <div class="aspect-[3/2] overflow-hidden">
                            <img
                                src="https://images.unsplash.com/photo-1616740793717-0aca29b92221?q=80&w=679&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Servicios Especializados"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                onerror="this.onerror=null;this.src='https://placehold.co/679x452/CCCCCC/FFFFFF?text=Especializado'" />
                        </div>
                        <div class="p-8 space-y-4">
                            <div class="inline-flex items-center justify-center w-12 h-12 border border-primary-dark rounded-lg">
                                <!-- Icon: Sparkles -->
                                <svg class="w-6 h-6 text-primary-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2l1.9 5.5L19 9l-5.1 1.5L12 16l-1.9-5.5L5 9l5.1-1.5L12 2z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-serif text-primary-dark tracking-tight">
                                Servicios Especializados
                            </h3>
                            <p class="text-secondary-gray leading-relaxed tracking-wide">
                                Talleres grupales, coaching psicológico y programas
                                especializados para necesidades específicas.
                            </p>
                            <div class="inline-flex items-center text-primary-dark group-hover:gap-3 gap-2 transition-all tracking-wide pt-2 font-medium">
                                Ver más
                                <span class="text-xl leading-none">→</span>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
        </div>
    </div>
</section>

<!-- Detalle Terapia Individual -->
<section id="individual" class="py-16 sm:py-24 lg:py-32 bg-white scroll-mt-20">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="grid lg:grid-cols-[1fr_2fr] gap-12 lg:gap-16 items-center max-w-7xl mx-auto">
            <div class="order-2 lg:order-1">
                <div class="aspect-[2/3] overflow-hidden rounded-xl shadow-xl">
                    <img
                        src="https://images.unsplash.com/photo-1511376979163-f804dff7ad7b?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Terapia Individual"
                        class="w-full h-full object-cover"
                        onerror="this.onerror=null;this.src='https://placehold.co/687x1030/999999/FFFFFF?text=Terapia+Individual'" />
                </div>
            </div>

            <div class="space-y-6 sm:space-y-8 order-1 lg:order-2">
                <h3 class="text-3xl sm:text-4xl md:text-5xl font-serif text-primary-dark tracking-tight leading-[1.1]">
                    Terapia Individual para Adultos y Adolescentes
                </h3>

                <p class="text-lg sm:text-xl text-secondary-gray leading-relaxed tracking-wide">
                    Un proceso terapéutico personalizado donde trabajaremos juntos para
                    superar los desafíos que te impiden vivir plenamente. Utilizando la
                    Terapia Cognitivo-Conductual integrativa, te acompaño en tu camino
                    hacia el bienestar emocional.
                </p>

                <div class="pt-4">
                    <h4 class="text-xl sm:text-2xl text-primary-dark mb-6 tracking-wide">
                        Desafíos Comunes que Abordamos:
                    </h4>
                    <div class="grid sm:grid-cols-2 gap-y-4 gap-x-8">
                        <?php
                        $items_individual = [
                            'Ansiedad y trastornos de ansiedad',
                            'Depresión y bajo estado de ánimo',
                            'Estrés crónico y burnout',
                            'Baja autoestima y autocrítica',
                            'Dificultades en relaciones interpersonales',
                            'Duelo y pérdidas significativas',
                            'Trastornos del sueño',
                            'Gestión emocional y autocontrol',
                        ];
                        foreach ($items_individual as $text): ?>
                            <div class="flex items-center gap-3 p-2 rounded-md hover:bg-gray-50 transition-colors">
                                <svg class="w-5 h-5 text-accent-purple flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                    <path d="m9 11 3 3L22 4" />
                                </svg>
                                <p class="text-secondary-gray tracking-wide text-base">
                                    <?= htmlspecialchars($text, ENT_QUOTES, 'UTF-8'); ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="pt-4">
                    <button
                        onclick="scrollToSection('contacto')"
                        class="border-2 border-accent-purple text-accent-purple bg-transparent hover:bg-accent-purple hover:text-white hover:border-accent-purple px-10 h-12 tracking-wide transition-all rounded-lg">
                        Reservar Consulta
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detalle Terapia de Pareja -->
<section id="pareja" class="py-16 sm:py-24 lg:py-32 bg-[#FBFAFC] scroll-mt-20">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="grid lg:grid-cols-[2fr_1fr] gap-12 lg:gap-16 items-center max-w-7xl mx-auto">
            <div class="order-2 lg:order-2">
                <div class="aspect-[2/3] overflow-hidden rounded-xl shadow-xl">
                    <img
                        src="https://images.unsplash.com/photo-1604881990409-b9f246db39da?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Terapia de Pareja"
                        class="w-full h-full object-cover"
                        onerror="this.onerror=null;this.src='https://placehold.co/687x1030/AAAAAA/FFFFFF?text=Terapia+Pareja'" />
                </div>
            </div>

            <div class="space-y-6 sm:space-y-8 order-1 lg:order-1">
                <h3 class="text-3xl sm:text-4xl md:text-5xl font-serif text-primary-dark tracking-tight leading-[1.1]">
                    Terapia de Pareja y Familia
                </h3>

                <p class="text-lg sm:text-xl text-secondary-gray leading-relaxed tracking-wide">
                    Un espacio neutral y seguro donde ambos podéis expresaros sin juicio.
                    Trabajamos en la mejora de la comunicación, la resolución de conflictos
                    y el fortalecimiento del vínculo emocional que os une.
                </p>

                <div class="pt-4">
                    <h4 class="text-xl sm:text-2xl text-primary-dark mb-6 tracking-wide">
                        Motivos Frecuentes de Consulta:
                    </h4>
                    <div class="grid sm:grid-cols-2 gap-y-4 gap-x-8">
                        <?php
                        $items_pareja = [
                            'Problemas de comunicación',
                            'Infidelidad y reconstrucción de confianza',
                            'Conflictos recurrentes',
                            'Distanciamiento emocional',
                            'Dificultades en la intimidad',
                            'Transiciones vitales (hijos, mudanzas)',
                            'Diferencias en valores o expectativas',
                            'Decisión de continuar o separarse',
                        ];
                        foreach ($items_pareja as $text): ?>
                            <div class="flex items-center gap-3 p-2 rounded-md hover:bg-gray-50 transition-colors">
                                <svg class="w-5 h-5 text-accent-purple flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                    <path d="m9 11 3 3L22 4" />
                                </svg>
                                <p class="text-secondary-gray tracking-wide text-base">
                                    <?= htmlspecialchars($text, ENT_QUOTES, 'UTF-8'); ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="pt-4">
                    <button
                        onclick="scrollToSection('contacto')"
                        class="border-2 border-accent-purple text-accent-purple bg-transparent hover:bg-accent-purple hover:text-white hover:border-accent-purple px-10 h-12 tracking-wide transition-all rounded-lg">
                        Reservar Consulta
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Servicios Especializados -->
<section id="especializado" class="py-16 sm:py-24 lg:py-32 bg-white scroll-mt-20">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="grid lg:grid-cols-[1fr_2fr] gap-12 lg:gap-16 items-center max-w-7xl mx-auto">
            <div class="order-2 lg:order-1">
                <div class="aspect-[2/3] overflow-hidden rounded-xl shadow-xl">
                    <img
                        src="https://images.unsplash.com/photo-1625283518288-00362afc8663?q=80&w=685&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Servicios Especializados"
                        class="w-full h-full object-cover"
                        onerror="this.onerror=null;this.src='https://placehold.co/685x1027/BBBBBB/FFFFFF?text=Servicios+Especializados'" />
                </div>
            </div>

            <div class="space-y-6 sm:space-y-8 order-1 lg:order-2">
                <h3 class="text-3xl sm:text-4xl md:text-5xl font-serif text-primary-dark tracking-tight leading-[1.1]">
                    Servicios Especializados
                </h3>

                <p class="text-lg sm:text-xl text-secondary-gray leading-relaxed tracking-wide">
                    Además de la terapia individual y de pareja, ofrezco programas
                    especializados diseñados para necesidades específicas. Estos servicios
                    combinan intervención psicológica con herramientas prácticas de
                    desarrollo personal.
                </p>

                <div class="pt-4">
                    <h4 class="text-xl sm:text-2xl text-primary-dark mb-6 tracking-wide">
                        Programas Disponibles:
                    </h4>
                    <div class="grid sm:grid-cols-2 gap-y-4 gap-x-8">
                        <?php
                        $items_especial = [
                            'Talleres grupales de gestión de ansiedad',
                            'Coaching psicológico para profesionales',
                            'Programas de manejo del estrés laboral',
                            'Talleres de habilidades sociales',
                            'Grupos de apoyo temáticos',
                            'Consultoría para empresas (bienestar)',
                        ];
                        foreach ($items_especial as $text): ?>
                            <div class="flex items-center gap-3 p-2 rounded-md hover:bg-gray-50 transition-colors">
                                <svg class="w-5 h-5 text-accent-purple flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                    <path d="m9 11 3 3L22 4" />
                                </svg>
                                <p class="text-secondary-gray tracking-wide text-base">
                                    <?= htmlspecialchars($text, ENT_QUOTES, 'UTF-8'); ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="pt-4">
                    <button
                        onclick="scrollToSection('contacto')"
                        class="border-2 border-accent-purple text-accent-purple bg-transparent hover:bg-accent-purple hover:text-white hover:border-accent-purple px-10 h-12 tracking-wide transition-all rounded-lg">
                        Consultar Disponibilidad
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Metodología -->
<section id="metodologia" class="py-16 sm:py-24 lg:py-32 bg-[#FBFAFC] scroll-mt-20">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="text-center mb-12 sm:mb-20">
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-serif text-primary-dark mb-6 tracking-tight">
                La Metodología
            </h2>
            <p class="text-lg sm:text-xl text-secondary-gray max-w-3xl mx-auto tracking-wide">
                Un proceso estructurado de 4 pasos diseñado para tu transformación
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 max-w-6xl mx-auto">
            <!-- Paso 01 -->
            <div class="group bg-white p-8 sm:p-10 hover:shadow-lg transition-all duration-300 rounded-xl">
                <div class="flex items-start gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 flex items-center justify-center border-2 border-accent-purple text-accent-purple group-hover:bg-accent-purple group-hover:text-white transition-all duration-300 rounded-lg">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M8 2v4" />
                                <path d="M16 2v4" />
                                <rect width="18" height="18" x="3" y="4" rx="2" />
                                <path d="M3 10h18" />
                                <path d="M16 16h-3V13" />
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-3 flex-1">
                        <div class="text-sm tracking-[0.3em] text-[#999999] uppercase">
                            Paso 01
                        </div>
                        <h4 class="text-2xl font-serif text-primary-dark tracking-tight">
                            Contacto y Evaluación Inicial
                        </h4>
                        <p class="text-secondary-gray leading-relaxed tracking-wide">
                            Primera llamada o videollamada (30 min gratuita) donde exploramos tu
                            situación, objetivos y expectativas. Evaluamos si el enfoque terapéutico
                            es el adecuado para ti.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Paso 02 -->
            <div class="group bg-white p-8 sm:p-10 hover:shadow-lg transition-all duration-300 rounded-xl">
                <div class="flex items-start gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 flex items-center justify-center border-2 border-accent-purple text-accent-purple group-hover:bg-accent-purple group-hover:text-white transition-all duration-300 rounded-lg">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <circle cx="12" cy="12" r="6" />
                                <circle cx="12" cy="12" r="2" />
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-3 flex-1">
                        <div class="text-sm tracking-[0.3em] text-[#999999] uppercase">
                            Paso 02
                        </div>
                        <h4 class="text-2xl font-serif text-primary-dark tracking-tight">
                            Desarrollo del Plan Terapéutico
                        </h4>
                        <p class="text-secondary-gray leading-relaxed tracking-wide">
                            Creamos juntos un plan personalizado con objetivos claros y medibles.
                            Definimos la frecuencia de sesiones y las estrategias específicas a utilizar.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Paso 03 -->
            <div class="group bg-white p-8 sm:p-10 hover:shadow-lg transition-all duration-300 rounded-xl">
                <div class="flex items-start gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 flex items-center justify-center border-2 border-accent-purple text-accent-purple group-hover:bg-accent-purple group-hover:text-white transition-all duration-300 rounded-lg">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 13 16 7 10 13 2 5" />
                                <path d="M18 13h4v4" />
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-3 flex-1">
                        <div class="text-sm tracking-[0.3em] text-[#999999] uppercase">
                            Paso 03
                        </div>
                        <h4 class="text-2xl font-serif text-primary-dark tracking-tight">
                            Sesiones Regulares y Trabajo
                        </h4>
                        <p class="text-secondary-gray leading-relaxed tracking-wide">
                            Sesiones semanales o quincenales de 50-60 minutos. Trabajo activo entre
                            sesiones con ejercicios prácticos y herramientas que aplicarás en tu día a día.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Paso 04 -->
            <div class="group bg-white p-8 sm:p-10 hover:shadow-lg transition-all duration-300 rounded-xl">
                <div class="flex items-start gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 flex items-center justify-center border-2 border-accent-purple text-accent-purple group-hover:bg-accent-purple group-hover:text-white transition-all duration-300 rounded-lg">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-3 flex-1">
                        <div class="text-sm tracking-[0.3em] text-[#999999] uppercase">
                            Paso 04
                        </div>
                        <h4 class="text-2xl font-serif text-primary-dark tracking-tight">
                            Monitoreo del Progreso y Cierre
                        </h4>
                        <p class="text-secondary-gray leading-relaxed tracking-wide">
                            Evaluación continua de avances. Ajustamos el plan según necesidades.
                            El cierre se produce cuando alcanzas tus objetivos y cuentas con autonomía
                            para mantener tu bienestar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tarifas -->
<section id="tarifas" class="py-16 sm:py-24 lg:py-32 bg-white scroll-mt-20">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-serif text-primary-dark mb-6 tracking-tight">
                    Logística y Tarifas
                </h2>
                <p class="text-lg sm:text-xl text-secondary-gray tracking-wide">
                    Transparencia en precios y políticas
                </p>
            </div>

            <div class="overflow-x-auto rounded-xl border border-gray-200">
                <table id="tarifas-table" class="w-full bg-white">
                    <thead>
                        <tr class="border-b-2 border-primary-dark">
                            <th class="text-left py-4 px-4 text-primary-dark tracking-wide font-medium text-sm sm:text-base">
                                Tipo de Servicio
                            </th>
                            <th class="text-left py-4 px-4 text-primary-dark tracking-wide font-medium text-sm sm:text-base">
                                Duración
                            </th>
                            <th class="text-right py-4 px-4 text-primary-dark tracking-wide font-medium text-sm sm:text-base">
                                Precio
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tarifa-row border-b border-gray-200 transition-colors">
                            <td class="py-4 px-4 text-secondary-gray tracking-wide text-base">Sesión Individual</td>
                            <td class="py-4 px-4 text-secondary-gray tracking-wide text-base">50-60 min</td>
                            <td class="py-4 px-4 text-right text-primary-dark tracking-wide text-base font-semibold">60€</td>
                        </tr>
                        <tr class="tarifa-row border-b border-gray-200 transition-colors">
                            <td class="py-4 px-4 text-secondary-gray tracking-wide text-base">Sesión de Pareja/Familia</td>
                            <td class="py-4 px-4 text-secondary-gray tracking-wide text-base">60-75 min</td>
                            <td class="py-4 px-4 text-right text-primary-dark tracking-wide text-base font-semibold">80€</td>
                        </tr>
                        <tr class="tarifa-row border-b border-gray-200 transition-colors">
                            <td class="py-4 px-4 text-secondary-gray tracking-wide text-base">Bono 4 Sesiones Individuales</td>
                            <td class="py-4 px-4 text-secondary-gray tracking-wide text-base">50-60 min c/u</td>
                            <td class="py-4 px-4 text-right text-primary-dark tracking-wide text-base font-semibold">220€</td>
                        </tr>
                        <tr class="tarifa-row transition-colors">
                            <td class="py-4 px-4 text-secondary-gray tracking-wide text-base">Evaluación Inicial</td>
                            <td class="py-4 px-4 text-secondary-gray tracking-wide text-base">30 min</td>
                            <td class="py-4 px-4 text-right text-primary-dark tracking-wide text-base font-semibold">Gratuita</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-12 space-y-6 text-center">
                <p class="text-secondary-gray tracking-wide text-base sm:text-lg">
                    <strong class="text-primary-dark">
                        Aceptamos seguros médicos:
                    </strong>
                    Consulta con tu aseguradora sobre reembolsos
                    para servicios psicológicos. Proporcionamos
                    facturas detalladas.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center pt-4">
                    <a
                        href="#"
                        class="inline-flex items-center justify-center text-primary-dark hover:text-accent-purple transition-colors tracking-wide gap-2 font-medium">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                            <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                            <path d="M10 9H8" />
                            <path d="M16 13H8" />
                            <path d="M16 17H8" />
                        </svg>
                        Política de Cancelación
                    </a>
                    <a
                        href="/politica-de-privacidad"
                        class="inline-flex items-center justify-center text-primary-dark hover:text-accent-purple transition-colors tracking-wide gap-2 font-medium">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                            <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                            <path d="M10 9H8" />
                            <path d="M16 13H8" />
                            <path d="M16 17H8" />
                        </svg>
                        Política de Privacidad
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-16 sm:py-24 lg:py-32 bg-[#FBFAFC]">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-serif text-primary-dark mb-6 tracking-tight">
                    Preguntas Frecuentes
                </h2>
                <p class="text-lg sm:text-xl text-secondary-gray tracking-wide">
                    Resolvemos tus dudas más comunes
                </p>
            </div>

            <div id="faq-accordion" class="w-full space-y-4">
                <?php
                $faqs = [
                    [
                        'q' => '¿Cuánto dura el proceso terapéutico?',
                        'a' => 'La duración varía según cada persona y sus objetivos. Generalmente, procesos de terapia breve van de 8 a 12 sesiones, mientras que procesos más profundos pueden extenderse varios meses. Evaluamos el progreso continuamente y ajustamos según tus necesidades.',
                    ],
                    [
                        'q' => '¿Las sesiones online son igual de efectivas?',
                        'a' => 'Sí. Múltiples estudios científicos demuestran que la terapia online es igual de efectiva que la presencial. La clave es contar con un espacio privado, buena conexión a internet y compromiso con el proceso.',
                    ],
                    [
                        'q' => '¿Qué diferencia hay entre psicólogo y psiquiatra?',
                        'a' => 'El psicólogo trabaja mediante terapia y técnicas psicológicas. El psiquiatra es médico y puede recetar medicación. En muchos casos, trabajamos de forma complementaria. Si considero que necesitas valoración psiquiátrica, te lo comunicaré.',
                    ],
                    [
                        'q' => '¿Cómo sé si necesito terapia?',
                        'a' => 'Si sientes que tus emociones o pensamientos interfieren en tu día a día, si tienes dificultades para gestionar situaciones, o simplemente deseas conocerte mejor y crecer personalmente, la terapia puede ayudarte. La primera consulta te ayudará a determinarlo.',
                    ],
                    [
                        'q' => '¿Qué pasa si necesito cancelar una sesión?',
                        'a' => 'Puedes cancelar o reprogramar con al menos 24 horas de antelación sin coste. Cancelaciones con menos de 24 horas se cobrarán el 50% de la sesión, salvo emergencias justificadas.',
                    ],
                    [
                        'q' => '¿La información que comparto es confidencial?',
                        'a' => 'Absolutamente. El secreto profesional es sagrado. Solo podría romperse en casos excepcionales donde haya riesgo grave para ti o terceros, y siempre se te informaría. Toda la información está protegida según la normativa de protección de datos.',
                    ],
                    [
                        'q' => '¿Ofreces sesiones presenciales?',
                        'a' => 'Actualmente trabajo principalmente en modalidad online para ofrecer mayor flexibilidad y accesibilidad. Para casos específicos, puedo valorar sesiones presenciales en consulta. Contáctame para más información.',
                    ],
                ];
                foreach ($faqs as $index => $faq): ?>
                    <div data-value="item-<?= $index ?>" class="accordion-item bg-white border-0 px-6 sm:px-8 shadow-sm hover:shadow-md transition-shadow rounded-xl overflow-hidden">
                        <button
                            aria-expanded="false"
                            aria-controls="content-<?= $index ?>"
                            class="accordion-trigger text-left text-lg sm:text-xl text-primary-dark hover:text-accent-purple tracking-wide py-6 w-full flex justify-between items-center">
                            <?= htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8'); ?>
                            <svg class="accordion-icon w-6 h-6 flex-shrink-0 ml-4 text-secondary-gray"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>
                        <div id="content-<?= $index ?>" class="accordion-content hidden">
                            <p class="text-secondary-gray leading-relaxed tracking-wide pb-6">
                                <?= htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8'); ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Scripts específicos de la página de servicios -->
<script>
    // Scroll suave con pequeño ajuste (útil con nav sticky)
    function scrollToSection(id) {
        const element = document.getElementById(id);
        if (element) {
            element.scrollIntoView({
                behavior: "smooth"
            });
            setTimeout(() => {
                window.scrollBy(0, -80);
            }, 500);
        }
    }

    // Acordeón FAQ
    const accordionItems = document.querySelectorAll('.accordion-item');
    accordionItems.forEach((item) => {
        const trigger = item.querySelector('.accordion-trigger');
        const content = item.querySelector('.accordion-content');
        if (!trigger || !content) return;

        trigger.setAttribute('aria-expanded', 'false');
        content.classList.add('hidden');

        trigger.addEventListener('click', () => {
            const isOpen = trigger.getAttribute('aria-expanded') === 'true';

            accordionItems.forEach((otherItem) => {
                const otherTrigger = otherItem.querySelector('.accordion-trigger');
                const otherContent = otherItem.querySelector('.accordion-content');
                if (!otherTrigger || !otherContent) return;
                otherTrigger.setAttribute('aria-expanded', 'false');
                otherContent.classList.add('hidden');
            });

            if (!isOpen) {
                trigger.setAttribute('aria-expanded', 'true');
                content.classList.remove('hidden');
            }
        });
    });

    // Hover para filas de tarifas
    const tarifaRows = document.querySelectorAll('.tarifa-row');
    tarifaRows.forEach(row => {
        row.addEventListener('mouseenter', () => {
            row.classList.add('bg-accent-purple/5');
        });
        row.addEventListener('mouseleave', () => {
            row.classList.remove('bg-accent-purple/5');
        });
    });
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>