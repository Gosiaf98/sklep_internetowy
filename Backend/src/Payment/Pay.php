<?php

namespace App\Payment;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *
 *     attributes={
 *          "input_formats"={
 *              "json"={"application/json;charset=UTF-8"}
 *          },
 *          "output_formats"={
 *              "json"={"application/json;charset=UTF-8"}
 *          }
 *     },
 *     collectionOperations={
   *     "pay"={
   *          "method" = "POST",
   *          "route_name"="pay",
   *          "swagger_context":{
   *              "summary": "Pay for books"
   *          }
   *      }
 *      }
 *     )
 */

 class Pay
 {
    /**
    * @var string $sumPrice
    * @Assert\NotBlank()
    */
    public $sumPrice;

    public $products;
 }