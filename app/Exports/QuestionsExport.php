<?php

namespace App\Exports;

use App\models\AddQuestion;
use Maatwebsite\Excel\Concerns\FromCollection;

class QuestionsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
        'id',
        'question',
        'answer',
        'option1',
        'option2',
        'option3',
        'option4',
        'qtopic_id',
        ];
    }
    public function collection()
    {
        // return AddQuestion::all();
        return collect(AddQuestion::getQuestions());
    }
}
