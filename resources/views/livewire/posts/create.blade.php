<div>
    <div class="container mt-5">
        <div class="row">
            <div class="col col-md-5 mx-auto">
                <div class="card shadow">
                    <div class="card-header bg-warning text-white text-center postcardhdclr">
                        <h3>Make a Post</h3>
                    </div>
                    <div class="card-body" style="background-color: rgba(255, 255, 0, 0.507);">
                        <div class="mt-3 col-md-5 mx-auto">
                            <input type="text" class="form-control text-center createcolor" placeholder="Author" wire:model="author">
                        </div>
                        <div class="mt-3 mx-auto">
                            <div class="col">
                                <input type="text" class="form-control createcolor" placeholder="Title" wire:model="title">
                            </div>
                            &nbsp;
                            <div class="col-md-7 form-floating">
                                <select class="form-select createcolor" wire:model="category_id">
                                    <option value="" disabled>Select a Category</option>
                                    <option selected hidden value=""></option>
                                    @foreach ($categories as $category )
                                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                                    @endforeach
                                </select>
                                <label for="caliber" class="form-label text-dark">Category</label>
                            </div>
                        </div>
                        <div class="input-group input-group-lg mt-3">
                            <textarea class="form-control form-control-lg createcolor" placeholder="What's on your mind?" wire:model="content"></textarea>
                        </div>

                        <a class="raise2 btn bg-warning d-flex float-end mt-2" wire:click.prevent="store()" href="/posts">
                            Post
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
