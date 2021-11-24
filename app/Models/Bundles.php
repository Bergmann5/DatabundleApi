<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bundles extends Model
{
    use HasFactory;

    protected $table = "bundles";

    protected $fillables = ['title'];

    public function network()
    {
        return $this->belongsTo(Network::class,'networks_id');
    }

    public function packages()
    {
        return $this->hasMany(Packages::class,'bundles_id');
    }
}
