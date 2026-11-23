
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Centro de Salud San Pedro y San Pablo</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="flex min-h-screen">

        <!-- Menú lateral -->
        <div class="w-72 bg-blue-900 hidden sm:flex flex-col px-2 pt-4">

            <!-- Logo y nombre -->
            <div class="text-white text-base flex items-center gap-1 mb-4">

                <i class="fas fa-circle-plus text-6xl"></i>

                <div class="flex flex-col leading-tight font-bold">
                    <span>Centro de Salud</span>
                    <span>San Pedro y San Pablo</span>
                </div>

            </div>

            <!-- Menú -->
            <div>
                @include('layouts.partials.menu')
            </div>
            <!-- pie de menu cerrar sesión-->
            <div class="pl-4 flex flex-col man-h-screen">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="w-full flex items-center gap-3 bg-red-500 hover:bg-red-700
                            text-white px-4 py-3 rounded-lg transition duration-200">
                        <i class="fas fa-right-from-bracket"></i>
                        <span>Cerrar sesión</span>
                    </button>
                </form>
            </div>

        </div>

        <!-- Contenido principal -->
        <div class="flex-1">

            <!-- Encabezado -->
            <div class="flex justify-end items-center bg-gray-200 p-4 relative" x-data="{mostrar_menu: false}">

                <div class="text-blue-900 font-bold text-2xl">
                    @yield('user_name', 'Administrador')
                </div>

                <!-- Menú móvil -->
                <div class="sm:hidden">
                    <button type="button" x-on:click="mostrar_menu=!mostrar_menu"> 
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
                <div x-show="mostrar_menu" x-on:click.away="mostrar_menu=false" class="border rounded-2xl absolute right-0 top-full flex flex-col bg-blue-900 text-white px-6" >
                    @include('layouts.partials.menu-responsive')
                </div>
            </div>
            <!-- Contenido de cada página -->
            <div class="flex flex-col p-4 bg-gray-100 min-h-screen">
                @yield('contenido')
            </div>
        </div>
    </div>
</body>
</html>
