<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class LikePost extends Component
{
    public Post $post;

    public bool $isLiked = false;

    public int $likesCount = 0;

    public function mount(Post $post): void
    {
        $this->post = $post;
        $this->isLiked = $post->checkLike(auth()->user());
        $this->likesCount = $post->likes()->count();
    }

    public function like(): void
    {
        if ($this->isLiked) {
            $this->post->likes()->where('user_id', auth()->id())->delete();
            $this->isLiked = false;
            $this->likesCount--;
        } else {
            $this->post->likes()->create([
                'user_id' => auth()->id(),
            ]);
            $this->isLiked = true;
            $this->likesCount++;
        }
    }

    public function render(): View
    {
        return view('livewire.like-post');
    }
}
