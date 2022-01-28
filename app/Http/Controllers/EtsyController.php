<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\EtsyConfig;
use Validator;


class EtsyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function etsyConfig(Request $request)
    {
        $input = $request->all();

        $id = Auth::user()->id;
        $user = EtsyConfig::where('user_id', $id)->first();


        if ($request->isMethod('post')) {

            $request->validate([
                'key_string' => 'required',
                'shared_secret' => 'required',
                'shop_name' => 'required',
                'user_name' => 'required',
                'country_id' => 'required'

            ]);

            $array = [
                'user_id' => $id,
                'app_url' => isset($input['app_url']) ? ($input['app_url']) : '',
                'key_string' => isset($input['key_string']) ? ($input['key_string']) : '',
                'shared_secret' => isset($input['shared_secret']) ? ($input['shared_secret']) : '',
                'access_token_secret' => isset($input['access_token_secret']) ? ($input['access_token_secret']) : '',
                'access_token' => isset($input['access_token']) ? ($input['access_token']) : '',
                'shop_name' => isset($input['shop_name']) ? ($input['shop_name']) : '',
                'user_name' => isset($input['user_name']) ? ($input['user_name']) : '',
                'country_id' => isset($input['country_id']) ? ($input['country_id']) : '',
                'store_id' => isset($input['store_id']) ? ($input['store_id']) : '',
            ];

            if ($user) {
                $user->update($array);
            } else {
                EtsyConfig::create($array);
            }





            return redirect()->back()->with("success", "Record successfully changed!");
        }
        return view('etsy.view', compact('id', 'user'));
    }
}
