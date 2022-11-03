<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Projects') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/projects/create">Create Project</a>
                <div class="p-5 bg-white border-b border-gray-200 flex flex-col gap-4">
                    @foreach ($projects as $project)
                    <a href="/projects/{{$project->id}}">
                        <div class="w-full bg-stone-100 h-full rounded-xl p-5">
                            <p class="text-xl">{{$project->title}}</p>
                            <p>Critical bugs?: No</p>
                            <p>Find out more</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>