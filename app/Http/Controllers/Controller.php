<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Feeds;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function getDataRss($urlRSS)
    {
        $feed = Feeds::make($urlRSS);
        $data = array(
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
        );
        return $data;
    }
}
