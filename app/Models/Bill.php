<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function catagory()
    {
        return $this->belongsTo(catagory::class);
    }

    public function payer()
    {
        return $this->belongsTo(Payer::class);
    }

    public function PaymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}
