<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = ['number','user_id'];

    //relacion inversa, se llama asi porque esta tiene llave foranea
    public function user() {
        return $this->belongsTo(User::class);
    }
}
