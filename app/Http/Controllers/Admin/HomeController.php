<?php

namespace App\Http\Controllers\Admin;
use App\Crop;
use App\Fertilizer;
use App\Pesticides;
use App\Seed;
use Auth;
use Artisan;
use Response;
use Carbon\Carbon;

class HomeController
{
    public function index()
    {
        if(Auth::user()->id != 1){
            return redirect('/')->with('success', 'Login Successfully.');
        }else{
            $d['seed']= Seed::count();
            $d['crop'] = Crop::count();
            $d['fertilizer'] = Fertilizer::count();
            $d['pesticite'] = Pesticides::count();
            return view('admin.home',$d);
        }
    }
    
    public function postDbBackUp () {
        $now =  Carbon::now()->format("Y-m-d-H-m-i").'-backup.sql';
         try {
             Artisan::call('db:backup',
                 [
                     '--database' => 'mysql',
                     '--destination' => 'local',
                     '--destinationPath' =>$now,
                     '--compression' => 'gzip'
                 ]
             );
         }
         catch(\Exception $e) {
            dd($e->getMessage());
             return Response::json([
                 'success' => false,
                 'errors' => "",
             ], 400);
         }
         return Response::json([
             'success' => true,
             'message' => 'success'
         ]);
     
     }
}
