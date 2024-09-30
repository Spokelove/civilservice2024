<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StudentController extends Controller

{
    public function index()

    { 


        $data = array("students" => DB ::table('students')->orderBy('created_at', 'desc')->simplepaginate(10));
        
           return view('students.index', $data);
           
}

 
public function show($id){
    $data = Students::findorFail($id);
  
       return view('students.edit',['student' => $data]);

}

public function create(){
    return view('students.create')->with('title', 'Add New');


}

public function store(Request $request){
    $validated = $request->validate([
        "first_name" => ['required', 'min:4'],
        "last_name" => ['required', 'min:4'],
        "gender" => ['required'],
        "age" => ['required'],
        "email" => ['required', 'email', Rule::unique('students','email')],
       
  ]);

       Students::create($validated);
      return  redirect('/')->with('message','New Student was added successfully!');
      
} 
  public function update(Request $request, Students $student){
        //   dd($request);

         
    $validated = $request->validate([
        "first_name" => ['required', 'min:4'],
        "last_name" => ['required', 'min:4'],
        "middle_name" => ['required', 'min:4'],
        "suffix" => ['required'],
        "gender" => ['required'],
        "age" => ['required'],
        "email" => ['required', 'email'],
       
  ]);



       $student->update($validated);

    //   dd($request);

       return back()->with('message', 'Data Was successfully updated');
  }

  



  public function destroy(Students $student){
       $student->delete();
       return redirect('/')->with('message', 'Data was successfully deleted');
  }
public function searchdata(Request $request)
{  
     dd($request);

    // $query = $request->search;
    // $student = Students::orderBy('first_name','DESC')->where('first_name','LIkE'.'%'.$query.'%')->paginate(10);
    // return view('search',compact('students'));

}


//  public function cancel(Request $request,Students $student){
//     return redirect('/');
//  }


}




      //$data = Students::where('age','<', '19')->orderBy ('first_name', 'asc')->limit(5)->get();

//$data = DB::table('students')
       // ->select(DB::raw('count(*) as gender_count,gender
        //'))->groupBy('gender')->get();

    //return view('students.index' ,['students' => $data]);

