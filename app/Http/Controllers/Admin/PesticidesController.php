<?php

namespace App\Http\Controllers\Admin;

use App\Pesticides;
use App\Http\Controllers\Controller;

use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PesticidesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crop_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $Pesticides = Pesticides::all();

        return view('admin.pesticides.index', compact('Pesticides'));
    }

    public function create()
    {

        return view('admin.pesticides.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'filename' => 'sometimes|mimes:pdf,doc,csv|max:2048',
        ]);

        if($request->id)
        $Info = Pesticides::where('id',$request->id)->first();

        $seed = Pesticides::updateOrCreate(['id' => $request->id],[

            'name'  => $request->name,
            'price'  => $request->price,
            'description'  => $request->company,
            'uses'  => $request->uses,
            'images'  => ($request->image)?$this->seedImage($request->image):$Info->image,
            'filename'  => ($request->filename)?$this->seedImage($request->filename):$Info->filename,
        ]);

        $msg = isset($request->id)?'Updated':'Created'.' '.'Successfully';
        return redirect()->route('admin.pesticides.index')->with('success',$msg);
    }

    public function edit($id)
    {
        $pesticides = Pesticides::where('id',$id)->first();
        return view('admin.Pesticides.create', compact('pesticides'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->route('admin.categories.index');
    }

    public function show($id)
    {
        $Pesticides = Pesticides::where('id',$id)->first();
        return view('admin.Pesticides.show', compact('Pesticides'));
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Pesticides::where('id',$id)->delete();

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
        $file->move(public_path('Pesticides'), $imageName);
        return $imageName;
    }
}
