<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ward extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'code', 'constituency_id'];

    public function constituency()
    {
        return $this->belongsTo(Constituency::class);
    }
}
