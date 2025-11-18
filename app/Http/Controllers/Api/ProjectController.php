<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller {
    public function index() {
        return Project::orderBy('featured', 'desc')->orderBy('created_at', 'desc')->get();
    }

    public function show($slug) {
        return Project::where('slug', $slug)->firstOrFail();
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string|unique:projects,slug',
            'description' => 'nullable|string',
            'tech_stack' => 'nullable|string',
            'image' => 'nullable|string',
            'url' => 'nullable|url',
            'featured' => 'nullable|boolean'
        ]);
        $project = Project::create($data);
        return response($project, 201);
    }

    public function update(Request $request, Project $project) {
        $data = $request->validate([
            'title' => 'sometimes|required|string',
            'slug' => "sometimes|required|string|unique:projects,slug,{$project->id}",
            'description' => 'nullable|string',
            'tech_stack' => 'nullable|string',
            'image' => 'nullable|string',
            'url' => 'nullable|url',
            'featured' => 'nullable|boolean',
        ]);
        $project->update($data);
        return response($project, 200);
    }

    public function destroy(Project $project) {
        $project->delete();
        return response(null, 204);
    }
}
