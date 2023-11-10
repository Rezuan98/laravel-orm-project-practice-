<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{    
    use HasFactory;

  protected $table = 'teachers';

   protected $primarykey = 'id';
   
   public $incrementing = true;

   protected $keytype = 'int';

   public $timestamps = true; 
}
