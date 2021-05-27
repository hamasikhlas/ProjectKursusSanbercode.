<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    //
    public $timestaps = false;
    protected $table = "laravel13.contact_us";
    protected $fillable = ["name","email","phone_number","message","reply_status","updated_at","created_at"];
}
