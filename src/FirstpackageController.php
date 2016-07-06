<?php
namespace Execter\Firstpackage;
 
use App\Http\Controllers\Controller;
use Carbon\Carbon;
 
class FirstPackageController extends Controller
{
 
    public function index($timezone)
    {
        $current_time = Carbon::now($timezone)->toDateTimeString();
        return view('firstpackage::index', compact('current_time'));
    }
 
}