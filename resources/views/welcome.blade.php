@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-center h-full px-4 text-center">
        <h1 class="text-3xl sm:text-4xl font-bold mb-4">
            Bienvenue <span class="animate-wave">👋</span>
        </h1>
        <p class="text-lg sm:text-xl">
            Je suis <span class="font-semibold">Lilou Dufau</span>, étudiante en développement informatique.
        </p>
        <p class="mt-2 text-gray-600 text-sm sm:text-base">
            Découvrez mon portfolio pour en savoir plus sur mes projets et compétences.
        </p>
        <a href="#about" class="mt-4 px-6 py-2 bg-gray-700 text-teal-500 rounded-3xl hover:bg-teal-500 hover:rounded-3xl hover:text-white p-2">
            En savoir plus sur moi
        </a>
    </div>

    <style>
        @keyframes wave {
            0% { transform: rotate(0deg); }
            10% { transform: rotate(14deg); }
            20% { transform: rotate(-8deg); }
            30% { transform: rotate(14deg); }
            40% { transform: rotate(-4deg); }
            50% { transform: rotate(10deg); }
            60% { transform: rotate(0deg); }
            100% { transform: rotate(0deg); }
        }
        .animate-wave {
            display: inline-block;
            animation: wave 1.5s infinite;
            transform-origin: 70% 70%;
        }
    </style>
@endsection
