<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
    protected $table = 'portfolio.portfolio';
    
    use HasFactory;
    
    protected $guarded = array('id');

    public static $rules = array(
        'dish_name' => 'required',
        'material' => 'required',
        'recipe' => 'required',
    );
    
    public function histories()
    {
        return $this->hasMany('App\Models\History');
    }
}
