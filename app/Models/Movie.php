<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public function getDate()
    {
        $date = date_format(date_create($this->date), "d M Y");
        return $date;
    }
}
