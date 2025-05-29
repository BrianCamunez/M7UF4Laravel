@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-2">
        ➕ Afegeix nou mòbil
    </h1>

    <form action="{{ route('movils.store') }}" method="POST" class="space-y-6">
        @csrf

        @include('movils.form')

        <div class="text-center pt-6">
            <button type="submit"
                    class="inline-block bg-green-600 text-white font-semibold px-6 py-2 rounded-full hover:bg-green-700 transition shadow-md">
                📲 Crear mòbil
            </button>
        </div>
    </form>
</div>
@endsection
