<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // field yang boleh diisi
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];

    // file file yang tidak boleh diisi
    // protected $guarded = ['nama', 'nrp', 'email', 'jurusan'];
}
