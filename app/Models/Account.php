<?php

namespace App\Models;

use App\Models\BankType;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasFactory;

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function bankType(){
        return $this->belongsTo(BankType::class);
    }
}
