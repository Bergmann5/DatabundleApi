<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class Packages extends Model
{
    use HasFactory;

    protected $table = "packages";

    protected $fillable = ['volume','Cost'];

    public function network()
    {
        return $this->belongsTo(Network::class);
    }

    public function bundles()
    {
        return $this->belongsTo(Bundles::class);
    }
}
