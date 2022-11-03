<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $table='emp';
    public $timestamps = false;
    protected $primaryKey = 'EMPNO';
    protected $fillable=['EMPNO','JOB','MGR','HIREDATE','SAL','DEPTNO','DEPTNO'];
    public function project()
    {
        return $this->hasMany(project::class,'EMPNO','EMPNO');
    }
    public function dept()
    {
        return $this->belongsTo(dept::class,'DEPTNO','DEPTNO');
    }

    public function manager()
    {
        return $this->belongsTo(Employe::class,'MGR','EMPNO');
    }
    public function ChildEmp()
    {
      return $this->hasMany('App\models\Employe','MGR','EMPNO')->with('dept','project','manager','ChildEmp');
    }

}
