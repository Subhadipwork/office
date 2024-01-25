<?php

    use App\Models\Category;

    if (!function_exists('allcategory')) {
        
        function allcategory()
        {
            return Category::with('subcategory')->where('status',1)->get();
        }
    }