<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model {

    protected $fillable = [
        'name', 'email', 'media',
    ];

    public function SaveMedia($request) {
        //return $request;
        // $test = $request::input('text1');
        //$test2 = $request->input('text1');
        //return 1;
        $ncoder = base64_encode($request->input('MyPhoto'));
        return Media::create([
                    'name' => $request->input('text1'),
                    'email' => 'test@test.com',
                    'media' => $ncoder,
        ]);  /**/
    }

    public function FetchMedia($id) {
        $test = DB::table('media')->where('id', $id)->first();
        return $test;
    }

}
