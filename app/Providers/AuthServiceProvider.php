<?php

namespace App\Providers;

use App\Models\User;
use Exception;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        // Here you may define how you wish users to be authenticated for your Lumen
        // application. The callback which receives the incoming request instance
        // should return either a User instance or null. You're free to obtain
        // the User instance via an API token or any other method necessary.

        $this->app['auth']->viaRequest('api', function ($request) {

            $token = $request->get('token') ?? $request->bearerToken();

            // if (!$token)
            //     return response()->json(['message' => 'Token not provided.'], 401);
            if ($token) {
                try {
                    $credentials = JWT::decode($token, new Key(config('app.key'), 'HS256'));
                    return User::find($credentials->sub);
                } catch (ExpiredException $e) {
                    // return response()->json(['message' => 'Provided token is expired.'], 400);
                } catch (Exception $e) {
                    // return response()->json(['message' => 'An error while decoding token.'], 400);
                }
            }
        });
    }
}
