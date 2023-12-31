<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceModel extends Model
{
    use HasFactory;

    
    protected $table = 'invoice';
    protected $primarykey = 'id';

    protected $fillable = [
        'id',
        'invoice_price_id',
        'date'
    ];
}
