<?php

namespace App\Http\Controllers;

use App\Http\Requests\Skills\CreateSkillRequest;
use App\Http\Resources\SkillResource;
use App\Models\Posts;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;


class SkillController extends Controller
{
    public function index()
    {
        $skills = SkillResource::collection(Posts::all());
        return Inertia::render('Skills/Index', compact('skills'));
    }

    public function create()
    {
        return Inertia::render('Skills/Create');
    }

    public function store(CreateSkillRequest $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('posts');
            Posts::create([
                'title'     => $request->title,
                'image'     => $image,
                'content'   => $request->content,
            ]);

            return Redirect::route('skills.index');
        }

        return Redirect::back();
    }

    public function edit(Posts $post)
    {
        dd($post->id);
        return Inertia::render('Skills/Edit', compact('post'));
    }

    public function update(Request $request, Skill $skill)
    {
        $image = $skill->image;
        $request->validate([
            'name'  => ['required', 'min:3'],
        ]);

        if ($request->hasFile('image')) {
            Storage::delete($skill->image);
            $image = $request->file('image')->store('skills');
        }
      
        $skill->update([
            'name'      => $request->name,
            'image'     => $image,
        ]);

        return Inertia::location(route('skills.index'));
    }

    public function destroy(Skill $skill)
    {
        Storage::delete($skill->image);
        $skill->delete();

        return Redirect::back();
    }
}
