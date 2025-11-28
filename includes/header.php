<?php
$is_home_page = isset($is_home_page) ? (bool)$is_home_page : false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quilamas</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-dark': '#1A1A1A',
                        'secondary-gray': '#666666',
                        'accent-purple': '#bea9cf',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Georgia', 'serif'],
                    },
                }
            }
        }
    </script>
</head>

<body class="font-sans">

<!-- HEADER -->
<nav
    class="<?php echo $is_home_page
        ? 'absolute top-0 left-0 w-full z-40 bg-transparent'
        : 'relative bg-white border-b border-gray-100 z-40'; ?>"
>
    <div class="container mx-auto px-4 sm:px-8 lg:px-16 py-6 flex items-center justify-between">

        <!-- LOGO -->
        <a href="index.php"
           class="text-2xl sm:text-3xl font-serif tracking-wide <?php echo $is_home_page ? 'text-white' : 'text-primary-dark'; ?>">
            Quilamas
        </a>

        <!-- MENÚ ESCRITORIO -->
        <div class="hidden md:flex items-center gap-10 text-[15px]">
            <a href="index.php" class="<?php echo $is_home_page ? 'text-white/80 hover:text-white' : 'text-secondary-gray hover:text-primary-dark'; ?>">Inicio</a>
            <a href="sobre-mi.php" class="<?php echo $is_home_page ? 'text-white/80 hover:text-white' : 'text-secondary-gray hover:text-primary-dark'; ?>">Sobre mí</a>
            <a href="servicios.php" class="<?php echo $is_home_page ? 'text-white/80 hover:text-white' : 'text-secondary-gray hover:text-primary-dark'; ?>">Servicios</a>        </div>

        <!-- CONTACTAR ESCRITORIO -->
        <a href="contacto.php"
           class="hidden sm:flex items-center justify-center px-6 h-10 rounded-lg border text-sm font-medium
           <?php echo $is_home_page ? 'border-white text-white hover:bg-white hover:text-primary-dark' : 'border-primary-dark text-primary-dark hover:bg-[#bea9cf] hover:text-white'; ?>">
            Contactar
        </a>

        <!-- HAMBURGUESA MÓVIL -->
        <button id="btn-open-menu"
                class="md:hidden p-2 rounded border
                <?php echo $is_home_page ? 'border-white text-white' : 'border-primary-dark text-primary-dark'; ?>">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
</nav>

<!-- MENÚ MÓVIL COMPACTO -->
<div id="mobile-menu"
     class="fixed top-4 right-4 w-64 bg-white rounded-xl shadow-2xl p-6 space-y-4 z-50 hidden border border-gray-100">

    <!-- Cerrar -->
    <button id="btn-close-menu" class="absolute top-3 right-3 text-xl text-primary-dark">×</button>

    <a href="sobre-mi.php" class="block text-primary-dark tracking-wide mobile-link">Sobre mí</a>
    <a href="servicios.php" class="block text-primary-dark tracking-wide mobile-link">Servicios</a>

    <a href="contacto.php"
       class="block w-full text-center bg-primary-dark text-white py-3 rounded-lg font-medium mobile-link">
       Contactar
    </a>
</div>

<!-- OVERLAY OSCURO PARA CERRAR -->
<div id="menu-overlay" class="fixed inset-0 bg-black/40 z-40 hidden"></div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const openBtn = document.getElementById("btn-open-menu");
    const closeBtn = document.getElementById("btn-close-menu");
    const menu = document.getElementById("mobile-menu");
    const overlay = document.getElementById("menu-overlay");
    const links = document.querySelectorAll(".mobile-link");

    function openMenu() {
        menu.classList.remove("hidden");
        overlay.classList.remove("hidden");
        document.body.classList.add("overflow-hidden");
    }

    function closeMenu() {
        menu.classList.add("hidden");
        overlay.classList.add("hidden");
        document.body.classList.remove("overflow-hidden");
    }

    openBtn.addEventListener("click", openMenu);
    closeBtn.addEventListener("click", closeMenu);
    overlay.addEventListener("click", closeMenu);
    links.forEach(l => l.addEventListener("click", closeMenu));
});
</script>
