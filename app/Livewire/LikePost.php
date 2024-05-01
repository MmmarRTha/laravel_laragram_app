<?php

namespace App\Livewire;

use Livewire\Component;

class LikePost extends Component
{
    public $post;
    public $isLiked;
    public $likesCount;

    public function mount($post)
    {
        $this->isLiked = $post->checkLike(auth()->user());
        $this->likesCount = $post->likes->count();
    }

    public function like()
    {
        if ($this->post->checkLike(auth()->user()))
        {
            $this->post->likes()->where('post_id', $this->post->id)->delete();
            $this->isLiked = false;
            $this->likesCount--;
        } else
        {
            $this->post->likes()->create([
                'user_id' => auth()->user()->id,
            ]);
            $this->isLiked = true;
            $this->likesCount++;
        }
    }

    public function render()
    {
        return view('livewire.like-post');
    }
}
