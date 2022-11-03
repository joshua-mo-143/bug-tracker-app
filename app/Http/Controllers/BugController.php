<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Bug;
use Illuminate\Http\Request;

class BugController extends Controller
{
    public function create() {
        $categories = Category::all();
        $projects = Project::where('user_id', auth()->user()->id)->get();

        return view('bugs.create', [
            'categories' => $categories,
            'projects' => $projects
        ]);
    }

    public function store() {
        $attributes = request()->validate([
            'description' => ['min:3', 'max:500'],
            'project_id' => ['numeric', 'required'],
            'category_id' => ['numeric', 'required'],
            'priority' => ['min:1', 'max:4', 'numeric'],
        ]);

        Bug::create($attributes);

        return redirect('/projects/' . $attributes['project_id'])->with(200, 'Success.');
    }

    public function delete(Bug $bug) {
        $bug->delete();

        return redirect(url()->previous());
    }
}
