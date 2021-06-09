<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <div class="my-4">
                        @include('layouts.flash')
                    </div>

                    <h1><b>Modifier/supprimer les tags existants</b></h1>

                    <div class="flex flex-wrap">
                        @foreach ($tags as $tag)
                            <div class="w-1/5 py-4 px-8 bg-white shadow-lg rounded-lg my-10 mr-6">
                                <div>
                                    <p class="mb-2">{{$tag->name}}</p>
                                    <div class="flex">
                                        <a href="{{route('tagEdit', $tag)}}">
                                            <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded mt-4">Edit</button>
                                        </a>
                                        <form method="post" action="{{route('tagDestroy', $tag)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4 ml-4" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>



                
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>