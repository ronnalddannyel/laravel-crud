<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   

    //indicar o nome da tabela
    protected $table='courses';


    //indicar quais colunas podem ser cadsatradas
    protected $fillable = ['name'];

}
