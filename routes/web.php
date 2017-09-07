<?php


Route::get('/', 'Pages@Home');

Route::get('/foto/{foto}', 'Permalink@Show');