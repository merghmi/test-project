<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='proj';
    protected $primaryKey = 'PROJID';
    protected $fillable=['PROJID','EMPNO','STARTDATE','ENDDATE'];
    public function employe()
    {
        return $this->belongsTo(Employe::class,'EMPNO','EMPNO');
    }
}
