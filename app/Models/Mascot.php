<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascot extends Model
{
    public $fillable = ['name', 'raza'];

    public function url()
    {
        return $this->idmascot ? 'mascots.update' : 'mascots.store';
    }
    public function method()
    {
        return $this->idmascot ? 'PUT' : 'POST';
    }
}
