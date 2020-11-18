<div>
    @foreach($pagos as $pago)
        <tr>
        <td class="border px-4 py-2">{{ $pago->id }}</td>
        <td class="border px-4 py-2">{{ $pago->title }}</td>
        <td class="border px-4 py-2">{{ $pago->description}}</td>
        <td class="border px-4 py-2">
        <button wire:click="edit({{ $todo->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
        <button wire:click="delete({{ $todo->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
        </td>
        </tr>
    @endforeach
</div>
