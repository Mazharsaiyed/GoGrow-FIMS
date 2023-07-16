<?php

namespace App\Http\Controllers\Admin;

use App\UsefulLinks;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCategoryRequest;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UsefulLinkController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('useful_links_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $useful_links = UsefulLinks::all();

        return view('admin.useful-links.index', compact('useful_links'));
    }

    public function create()
    {
        return view('admin.useful-links.create');
    }

    public function store(Request $request)
    {
        $useful_links = UsefulLinks::create();
        $useful_links->title = $request->title;
        $useful_links->link = $request->link;
        $useful_links->description = $request->description;
        $useful_links->save();
        
        return redirect()->route('admin.useful-links.index')->with('success', 'Create successfully');
    }

    public function edit($id)
    {
        $useful_links = UsefulLinks::where('id',$id)->first();

        return view('admin.useful-links.edit', compact('useful_links'));
    }

    public function update(Request $request, $id)
    {
        $useful_links = UsefulLinks::where('id',$id)->first();
        $useful_links->title = $request->title;
        $useful_links->link = $request->link;
        $useful_links->description = $request->description;
        $useful_links->save();

        return redirect()->route('admin.useful-links.index')->with('success','Updated successfully');
    }

    public function show($id)
    {
        $useful_links = UsefulLinks::where('id',$id)->first();
        return view('admin.useful-links.show', compact('useful_links'));
    }

    public function destroy(Request $request, $id)
    {
        UsefulLinks::where('id', $id)->delete();
        return back()->with('success', 'Delete successfully');
    }

    public function massDestroy(Request $request)
    {
        UsefulLinks::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
