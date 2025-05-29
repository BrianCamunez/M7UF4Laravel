{{-- Marca --}}
<div>
    <label for="marca" class="block text-sm font-semibold text-gray-700 mb-2">Marca</label>
    <input type="text" name="marca" id="marca"
           class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
           placeholder="Ex: Samsung, Apple, Xiaomi..."
           value="{{ old('marca', $movil->marca ?? '') }}">
    @error('marca')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

{{-- Modelo --}}
<div>
    <label for="modelo" class="block text-sm font-semibold text-gray-700 mb-2">Model</label>
    <input type="text" name="modelo" id="modelo"
           class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
           placeholder="Ex: Galaxy S23, iPhone 14, Redmi Note 12..."
           value="{{ old('modelo', $movil->modelo ?? '') }}">
    @error('modelo')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

{{-- Sistema --}}
<div>
    <label for="sistema" class="block text-sm font-semibold text-gray-700 mb-2">Sistema operatiu</label>
    <input type="text" name="sistema" id="sistema"
           class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
           placeholder="Ex: Android 13, iOS 17..."
           value="{{ old('sistema', $movil->sistema ?? '') }}">
    @error('sistema')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

{{-- Pulgadas --}}
<div>
    <label for="pulgadas" class="block text-sm font-semibold text-gray-700 mb-2">Mida (polzades)</label>
    <input type="text" name="pulgadas" id="pulgadas"
           class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
           placeholder="Ex: 6.1, 6.7..."
           value="{{ old('pulgadas', $movil->pulgadas ?? '') }}">
    @error('pulgadas')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
