<div class="navbar bg-base-100">
    <div class="flex-1">
        <a href="/" class="btn btn-ghost text-xl">Tareas</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1 justify-center items-center">
            @if (auth()->user())
            <li>
                <details>
                    <summary>Perfil</summary>
                    <ul class="bg-base-100 rounded-t-none p-2">
                        <li>
                            <a class="flex flex-col items-start">
                                <p class="text-sm font-bold">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
                            </a>
                        </li>
                        {{-- <li><a>Link 2</a></li> --}}
                    </ul>
                </details>
            </li>
            @endif
            <li><a href="/admin">Admin</a></li>
            <li><a href="/tasks">Tareas</a></li>
            <x-theme-toggle />
        </ul>
    </div>
</div>
