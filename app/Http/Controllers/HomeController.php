<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;
use DB;
use App\sanpham;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('adminlte::home');
    }

    public function tu() {

        // Schema::create('sanpham', function($table)
        // {
        //     $table->increments('id');
        //     $table->string('ten', 200);
        //     $table->string('gia',200);
        //     $table->string('thumbnail');
        // });

        return view('adminlte::tu');
    }

    public function muahang() {

        // $dataList = [];
        $data = DB::table('sanpham')->get();
        // foreach($data as $item) {
        //     $item = get_object_vars($item);
        //     $dataList[] = [
        //         'ten' => $item['ten'],
        //         'gia' => $item['gia'],
        //         'thumbnail' => $item['thumbnail']
        //     ];
        // }
        // var_dump($data);

        return view('adminlte::muahang')->with([
            'dataList' => $data
        ]);
        // return view('adminlte::muahang');
    }

    public function banhang() {


        // $dataList = [];
        $data = DB::table('sanpham')->get();
        // foreach($data as $item) {
        //     $item = get_object_vars($item);
        //     $dataList[] = [
        //         'ten' => $item['ten'],
        //         'gia' => $item['gia'],
        //         'thumbnail' => $item['thumbnail']
        //     ];
        // }

        return view('adminlte::banhang')->with([
            'dataList' => $data
        ]);
    }

    public function postForm(Request $request) {
        $sanpham = new sanpham;
        $sanpham->ten = $request->productname;
        $sanpham->gia = $request->price;
        $sanpham->thumbnail = $request->thumbnail;

        $sanpham->save();

        // $dataList = [];
        $data = DB::table('sanpham')->get();
        // foreach($data as $item) {
        //     $item = get_object_vars($item);
        //     $dataList[] = [
        //         'ten' => $item['ten'],
        //         'gia' => $item['gia'],
        //         'thumbnail' => $item['thumbnail']
        //     ];
        // }

        return redirect()->route('banhang');
    }

    public function update(Request $request) {


        if(isset($request->id)){
            $sanpham = sanpham::find($request->id);
            $data = DB::table('sanpham')->where('id', '=', $request->id)->get();
        }
        return view('adminlte::update')->with([
            'dataList' => $data
        ]);

    } 

    public function update_access(Request $request) {
        // echo $request->index;
        $sanpham =  sanpham::find($request->index);

        $sanpham->ten = $request->productname;
        $sanpham->gia = $request->price;
        $sanpham->thumbnail = $request->thumbnail;
        $sanpham->save();

        $data = DB::table('sanpham')->get();
        return redirect()->route('banhang');
    }

    public function delete(Request $request) {
        if(isset($request->id)) {
            $sanpham = sanpham::find($request->id);
            $sanpham->delete();
        }
        $data = DB::table('sanpham')->get();
        // return view('adminlte::banhang')->with([
        //     'dataList' => $data
        // ]);
        return redirect()->route('banhang');
    }
}