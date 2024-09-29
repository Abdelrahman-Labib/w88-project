<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ProductService
{
    public function fetchProducts(): Collection
    {
        try {
            return collect(Http::get('https://dummyjson.com/products')->json('products'))
                ->select(['id', 'title', 'price', 'description', 'thumbnail']);
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());

            throw new \Exception($exception->getMessage());
        }
    }
}
