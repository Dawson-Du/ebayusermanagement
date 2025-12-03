

<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="col-md-4">
        <div class="card shadow-lg p-4 rounded-4">
            <h3 class="text-center mb-4">Login</h3>
            <!-- 错误提示 -->
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form wire:submit="login" onkeydown="return event.key != 'Enter';">
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" wire:model="email" placeholder="Enter email" required>
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" wire:model="password" placeholder="Enter password">
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <button class="btn btn-primary w-100" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>