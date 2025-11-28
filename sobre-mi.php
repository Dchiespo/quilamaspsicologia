<?php
// Página Sobre Mí → header normal (fondo blanco)
$is_home_page = false;
include __DIR__ . '/includes/header.php';
?>

<style>
    /* Animaciones */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.5s ease-out;
    }

    /* Acordeón */
    .accordion-item {
        border: none;
        border-radius: 0;
        background-color: transparent;
        box-shadow: none;
        border-bottom: 1px solid #E5E5E5;
    }

    .accordion-item:last-child {
        border-bottom: none;
    }

    .accordion-trigger[aria-expanded="true"] .accordion-icon {
        transform: rotate(180deg);
        color: #bea9cf;
    }

    .accordion-trigger[aria-expanded="true"] {
        color: #1A1A1A;
    }

    .accordion-trigger {
        transition: color 0.3s ease;
    }

    .accordion-icon {
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .accordion-content {
        overflow: hidden;
        max-height: 0;
        opacity: 0;
        transition: max-height 0.4s ease, opacity 0.25s ease;
    }

    .accordion-item.open .accordion-content {
        opacity: 1;
    }

    html {
        scroll-behavior: smooth;
    }

    .scroll-mt-20 {
        scroll-margin-top: 5rem;
    }

    /* LOGO MARQUEE */
    @keyframes marquee-scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-33.33%);
        }
    }

    .marquee-container-wrapper {
        overflow: hidden;
        width: 100%;
    }

    .marquee-container {
        display: flex;
        width: 300%;
        animation: marquee-scroll 60s linear infinite;
    }

    .marquee-item {
        flex: 0 0 calc(100% / 3 / 6);
        min-width: 150px;
        padding: 0 2.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50px;
        box-sizing: border-box;
    }

    .marquee-item img {
        max-height: 100%;
        width: auto;
        opacity: 0.4;
        transition: opacity 0.3s ease;
    }

    .marquee-item a:hover img {
        opacity: 1;
    }
</style>

