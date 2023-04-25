<div>
    @if (session()->has('message'))
    <div class="alert alert-success col-md-8 mx-auto mt-3">
        {{ session('message') }}
    </div>
@endif

<div class="login-form">
    <div class="container d-flex justify-content-center mt-5">
        <div class="card col-md-6 my-auto bg-light">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Login</h3>
                @if (!empty($errormsg))
                    <div class="alert text-danger col-md-8 mx-auto mt-3 text-center" style="display: block; font-style: italic; font-size: medium;">
                        {{ $errormsg }}
                    </div>
                @endif
                <form>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" wire:model="email">
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback" style="display: block; font-style: italic; font-size: small;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" wire:model="password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback" style="display: block; font-style: italic; font-size: small;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-0">Don't have an account yet? <a href="/register">Sign Up</a></p>
                        <button type="button" class="btn btn-primary btn-block" wire:click="submit()">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
