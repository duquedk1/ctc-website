<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display the main view of the site (previously 'front').
     */
    public function index()
    {
        $data['visitors'] = Visitor::paginate(6);
        return view('index', $data); // View 'index.blade.php' (previously 'front.blade.php')
    }

    /**
     * Display the admin view (previously 'index').
     */
    public function admin()
    {
        $data['visitors'] = Visitor::paginate(6);
        return view('visitor.admin', $data); // View 'admin.blade.php' inside the 'visitor' folder
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('visitor.create');
    }

    /**
     * Store a newly created resource in storage and redirect to the admin view.
     */
    public function store(Request $request)
    {
        $att = [
            'name' => 'required|string|max:100',
            'lastName' => 'required|string|max:100',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required|string|max:100',
            'summary' => 'required|string|max:100',
        ];
        $errorMessage = [
            'required' => 'The :attribute is required'
        ];
        $this->validate($request, $att, $errorMessage);
        $dataVisitors = request()->except('_token');
        Visitor::insert($dataVisitors);
        return redirect('admin')->with('message', 'The record has been saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $visitor = Visitor::findOrFail($id);
        return view('visitor.edit', compact('visitor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $att = [
            'name' => 'required|string|max:100',
            'lastName' => 'required|string|max:100',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required|string|max:100',
            'summary' => 'required|string|max:100',
        ];
        $errorMessage = [
            'required' => 'The :attribute is required'
        ];
        $this->validate($request, $att, $errorMessage);
        $dataVisitors = request()->except(['_token', '_method']);
        Visitor::where('id', '=', $id)->update($dataVisitors);
        return redirect('admin')->with('message', 'Visitor updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Visitor::destroy($id);
        return redirect('admin')->with('message', 'Visitor deleted');
    }

    /**
     * Display the 'About Us' page.
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the events page.
     */
    public function events()
    {
        return view('events');
    }
}