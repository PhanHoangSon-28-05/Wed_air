<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    use HasFactory;

    protected $table = "pilot";
    protected $primaryKey = "ma_phi_cong";

    protected $keyType = "string";

    public $incrementing = false;

    public function certification_pilot() {
        return $this->hasMany(Certification::class, 'ma_phi_cong');
    }

}
