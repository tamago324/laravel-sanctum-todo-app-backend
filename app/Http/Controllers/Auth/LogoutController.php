<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        // ログアウト
        Auth::logout();

        // セッションを無効化
        $request->session()->invalidate();

        // CSRF トークンの再作成
        $request->session()->regenerateToken();

        return response()->noContent();
    }
}
