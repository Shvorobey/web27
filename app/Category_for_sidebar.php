<?php


namespace App;


class Category_for_sidebar
{
    public function show_category()
    {
        foreach (Category::distinct()->get(['categories', 'key']) as $category) {
            echo '<a href=" ' . route('posts_by_category', $category->key) . '">' . $category->categories . '</a> <br>';
        }
    }
}