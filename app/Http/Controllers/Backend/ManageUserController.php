<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\ManageUserModel;

class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adduser()
    {
        return view('Backend.manageuser');
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
        $userstore = new ManageUserModel;
        $userstore->fName =$request->fName;
        $userstore->lName =$request->lName;
        $userstore->nid =$request->nid;
        $userstore->phone =$request->phone;
        $userstore->email =$request->email;
        $userstore->status =$request->status;
        $userstore->address =$request->address;
        $userstore->file =$request->file;
        $userstore->multifile =$request->multifile;
        $confrim = $userstore->save();
        if($confrim){
            return response()->json([
                // 'message'=>'success',
                'msg' =>'success,'
            ]);
        }
        else{
            return response()->json([
                'msg'=>'404',
            ]); 
        }
    }
  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $allData = ManageUserModel::all();
        if($allData){
            return response()->json([
                'status' =>'success',
                'alldata' =>$allData,
            ]);
        }
        else{
            return response()->json([
                'status'=>'404',
            ]); 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function usereidt($id)
    {
        $allData = ManageUserModel::find($id);
        if($allData){
            return response()->json([
                'status' =>'success',
                'alldata'=>$allData,
            ]);
        }
        else{
            return response()->json([
                'status'=>'404',
            ]); 
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userupdate(Request $request, $id)
    {
        $userstore = ManageUserModel::find($id);
        $userstore->fName =$request->fName;
        $userstore->lName =$request->lName;
        $userstore->nid =$request->nid;
        $userstore->phone =$request->phone;
        $userstore->email =$request->email;
        $userstore->status =$request->status;
        $userstore->address =$request->address;
        $userstore->file =$request->file;
        $userstore->multifile =$request->multifile;
        $confrim = $userstore->update();
        if($confrim){
            return response()->json([
                // 'message'=>'success',
                'msg' =>'success,'
            ]);
        }
        else{
            return response()->json([
                'msg'=>'404',
            ]); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userdelete($id)
    {
        $allData = ManageUserModel::find($id);
        $allData->delete();
        if($allData){
            return response()->json([
                'status' =>'success',
                
            ]);
        }
        else{
            return response()->json([
                'status'=>'404',
            ]); 
        }
    }
}
