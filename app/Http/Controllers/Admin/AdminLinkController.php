<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AdminLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 连接数据库遍历数据
        $link=DB::table('link')->get();
        // 加载友情链接
        return view("Admin.link.index",["link"=>$link]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 加载添加
        return view("Admin.link.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取需要添加的数据
        $data=$request->only(['title','url','status']);
        // dd($data);
        // 执行数据库的插入
        if(DB::table('link')->insert($data)){
            // echo "ok";
            return redirect("/adminlink")->with('success','添加成功');
        }else{
            return back()->with("error",'添加失败');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //获取需要修改的数据
        $link=DB::table("link")->where("id",'=',$id)->first();
        return view("Admin.link.edit",['link'=>$link]);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $data=$request->except(['_token','_method']);
        if(DB::table("link")->where("id","=",$id)->update($data)){
            return redirect("/adminlink")->with('success',"修改成功");
        }else{
            return redirect("/adminlink/$id",'数据修改失败');
        }        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 获取需要删除数据的id
        if(DB::table("link")->where("id",'=',$id)->delete()){
            return redirect("adminlink")->with('success','数据删除成功');
        }else{
            return redirect("adminlink")->with('error','数据删除失败');
        }        
    }    
}
