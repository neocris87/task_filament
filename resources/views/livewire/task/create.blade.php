<div class="flex justify-center items-center w-screen">
    <form wire:submit='store'>
        <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">
                    Agregar Tarea
                </h2>

                <x-select label="Usuario" :options="$users" wire:model='form.user_id' placeholder="Selecciona un usuario"  />

                <x-input label="Title" placeholder="Agregar title"   wire:model='form.title'  />

                <x-textarea label="Description" wire:model='form.description' rows="3" placeholder="Agregar description" />

                <x-checkbox label="Completed" wire:model='form.completed' right />

                <div class="card-actions justify-end">
                    <a href="/tasks" class="btn btn-warning">Volver</a>
                    <x-button type="submit" label="Agregar" class="btn-success" spinner="store"  />
                </div>
            </div>
        </div>
    </form>
</div>
