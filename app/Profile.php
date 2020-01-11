<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    //
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
    
    // エラーが起きてしまうため、リレーション用の下記記述をいったんコメントアウト中
    // public function profilehistory()
    // {
    //     return $this->hasMany('App\ProfileHistory');
    // }

}
