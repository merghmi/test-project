<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Project;
use Illuminate\Http\Request;
use DB;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $employes = Employe::whereNull('MGR')->with('ChildEmp','manager','project','dept')->get();
         return Response()->json($employes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employe=Employe::with('manager','dept','project')->find($id);
        return Response()->json($employe);
    }
    // public function CreateUpdateProject($emp_id,$data)
    // {
    //    // dd(json_decode($data['proj_id']));
    //     $proje_id=$data['proj_id'];
    //   foreach ($proje_id as $key => $value) {
    //    // dd('hello');
    //     $start_date=date('Y-m-d',   strtotime($data['start_date'][$key]));
    //     $end_date=date('Y-m-d',     strtotime($data['end_date'][$key]));
    //    Project::updateOrCreate(['PROJID'=>$value,'EMPNO'=>$emp_id],["STARTDATE"=>$start_date,'ENDDATE'=>$end_date]);
    //   }
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $empno)
    {

        DB::beginTransaction();
        try {
            $employe=Employe::find($empno);
            $data=$request->all();
            $employe->update($data);
            // if($request->proj_id)
            //     $this->CreateUpdateProject($empno,$data);
            return Response()->json("employe has been updated successfully",500);
            DB::commit();

        } catch (\Throwable $th) {

            DB::rollback();
            return Response()->json($th->getMessage(),500);
            //throw $th;
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        //
    }
}
