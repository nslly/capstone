<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_email', 
        'customer_avail', 
        'res_date', 
        'contact_num', 
        'status_of_book',
        'tour_guide',
        'package',
        'avail_price',
        'added_services',
        'email_sent'
    ];



}
