<?php

namespace App\Http\Controllers;

use App\Course;
use App\Application;
use App\Http\Requests\RegisterApplicationRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('pages.index', compact('courses'));
    }

    public function registerApplication(Request $request){
        $validator = Validator::make($request->all(),[
            'fullname'  => 'required|max:150',
            'course_id' => 'required|exists:courses,id',
            'phone'     => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'source'    => 'required|max:150'
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous() .'#contact_us')
                ->withErrors($validator)
                ->withInput();
        }
        Application::create($request->all());

        return redirect(url()->previous().'#contact_us')->with('success', 'Arizangiz qabul qilindi.');
    }
}
