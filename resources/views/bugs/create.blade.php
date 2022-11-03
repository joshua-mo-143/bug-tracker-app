<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Add a Bug") }}
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
                            <label for="project_id">
                                <span>What project is this for?</span>
                                <select name="project_id" id="projectSelect" value="">
                                    @foreach ($projects as $project)
                                    <option value="{{$project->id}}">{{$project->title}}</option>
                                    @endforeach
                                </select>
                            </label>
                            <label for="category_id">
                                <span>Category:</span>
                                <select name="category_id">
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </label>

                            <label for="description">
                                <span>Describe the bug:</span>
                                <textarea name="description" id="" cols="60" rows="5" class="block m-auto" required></textarea>
                            </label>
                            
                            <label for="priority">
                                <span>How high priority is this?</span>
                                <select name="priority">
                                    <option value="1">1 - Low Priority (minor inconvenience)</option>
                                    <option value="2">2 - Medium Priority (few/some services inaccessible)</option>
                                    <option value="3">3 - High Priority (some important services inaccessible)</option>
                                    <option value="4"> 4 - Critical Priority (service can't continue until fixed)</option>
                                </select>
                            </label>

                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>