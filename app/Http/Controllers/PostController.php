<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('pages.index');
    //     // return view('pages.contact');
    // }

        /************* DB manipulation with Query Builder ******************* */

        public function index(){
            /*********************query insert ************************************* */
            // $posts = DB::insert('INSERT INTO posts(title,comment,image_path,
            // is_published,min_to_read) VALUES(?,?,?,?,?)',
            // ['Test','test','test',true,1]);
            // dd($posts);
            // // die_dump like dump() to show results of hashtable.


            /***********************query select **************************** */
            // $result=DB::select('SELECT * FROM posts  ORDER BY id DESC LIMIT 1');
            // dd($result);

            /****************** query update ****************** */
            // $result=DB::update('UPDATE posts set title=?,comment=?,image_path=? WHERE id=?',['last post','this is my last comment','empty',101]);
            // dd($result);
            // $res=DB::select('SELECT * FROM posts WHERE id=101');
            // dd($res);
            // $res_qr=DB::delete('DELETE FROM posts WHERE id=?',[40]);
            // dd($res_qr);
            // $res=DB::select('SELECT * FROM posts WHERE id BETWEEN 30 AND 60');
            // dd($res);

            // $result=DB::table('posts')->find(30);
            // return view('pages.index')->with('res',$result);
            return view('pages.index',['res'=>DB::table('posts')->get()]); // we gonna use dump($res) in the index
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$name)
    {
        echo '<h1>ID: '.$id.' </h1>';
        echo '<h1>name: '.$name.' </h1>';
        // return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
