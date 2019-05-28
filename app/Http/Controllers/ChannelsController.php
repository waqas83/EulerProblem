<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChannelsController extends Controller
{
    public function euler(Request $request){

        $validator = \Validator::make($request->all(), [
           'text' => 'numeric|min:1|max:10000',
                ])->setAttributeNames(['text' => 'given natural number']);

        if ($validator->fails()) {
            return $validator->messages()->first();
        }

        $given_number = isset($request->text) ? $request->text : 1000;

        $numbers = array_filter(range(1, $given_number - 1), function($n) {
                return ($n % 3 == 0) || ($n % 5 == 0);
        });
        $res = array_sum($numbers);

        return "Hello {$request->user_name}! The sum of multiples of 3 and 5 below {$given_number} is *{$res}*";
   }

}
