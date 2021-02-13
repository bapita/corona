<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        <?php

        $request = new HttpRequest();
        $request->setUrl('https://apidojo-yahoo-finance-v1.p.rapidapi.com/stock/v2/get-chart');
        $request->setMethod(HTTP_METH_GET);
        
        $request->setQueryData([
            'interval' => '5m',
            'symbol' => 'AMRN',
            'range' => '1d',
            'region' => 'US'
        ]);
        
        $request->setHeaders([
            'x-rapidapi-key' => 'a998dab9d7mshe9383689b5d7e19p16fe40jsnce1915cc1b64',
            'x-rapidapi-host' => 'apidojo-yahoo-finance-v1.p.rapidapi.com'
        ]);
        
        try {
            $response = $request->send();
        
            echo $response->getBody();
        } catch (HttpException $ex) {
            echo $ex;
        }
    ?>
</body>
</html>