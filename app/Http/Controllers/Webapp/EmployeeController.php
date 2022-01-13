<?php

namespace App\Http\Controllers\Webapp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::all();
        return view("Webapp.employee.app",compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    

     $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        $employee=Employee::create([
        'phone'=>$request->get('phone'),
        'about'=>$request->get('about'),
        'special'=>$request->get('special'),
        'image'=>$imageName, 
        'name'=>$request->get('name'),
        'email'=>$request->get('email'),
    ]);
        

        if ($employee) {
            return back()->with('success','New employee added successfully by '.$request->get('name'));
        }else{
            return back()->with('error','New employee not added'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($employee)
    {
        $employees=Employee::findOrFail($employee);
       return view("Webapp.employee.edit",compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Employee $employee)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
         
         if($employee){
        $update = $employee->update([ 
        'phone'=>$request->get('phone'),
        'about'=>$request->get('about'),
        'special'=>$request->get('special'),
        'image'=>$request->get('image'), 
        'name'=>$request->get('name'),
        'email'=>$request->get('email'),  

        ]);
            if ($update) {
               return back()->with('success','employee updated successfully');
            }else{
                    return back()->with('error',' employee not updated'); 
            }
      }else{
        return back()->with('error',' employee not found'); 
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
      if($employee){
        $delete = $employee->delete();
            if ($delete) {
               return back()->with('success','New employee deleted successfully');
            }else{
                    return back()->with('error','New employee not deleted'); 
            }
      }else{
        return back()->with('error','New employee not deleted'); 
      }
    }
}
