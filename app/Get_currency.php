<?php


namespace App;


class Get_currency
{
    public function show_currency()
    {
        $currency = json_decode(file_get_contents('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5'), true);
        foreach ($currency as $curr) {
            if ($curr['ccy'] == 'BTC'){
                continue;
            }
            echo '<p>' . $curr['ccy'] . '-' . $curr['buy'] . '</p>';
        }
    }
}