<?php

namespace App\Http\Controllers\Admin;

use App\Crop;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCategoryRequest;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CropController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crop_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crops = Crop::all();

        return view('admin.crops.index', compact('crops'));
    }

    public function create()
    {
        abort_if(Gate::denies('crop_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.crops.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'filename' => 'required|mimes:pdf,doc,csv|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
        $filenameNew = time().'.'.$request->filename->extension();  
     
        $request->image->move(public_path('images'), $imageName);
        $request->filename->move(public_path('images'), $filenameNew);

        $crops = Crop::create();
        $crops->name = $request->name;
        $crops->price = $request->price;
        $crops->description = $request->description;
        $crops->uses = $request->uses;
        $crops->image = $imageName;
        $crops->filename = $filenameNew;
        $crops->save();
        
        return redirect()->route('admin.crops.index')->with('success', 'Create successfully');
    }

    public function edit($id)
    {
        abort_if(Gate::denies('crop_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $crops = Crop::where('id',$id)->first();

        return view('admin.crops.edit', compact('crops'));
    }

    public function update(Request $request, $id)
    {
        $new = Crop::where('id',$id)->first();
        $new->name = $request->name;
        $new->price = $request->price;
        $new->description = $request->description;
        $new->uses = $request->uses;

        if($request->image)
        {
            $imageName = time().'.'.$request->image->extension(); 
            $request->image->move(public_path('images'), $imageName);
            $new->image = $imageName;
        }
        if($request->filename)
        {
            $filenameNew = time().'.'.$request->filename->extension();  
            $request->filename->move(public_path('images'), $filenameNew);
            $new->filename = $filenameNew;
        }
        $new->save();

        return redirect()->route('admin.crops.index')->with('success','Updated successfully');
    }

    public function show($id)
    {
        abort_if(Gate::denies('category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $crops = Crop::where('id',$id)->first();
        return view('admin.crops.show', compact('crops'));
    }

    public function destroy(Request $request, $id)
    {
        abort_if(Gate::denies('crop_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        Crop::where('id', $id)->delete();
        return back()->with('success', 'Delete successfully');
    }

    public function massDestroy(Request $request)
    {
        Crop::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
