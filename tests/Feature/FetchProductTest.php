<?php

namespace Tests\Feature;

use App\Services\ProductService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FetchProductTest extends TestCase
{
    private ProductService $service;

    protected function setUp(): void
    {
        parent::setUp();

        $this->service = $this->app->makeWith(ProductService::class);
    }

    public function testFetchProductsFromExternalLink(): void
    {
        $fetchProducts = $this->service->fetchProducts();

        $this->assertJson($fetchProducts);
    }
}
