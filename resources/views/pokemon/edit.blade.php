@extends('layouts.app')

@section('conteudo')

<div class="flex items-center justify-center min-h-screen">
    <div class="max-w-xs rounded-xl border-8 border-yellow-300 bg-gradient-to-b from-white via-gray-200 to-white shadow-lg relative mt-12 mb-12">

        <form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="p-6 flex justify-center bg-white-300 rounded-t-xl border-b-2 border-yellow-300">
                <img class="w-28 h-28 object-contain" src="{{ asset('storage/' . $pokemon->image) }}" alt="{{ $pokemon->name }}">
            </div>

            <div class="px-6 py-6">
                <div class="font-bold text-xl text-gray-800 mb-4 flex items-center justify-center">
                    <input 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        name="name" 
                        type="text" 
                        placeholder="Nome do Pokémon" 
                        value="{{ $pokemon->name }}" 
                        required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="Tipo do Pokémon">Tipo do Pokémon</label>
                    <input 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        name="type" 
                        type="text" 
                        placeholder="Tipo do Pokémon" 
                        value="{{ $pokemon->type }}" 
                        required>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="Pontos de Poder">Pontos de Poder</label>
                    <input 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        name="strenght" 
                        type="number" 
                        placeholder="Pontos de Poder" 
                        value="{{ $pokemon->strenght }}" 
                        required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="Imagem do Pokémon">Alterar Imagem</label>
                    <input 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        name="image" 
                        id="image" 
                        type="file">
                </div>
            </div>
            
            <div class="px-6 pt-4 pb-6 flex justify-center">
                <button 
                    class="text-white bg-red-700 hover:scale-110 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                    type="submit">
                    Alterar Pokémon
                </button>
            </div>
        </form>

    </div>
</div>

@endsection
