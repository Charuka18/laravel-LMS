<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarksModel extends Model
{
    use HasFactory;

    protected $table = "marks";

    static public function getSinglem($id)
    {
        return self::find($id);
    }

    static public function getRecordm()
    {
        $return = MarksModel::select('marks.*', 'users.name as created_by_name')
                            ->join('users','users.id','marks.created_by')
                            ->where('marks.is_delete','=',0)
                            ->orderBy('marks.id','desc')
                            ->paginate(20);
        return $return;
    }

}
