<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $guarded = []; 


    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
    
    public function suppliers()
    {
        return $this->belongsTo(Supplier::class);
    }
}
