<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Payment\Pay;

class PayController extends AbstractController
{

    public function __construct()
    {
    }

    /**
     * @Route(
     *     name="pay",
     *     path="/api/pay",
     *     methods={"POST"},
     *     defaults={
     *         "_api_resource_class"=Pay::class,
     *         "_api_collection_operation_name"="pay"
     *     }
     * )
     * @param Pay $data
     * @return JsonResponse
     */
    public function pay(Pay $data): JsonResponse
    {      

        $newData = array(
            'continueUrl' => "http://localhost:8080/#/success",
            "customerIp" => "127.0.0.1",
            "merchantPosId" => "300746",
            "description" => "Shop with books",
            "currencyCode" => "PLN",
            "totalAmount" => $data->sumPrice,
            "buyer" => [
                "email" => "john.doe@example.com",
                "phone" => "654111654",
                "firstName" => "John",
                "lastName" => "Doe",
                "language" => "pl"
            ],
            "settings" => [
                "invoiceDisabled" => "true"
            ]
        );


        $products = array();
        foreach($data->products as $product){
            array_push($products, array(
                'name' => $product['title'],
                "unitPrice" => $product['price'],
                "quantity" => $product['quantity']
            ));
        }

        $newData['products'] = $products;


        $url = 'https://secure.snd.payu.com/api/v2_1/orders';
        $ch = curl_init($url);

        $payload = json_encode($newData);
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization: Bearer d9a4536e-62ba-4f60-8017-6053211d3f47'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);

        $result = json_decode($result);

        return new JsonResponse($result); 
    }
}
