<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextContents extends Model
{
    use HasFactory;

    protected $fillable = [
        'originals_id',
        'translation_id',
        'types_id',
    ];

    public function originals(){
        return $this->belongsTo(Originals::class);
    }
    public function translations(){
        return $this->belongsTo(Translations::class,'translation_id', 'id');
    }
}
