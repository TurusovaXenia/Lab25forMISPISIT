<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Events\newEvent;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function gallery(){
        return view('gallery');
    }

    public function showCharts(){
        return view('charts');
    }

    public function dataChart(){
        $data=[];
        for($i=1;$i<12;$i++){
            $cur_data = $this->getCount($i);
         array_push($data, $cur_data);
        }
        return[
            'labels'=>['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
            'datasets'=>array([
                'label'=>'Поглаживания',
                'backgroundColor'=>['#ff3344'],
                'color'=>'#f55f8a',
                'data'=>$data,
            ],
            )
        ];
    }

    public function getCount($month){
        $needlyMonth = Answer::where('month',$month)->get();
        $currentCount = 0;
        foreach ($needlyMonth as $item){
            $currentCount += $item->count;
        }
        return $currentCount;
    }

    public function newEvent(Request $request){
//        $result = [
//            'labels'=>['March', 'April', 'May', 'June', 'Jule'],
//            'datasets'=>array([
//                'label'=>'label',
//                'backgroundColor'=>['#f26202'],
//                'data'=>[10000,15000,5000,12000,1000],
//            ])
//        ];
//        $name = '';
//        $city = '';
//        if($request->has('label')){
//            $result['labels'][] = $request->input('label');
//            $result['datasets'][0]['data'][]=(integer)$request->input('sale');
//
//            if($request->has('realtime')){
//                if(filter_var($request->input('realtime'), FILTER_VALIDATE_BOOLEAN)){
//                    event(new newEvent($result));
//                }
//            }
//        }
        $result = $this->getCount($request->month);
        return $result;

    }

}
