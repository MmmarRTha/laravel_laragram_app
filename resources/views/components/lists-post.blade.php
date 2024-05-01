<div>
    @if ($posts->isEmpty())
        <p class="text-sm font-bold text-center text-gray-800 uppercase">No posts yet, start following someone :D </p>
    @endif
    <div class="grid gap-6 px-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($posts as $post)
            <div>
                <a href="{{ route('posts.show', ['post' => $post, 'user' => $post->user]) }}">
                    <img src="{{ Vite::asset('public/uploads') . '/' . $post->image }}" alt="Image Post" {{ $post->title }}>
                </a>
            </div>
        @endforeach
    </div>
    <div class="my-10">
        {{ $posts->links() }}
    </div>
</div>
