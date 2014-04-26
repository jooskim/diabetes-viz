<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('/', 'MainController');
Route::resource('/bg', 'BGController');
Route::get('/bg/{from}/{to}', function($from, $to){

    if (preg_match('/[\d]{4}\-(0\d|[\d]{2})\-(0\d|[\d]{2})/', $from) && preg_match('/[\d]{4}\-(0\d|[\d]{2})\-(0\d|[\d]{2})/', $to)){
        return DB::select("SELECT * FROM BG WHERE createdDate >= date('".$from."') AND createdDate < date('".$to."')");
    }else{
        return "Invalid dates were entered";
    }


});

Route::post('/dataUpload', function(){
    if(!Input::hasFile('file')){
        die("No file selected");
    }else{
        // check if the file extension is CSV
        if(Input::file('file')->getClientOriginalExtension() == 'csv'){
            $path = base_path() . "/uploads/";
            $filename = Input::file('file')->getClientOriginalName();
            Input::file('file')->move($path, $filename);
//            return Redirect::to('/');

            if(($temp = file($path.$filename)) == false){
                throw new Exception("File is corrupt!");
            }else{
                $results = array();
                foreach($temp as $key => $value){
                    $item = array();
                    $value = explode(",", $value);
                    if($key > 0 && count($value) == 5){
                        // format the date
                        $formattedDate = str_replace("\"","",$value[0]).','.substr($value[1],0,5);
                        $formattedDate = date('Y-m-d', strtotime($formattedDate));

                        // format the time
                        $formattedTime = str_replace("\"","",substr($value[1], 5));

                        // enter the BG level
                        $bgLevel = $value[2];

                        // include whether this person ate?
                        $mealInvolved = $value[3];

                        $results[] = array($formattedDate, $formattedTime, $bgLevel, $mealInvolved);

                    }else{
                        continue;
                    }

                }

                // insert the parsed data into the database
//                print_r($results[0]);
                $sqlInsert = '';
                foreach($results as $item){
                    DB::Insert("INSERT INTO BG (createdDate, createdTime, level, note) VALUES(?,?,?,?)", array($item[0],$item[1],$item[2],$item[3]));
                }

//                print_r(DB::select('select * from BG where 1'));

                return Redirect::to('/');
            }


        }else{
            return "Not a CSV file";
        }
    }
});

Route::get('/deleteAll', function(){
    DB::table('BG')->delete();
    return Redirect::to('/');
});