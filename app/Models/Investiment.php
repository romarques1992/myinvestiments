<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investiment extends Model
{
    use HasFactory;

    protected $table = 'investiments';

    protected $fillable  = [
        'id', 'user_id', 'investment_value', 'update_value', 'created_at', 'updated_at'
      ];
  
      
}
