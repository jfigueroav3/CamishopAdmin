<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    const UPDATED_AT = null;
    const CREATED_AT = null;
    public $table = 'categoria';
    protected $primaryKey = 'IdCategoria';
    protected $fillable = ['Nombre','Estado'];
    
}
