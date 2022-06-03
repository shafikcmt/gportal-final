<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Qtopic;
use App\Models\AddQuestion;
use Illuminate\Support\Facades\DB;


class AddQuestionController extends Controller
{
    public function addQuestion(){
        
        $qtopics = Qtopic::all();
        return view('/add-question',compact('qtopics'));
    }
    public function createQuestion(Request $request){
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'option1' => 'required',
            'option2' => 'required',
            'option3' => 'required',
            'option4' => 'required',
            
        ]);
        $qtopic = Qtopic::find($request->qtopic_id);
        $questions = new AddQuestion;
        $questions->question = $request->question;
        $questions->answer = $request->answer;
        $questions->option1 = $request->option1;
        $questions->option2 = $request->option2;
        $questions->option3 = $request->option3;
        $questions->option4 = $request->option4;
        $qtopic->addquestion()->save($questions);
        return back()->with('add-question','Question added successfully !');
    }
}
