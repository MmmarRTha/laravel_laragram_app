<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class ListsPost extends Component
{
    /**
     * Create a new component instance.
     *
     * @param  LengthAwarePaginator<int, Post>  $posts
     */
    public function __construct(public LengthAwarePaginator $posts) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.lists-post');
    }
}
