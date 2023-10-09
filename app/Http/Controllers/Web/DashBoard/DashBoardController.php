<?php namespace App\Http\Controllers\Web\DashBoard;

use Illuminate\Http\Request;

class DashBoardController
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function home ()
    {

    }
}
