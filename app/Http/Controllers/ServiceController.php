<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // CREATE Service

    public function create() {

        $services = Service::all();
        return view('admin.services.serviceCreate', compact('services'));
    }

    // STORE Service 

    public function store(Request $request) {

        request()->validate([
            "icon" => ["required"],
            "title" => ["required"],
            "text" => ["required"],
        ]);

        $service = new Service();
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->text = $request->text;
        $service->save();

        return redirect()->route('admin.adminHome')->with('success', $request->title . ' a bien été créé');
    }

    // EDIT Service

    public function edit(Service $service) {

        return view('admin.services.serviceEdit', compact('service'));
    }

    // UPDATE Service

    public function update(Request $request, Service $service) {

        request()->validate([
            "icon" => ["required"],
            "title" => ["required"],
            "text" => ["required"],
        ]);

        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->text = $request->text;
        $service->save();

        return redirect()->route('admin.adminHome')->with('success', 'Modifications enregistrées');
    }

    // DELETE

    public function destroy(Service $service) {

        $service->delete();
        return redirect()->route('admin.adminHome');
    }
}
