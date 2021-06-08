<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('userUpdate', $user) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h1><b>Modifier vos coordonnées :</b></h1>
            
                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Name')" />
            
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" required autofocus />
                        </div>
            
            
                        <!-- First name -->
                        <div class="mt-4">
                            <x-label for="firstname" :value="__('First name')" />
            
                            <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" value="{{$user->firstname}}"  required autofocus />
                        </div>
            
                        <!-- Age -->
                        <div class="mt-4">
                            <x-label for="age" :value="__('Age')" />
            
                            <x-input id="age" class="block mt-1 w-full" type="number" min="16" max="100" name="age" value="{{$user->age}}"   required autofocus />
                        </div>
                        
                        <!-- Photo -->
                        <div class="mt-4">
                            <x-label for="photo" :value="__('Photo')" />

                            <x-input id="photo" class="block mt-1 w-full" type="file" name="photo" value="{{$user->photo}}"  required autofocus />
                        </div>

                        <!-- Description -->
                        <div class="mt-4">
                            <x-label for="description" :value="__('Description')" />
            
                            <x-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{$user->description}}"  required autofocus />
                        </div>
                        
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />
            
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}"  required />
                        </div>

                        <!-- Genre -->
                        <div class="mt-4">
                            <x-label for="genre_id" :value="__('Genre')" />
                            
                            <select id="genre_id" class="block mt-1 w-full border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg" name="genre_id" :value="old('genre_id')">
                                <option value="">Select a genre</option>
                                @foreach ($genres as $genre)
                                    <option value="{{$genre->id}}">{{$genre->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Job -->
                        <div class="mt-4">
                            <x-label for="job_id" :value="__('Job')" />
                            
                            <select id="job_id" class="block mt-1 w-full border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg" name="job_id" :value="old('job_id')">
                                <option value="">Select a job</option>
                                @foreach ($jobs as $job)
                                <option value="{{$job->id}}">{{$job->name}}</option>
                                @endforeach
                            </select>
                        </div>

            
                        @admin
                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />
            
                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                        </div>
            
                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />
            
                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required />
                        </div>
                        @endadmin
            
                        <div class="flex items-center justify-end mt-4">
            
                            <x-button class="ml-4" type="submit">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>