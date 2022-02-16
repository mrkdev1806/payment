<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTransaction extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'amount',
        'description',
        'destinationFirstname',
        'destinationLastname',
        'destinationNumber',
        'inquiryDate',
        'inquirySequence',
        'inquiryTime',
        'message',
        'paymentNumber',
        'refCode',
        'sourceFirstname',
        'sourceLastname',
        'sourceNumber',
        'type',
        'reasonDescription',
    ];
}
