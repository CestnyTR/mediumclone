<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryTabs extends Component
{
    /**
     * Create a new component instance.
     */
    private $_categories;

    public function __construct($categories = null)
    {
        $this->_categories = $categories ?? Category::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-tabs', [
            'categories' => $this->_categories
        ]);
    }
}
