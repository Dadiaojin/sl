<?php

namespace App\Http\Controllers;
//use Request;  //注意！ Request::all()
use Illuminate\Http\Request; //adduser(Request $request)里的 Request $request
use DB; /*数据库*/
use App\Http\Requests;
use App\Http\Models\Member;
use App\Http\Models\Del;
use Illuminate\Database\Eloquent\SoftDeletes; /*软删除*/

class IndexController extends Controller
{
  
    //显示列表
    public function index(){
    //   $data=DB::table('member')->where('deleted_at',null)->get();
// 下面 分页 在vendor包内，laravel的framework，pagination/resources/view/default.blade配置样式  有simplePaginate()方式仅支持上下页 但是不支持total()
       $data=DB::table('member')->where('deleted_at',null)->paginate(20);
        //return view('admin/list', ['data'=>$data]);
        return view('admin/list', compact('data'));
    }
    //显示被软删除列表
      public function delindex(){
     //  $data=Del::onlyTrashed()->get();
       /*显示所有withTrashed()*/
          $data=Del::onlyTrashed()->paginate(5);
        //return view('admin/list', ['data'=>$data]);
        return view('admin/dellist', compact('data'));
    }
    
    //彻底删除
     public function suredel($id){
        if(!empty($id)){
        
          $res= Del::where('id',$id)->forceDelete();
          
        if($res){
            return redirect()->action('IndexController@delindex');
        }else{
            echo '删除失败';
        }
        
        }
          
    }
    
    //恢复
    
    public function recover($id){
        if(!empty($id)){
        
          $res= Del::where('id',$id)->restore();
          
        if($res){
            return redirect()->action('IndexController@delindex');
        }else{
            echo '恢复失败';
        }
        
        }
          
    }
    //修改视图
    //
    public function  updateuser($id){
        //var_dump($id);
        
       
        
        if(!empty($id)){
            $date=DB::table('member')->where('id',$id)->first();
            
            return view('admin\updateuser',compact('date','id')) ;
        }  else {
            echo "id为空操作失败";    
        }
        
    }
    
    public function update(Request $request){
       
        //var_dump(Request::all());
      /*  $post=Request::all();
        if(!empty($post)){
            $name=$post['name'];
            $age=$post['age'];
            $email=$post['email'];
            $id=$post['id'];
            
            $res=DB::table('member')->where('id',$id)->update(['name'=>$name,'age'=>"$age",'email'=>$email]);
        }*/
        
        /*先通过模型find方法找到要修改的记录，返回模型类对象，对象属性赋值，save方法往后台数据库修改。*/
        $id=$request->input('id');
        $info= Member::find($id);
        $info->name = $request->input('name');
        $info->age = $request->input('age');
        $info->email = $request->input('email');
        $res=$info->save();
            if($res){
                return redirect()->action('IndexController@index');
            }  else {
                //var_dump($res);
                return redirect()->back();
               
            }
        
           
          
       
        
        //var_dump($_POST);
    }

    
    public function addview(){
        return view('admin\adduser') ;
    }

    public function adduser(Request $request){
     
          $post=$request->all();
          //处理上传文件
    
         
          
          
      if(!empty($post)){
            $name=$post['name'];
            $age=$post['age'];
            $email=$post['email'];
            
            if(!empty($post['head'])){
           $head = $request->file('head');
          
         // var_dump($head)
         
         //验证文件是否存在：request对象->hasfile() ;  验证文件是否上传成功：request对象->file('')->isValid()
          if($request->hasFile('head')&&$head->isValid()){
              //获取文件名后缀
              $ext = $head->getClientOriginalExtension();
              //获取文件原名
              $oldname = $head->getClientOriginalName();
              //创建新文件名称
              $newname = uniqid().date('Y-m-d-H-i-s').rand(10,99).".".$ext;
              //移动方法：move()
              $head->move('./uploads/',$newname);
              //储存路径
              $post['head'] = './uploads/'.$newname;
          }
            
            }
            
     /*   $res=Member::insert([
       
          [
            'name'=>$name,
            'age'=>$age,
            'email'=>$email
        ]
            
            ]);*/
            
            $res=Member::create($post);
        
         if($res){
                return redirect()->action('IndexController@index');
            }  else {
                //var_dump($res);
                return redirect()->back();
               
            }
        
        
       }
       }
        
                /*返回true*/
    
    
    
    public function del($id){
        if(!empty($id)){
        /*$res=DB::table('member')->where('id',$id)->delete();*/
        /*destroy(主键)*/   
        /*$res=Member::destroy($id);*/
          /*软删除 前提在上面 用delete或者destroy进行删除都是软删除*/
          $res= Del::where('id',$id)->delete();
          
        if($res){
            return redirect()->action('IndexController@index');
        }else{
            echo '删除失败';
        }
        
        }
          
    }

    //测试路径
    public function demo(){
        echo "访问Controllers的默认模块index控制器demo成功";
        echo url()->full();echo url()->current();echo url()->previous();
    }
    
    public function request(Request $request){
        $data=$request->all();
        var_dump($data);
    }
}
