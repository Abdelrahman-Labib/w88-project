<?php

use App\Services\ProductService;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $fetchedProducts = (new ProductService())->fetchProducts();

        foreach ($fetchedProducts->chunk(100) as $chunk) {
            DB::table('products')->insert($chunk->toArray());
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
