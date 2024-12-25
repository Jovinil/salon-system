<form wire:submit.prevent="authenticate" class="h-100 d-flex align-items-center">
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" wire:model="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" wire:model="password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <p class="text-center mt-3">
                        Don't have an account?
                        <button class="btn btn-link" data-bs-target="#signupModal" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                    </p>
                    @if (session()->has('message'))
                        <div class="alert alert-success mt-3">{{ session('message') }}</div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger mt-3">{{ session('error') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
