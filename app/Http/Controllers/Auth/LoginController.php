<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // ログイン
    public function login(LoginRequest $request)
    {
        Log::debug($request->all());
        // ログインできなければ、Exception を投げる
        if (! Auth::attempt($request->only('email', 'password'))) {
            throw ValidationException::withMessages([
                // Lang::get() のシンタックスシュガー
                // lang/ja/auth.php の failed の値を取得する！
                'email' => __('auth.failed')
            ]);
        }

        // セッションID の再作成 (セッションID固定化攻撃に対処するため)
        $request->session()->regenerate();

        // ユーザー情報を返す
        return response()->json(Auth::user(), 200);
    }
}
