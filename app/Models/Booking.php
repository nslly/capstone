<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['customer_email', 'customer_services_avail', 'customer_avail', 'res_date', 'contact_num', 'status_of_book'];



}
