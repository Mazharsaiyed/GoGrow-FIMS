<?php

namespace App\Http\Controllers\Admin;

use App\Feedback;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCategoryRequest;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();

        return view('admin.feedback.index', compact('feedbacks'));
    }

    public function create()
    {
        return view('admin.feedback.create');
    }

    public function store(Request $request)
    {
        $feedbacks = Feedback::create();
        $feedbacks->name = $request->name;
        $feedbacks->email = $request->email;
        $feedbacks->subject = $request->subject;
        $feedbacks->save();
        
        return redirect()->route('admin.feedback.index')->with('success', 'Create successfully');
    }

    public function edit($id)
    {
        $feedbacks = Feedback::where('id',$id)->first();

        return view('admin.feedback.edit', compact('feedbacks'));
    }

    public function update(Request $request, $id)
    {
        $feedbacks = Feedback::where('id',$id)->first();
        $feedbacks->name = $request->name;
        $feedbacks->email = $request->email;
        $feedbacks->subject = $request->subject;
        $feedbacks->save();

        return redirect()->route('admin.feedback.index')->with('success','Updated successfully');
    }

    public function show($id)
    {
        $feedbacks = Feedback::where('id',$id)->first();
        return view('admin.feedback.show', compact('feedbacks'));
    }

    public function destroy(Request $request, $id)
    {
        Feedback::where('id', $id)->delete();
        return back()->with('success', 'Delete successfully');
    }

    public function massDestroy(Request $request)
    {
        Feedback::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
