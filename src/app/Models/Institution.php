<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'corporate_name',
        'trading_name',
        'cnpj',
        'email',
        'password',
        'phone',
        'area',
        'website',
        'linkedin',
        'employees_number',
    ];
}
