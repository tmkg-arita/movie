<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;//Eloquant
// use Illuminate\Support\Facades\DB;//Query Builder
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class OwnersController extends Controller
{
    /**
     * Display a listing of the resource.
     * (リソースのリストを表示します。)
     *
     * @return \Illuminate\Http\Response
     */

    //コントローラーの中でもミドルウェアを設定している。
    public function __construct()
     {
        $this -> middleware('auth:admin');

     }


    public function index()
    {


        $owners = Owner::select('name','email','created_at')->get();
        // echo $owners;
        return view('admin.owners.index',compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     * (新しいリソースを作成するためのフォームを表示します。)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.owners.create');
    }

    /**
     * Store a newly created resource in storage.
     * (新しく作成したリソースをストレージに保存します。)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:owners',
            'password' => 'required|string|confirmed|min:8',
        ]);



        Owner::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
        ->route('admin.owners.index')
        ->with('message','オーナー登録が完了しました。');
    }

    /**
     * Display the specified resource.
     * (指定したリソースを表示します。)
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
     * (指定したリソースを編集するためのフォームを表示します。)
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
     * (ストレージ内の指定されたリソースを更新します。)
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
     * (指定されたリソースをストレージから削除します。)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
