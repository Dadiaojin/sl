<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB; /*数据库*/
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Member;

class MemberController extends Controller
{
    //数据添加
    public function add(){
      /*  $res = DB::table('member')->insertGetId(['name'=>'小兰','age'=>20,'email'=>'xiaolan@qq.com']);
        var_dump($res);
        echo $res;*/
        /*返回id*/      
        
        //模型类完成添加数据
        $member=new Member();
        $member->name="lili";
        $member->age=10;
        $member->email='lili@dadjin.com';
        $res=$member->save();
        var_dump($res);
    }
    
    public function addmore(){
       
        $res=DB::table('member')->insert([
       
          [
            'name'=>'小光',
            'age'=>30,
            'email'=>'dadjin@qq.com'
        ],
            
            [
               'name'=>'dadjin',
            'age'=>21,
            'email'=>'dadjin@dadjin.com'
            ]
            ]);
        
                var_dump($res);
        
                /*返回true*/
    }
//更新
    public function update(){
        /*$res=DB::table('member')->where('id',1)->update(['name'=>'你爸爸']);*///更新
        $res = DB::table('member')->where('id',2)->increment('age','20');   //在原来的数上+20
                
                
        var_dump($res);
    }  
    //数据删除
    public function del(){
        /*主键删除*/
       /* $res=DB::table('member')->delete(2);
        var_dump($res);*/
        //条件删除
        $res=DB::table('member')->where('id','>',3)->delete();
          var_dump($res);
    }
    
    //数据查询
    public function index(){
        //查询所有数据
        $data=DB::table('member')->get();
       // print_r($data);
        foreach($data as $v){
            echo $v->name."--".$v->age."--",$v->email.'<br/>';
        }
        echo '<hr>';
    
        
        //复合与
        $data2=DB::table('member')->where('name','你爸爸')->orwhere('age','<=',23)->get();
        print_r($data2);
          echo '<hr>';
          //和语句
        //$data3=DB::table('member')->where('name','你爸爸')->where('age','<=',30)->get();
         $data3=DB::table('member')->where([['name','小花'],['age','>',10]])->get();
        print_r($data3);
        echo '<hr>';
        //取第一条
        $date4=DB::table('member')->where('id','1')->first();
       // print_r($date4);
        echo $date4->name.'--'.$date4->age;
        echo '<hr>';
        //取name的内容 取1个
        $date5=DB::table('member')->where('id',3)->value('name');
        print_r($date5);
        
        echo '<hr>';
        //select
        $data6=DB::table('member')->select('name','email')->get();
        var_dump($data6);
        echo '<hr>';
        /*顺序*/
        $data7=DB::table('member')->orderBy('age','desc')->get();
        var_dump($data7);
        echo '<hr>';
        /*分页 offset -->偏移量=(当前页数-1)*每页显示记录条数 limit(每页要显示记录条数)*/
        //offset从0开始
         $data8=DB::table('member')->offset(0)->limit(2)->get();
         echo '<h1>分页</h1>';
         var_dump($data8);
         echo '<hr>';
         /*****/
         echo '<hr>';
         echo '<hr>';
         $info = Member::find([2,4,6])->toArray();/*接受的参数是主键id*/
         var_dump($info);
         echo '<hr>';
         $info2= Member::where('name',"小花")->select('name','age')->get()->toArray();  /*select()->get()  拿指定的字段记录 value()  pluck()  get（）拿多条*/
         var_dump($info2);
         echo '<hr>';
         $info3= Member::all(); /*获取所有记录*/
         foreach ($info3 as $v){
             echo $v->name.'----'.$v->age.'<br>';
         }
          echo '<hr>';
         
         $info4= Member::where('name',"小花")->first(); /*拿一条记录的*/
         var_dump($info4);
         
          echo '<hr>';
          
          $infoname=  Member::pluck('name');
          var_dump($infoname);
          
          echo '<hr>';
          $infoname2=  Member::pluck('name','id');  /* 这个会取不会重复的 */
          var_dump($infoname2);
           echo '<hr>';
           /*排序*/
            $infoorderby= Member::select('name','age')->orderBy('age','desc')->get();
             foreach ($infoorderby as $v){
             echo $v->name.'----'.$v->age.'<br>';
            
          
           
             
         }
         echo '<hr>'; 
           /*分页2*/
            echo "分页2<br>";
            /*skip，take （sikip 跳过几条，take取多少条数据）*/
           $infofy= Member::skip(0)->take(3)->get();
             foreach ($infofy as $v){
             echo $v->name.'----'.$v->age.'<br>';
             
         }
          echo '<hr>'; 
           /*分页2*/
            echo "聚合函数<br>";
        echo Member::count()."<br>";/*条数*/
        echo  Member::max('age')."<br>";
        echo  Member::min('age')."<br>";
        echo Member::avg('age')."<br>";/*平均值*/

          
    }
    
    /*直接执行SQL*/
    public function addsql(){
        //statement 用的是增加insert 更新Update 删除delect 的语句 查则用select
        $res=DB::statement("INSERT INTO member(name,age,email) VALUE('大雕',21,'555@qq.com')");
        $res=DB::select("select * from `member`");
        var_dump($res);
    }
    
    /*-----------视图-----------*/
    public function demo(){
        
        $names=['name'=>'lily','age'=>16,'email'=>'dadjin@qq.com'];
        $stu=[
            ['name'=>'lily','age'=>16,'email'=>'dadjin@qq.com'],
            ['name'=>'lily','age'=>16,'email'=>'dadjin@qq.com'],
            ['name'=>'lily','age'=>16,'email'=>'dadjin@qq.com']
            
        ];
        $age=18;
        return view('admin/demo', compact('names','stu','age'));
    }

    

    public function demo2(){
        $a=666;
        $b="<a href='https://www.baidu.com'>百度</a>";
        $names=['name'=>'lily','age'=>18,'email'=>'lily@qq.com'];
        
           return view('admin/demo2',['a'=>$a,'baidu'=>$b]);
    }
    
}
