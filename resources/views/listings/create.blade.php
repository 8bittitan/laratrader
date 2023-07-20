<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Listing
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-semibold mb-8">Add a new Listing to sell</h3>

                    <form method="POST" action="{{ route('listings.store') }}">
                        @csrf

                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="flex gap-4 mt-4">
                            <div class="flex-1">
                                <x-input-label for="make" :value="__('Make')" />
                                <x-text-input id="make" class="block mt-1 w-full" type="text" name="make" :value="old('make')" required />
                                <x-input-error :messages="$errors->get('make')" class="mt-2" />
                            </div>

                            <div class="flex-1">
                                <x-input-label for="model" :value="__('Model')" />
                                <x-text-input id="model" class="block mt-1 w-full" type="text" name="model" :value="old('model')" required />
                                <x-input-error :messages="$errors->get('model')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex gap-4 mt-4">
                            <div class="flex-1">
                                <x-input-label for="year" :value="__('Year')" />
                                <x-text-input id="year" class="block mt-1 w-full" type="text" name="year" :value="old('year')" required />
                                <x-input-error :messages="$errors->get('year')" class="mt-2" />
                            </div>

                            <div class="flex-1">
                                <x-input-label for="zip" :value="__('Zip Code')" />
                                <x-text-input id="zip" class="block mt-1 w-full" type="text" name="zip" :value="old('zip')" required />
                                <x-input-error :messages="$errors->get('zip')" class="mt-2" />
                            </div>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="price" :value="__('Asking Price')" />
                            <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>

                        <!-- TODO: Add image upload -->

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Add Listing') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
