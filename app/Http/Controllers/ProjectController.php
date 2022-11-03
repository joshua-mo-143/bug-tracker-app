<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Bug;
class ProjectController extends Controller
{
    public function index() {
        
        $projects = Project::where('user_id', auth()->user()->id)->get();

        return view('projects.index', [
            'projects' => $projects
        ]);
    }

    public function show($id) {
        $bugs = Bug::where('project_id', $id)->get();
        $project = Project::where('id', $id)->first();


        return view('projects.show', [
            'bugs' => $bugs,
            'project' => $project
        ]);
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {
        echo "Hello world";
    }
}
