<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;

    protected $fillable = ['wish', 'name', 'added', 'bought'];


    //
    
    
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d-M-Y');
    }


    //Lage egene atributter fra databasen, her lager jeg et atributt som henter ut og gjør om day/month/year til "mitt" riktige format.

    // public function getFormatedCreatedAtAttribute()
    // {
    //     return $this->created_at->format('d-M-Y');
    // }

}