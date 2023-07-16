<?php

namespace App\Http\Controllers\Admin;

use App\Fertilizer;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCategoryRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FertilizersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crop_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fertilizers = Fertilizer::all();

        return view('admin.fertilizers.index', compact('fertilizers'));
    }

    public function create()
    {

        return view('admin.fertilizers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'filename' => 'sometimes|mimes:pdf,doc,csv|max:2048',
        ]);

        if($request->id)
        $Info = Fertilizer::where('id',$request->id)->first();

        $seed = Fertilizer::updateOrCreate(['id' => $request->id],[

            'name'  => $request->name,
            'price'  => $request->price,
            'company'  => $request->company,
            'uses'  => $request->uses,
            'image'  => ($request->image)?$this->seedImage($request->image):$Info->image,
            'filename'  => ($request->filename)?$this->seedImage($request->filename):$Info->filename,
        ]);

        $msg = isset($request->id)?'Updated':'Created'.' '.'Successfully';
        return redirect()->route('admin.fertilizers.index')->with('success',$msg);
    }

    public function edit($id)
    {
        $fertilizer = Fertilizer::where('id',$id)->first();
        return view('admin.fertilizers.create', compact('fertilizer'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->route('admin.categories.index');
    }

    public function show($id)
    {
        $fertilizer = Fertilizer::where('id',$id)->first();
        return view('admin.fertilizers.show', compact('fertilizer'));
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Fertilizer::where('id',$id)->delete();

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
        $file->move(public_path('fertilizer'), $imageName);
        return $imageName;
    }
}
