<?php

namespace App\Modules\Dashboard\Controllers;

use App\Controllers\BaseController;


class Dashboard extends BaseController
{

    function __construct()
    {
    }

    public function index()
    {


        $data = [
            'title'  => 'Bina Marga dan Bina Konstruksi',
        ];


        return view(dashboard_view("cms/dashboard"), $data);
    }
}
