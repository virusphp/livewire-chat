<div class="container py-5">
    @foreach ($artikels as $artikel)
    <h5>{{ $artikel->title }}</h5>
    <p>{{ $artikel->body }}</p>
    @endforeach
    <button class="btn btn-primary" wire:click="loadmore">Load more</button>
    <span wire:loading>Loading...</span>
</div>