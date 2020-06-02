<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user(){
      return $this->belongsTo('App\User','user_id');
    }
    protected $fillable = ['user_id','avatar','youtube','facebook','about'];
}
