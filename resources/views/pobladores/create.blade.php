@extends('layouts.main')
@section('user_name')

    <a href="{{ route('pobladores.index') }}"
       class="flex items-center gap-2 px-4 py-3 rounded-xl
              bg-blue-600 hover:bg-blue-700 text-white transition">

        <i class="fas fa-arrow-left"></i>
        Volver

    </a>

@endsection
@section('contenido')
    <div class="space-y-4">
        <!-- encabezado -->
        <div class="flex justify-between items-center w-full
                 pb-4 px-2 bg-blue-100 rounded-2xl">
            <!-- icono y titulo -->
            <div class="flex items-center gap-5">
                <i class="fas fa-users text-6xl text-blue-700"></i>

               <div class="flex flex-col gap-1">

                  <span class="text-4xl font-bold text-blue-900">
                    Registrar Poblador
                  </span>

                  <span class="text-lg text-blue-800">
                    Ingrese los datos de una persona que ya pertenece a nuestra comunidad.
                 </span>
              </div>
            </div>
            <!-- fecha -->
            <div class="flex items-center gap-2 bg-blue-100
                    border border-blue-200 px-4 py-3 rounded-xl">
                 <i class="fas fa-calendar-days text-2xl text-blue-600"></i>

                 <span class="text-sm font-semibold text-blue-900">
                     {{ date('d-m-y') }}
                 </span>
            </div>
        </div><!-- fin encabezado -->
        <!-- navegación -->
        <div class="flex gap-4 items-center w-full text-white">
           <!--  -- Registrar poblador -- -->
            <a href="{{ route('pobladores.create') }}"
            class="border rounded-2xl p-2 transition duration-200
            {{ request()->routeIs('pobladores.create')
                    ? 'bg-blue-800 border-blue-900 shadow-lg ring-2 ring-blue-300'
                    : 'bg-blue-500 border-blue-600 hover:bg-blue-700' }}">

                <i class="fas fa-user-plus"></i>
                Registrar poblador
            </a>


            <!-- -- Personas registradas -- -->
            <a href="{{ route('pobladores.index') }}"
            class="border rounded-2xl p-2 transition duration-200
            {{ request()->routeIs('pobladores.index')
                    ? 'bg-green-800 border-green-900 shadow-lg ring-2 ring-green-300'
                    : 'bg-green-500 border-green-600 hover:bg-green-700' }}">

                <i class="fas fa-users"></i>
                Personas registradas
            </a>


            <!-- -- Administrar familias -- -->
            <a href=""
            class="border rounded-2xl p-2 transition duration-200
            {{ request()->routeIs('familias.*')
                    ? 'bg-yellow-700 border-yellow-900 shadow-lg ring-2 ring-yellow-200'
                    : 'bg-yellow-400 border-yellow-500 hover:bg-yellow-600' }}">

                <i class="fas fa-home"></i>
                Administrar familias
            </a>

        </div>
        
    </div>
@endsection
