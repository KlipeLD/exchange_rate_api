<?php

namespace App\Services;

use App\Models\Currency;

class CurrencyService
{
    // protected Currency $currency;

    // public function __construct(Currency $currency)
    // {
    //     $this->currency = $currency;
    // }

    public function formatCurrencies(Currency $currenciesWithoutFormating): array
    {
        $currenciesAfterFormating = [];
        foreach($currenciesWithoutFormating as $currencyWithoutFormating)
        {
            $currenciesAfterFormating[] = $this->formatCurrency($currencyWithoutFormating);
        }
        return $currenciesAfterFormating;
    }

    protected function formatCurrency(Currency $currencyWithoutFormating): Collection
    {
        $currencyAfterFormating->amount = $currencyAfterFormating * 100;
        return $currencyAfterFormating;
    }
}