<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Officer;

class Officer extends Model
{
    use HasFactory;
    public $timestamps=true; //false because our table does not have timestamps fields which are created by default if the table is created via Migrations

}
