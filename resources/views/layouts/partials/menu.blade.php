
<nav class="flex flex-col gap-3 text-xl text-white ">

    <a href="{{ route('inicio') }}"
       class="flex items-center rounded-lg px-3 py-3 gap-3 hover:bg-blue-700 transition
       {{ request()->routeIs('inicio') ? 'bg-blue-700' : '' }}">
        <i class="w-8 fas fa-home"></i>
        Inicio
    </a>

    <a href="{{ route('pobladores.index') }}"
       class="flex items-center rounded-lg px-3 py-3 gap-3 hover:bg-blue-700 transition
       {{ request()->routeIs('pobladores.*') ? 'bg-blue-700' : '' }}">
        <i class="w-8 fas fa-users"></i>
        Pobladores
    </a>

    <a href="{{ route('nacimientos.index') }}"
       class="flex items-center rounded-lg px-3 py-3 gap-3 hover:bg-blue-700 transition
       {{ request()->routeIs('nacimientos.*') ? 'bg-blue-700' : '' }}">
        <i class="w-8 fas fa-baby"></i>
        Nacimientos
    </a>

    <a href="{{ route('defunciones') }}"
       class="flex items-center rounded-lg px-3 py-3 gap-3 hover:bg-blue-700 transition
       {{ request()->routeIs('defunciones*') ? 'bg-blue-700' : '' }}">
        <i class="w-8 fas fa-square-plus"></i>
        Defunciones
    </a>

    <a href="{{ route('reportes') }}"
       class="flex items-center rounded-lg px-3 py-3 gap-3 hover:bg-blue-700 transition
       {{ request()->routeIs('reportes*') ? 'bg-blue-700' : '' }}">
        <i class="w-8 fas fa-chart-column"></i>
        Reportes
    </a>

    <a href="{{ route('usuarios') }}"
       class="flex items-center rounded-lg px-3 py-3 gap-3 hover:bg-blue-700 transition
       {{ request()->routeIs('usuarios*') ? 'bg-blue-700' : '' }}">
        <i class="w-8 fas fa-user-group"></i>
        Usuarios
    </a>

    <a href="{{ route('configuracion') }}"
       class="flex items-center rounded-lg px-3 py-3 gap-3 hover:bg-blue-700 transition
       {{ request()->routeIs('configuracion*') ? 'bg-blue-700' : '' }}">
        <i class="w-8 fas fa-gear"></i>
        Configuración
    </a>

</nav>
