<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Question;
use App\Http\Requests;


class QuestionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cont = DB::select('select * from content');
        if($cont){
            return view('test/home', ['cont'=>$cont]);
        } else {
            return view('homeempty');
        }
    }

    public function quiz()
    {   
        $cat = Category::all();
        return view('quiz', ['categories' => $cat]);
    }

    public function quizplay($id)
    {   
        $quests = DB::select('select * from questions where questionqategory = ?',[$id]);
        return view('test/quizplay', ['questions' => $quests]);
    }

    public function quizend($res)
    {   
        return view('quizend',compact('res'));

    }
     public function quizendd($rest)
    {   
       
        return view('quizend',compact('rest'));

    }
    public function addprespost(Request $request){
        $dataz = [
            'presence' => $request->input('presence'),
        ];
        DB::table('presence')->insert($dataz);
        return redirect('/admin/presence/add');
    }

    

}