<!-- Hero Sobre Mí -->
<section id="sobre-mi" class="py-12 sm:py-16 lg:py-20 bg-white scroll-mt-20">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="grid lg:grid-cols-12 gap-8 sm:gap-10 lg:gap-12 max-w-6xl mx-auto items-center">

            <!-- Foto -->
            <div class="lg:col-span-5 order-1 relative">
                <div class="overflow-hidden rounded-xl shadow-lg max-w-[420px] mx-auto lg:mx-0">
                    <img
                        src="https://images.unsplash.com/photo-1745434159123-5b99b94206ca?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Psicóloga profesional"
                        class="w-full h-auto object-cover"
                        onerror="this.onerror=null;this.src='https://placehold.co/687x859/CCCCCC/1A1A1A?text=Psicologa+Quilamas'" />
                </div>
            </div>

            <!-- Texto -->
            <div class="lg:col-span-7 order-2 space-y-4 sm:space-y-6 lg:space-y-8 flex flex-col">
                <div class="space-y-4 sm:space-y-5">
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-primary-dark tracking-tight leading-tight">
                        Sobre mí: Mª Luisa García Colmenero
                    </h1>

                    <div class="w-16 h-0.5 bg-accent-purple"></div>

                    <p class="text-sm sm:text-base lg:text-lg text-secondary-gray leading-relaxed tracking-wide">
                        Soy psicóloga con más de 20 años de experiencia comprometida en ayudarte a recuperar tu bienestar emocional. Mi trabajo consiste en reducir el sufrimiento y dotarte de herramientas prácticas para afrontar problemas de ansiedad, trauma, adicciones y conflictos familiares.
                    </p>
                    <p class="text-sm sm:text-base lg:text-lg text-secondary-gray leading-relaxed tracking-wide">
                        Si estás buscando una terapia basada en la evidencia que combine la rigurosidad técnica con la calidez humana, estás en el lugar correcto. Mi objetivo es que logres autonomía y bienestar duradero.
                    </p>
                </div>

                <div class="pt-4">
                    <a
                        href="contacto.php"
                        class="bg-accent-purple text-white hover:bg-[#a890bf] transition-all px-8 h-11 rounded-lg text-base shadow-lg hover:shadow-xl inline-flex items-center justify-center">
                        Contactar para Evaluación
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Pilares -->
<section id="pilares" class="py-16 sm:py-20 lg:py-28 bg-[#FBFAFC]">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="max-w-7xl mx-auto text-center">
            <div class="space-y-8 sm:space-y-10 lg:space-y-12 mb-12 sm:mb-16">
                <div class="space-y-4 sm:space-y-5">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-primary-dark tracking-tight leading-[1.15]">
                        El Por Qué de Mi Práctica
                    </h2>
                    <div class="w-16 h-0.5 bg-accent-purple mx-auto"></div>
                </div>
                <p class="text-base sm:text-lg lg:text-xl text-secondary-gray leading-relaxed tracking-wide max-w-3xl mx-auto">
                    Mi compromiso es ofrecer un espacio seguro y efectivo para tu crecimiento. Estos son los pilares de mi filosofía:
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 sm:gap-10 lg:gap-12">
                <!-- Tarjeta 1 -->
                <div class="flex flex-col items-center px-8 py-5 sm:px-10 sm:py-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100">
                    <!-- Icon: HeartHandshake -->
                    <svg class="w-12 h-12 text-accent-purple mb-4 sm:mb-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 21.5s-2.1-2.6-3.9-4.3c-2.3-2.2-4.1-4.2-4.1-6.6a5.5 5.5 0 0 1 5.5-5.5c1.7 0 3.1.9 4.5 2.5 1.4-1.6 2.8-2.5 4.5-2.5A5.5 5.5 0 0 1 23 10.6c0 2.4-1.8 4.4-4.1 6.6-1.8 1.7-3.9 4.3-3.9 4.3z" />
                        <path d="M14 9l-4 4" />
                    </svg>
                    <h3 class="text-xl sm:text-2xl font-serif text-primary-dark mb-3">Conexión Auténtica</h3>
                    <p class="text-sm sm:text-base text-secondary-gray leading-relaxed">
                        Establezco un vínculo de confianza y empatía, donde te sientas plenamente comprendido y apoyado en tu proceso.
                    </p>
                </div>

                <!-- Tarjeta 2 -->
                <div class="flex flex-col items-center px-8 py-5 sm:px-10 sm:py-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100">
                    <!-- Icon: Lightbulb -->
                    <svg class="w-12 h-12 text-accent-purple mb-4 sm:mb-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 18h6" />
                        <path d="M12 22a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h3" />
                        <path d="M15 14c.2-1 .2-2 0-3-.3-.9-1-1.7-2.3-2.3-.6-.3-1.3-.5-2-.6-1.5-.2-2.8-.2-4.1.2-1.3.4-2.4 1.2-3.1 2.3-.7 1.1-.9 2.5-.7 4 .2 1.5.8 2.8 1.9 3.9.7.7 1.6 1.3 2.6 1.7 1.4.5 2.8.7 4.2.5 1.4-.1 2.7-.6 3.9-1.3.8-.5 1.6-1.1 2.2-1.8.8-.9 1.4-2.1 1.7-3.4.3-1.3.3-2.7 0-4-.2-1.3-.7-2.6-1.5-3.7-.8-1.1-1.8-2-3-2.6-1.2-.7-2.6-1-4-1.2-.5-.1-1-.1-1.5-.1" />
                    </svg>
                    <h3 class="text-xl sm:text-2xl font-serif text-primary-dark mb-3">Claridad y Enfoque</h3>
                    <p class="text-sm sm:text-base text-secondary-gray leading-relaxed">
                        Te ofrezco herramientas prácticas y una dirección clara para abordar tus desafíos y alcanzar tus metas.
                    </p>
                </div>

                <!-- Tarjeta 3 -->
                <div class="flex flex-col items-center px-8 py-5 sm:px-10 sm:py-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100">
                    <!-- Icon: Leaf -->
                    <svg class="w-12 h-12 text-accent-purple mb-4 sm:mb-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22c-3.1 0-5.8-1.4-7.6-3.6C3.7 16.2 3 13 3 11c0-4.1 3.5-7.7 7.5-8.5 1.2-.2 2.4 0 3.6.4 1.2.4 2.3 1 3.3 1.8.8.6 1.5 1.3 2.1 2.2.6 1 .9 2.1.9 3.2 0 2-.7 3.9-2 5.5-1.5 1.8-3.5 3-5.7 3.5" />
                        <path d="M17 17c1.3-1.6 2-3.6 2-5.7 0-4.1-3.5-7.7-7.5-8.5-1.2-.2-2.4 0-3.6.4-1.2.4-2.3 1-3.3 1.8-.8.6-1.5 1.3-2.1 2.2-.6 1-.9 2.1-.9 3.2 0 2 .7 3.9 2 5.5 1.5 1.8 3.5 3 5.7 3.5z" />
                    </svg>
                    <h3 class="text-xl sm:text-2xl font-serif text-primary-dark mb-3">Crecimiento Sostenible</h3>
                    <p class="text-sm sm:text-base text-secondary-gray leading-relaxed">
                        Fomento tu autoconocimiento y resiliencia para que los cambios que logres perduren en el tiempo.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Credenciales Marquee -->
