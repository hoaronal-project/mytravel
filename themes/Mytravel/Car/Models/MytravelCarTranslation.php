<?php
namespace Themes\Mytravel\Car\Models;
class MytravelCarTranslation extends \Modules\Car\Models\CarTranslation
{
    protected $casts = [
        'faqs'  => 'array',
        'extra_price'  => 'array',
        'service_fee'  => 'array',
        'price'=>'float',
        'sale_price'=>'float',
        'specifications' => 'array',
    ];
}
