<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dept extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='dept';
    protected $primaryKey = 'DEPTNO';
    public function Employes()
    {
       return $this->hasMany(Employe::class,'DEPTNO','DEPTNO');
    }
}
