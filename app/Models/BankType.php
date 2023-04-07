<?php

namespace App\Models;

use App\Models\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BankType extends Model
{
    use HasFactory;

    public function account(){
        return $this->hasMany(Account::class);
    }
}
