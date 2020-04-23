<?php

namespace App\Http\Controllers\Redis;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class ExampleController extends Controller
{
    public function withRedis()
    {
        if(!Redis::get('all-profile')){
            Redis::set('all-profile', Profile::all());
        }

        return view('redis.with-redis', [
            'profile' => json_decode(Redis::get('all-profile'))
        ]);
    }

    public function withoutRedis()
    {
        return view('redis.without-redis', [
            'profile' => Profile::all()
        ]);
    }
}
