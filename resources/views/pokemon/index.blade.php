@extends('layouts.app')

@section('conteudo')

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 p-10 justify-center">
        @foreach($pokemon as $entity)
            <div class="max-w-xs rounded-xl border-8 border-yellow-300 bg-gradient-to-b from-white via-gray-200 to-white shadow-lg relative transform transition-transform duration-300 hover:scale-105">  

                <div class="p-6 flex justify-center bg-white-300 rounded-t-xl border-b-2 border-yellow-300">
                    <img class="w-28 h-28 object-contain" src="{{ asset('storage/' . $entity->image) }}" alt="{{ $entity->name }}">
                </div>

                <div class="px-6 py-6">
                    <div class="font-bold text-xl text-gray-800 mb-4 flex items-center justify-center">{{ $entity->name }}</div>
                    
                    <p class="text-gray-700 text-base mb-4">
                        <strong>Tipo:</strong> {{ $entity->type }}
                    </p>

                    <p class="text-gray-700 text-base mb-6">
                        <strong>Pontos de poder:</strong> {{ $entity->strenght }}
                    </p>
                </div>

                <div class="px-6 pt-4 pb-6 flex justify-end">
                    <a href="{{ url('pokemon/'.$entity->id.'/edit') }}" class="inline-block bg-yellow-300 hover:bg-yellow-400 text-white rounded-full px-4 py-2 text-sm font-semibold mr-2 mb-2">Editar</a>

                    <form action="{{ url('pokemon/'.$entity->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-block bg-red-500 hover:bg-red-600 text-white rounded-full px-4 py-2 text-sm font-semibold">Deletar</button>
                    </form>
                </div>

            </div>
        @endforeach
    </div>

@endsection
