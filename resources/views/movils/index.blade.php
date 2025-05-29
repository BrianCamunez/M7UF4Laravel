@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">📱 Llistat de mòbils</h1>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Marca</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Modelo</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sistema</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pulgadas</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Accions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($movils as $movil)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $movil->marca }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $movil->modelo }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $movil->sistema }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $movil->pulgadas }}</td>
                        <td class="px-6 py-4 whitespace-nowrap flex gap-2">
                            <a href="{{ route('movils.edit', $movil) }}"
                               class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm transition">
                               Editar
                            </a>
                            <form action="{{ route('movils.destroy', $movil) }}" method="POST"
                                  onsubmit="return confirm('Segur que vols eliminar aquest mòbil?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm transition">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
