<?php
$client = new Client();
$headers = [
    'accept' => 'application/json',
    'Authorization' => 'Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MSwiY29tcGFueUlkIjpudWxsLCJpYXQiOjE3MDg0MjUzMzUsImV4cCI6MTcwODQzOTczNSwiaXNzIjoiQXV0aCJ9.vTt8GLmEuH3-50x5bciaFfb9hza9toRw7NzOr290U1eaI04kk9waOKQxfxsOaq6LIkbR7-n5ATTcL1RtC1I43hPhe5HDTV9SAfmIvTLK6hKxVE6aCPGUz7an1Ofr9YFKNZVTkEkCsT0kcsdEHHq2UcXChLaZUAPNuuAUuhs4WgKZ2mhcgJ8NKcB-JacLFm5b1-NwruaVryIVpyU_QdIeXATSpg_ig0m8un4oZ_jSiOm6YaW0Iz8LwMh_Yx5B_27owwifgLXRn1kylMVGORTs8B048_-qYuUd0MAHxd4c9igMN7NshJCOIAOgHzHNeDPnQJ6AOZKfOxNrucFV02kjhyNmxUMwzf_awPETjv5uQfxQ5rEGOk462fND1eZK2LpUyGFpBeoEE77UrcaKRToccApAvU150bWVYGJdvj8aP_W-wq1wpBzw64M26kNBBa7CazxBSkUh7dQl1eb1de3vuYTkoptRRPm8ts__ejIIzMhbpA2T_yqCCXRPedtWFUNH0Zgj-w6srgbsrsNCgJeDvt1LfIgKQZ3bLOGpbzCqHSsZF2mo77xEEsSOcpUcQO20LLYDYmOK0Xr9zD1uHR6_M6S5d2Bp95UUKWbhjoymtc2XLrRWd8Gk0SvEKHsA8qCG9UEM7Bq6qqTpB0hoH1B6UNml6oMXmSxS49Tsl_TSysg'
];
$request = new Request('GET', 'https://core-api-qa.epicentrm.com.ua/v1/my/user', $headers);
$res = $client->sendAsync($request)->wait();

echo $res->getBody();

// curl example
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://core-api-qa.epicentrm.com.ua/v1/my/user',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'accept: application/json',
        'Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MSwiY29tcGFueUlkIjpudWxsLCJpYXQiOjE3MDg0MjUzMzUsImV4cCI6MTcwODQzOTczNSwiaXNzIjoiQXV0aCJ9.vTt8GLmEuH3-50x5bciaFfb9hza9toRw7NzOr290U1eaI04kk9waOKQxfxsOaq6LIkbR7-n5ATTcL1RtC1I43hPhe5HDTV9SAfmIvTLK6hKxVE6aCPGUz7an1Ofr9YFKNZVTkEkCsT0kcsdEHHq2UcXChLaZUAPNuuAUuhs4WgKZ2mhcgJ8NKcB-JacLFm5b1-NwruaVryIVpyU_QdIeXATSpg_ig0m8un4oZ_jSiOm6YaW0Iz8LwMh_Yx5B_27owwifgLXRn1kylMVGORTs8B048_-qYuUd0MAHxd4c9igMN7NshJCOIAOgHzHNeDPnQJ6AOZKfOxNrucFV02kjhyNmxUMwzf_awPETjv5uQfxQ5rEGOk462fND1eZK2LpUyGFpBeoEE77UrcaKRToccApAvU150bWVYGJdvj8aP_W-wq1wpBzw64M26kNBBa7CazxBSkUh7dQl1eb1de3vuYTkoptRRPm8ts__ejIIzMhbpA2T_yqCCXRPedtWFUNH0Zgj-w6srgbsrsNCgJeDvt1LfIgKQZ3bLOGpbzCqHSsZF2mo77xEEsSOcpUcQO20LLYDYmOK0Xr9zD1uHR6_M6S5d2Bp95UUKWbhjoymtc2XLrRWd8Gk0SvEKHsA8qCG9UEM7Bq6qqTpB0hoH1B6UNml6oMXmSxS49Tsl_TSysg'
    ),
));

$response = curl_exec($curl);

curl_close($curl);

echo $response;