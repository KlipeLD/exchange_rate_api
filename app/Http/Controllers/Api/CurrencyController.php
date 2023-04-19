<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CurrencyResource;
use App\Models\Currency;
use App\Http\Requests\Currency\StoreRequest;

class CurrencyController extends Controller
{
    protected Currency $currency;
    public function __construct(Currency $currency)
    {
        $this->currency = $currency;
    }

    public function index()
    {
        return CurrencyResource::collection(
            Currency::where('date',!empty($request->date)&&Auth::user()->hasPermissionToStr('watch-all-currencies')?htmlspecialchars($request->date):date("Y-m-d"))
                ->get()
        );    
    }


    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['amount'] = $data['amount'] * 100;
        $currency = $this->currency->create($data);

        return response('Exchange rate: '. $currency->currency.' - '.$currency->date 
            .' - ' . $currency->amount / 100
            .' successfuly added', 200)
                  ->header('Content-Type', 'text/plain');
    }

}
