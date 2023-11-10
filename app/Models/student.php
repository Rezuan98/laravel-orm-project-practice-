<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    
    protected $table = 'students';

   protected $primarykey = 'id';
   
   public $incrementing = true;

   protected $keytype = 'int';

   public $timestamps = true; 

}
