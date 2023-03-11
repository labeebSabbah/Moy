<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'standard',
        'percentage',
    ];

    public $timestamps = false;

    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
