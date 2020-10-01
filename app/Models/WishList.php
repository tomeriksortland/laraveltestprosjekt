<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;

    protected $fillable = ['wish', 'name'];

    public function getCurrentDate($wish)
    {
        return $wish->format('d-M-Y');
    }
}
