
@extends('layouts.main')

@section('user_name')
    Administrador
@endsection

@section('menu')
    {{-- El menú se encuentra en layouts.main --}}
@endsection

@section('contenido')

    <div class="flex items-center gap-2 text-gray-700">

        <!-- Logo -->
        <i class="fas fa-gauge-high text-7xl"></i>

        <!-- Título -->
        <div class="flex flex-col leading-tight font-bold">
            <span class="text-4xl">Panel Principal</span>
            <span class="text-lg">Resumen general del sistema</span>
        </div>

    </div>

    <!-- Tarjetas informativas -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 mt-4">

        <div class="bg-blue-500 text-white rounded-lg shadow p-4 flex flex-col">
            <i class="fas fa-users text-4xl"></i>
            Pobladores
            <span class="text-2xl font-bold">1,234</span>
        </div>

        <div class="bg-green-500 text-white rounded-lg shadow p-4 flex flex-col">
            <i class="fas fa-baby text-4xl"></i>
            Nacimientos
            <span class="text-2xl font-bold">567</span>
        </div>

        <div class="bg-purple-500 text-white rounded-lg shadow p-4 flex flex-col">
            <i class="fas fa-square-plus text-4xl"></i>
            Defunciones
            <span class="text-2xl font-bold">89</span>
        </div>

        <div class="bg-yellow-500 text-white rounded-lg shadow p-4 flex flex-col">
            <i class="fas fa-chart-column text-4xl"></i>
            Reportes
            <span class="text-2xl font-bold">123</span>
        </div>

    </div>

@endsection
<!--  -->