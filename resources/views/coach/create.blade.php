@extends('layouts.app')

@section('conteudo')


<div class="w-full max-w-xs mx-auto flex items-center justify-center min-h-screen ">
  <form class="bg-white shadow-md rounded px-20 pt-6 pb-8 mb-4" action="{{ url('coach') }}" method="POST" enctype="multipart/form-data">
  <img src="../logo-pokemon.png" alt="logo do pokemon" class="w-auto h-16 mb-4" >
  @csrf

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Nome do Treinador">
        Nome do Treinador
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="Nome do Pokémon" required>
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Imagem do Treinador">
        Imagem do Treinador
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="image" id="image" type="file" placeholder="Imagem do Treinador" required>
    </div>


    <div class="flex items-center justify-center">
      <button class=" text-white bg-red-700 hover:scale-110 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Criar Treinador
      </button>
    </div>

  </form>
</div>

@endsection

