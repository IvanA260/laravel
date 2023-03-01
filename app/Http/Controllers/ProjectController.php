<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    public function index()
    {
        $projects = Project::latest('updated_at')->paginate();

        return view('projects.index', compact('projects'));
    }

     public function show(Project $project){

        //$project = Project::findOrFail($id);

        return view('projects.show', [
            'project' => $project
        ]);
     }

     public function create(){

        return view('projects.create',[
            'project' => new Project
        ]);
     }

     public function store(SaveProjectRequest $request){

        $project = Project::create( $request->validated() );

        $project->image = $request->file('image')->store('images');

        $project->save();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con exito');
     }

     public function edit(Project $project){

        return view('projects.edit', [
            'project' => $project
        ]);
     }

     public function update(Project $project, SaveProjectRequest $request){

        if( $request->hasFile('image')){
            Storage::delete($project->image);

            $project -> fill( $request->validated() );

            $project->image = $request->file('image')->store('images');

            $project->save();
        }else{
            $project->update(array_filter($request->validated()));
        }
        //$project-> update([
        //    'title' => request('title'),
        //    'url' => request('url'),
        //    'description' => request('description'),
        //]);

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con exito');
     }

     public function destroy(Project $project){
        Storage::delete($project->image);

        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con exito');
     }


}
