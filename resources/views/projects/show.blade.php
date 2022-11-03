<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Bugs - ' . $project->title) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 bg-white border-b border-gray-200 flex flex-col gap-4">
                    <div class="w-full h-full rounded-xl p-5">
                        <a href="/bugs/create?project_id={{$project->id}}">Add a bug</a>
                            @if ($bugs->count() > 0)
                            <table>
                                <tr>
                                    <th class="px-4">ID</th>
                                    <th  class="px-4">Description</th>
                                    <th  class="px-4">Category</th>
                                    <th class="px-4">Fix Priority</th>
                                </tr>
                                @foreach($bugs as $bug)
                                <tr>
                                    <td  class="px-4 text-center">
                                        <p>{{$bug->id}}</p>
                                    </td>
                                    <td class="px-4 text-center">{{$bug->description}}</td>
                                    <td class="px-4 text-center">{{$bug->category->name}}</td>
                                    <td class="px-4 text-center">{{$bug->priority}}</td>
                                    <td class="px-4 text-center">See More</td>
                                    <td class="px-4 text-center">
                                        <form action="/bugs/{{$bug->id}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                        <button type="submit">
                                            Delete
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            @else
                            <p class="text-center">No unfixed bugs on this project :D</p>
                    
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>