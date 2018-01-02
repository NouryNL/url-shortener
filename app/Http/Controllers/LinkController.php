<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Events\LinkOpened;
use App\Link;

class LinkController extends Controller
{

    public function index($uid) {

        $link = Link::where([
            ['uid', $uid],
            ['deleted', '0'],
            ['domain', env('DOMAIN_NAME')],
        ])->firstOrFail();

         return event(new LinkOpened($link));

        return redirect($link->target);

    }


    public function randomUid() {
        return uniqid();
    }

}
