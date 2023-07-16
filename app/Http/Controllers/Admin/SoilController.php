<?php

namespace App\Http\Controllers\Admin;

use App\Fertilizer;
use App\Http\Controllers\Controller;
use App\Seed;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SoilController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crop_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $seeds = Seed::all();

        return view('admin.seeds.index', compact('seeds'));
    }

    public function create()
    {
        abort_if(Gate::denies('category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.seeds.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'filename' => 'sometimes|mimes:pdf,doc,csv|max:2048',
        ]);
        if($request->id)
        $Info = Seed::where('id',$request->id)->first();
        
        $seed = Seed::updateOrCreate(['id' => $request->id],[

            'name'  => $request->name,
            'price'  => $request->price,
            'company'  => $request->company,
            'uses'  => $request->uses,
            'image'  => ($request->image)?$this->seedImage($request->image):$Info->image,
            'filename'  => ($request->filename)?$this->seedImage($request->filename):$Info->filename,
        ]);

        $msg = isset($request->id)?'Updated':'Created'.' '.'Successfully';
        return redirect()->route('admin.seeds.index')->with('success',$msg);
    }

    public function edit($id)
    {
        $seed = Seed::where('id',$id)->first();
        return view('admin.seeds.create', compact('seed'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->route('admin.categories.index');
    }

    public function show($id)
    {
        $seed = Seed::where('id',$id)->first();
        return view('admin.seeds.show', compact('seed'));
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Seed::where('id',$id)->delete();

        return back();
    }

    public function massDestroy(MassDestroyCategoryRequest $request)
    {
        Crop::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    function seedImage($file)
    {
        $imageName = time().'.'.$file->extension();
        $file->move(public_path('seeds'), $imageName);
        return $imageName;
    }
}