<section id="credenciales" class="py-10 sm:py-12 lg:py-16 bg-white border-y border-gray-100 overflow-hidden">
    <div class="relative">
        <div class="absolute left-0 top-0 bottom-0 w-16 sm:w-24 lg:w-32 bg-gradient-to-r from-white to-transparent z-10"></div>
        <div class="absolute right-0 top-0 bottom-0 w-16 sm:w-24 lg:w-32 bg-gradient-to-l from-white to-transparent z-10"></div>

        <div class="marquee-container-wrapper">
            <div id="logo-marquee-container" class="marquee-container"></div>
        </div>
    </div>
</section>

<!-- Enfoque Terapéutico -->
<section id="enfoque" class="py-16 sm:py-20 lg:py-28 xl:py-32 bg-accent-purple/5 scroll-mt-20">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-10 sm:gap-12 lg:gap-16 xl:gap-20 items-center">

                <!-- Texto -->
                <div class="space-y-8 sm:space-y-10 order-1 lg:order-1 lg:col-span-1">
                    <div class="space-y-4 sm:space-y-5">
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-primary-dark tracking-tight leading-[1.15]">
                            Mi Enfoque Terapéutico
                        </h2>
                        <div class="w-16 h-0.5 bg-accent-purple"></div>
                    </div>
                    <p class="text-base sm:text-lg lg:text-xl text-secondary-gray leading-relaxed tracking-wide max-w-lg">
                        La alianza terapéutica es tan importante como la técnica. Explora
                        los cuatro pilares que sustentan un proceso de cambio profundo.
                    </p>
                </div>

                <!-- Acordeón -->
                <div class="order-2 lg:order-2 lg:col-span-1">
                    <div id="approach-accordion" class="w-full space-y-4"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Final -->
<section id="contacto" class="py-16 sm:py-20 lg:py-28 xl:py-32 bg-primary-dark text-white">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16">
        <div class="max-w-4xl mx-auto text-center space-y-8 sm:space-y-10">
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-serif leading-[1.1] tracking-tight px-2">
                ¿Empezamos a Trabajar Juntos?
            </h2>

            <p class="text-base sm:text-lg lg:text-xl text-white/70 leading-relaxed tracking-wide px-4 max-w-3xl mx-auto">
                Si resuenas con mi enfoque y estás listo para dar el primer paso
                hacia un cambio significativo, me encantaría acompañarte.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 sm:gap-5 lg:gap-6 justify-center pt-4 sm:pt-6 px-4">
                <a href="contacto.php"
                    class="border-2 border-transparent bg-white text-primary-dark 
    hover:bg-primary-dark hover:text-white hover:border-white 
    px-8 sm:px-10 lg:px-12 py-5 sm:py-6 lg:py-7 text-sm sm:text-base lg:text-lg h-auto 
    tracking-wide transition-all rounded-lg shadow-xl inline-block">
                    Agendar Primera Sesión
                </a>

                <a
                    href="servicios.php"
                    class="flex items-center justify-center bg-transparent border-2 border-white text-white hover:bg-white hover:text-primary-dark px-8 sm:px-10 lg:px-12 py-5 sm:py-6 lg:py-7 text-sm sm:text-base lg:text-lg h-auto tracking-wide transition-all rounded-lg shadow-xl">
                    Consultar Servicios
                </a>
            </div>

            <div class="pt-6 sm:pt-8 lg:pt-10 text-white/50 text-xs sm:text-sm lg:text-base tracking-wide">
                <p>contacto@quilamas.com | +34 600 000 000</p>
            </div>
        </div>
    </div>
