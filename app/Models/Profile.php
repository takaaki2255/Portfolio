<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     protected $table = 'portfolio.profile';
    use HasFactory;
    
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'age' => 'required',
        'skill' => 'required',
        'career' => 'required',
    );
    
    public function histories()
    {
        return $this->hasMany('App\Models\History');
    }
}
