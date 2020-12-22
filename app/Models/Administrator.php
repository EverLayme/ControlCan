<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;
    public $fillable = ['name', 'email', 'phone', 'password'];

    public function url()
    {
        return $this->id ? 'administrators.update' : 'administrators.store';
    }
    public function method()
    {
        return $this->id ? 'PUT' : 'POST';
    }
}
