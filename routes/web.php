<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('samplepage/{id}', 'CasesController@cases');
//
Route::get('form', function() {
   return view('sampleform');
});
//but for this sample lets use get
//wrong spelling
Route::get('casefiles/{id}', function($id) {
	//
    $cases = App\Cases::find($id);
	echo $cases->caseno. " - " .$cases->casetitle."</br>";

	$payments =	$cases->payments;

	echo "<ul>" ;
	foreach ($payments as $payment) {
		echo "<li>".$payment->amount."</li>";
	}
	echo "</ul>";
	//lets test this..kay di pako sure..

    //here sa route ako i.load ang case..dayon ako i.display apil ang iya payments.. lets try..


    //so if 1 ato parameter i.query niya ang case nga ang id = 1 or 2
	// echo $cases->caseno. " - " .$cases->casetitle."</br>";

	//ok..now next is ang relationship
    // foreach ($cases as $case) {
    // 	echo $case->caseno. " - " .$case->
    // 	//oi error..wait..
    // }
});


// //sorry wala na identify ang routes
// Route::post('casefiles', function() {
//     //so here..ni agi saya diri..kay post man iya method..
// 	echo "POST";
// });

// Route::put('casefiles', function() {
//     //diri siya mo sulod..kay mao man kuno ni ang put nga route..
//     echo "PUT";
// });

// Route::delete('casefiles', function() {
//     //and delete..para mag delete
//     echo "DELETE";
// });

// //now lets try to access kani nga mga routes using sa form..so lets create a simple form sa ato html nga view..

// //murag naa ko error here somewhere..wait..ill check..