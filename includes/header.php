<?php
// Si no se define en la página, por defecto NO es home
$is_home_page = isset($is_home_page) ? (bool)$is_home_page : false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quilamas</title>

    <!-- Tailwind CSS -->
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
        };
    </script>
</head>

<body class="font-sans">

<!-- HEADER -->
<nav
    id="main-nav"
    class="<?php echo $is_home_page
        ? 'absolute top-0 left-0 w-full z-50 bg-transparent'
        : 'relative bg-white border-b border-gray-100'; ?>"
>
    <div class="container mx-auto px-4 sm:px-8 lg:px-16 py-6 sm:py-8 flex items-center justify-between">
        <!-- Logo -->
        <a
            href="/quilamas/index.php"
            class="text-2xl sm:text-3xl font-serif tracking-wide <?php echo $is_home_page ? 'text-white' : 'text-primary-dark'; ?>"
        >
            Quilamas
        </a>

        <!-- Menú escritorio -->
        <div class="hidden md:flex items-center gap-10 text-[15px]">
            <a
                href="/quilamas/index.php#hero"
                class="<?php echo $is_home_page ? 'text-white/80 hover:text-white' : 'text-secondary-gray hover:text-primary-dark'; ?> transition-colors tracking-wide"
            >
                Inicio
            </a>

            <a
                href="/quilamas/sobre-mi.php"
                class="<?php echo $is_home_page ? 'text-white/80 hover:text-white' : 'text-secondary-gray hover:text-primary-dark'; ?> transition-colors tracking-wide"
            >
                Sobre mí
            </a>

            <a
                href="/quilamas/servicios.php"
                class="<?php echo $is_home_page ? 'text-white/80 hover:text-white' : 'text-secondary-gray hover:text-primary-dark'; ?> transition-colors tracking-wide"
            >
                Servicios
            </a>

            <a
                href="/quilamas/contacto.php"
                class="<?php echo $is_home_page ?  'text-white/80 hover:text-white' : 'text-secondary-gray hover:text-primary-dark'; ?> transition-colors tracking-wide"
            >
                Contacto
            </a>
        </div>

        <!-- Botón Contactar escritorio -->
        <a
            href="/quilamas/contacto.php"
            class="hidden sm:flex items-center justify-center px-6 sm:px-8 h-10 sm:h-12 rounded-lg border text-sm sm:text-base font-medium
                <?php echo $is_home_page
                    ? 'border-white text-white hover:bg-white hover:text-primary-dark'
                    : 'border-primary-dark text-primary-dark hover:bg-[#bea9cf] hover:text-white'; ?>
                transition-all"
        >
            Contactar
        </a>

        <!-- Botón móvil (simple, sin menú hamburguesa para no complicar) -->
        <a
            href="/quilamas/contacto.php"
            class="md:hidden text-sm px-4 py-2 rounded-lg border
                <?php echo $is_home_page
                    ? 'border-white text-white'
                    : 'border-primary-dark text-primary-dark'; ?>"
        >
            Contacto
        </a>
    </div>
</nav>
