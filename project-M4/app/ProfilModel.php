<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilModel extends Model
{
    protected $table = "profiles";
    protected $fillable = ['nama', 'alamat','umur', 'role', 'user_id'];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
