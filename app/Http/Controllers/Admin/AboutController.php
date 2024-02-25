<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\About;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();

        $address = 'admin/about/index';

        return view('admin.dashboard.base-index', compact('address', 'about'));
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
        $address = 'admin/about/edit';
        $about = About::findOrFail($id);

        return view('admin.dashboard.base-index', compact('address', 'about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate form

        Validator::make($request->all(), [
            'name' => 'required',
            'age' => 'required',
            'language' => 'required',
            'specialtie' => 'required',
            // 'cv' => 'required',
            'exprience' => 'required',
            'proj_completed' => 'required',
            'hap_client' => 'required',
            'award_won' => 'required',

        ], [
            'name.required' => __('dashboard.name') . __('dashboard.is-required'),
            'age.required' => __('dashboard.age') . __('dashboard.is-required'),
            'language.required' => __('dashboard.language') . __('dashboard.is-required'),
            'specialtie.required' => __('dashboard.specialtie') . __('dashboard.is-required'),
            // 'cv.required' => __('dashboard.cv') . __('dashboard.is-required'),
            'exprience.required' => __('dashboard.exprience') . __('dashboard.is-required'),
            'proj_completed.required' => __('dashboard.project-completed') . __('dashboard.is-required'),
            'hap_client.required' => __('dashboard.happy-client') . __('dashboard.is-required'),
            'award_won.required' => __('dashboard.award-won') . __('dashboard.is-required'),
        ])
            ->validate();


        $about = About::findOrFail($id);
        $file = $request->file('cv');
        $image = "";

        if (!empty($file)) {
            if (file_exists('administrator/files/' . $about->cv)) {
                unlink('administrator/files/' . $about->cv);
            }
            $cv = time() . "." . $file->getClientOriginalExtension();
            $file->move('administrator/files', $cv);
        } else {
            $cv = $about->cv;
        }

        $about->update([
            'name' => $request->name,
            'age' => $request->age,
            'language' => $request->language,
            'specialtie' => $request->specialtie,
            'cv' => $cv,
            'exprience' => $request->exprience,
            'proj_completed' => $request->proj_completed,
            'hap_client' => $request->hap_client,
            'award_won' => $request->award_won,
        ]);

        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
