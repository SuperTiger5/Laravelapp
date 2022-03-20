<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
   protected $guard = array('id');
   protected $fillable = ['person_id','title','message'];

   public static $rules = array(
       'person_id' => 'required',
       'title' => 'required',
       'message' => 'required'
   );

   public function getData() {
       return $this->id.': '.$this->title;
   }
}
