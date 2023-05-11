<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReview extends Model
{
    use HasFactory;
    protected $fillable =[
      'customer_id',
      'customer_name',
      'customer_email',
      'company_name',
      'text',
    ];
}
