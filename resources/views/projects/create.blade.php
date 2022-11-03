<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Create Project") }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 bg-white border-b border-gray-200 flex flex-col gap-4">
                    <div class="w-full h-full rounded-xl p-5">
                        <form method="POST" class="text-center w-full lg:w-3/5 m-auto flex flex-col gap-4" action="/bugs/create">
                            @csrf
                            <p class="text-lg lg:text-3xl">Submit Bug Form</p>
                            <label for="title">
                                <span>Project title:</span>
                                <input name="title" type="text" required/>
                            </label>
                            <label for="description">
                                <span>Project description:</span>
                                <textarea name="description" type="text" required></textarea>
                            </label>

                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>