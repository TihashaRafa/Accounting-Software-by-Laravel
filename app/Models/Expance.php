<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expance extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function ExpanceCatagory()
    {
        return $this->belongsTo(ExpanceCatagory::class);
    }

    public function catagory()
    {
        return $this->belongsTo(catagory::class);
    }
}
