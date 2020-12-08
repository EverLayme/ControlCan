<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $fillable = ['name', 'direction', 'fono', 'img_url'];

    public function url()
    {
        return $this->id ? 'clientes.update' : 'clientes.store';
    }
    public function method()
    {
        return $this->id ? 'PUT' : 'POST';
    }
}
