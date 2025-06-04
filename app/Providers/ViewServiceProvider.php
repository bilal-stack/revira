<?php

namespace App\Providers;
use App\Models\Brand;
use App\Models\Section;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Share categories with children to the header view
        View::composer('front.layout.header', function ($view) {
            $headerCategories = Category::with('subCategories')
                ->where('parent_id', 0)
                ->get();

            $headerSections = Section::sections();
            $view->with(compact('headerSections', 'headerCategories'));
        });

//        View::composer('front.index', function ($view) {
//            $brands = Brand::where('status', 1)->inRandom(8);
//
//            $view->with(compact('brands'));
//        });
    }
}
