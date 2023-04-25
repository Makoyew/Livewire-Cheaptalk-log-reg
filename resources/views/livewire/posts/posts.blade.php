<div>
    @if (session()->has('message'))
        <div class="alert alert-success col-md-3 mx-auto mt-3 text-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-2 mt-3">
            <div class="form-floating">
                <select class="form-select bg-warning" wire:model="postCategory">
                    <option value="" disabled>Select a Category</option>
                    <option value="all">All</option>
                    @foreach ($categories as $category )
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
                <label for="caliber" class="form-label text-dark">Category</label>
            </div>
        </div>

        <div class="col-md-3 mt-3">
            <div class="form-floating">
                <input type="text" class="form-control bg-warning" placeholder="Search" wire:model="postSearch">
                <label for="search" class="form-label text-dark">Search</label>
            </div>
        </div>
    </div>


    <div class="container col-md-7 mx-auto">
        <div class="row">
            <div class="col">
                @foreach ( $posts as $post )
                    <div class="card mt-3 shadow">
                        <div class="card-header bg-warning d-flex justify-content-between">
                            <h3 style="font-family: Verdana, Geneva, Tahoma, sans-serif">{{ $post->author }}</h3>
                            <h6 style="font-family: cursive">{{ $post->category->category }}</h6>
                        </div>

                        <div class="card-body text-center" style="background-color: rgba(255, 255, 0, 0.507);">
                            <h5 style="font-family:Georgia, 'Times New Roman', Times, serif">{{ $post->title }}</h5>
                            <h4 style="font-family: monospace">{{ $post->content }}</h4>
                        </div>
                    </div>
                @endforeach
                <div class="pagination justify-content-center mt-3">
                    {{ $posts }}
                </div>
            </div>
        </div>
    </div>

</div>

