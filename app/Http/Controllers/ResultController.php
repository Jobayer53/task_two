<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{

    public function store(Request $request){
       $request->validate([
           'bangla' => 'required',
           'english' => 'required',
           'math' => 'required',
       ]);
       $result = new Result();
       $result->bangla = $request->bangla;
       $result->english = $request->english;
       $result->math = $request->math;
       $result->total_marks = $request->bangla + $request->english + $request->math;
       $total_percentage = ($result->total_marks  * 100) / 300;
       $result->total_grade = $this->getGrade($total_percentage);
       $result->save();
       return back();

    }
    private function getGrade($percentage)
    {
        if ($percentage >= 80) return 'A+';
        if ($percentage >= 70) return 'A';
        if ($percentage >= 60) return 'A-';
        if ($percentage >= 50) return 'B';
        if ($percentage >= 40) return 'C';
        if ($percentage <= 39) return 'F';
        return 'Fail';
    }
    public function show($id){
        $result = Result::find($id);
        $grade =[
            'bangla' => $this->getGrade(($result->bangla * 100 ) / 80),
            'english' => $this->getGrade( ($result->english * 100 ) / 90),
            'math' => $this->getGrade(($result->math * 100 ) / 130),
        ];
        return view('result_show',[
            'result' => $result,
            'grade' => $grade
        ]);
    }
}
