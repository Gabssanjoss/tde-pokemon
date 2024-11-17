@extends('layouts.app')

@section('conteudo')


<div class="w-full max-w-xs mx-auto flex items-center justify-center min-h-screen ">
  <form class="bg-white shadow-md rounded px-20 pt-6 pb-8 mb-4" action="{{ url('pokemon') }}" method="POST" enctype="multipart/form-data">
  <img src="../logo-pokemon.png" alt="logo do pokemon" class="w-auto h-16 mb-4" >
  @csrf

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Nome do Pokémon">
        Nome do Pokémon
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="Nome do Pokémon" required>
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Tipo do Pokémon">
        Tipo do Pokémon
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="type" type="text" placeholder="Tipo do Pokémon" required>
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Pontos de Poder">
        Pontos de Poder
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="strenght" type="number" placeholder="Pontos de Poder" required>
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Imagem do Pokémon">
        Imagem do Pokémon
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="image" id="image" type="file" placeholder="Imagem do Pokémon" required>
    </div>


    <div class="flex items-center justify-center">
      <button class=" text-white bg-red-700 hover:scale-110 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Criar Pokémon
      </button>
    </div>

  </form>
</div>

@endsection
