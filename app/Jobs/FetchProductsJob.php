<?php

namespace App\Jobs;

use App\Services\ProductService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\DB;

class FetchProductsJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $fetchedProducts = (new ProductService())->fetchProducts();

        foreach ($fetchedProducts->chunk(100) as $chunk) {
            DB::table('products')->upsert($chunk->toArray(), 'id');
        }
    }
}