</section>

<script>
    // --- DATA ---
    const CREDENTIALS_DATA = [{
            name: "Universidad Complutense",
            abbr: "UCM",
            logo: "https://imagedelivery.net/qN-QJ7e2R96fJ-a-s5gE6A/3dd4f728-6623-4560-bf6c-38374a44d000/public",
            link: "https://www.ucm.es/"
        },
        {
            name: "Colegio Oficial Psicólogos",
            abbr: "COP",
            logo: "https://imagedelivery.net/qN-QJ7e2R96fJ-a-s5gE6A/369f691b-69b9-450f-621f-8463c26b9e00/public",
            link: "https://www.cop.es/"
        },
        {
            name: "Instituto Psicología Avanzada",
            abbr: "IPA",
            logo: "https://imagedelivery.net/qN-QJ7e2R96fJ-a-s5gE6A/6b1bf750-f8f5-4654-e912-259a9307b800/public",
            link: "https://www.institutopsicologiaavanzada.com/"
        },
        {
            name: "EMDR España",
            abbr: "EMDR",
            logo: "https://imagedelivery.net/qN-QJ7e2R96fJ-a-s5gE6A/7960309e-7117-4f6c-671c-308670d97000/public",
            link: "https://emdr-es.org/"
        },
        {
            name: "Gottman Institute",
            abbr: "GOTTMAN",
            logo: "https://imagedelivery.net/qN-QJ7e2R96fJ-a-s5gE6A/2c686161-12c8-479e-43f1-0a44280d9600/public",
            link: "https://www.gottman.com/"
        },
        {
            name: "Mindfulness Center",
            abbr: "MBCT",
            logo: "https://imagedelivery.net/qN-QJ7e2R96fJ-a-s5gE6A/7d8962d3-9769-42b7-a3dd-4518a2408c00/public",
            link: "https://www.mindfulness.com/"
        },
    ];

    const ACCORDION_PILLARS = [{
            value: 'pillar-01',
            title: '01 — Evidencia Científica',
            content: 'Fundamento mi práctica en la TCC y otros enfoques validados empíricamente con miles de estudios que respaldan su eficacia. Garantizo un tratamiento basado en la investigación más actual.',
            isOpen: true
        },
        {
            value: 'pillar-02',
            title: '02 — Empatía Genuina',
            content: 'Creo un espacio terapéutico donde te sientas visto, escuchado y comprendido sin juicio. La alianza terapéutica es el corazón del cambio, permitiendo que la técnica sin humanidad se vuelva una conexión profunda.',
            isOpen: false
        },
        {
            value: 'pillar-03',
            title: '03 — Orientación a Resultados',
            content: 'Establecemos objetivos claros y medibles desde el inicio. Evaluamos el progreso regularmente para asegurar que la terapia esté generando cambios tangibles y duraderos en tu bienestar y vida diaria.',
            isOpen: false
        },
        {
            value: 'pillar-04',
            title: '04 — Personalización Total',
            content: 'Adapto las intervenciones a tu contexto, valores y ritmo de vida para maximizar la relevancia del trabajo terapéutico. No existen dos personas iguales, ni dos procesos idénticos.',
            isOpen: false
        },
    ];

    // Scroll suave (con pequeño offset por el header)
    function scrollToSection(id) {
        const element = document.getElementById(id);
        if (!element) return;
        element.scrollIntoView({
            behavior: "smooth"
        });
        setTimeout(() => {
            window.scrollBy(0, -80);
        }, 400);
    }

    // Render logos
    function renderMarquee() {
        const container = document.getElementById('logo-marquee-container');
        if (!container) return;

        const duplicatedCredentials = [
            ...CREDENTIALS_DATA,
            ...CREDENTIALS_DATA,
            ...CREDENTIALS_DATA
        ];

        container.innerHTML = duplicatedCredentials.map(credential => `
            <div class="marquee-item">
                <a href="${credential.link}" target="_blank" rel="noopener noreferrer" aria-label="Ir a ${credential.name}">
                    <img
                        src="${credential.logo}"
                        alt="${credential.name}"
                        class="h-full w-auto object-contain"
                        onerror="this.onerror=null;this.src='https://placehold.co/150x50/F0F0F0/000000?text=${credential.abbr}'"
                    />
                </a>
            </div>
        `).join('');
    }

    // Acordeón
    function setupAccordion() {
        const accordionContainer = document.getElementById('approach-accordion');
        if (!accordionContainer) return;

        // Pintamos el HTML
        accordionContainer.innerHTML = ACCORDION_PILLARS.map(pillar => {
            const isOpen = pillar.isOpen;
            return `
                <div data-value="${pillar.value}" class="accordion-item ${isOpen ? 'open' : ''}">
                    <button
                        aria-expanded="${isOpen}"
                        aria-controls="content-${pillar.value}"
                        class="accordion-trigger text-left text-lg sm:text-xl text-primary-dark tracking-wide py-4 w-full flex justify-between items-center hover:text-accent-purple"
                    >
                        ${pillar.title}
                        <svg class="accordion-icon w-5 h-5 flex-shrink-0 ml-4 ${isOpen ? 'text-accent-purple rotate-180' : 'text-secondary-gray'}"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div id="content-${pillar.value}" class="accordion-content">
                        <p class="text-secondary-gray leading-relaxed tracking-wide pb-4">
                            ${pillar.content}
                        </p>
                    </div>
                </div>
            `;
        }).join('');

        const accordionItems = accordionContainer.querySelectorAll('.accordion-item');
        const accordionTriggers = accordionContainer.querySelectorAll('.accordion-trigger');

        // Estado inicial
        accordionItems.forEach(item => {
            const content = item.querySelector('.accordion-content');
            if (!content) return;

            if (item.classList.contains('open')) {
                content.style.maxHeight = content.scrollHeight + 'px';
                content.style.opacity = 1;
            } else {
                content.style.maxHeight = '0px';
                content.style.opacity = 0;
            }
        });

        accordionTriggers.forEach(trigger => {
            trigger.addEventListener('click', () => {
                const item = trigger.closest('.accordion-item');
                const icon = item.querySelector('.accordion-icon');
                const content = item.querySelector('.accordion-content');
                const isOpen = trigger.getAttribute('aria-expanded') === 'true';

                // Cerrar otros
                accordionItems.forEach(otherItem => {
                    if (otherItem === item) return;

                    const otherTrigger = otherItem.querySelector('.accordion-trigger');
                    const otherIcon = otherItem.querySelector('.accordion-icon');
                    const otherContent = otherItem.querySelector('.accordion-content');

                    otherItem.classList.remove('open');
                    otherTrigger.setAttribute('aria-expanded', 'false');
                    otherIcon.classList.remove('rotate-180', 'text-accent-purple');
                    otherIcon.classList.add('text-secondary-gray');

                    if (otherContent) {
                        otherContent.style.maxHeight = '0px';
                        otherContent.style.opacity = 0;
                    }
                });

                // Toggle actual
                if (!isOpen) {
                    item.classList.add('open');
                    trigger.setAttribute('aria-expanded', 'true');
                    icon.classList.add('rotate-180', 'text-accent-purple');
                    icon.classList.remove('text-secondary-gray');

                    content.style.maxHeight = content.scrollHeight + 'px';
                    content.style.opacity = 1;
                } else {
                    item.classList.remove('open');
                    trigger.setAttribute('aria-expanded', 'false');
                    icon.classList.remove('rotate-180', 'text-accent-purple');
                    icon.classList.add('text-secondary-gray');

                    content.style.maxHeight = '0px';
                    content.style.opacity = 0;
                }
            });
        });
    }

    // 👉 ESTA PARTE ES LA QUE TE FALTABA
    window.addEventListener('load', function() {
        renderMarquee();
        setupAccordion();
    });
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>