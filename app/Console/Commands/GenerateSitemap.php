<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Product;
use App\Models\Portfolio;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate sitemap.xml';

    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/produk'))
            ->add(Url::create('/portfolio'));

        Product::where('is_active', true)->each(function ($product) use ($sitemap) {
            $sitemap->add(
                Url::create("/produk/{$product->slug}")
            );
        });

        Portfolio::where('is_active', true)->each(function ($portfolio) use ($sitemap) {
            $sitemap->add(
                Url::create("/portfolio/{$portfolio->slug}")
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');
    }
}
