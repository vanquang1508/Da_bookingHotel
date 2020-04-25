<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckUsers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if (Auth::check()) {
        //     $user = Auth::user();

        //     $value = DB::table('users')
        //         ->join('role_user', 'users.id', '=', 'role_user.user_id')
        //         ->join('roles', 'roles.id', '=', 'role_user.role_id')
        //         ->where('users.id', '=',$user->id)
        //         ->select('users.*','roles.*')
        //         ->get();
        //     foreach ($value as $key) {
        //         if ($key->name == "manager") {
        //              return $next($request);
        //         }else {
        //             return redirect("admin/demo");
        //         }
        //     }
        // }else{
        //     return redirect()->intended('login');
        // }
        
        if (Auth::check()){
            $user = Auth::user();
            if ($user->checkuser == 0){
                return $next($request);
            }else{
                return redirect()->intended('login')->with('thongbao','Tài khoản không có quyền');
            }
        }else{
            return redirect()->intended('login');
        }
    }
}
