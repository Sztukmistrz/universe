<?php


	#==================================================================================
	#==================================================================================
    Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'web', 'localize', 'localeSessionRedirect', 'localizationRedirect' ]
    ],
    function()
    {
    #==================================================================================
    #==================================================================================
    

    	//***********
		Route::group( 
			[
				'prefix' => 'backend/univrse', 
				'as' => 'univrse.', 
				'namespace' => 'Sztukmistrz\Universe\Controllers'
			], 
			function() {
		//***********
			Route::get( '/', 
					['as' => 'start', 
					'uses' => 'UniverseController@start']);

		//***********
			});
		//***********



	#==================================================================================
	#==================================================================================
	});
	#==================================================================================
	#==================================================================================