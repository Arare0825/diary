<div class="container mt-4">

<div class="mb-4">
</div>

@foreach ($posts as $post)
    <div class="card mb-4">
        <div class="card-header">
            良いこと: {{ $post->user->good }}
        </div>
        <div class="card-body">
            <p class="card-text">
            </p>
            <p class="card-text">
        </div>
        <div class="card-footer">
@endforeach

{{-- ページネーション --}}
<div class="d-flex justify-content-center mb-5">
    {{ $posts->links() }}
</div>

</div>
