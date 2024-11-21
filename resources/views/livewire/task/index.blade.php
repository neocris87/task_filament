<div class="mx-10">
    <h1>Listado de Tareas</h1>
    <a href="/tasks/create" class="btn btn-info">Agregar</a>
    <div class="overflow-x-auto">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Description</th>
              <th>User</th>
              <th>Completed</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th>{{ $task->id }}</th>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->user->name }}</td>
                    <td>{{ $task->completed == true ? "Completada" : "Pendiente" }}</td>
                    <td>
                        {{-- <x-button label="Editar" class="btn-warning" onclick="alert('Editar # ' + {{ $task->id }})" /> --}}
                        <x-button label="Eliminar" class="btn-error" wire:click="delete({{ $task->id }})" />
                    </td>

                </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>
