<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Education;
use Illuminate\Support\Facades\Validator;


class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $education = Education::all();
        $address = 'admin/education/index';

        return view('admin.dashboard.base-index', compact('address', 'education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $address = 'admin/education/create';
        return view('admin.dashboard.base-index', compact('address'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // validate form

         Validator::make($request->all(), [
            'from' => 'required',
            'to' => 'required',
            'title' => 'required',
            'description' => 'required',
            'extra' => 'required',

        ], [
            'from.required' => __('dashboard.from') . __('dashboard.is-required'),
            'to.required' =>  __('dashboard.to') . __('dashboard.is-required'),
            'title.required' =>  __('dashboard.title') . __('dashboard.is-required'),
            'description.required' =>  __('dashboard.description') . __('dashboard.is-required'),
            'extra.required' =>  __('dashboard.extra') . __('dashboard.is-required'),
        ])
            ->validate();




        Education::create([
            'from' => $request->from,
            'to' => $request->to,
            'title' => $request->title,
            'description' => $request->description,
            'extra' => $request->extra,
        ]);

        return redirect()->route('education.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $address = 'admin/education/edit';
        $education = Education::findOrFail($id);

        return view('admin.dashboard.base-index', compact('address', 'education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate form

        Validator::make($request->all(), [
            'from' => 'required',
            'to' => 'required',
            'title' => 'required',
            'description' => 'required',
            'extra' => 'required',

        ], [
            'from.required' => __('dashboard.from') . __('dashboard.is-required'),
            'to.required' =>  __('dashboard.to') . __('dashboard.is-required'),
            'title.required' =>  __('dashboard.title') . __('dashboard.is-required'),
            'description.required' =>  __('dashboard.description') . __('dashboard.is-required'),
            'extra.required' =>  __('dashboard.extra') . __('dashboard.is-required'),
        ])
            ->validate();


        $education = Education::findOrFail($id);

        $education->update([
            'from' => $request->from,
            'to' => $request->to,
            'title' => $request->title,
            'description' => $request->description,
            'extra' => $request->extra,
        ]);

        return redirect()->route('education.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $education = Education::findOrFail($id);

        $education->destroy($id);
        return redirect()->route('education.index');
    }
}
