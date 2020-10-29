<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 */
class Computer extends Model
{
    use HasFactory;
    public $table='table_computer';
    public $fillable = [
      'name','computer_id','computer_ip','computer_color','vendor','price','desc'
    ];
}
