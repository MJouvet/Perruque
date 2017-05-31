<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborateur extends Model
{

    protected $primaryKey = 'Id_TCa';

    protected $table = 'T_Collaborateurs';

    protected $fillable = ['Collaborateur_TCa', 'Date_In_TCa','Date_Out_TCa', 'Acces_TCa','Responsable_TCa','TR_TCa'];

    public $timestamps = false;

    protected $dateFormat = "d.m.Y ";

}
