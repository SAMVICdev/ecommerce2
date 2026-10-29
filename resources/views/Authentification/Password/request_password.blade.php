<x-layouts.app />
<form action="{{route('password.email')}}" method="POST" class="col-md-6 offset-md-3 mt-5">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
    </div>
    <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
</form>