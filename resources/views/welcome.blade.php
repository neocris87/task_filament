<x-layouts.app>
    <x-slot:title>Home</x-slot:title>
    <h1 class="text-center">Probando Filament</h1>

    <div>
        <livewire:searchable-select :items="[
            ['id' => 1, 'name' => 'Option 1'],
            ['id' => 2, 'name' => 'Option 2'],
            ['id' => 3, 'name' => 'Option 3'],
            ['id' => 4, 'name' => 'Option 4'],
            ['id' => 5, 'name' => 'Option 5'],
            ['id' => 6, 'name' => 'Option 6'],
            ['id' => 7, 'name' => 'Option 7'],
        ]" />
    </div>
</x-layouts.app>
