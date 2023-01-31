<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    // devo scrivere esattamente le variabili che ci sono nel database
    public $id;
    public $title;
    public $original_title;
    public $nationality;
    public $date;
    public $vote;
}