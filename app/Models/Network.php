<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    use HasFactory;

    protected $table = "networks";

    protected $fillable = ['name'];

    public function bundles()
    {

        return $this->hasMany(Bundles::class,'networks_id');
    }

    public function packages()
    {

        return $this->hasMany(Packages::class,'bundles_id');

    }
}
