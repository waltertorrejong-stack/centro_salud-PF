@extends('layouts.main')
@section('user_name', 'Administrador')
@section('contenido')

<div class="p-2 space-y-4">

    <!-- ENCABEZADO: GESTION DE POBLADORES -->

    <div class="flex justify-between items-center w-full
                 pb-4 px-2">

        <!-- PARTE IZQUIERDA -->
        <div class="flex items-center gap-5">

            <i class="fas fa-users text-6xl text-blue-700"></i>

            <div class="flex flex-col gap-1">

                <span class="text-4xl font-bold text-blue-900">
                    Gestión de Pobladores
                </span>

                <span class="text-lg text-blue-800">
                    Administración del padrón familiar de las comunidades.
                </span>

            </div>

        </div>

        <!-- PARTE DERECHA: FECHA -->
        <div class="flex items-center gap-2 bg-blue-100
                    border border-blue-200 px-4 py-3 rounded-xl">

            <i class="fas fa-calendar-days text-2xl text-blue-600"></i>

            <span class="text-sm font-semibold text-blue-900">
                Fecha
            </span>

        </div>

    </div>


   
    <!-- TARJETAS DE POBLADORES -->
    

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <!-- PRIMERA TARJETA: REGISTRAR POBLADOR -->

        <div class="relative bg-blue-50 border-2 border-blue-300
                    rounded-xl p-6 shadow-sm">

            <!-- ETIQUETA PRIMERO -->
            <span class="absolute top-0 right-2 bg-green-500
                         text-white text-sm font-bold
                         px-4 py-2 rounded-full">
                Primero
            </span>

            <!-- CONTENIDO SUPERIOR -->
            <div class="flex items-center gap-5">

                <!-- ICONO -->
                <div class="flex items-center justify-center
                            w-44 h-44 shrink-0 rounded-full
                            bg-blue-100 text-blue-600">

                    <i class="fas fa-user-plus text-7xl"></i>

                </div>

                <!-- TEXTO -->
                <div class="flex-1 min-w-0">

                    <h2 class="text-2xl font-bold text-blue-900">
                        Registrar Poblador
                    </h2>

                    <p class="text-lg text-blue-800 mt-3">
                        Registrar personas nuevas
                        en la base de datos.
                    </p>

                    <!-- BOTON -->
                    <div class="flex justify-end mt-6">

                        <a href="{{ route('pobladores.create') }}"
                           class="inline-flex items-center gap-3
                                  bg-blue-600 hover:bg-blue-700
                                  text-white px-7 py-4 rounded-xl
                                  font-semibold text-lg transition">

                            <i class="fas fa-plus text-2xl"></i>

                            Nuevo Poblador

                        </a>

                    </div>

                </div>

            </div>

        </div>


        <!-- SEGUNDA TARJETA: PERSONAS REGISTRADAS -->

        <div class="bg-green-50 border-2 border-green-300
                    rounded-xl p-6 shadow-sm">

            <!-- CONTENIDO SUPERIOR -->
            <div class="flex items-center gap-5">

                <!-- ICONO -->
                <div class="flex items-center justify-center
                            w-44 h-44 shrink-0 rounded-full
                            bg-teal-100 text-blue-600">

                    <i class="fas fa-users text-7xl"></i>

                </div>

                <!-- TEXTO -->
                <div class="flex-1 min-w-0">

                    <h2 class="text-2xl font-bold text-blue-900">
                        Personas Registradas
                    </h2>

                    <p class="text-lg text-blue-800 mt-3">
                        Consultar y buscar personas
                        existentes en el padrón.
                    </p>

                    <!-- BOTON -->
                    <div class="flex justify-end mt-6">

                        <a href="#"
                           class="inline-flex items-center gap-3
                                  bg-blue-600 hover:bg-blue-700
                                  text-white px-7 py-4 rounded-xl
                                  font-semibold text-lg transition">

                            <i class="fas fa-search text-2xl"></i>

                            Buscar Personas

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>


    
    <!-- TARJETA: ADMINISTRAR FAMILIAS -->
   

    <div class="relative flex items-center w-full min-h-[240px]
                overflow-hidden rounded-xl border-2 border-indigo-300
                bg-gradient-to-r from-indigo-100 via-white to-blue-100
                px-8 py-6 shadow-sm">

        <!-- IMAGEN DECORATIVA DERECHA -->

        <div class="absolute inset-y-0 right-0 w-1/2 hidden sm:block">

            <img src="{{ asset('images/familia-banner.png') }}"
                  alt="Familia"
                  class="w-full h-full object-cover object-right">

            <!-- DEGRADADO -->
            <div class="absolute inset-0 bg-gradient-to-r
                        from-indigo-100 via-indigo-100/60 to-transparent">
            </div>

        </div>


        <!-- CONTENIDO PRINCIPAL -->

        <div class="relative z-10 flex items-center gap-8
                    max-w-full sm:max-w-[85%]">

            <!-- ICONO DE CASA -->

            <div class="flex items-center justify-center
                        shrink-0 w-52 h-44 text-blue-600">

                <i class="fas fa-house-user text-8xl"></i>

            </div>


            <!-- TEXTO Y BOTON -->

            <div class="flex flex-col gap-2">

                <h2 class="text-3xl font-bold text-blue-900">
                    Administrar Familias
                </h2>

                <p class="text-lg text-blue-900">
                    Crear familias y agregar personas con sus respectivos parentescos.
                </p>

                <!-- BOTON -->

                <div class="flex justify-start mt-3">

                    <a href="#"
                       class="inline-flex items-center gap-3
                              bg-blue-600 hover:bg-blue-700
                              text-white font-semibold text-lg
                              px-7 py-4 rounded-xl transition">

                        <i class="fas fa-user-plus text-2xl"></i>

                        Gestionar Familias

                    </a>

                </div>

            </div>

        </div>

    </div>


   
    <!-- INFORMACION IMPORTANTE -->
    

    <div class="flex items-center gap-4 bg-blue-50
                border border-blue-200 rounded-xl p-4">

        <i class="fas fa-lightbulb text-4xl text-blue-600"></i>

        <div class="flex flex-col">

            <span class="font-bold text-blue-800 text-lg">
                Información importante:
            </span>

            <p class="text-blue-900">
                Primero registre a las personas, luego agréguelas
                en una familia para mantener un padrón actualizado.
            </p>

        </div>

    </div>

</div>

@endsection
