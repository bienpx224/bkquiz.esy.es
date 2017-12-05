<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\hocsinh;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
// quan tronj vl.. 30p cua t

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getList(){
      $data = hocsinh::select('Id','HoTen','LopHoc','DiaChi')->get()->toArray();
      return view('student-list',compact('data'));
    }
    public function getError(){
  		return view('404');
  	}

    public function getInsert(){
      return view('insertStd');
    }
    public function getUpdate($id){
      $data = hocsinh::find($id)->toArray();
      return view('update',compact('data')); // truyen du lieu ra view -> conpact
    }
    public function update($id, Request $request){
      $rules = [
        'txtId'=>'required',
        'txtName'=>'required',
        'txtClass'=>'required',
        'txtAdress'=>'required',
      ];
      $messages=[
        'txtId.required'=>'Just input Id ',
        'txtName.required'=>'Just input Id ',
        'txtClass.required'=>'Just input Id ',
        'txtAdress.required'=>'Just input Id ',
      ];
      $validator =Validator::make($request->all(),$rules,$messages);
  if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
    else{
        $hocsinh = hocsinh::find($id)->toArray();
        $hocsinh->Id = $request->txtId;
        $hocsinh->HoTen = $request->txtName;
        $hocsinh->LopHoc = $request->txtClass;
        $hocsinh->DiaChi = $request->txtAdress;
        $hocsinh->update();
        // chuyen huong den dau do
        return redirect()->route('std-list');
    }}
    public function insertStd(Request $request){
      $rules = [
        'txtId'=>'required',
        'txtName'=>'required',
        'txtClass'=>'required',
        'txtAdress'=>'required',
      ];
      $messages=[
        'txtId.required'=>'Just input Id ',
        'txtName.required'=>'Just input Id ',
        'txtClass.required'=>'Just input Id ',
        'txtAdress.required'=>'Just input Id ',
      ];
      $validator =Validator::make($request->all(),$rules,$messages);
  if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
    else{
        $hocsinh = new hocsinh;
        $hocsinh->Id = $request->txtId;
        $hocsinh->HoTen = $request->txtName;
        $hocsinh->LopHoc = $request->txtClass;
        $hocsinh->DiaChi = $request->txtAdress;
        $hocsinh->save();
        // chuyen huong den dau do
        return redirect()->route('std-list');
    }
  }
  public function delete($id){
    $hocsinh = hocsinh::find($id);
    $hocsinh->delete($id);
    return redirect()->route('std-list');
  }
}
