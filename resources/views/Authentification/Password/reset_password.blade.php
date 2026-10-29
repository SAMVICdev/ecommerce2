<x-layouts.app>
    <section>
        <form action="{{route('password.update')}} " method="POST" class="col-md-6 offset-md-3 mt-5">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">New Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm New Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            <input type="hidden" value="{{ $token }}" name="token">
            <button type="submit" class="btn btn-primary">Reset Password</button>
        </form>
    </section>