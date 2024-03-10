<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ACLMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     * @param $role
     * @param null $permission
     * @return Response
     */
    public function handle(Request $request, Closure $next, $role, $permission = null)
    {
        $user=\App\Models\User::query()->where('id',1)->first();
        Auth::login($user);

        if (!$request->user()->hasRole($role) && $permission == null) {
            abort(403);
        }

        if ($permission !== null && !$request->user()->hasPermission($permission)) {
            abort(403);
        }


        return $next($request);
    }


}
