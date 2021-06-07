<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200 text-green-600 bg-green-100">
                    <b>Vous êtes connecté(e)</b>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.flash')

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><b>YOU</b></p>
                    <br>
                    <div class="flex">
                        <div>
                            <img class="border-4 border-green-500" src={{asset('img/' . Auth::User()->photo)}} alt="" style="height: 300px">
                        </div>
                        <div class="ml-8">
                            <h5 class="card-subtitle mb-2 text-muted"><b>Nom :</b> {{ Auth::User()->name }}</h5>
                            <h5 class="card-subtitle mb-2 text-muted"><b>Prénom :</b> {{ Auth::User()->firstname }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><b>Age :</b> {{ Auth::User()->age }} ans</h6>
                            <h6 class="card-subtitle mb-2 text-muted"><b>E-mail :</b> {{ Auth::User()->email }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted"><b>Genre :</b> {{ Auth::User()->genre->name }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted"><b>Rôle :</b> {{ Auth::User()->role->name }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted"><b>Job :</b> {{ Auth::User()->job->name }}</h6>
                            <p class="card-subtitle mb-2 text-muted"><b>Description :</b> {{ Auth::User()->description }}</p>
                            {{-- <h6 class="card-text ">Rôle : {{ Auth::User()->role->nom }}</h6> --}}
                            <br>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
