<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\PortCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PortCaregoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $port_categories = PortCategory::all();
        $address = 'admin/port-category/index';

        return view('admin.dashboard.base-index', compact('address', 'port_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $address = 'admin/port-category/create';
        return view('admin.dashboard.base-index', compact('address'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          // validate form

          Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
            'extra' => 'required',

        ], [
            'name.required' => __('dashboard.name') . __('dashboard.is-required'),
            'image.required' =>  __('dashboard.image') . __('dashboard.is-required'),
            'description.required' =>  __('dashboard.description') . __('dashboard.is-required'),
            'extra.required' =>  __('dashboard.extra') . __('dashboard.is-required'),
        ])
            ->validate();


        $file = $request->file('image');
        $image = "";
        if (!empty($file)) {
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('administrator/images', $image);
        }

        PortCategory::create(
            [
                'image' => $image,
                'name' => $request->name,
                'description' => $request->description,
                'extra' => $request->extra,
            ]
        );

        return redirect()->route('port-category.index');
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
        $address = 'admin/port-category/edit';
        $port_category = PortCategory::findOrFail($id);

        return view('admin.dashboard.base-index', compact('address', 'port_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // validate form

         Validator::make($request->all(), [
            'name' => 'required',
            // 'image' => 'required',
            'description' => 'required',
            'extra' => 'required',

        ], [
            'name.required' => __('dashboard.name') . __('dashboard.is-required'),
            // 'image.required' =>  __('dashboard.image') . __('dashboard.is-required'),
            'description.required' =>  __('dashboard.description') . __('dashboard.is-required'),
            'extra.required' =>  __('dashboard.extra') . __('dashboard.is-required'),
        ])
            ->validate();


        $port_category = PortCategory::findOrFail($id);
        $file = $request->file('image');
        $image = "";

        if (!empty($file)) {
            if (file_exists('administrator/images/' . $port_category->image)) {
                unlink('administrator/images/' . $port_category->image);
            }
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('administrator/images', $image);
        } else {
            $image = $port_category->image;
        }

        $port_category->update([
            'image' => $image,
            'name' => $request->name,
            'description' => $request->description,
            'extra' => $request->extra,
        ]);

        return redirect()->route('port-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $port_category = PortCategory::findOrFail($id);

        $port_category->destroy($id);
        return redirect()->route('port-category.index');
    }
}
