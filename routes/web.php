<?php

use App\Rooms;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Filesystem;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $rooms = Rooms::all();
    return view('home.index', compact('rooms'));
});

Auth::routes();

Route::get('/home', function () {
    return redirect('sms');
})->name('home');


Route::group(['prefix' => 'rooms'], function() {
    Route::get('/', function() {
        $rooms = Rooms::all();
        return view('rooms.index', compact('rooms'));
    });
    Route::get('/{slug}', function($slug) {
        $room = Rooms::where('slug', $slug)->first();
        return view('rooms.detail', compact('room'));
    });
});

Route::group(['prefix' => 'gallery'], function() {
    Route::get('/', function() {
        $photos = \App\RoomPhotos::all();
        return view('gallery.index', compact('photos'));
    });
});

Route::group(['prefix' => 'blog'], function() {
    Route::get('/', function() {
        return view('blog.index');
    });
    Route::get('/detail', function() {
        return view('blog.detail');
    });
});

Route::group(['prefix' => 'contact-us'], function() {
    Route::get('/', function() {
        return view('contact.index');
    });
});


Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'rooms'], function() {
        Route::get('/', function() {
            $rooms = \App\Rooms::all();
            return view('admin.rooms.index', compact('rooms'));
        });
        Route::get('/create', function() {
            return view('admin.rooms.create');
        });
        Route::post('/create', function(Request $request) {
            $room = \App\Rooms::create(Input::except('_token', 'image'));
            $room->slug = Helper::slug_gen($room->name);
            $room->save();

            $i = 0;
            foreach ($request->image as $photo) {
                $i++;
                if ($i == '1'){ $m = '1'; } else { $m = '0'; }

                //File names and location
                $fileName = $room->slug.'-'.time().'-'.$photo->getClientOriginalName();
                $location_o = 'boutique/'.$room->slug.'/original'.'/'.$fileName;
                $location_t = 'boutique/'.$room->slug.'/thumbnail'.'/'.$fileName;

                $s3 = \Storage::disk(env('UPLOAD_TYPE', 'public'));
                
                //Original Image
                $original = Image::make($photo)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $s3->put($location_o, $original->stream()->__toString(), 'public');
                //Thumbnail image
                $thumbnail = Image::make($photo)->fit(270, 187, function ($constraint) {
                    $constraint->upsize();
                });
                $s3->put($location_t, $thumbnail->stream()->__toString(), 'public');

                \App\RoomPhotos::create([
                    'room_id' => $room->id,
                    'main' => $m,
                    'photo_url' => $location_o,
                    'thumbnail' => $location_t,
                ]);
            }

            return redirect('admin/rooms')->with('alert-success', 'Successfully added new room');
        });
    });
});



Route::group(['prefix' => 'sms'], function() {
    Route::get('/', function() {
        return view('sms.index');
    });

    Route::post('/', 'SmsController@send');
});