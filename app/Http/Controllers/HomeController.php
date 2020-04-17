<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\validator;
use App\Customer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function ajaxRequest()
    {
        Log::info("I am in side HomeController->ajaxRequest()");
        return view('ajaxRequest');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function ajaxOnSubmit(Request $request)
    {
        Log::info("I am in side HomeController->ajaxOnSumit()");
        Log::info("request: ");
       Log::info($request);
        $input = $request->all();
         Log::info("input: ");
        Log::info($input);

        $validator = Validator::make($input, [
            'name' => 'required'
        ]);

        if ($validator->fails()){
            Log::info("Validation failed");

            $response = [
                'success' => false,
                'data' => 'Validation Error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 422);

        }
        else {
            Log::info("Validation successful");

            $name = $request->input('name');

            Log::info("$name: ");
            Log::info($name);

            $Customer = new Customer();
            $Customer->name = $name;

            $Customer->save();

            $response = [
                'success' => true,
                'data' => $name,
                'message' => 'response sent successfuly'
            ];

            return response()->json($response, 200);

        }

    }
}