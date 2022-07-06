<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_Detail extends Model
{
    use HasFactory;
    protected $fillable=[
        'purchase_id',   
        'product_id',   
        'quantity',    
       ];
}
