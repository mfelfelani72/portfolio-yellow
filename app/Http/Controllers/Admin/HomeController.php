<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Home;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $homes = Home::all();
        $address = 'admin/home/index';

        return view('admin.dashboard.base-index', compact('address', 'homes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $address = 'admin/home/edit';
        $home = Home::findOrFail($id);

        return view('admin.dashboard.base-index', compact('address', 'home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate form

        Validator::make($request->all(), [
            'name' => 'required',
            'last_name' => 'required',
            'nick_name' => 'required',
            'job' => 'required',
            'deg_education' => 'required',
            'description' => 'required',

        ], [
            'name.required' => __('dashboard.name') . __('dashboard.is-required'),
            'last_name.required' =>  __('dashboard.family-name') . __('dashboard.is-required'),
            'nick_name.required' =>  __('dashboard.nick-name') . __('dashboard.is-required'),
            'job.required' =>  __('dashboard.job') . __('dashboard.is-required'),
            'deg_education.required' =>  __('dashboard.degree-e') . __('dashboard.is-required'),
            'description.required' =>  __('dashboard.description') . __('dashboard.is-required'),
        ])
            ->validate();


        $home = Home::findOrFail($id);
        $file = $request->file('image');
        $image = "";

        if (!empty($file)) {
            if (file_exists('administrator/images/' . $home->image)) {
                unlink('administrator/images/' . $home->image);
            }
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('administrator/images', $image);
        } else {
            $image = $home->image;
        }

        $home->update([
            'image' => $image,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'nick_name' => $request->nick_name,
            'job' => $request->job,
            'description' => $request->description,
            'deg_education' => $request->deg_education,
        ]);

        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
