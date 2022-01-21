<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request) {//①
        return view('hello.index', ['msg'=>'フォームを入力：']);
    }

    public function post(Request $request) {
        //検証ルール
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150'
        ];
        $this->validate($request, $validate_rule);//ここでエラーが発生すれば①へ飛ぶ
        return view('hello.index', ['msg'=>'正しく入力されました！']);
    }
}
