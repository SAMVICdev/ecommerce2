<x-layouts.app>
    <article class="container mt-5">
        <header>
            <h1 class="text-3xl font-bold mb-4">Register</h1>
        </header> class="text-center">

        <form action="{{ route('register') }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" value="{{ old('name') }}" name="name" id="name" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" value="{{ old('email') }}" name="email" id="email" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Register</button>
        </form>
        <a href="{{route('login')}}" class="text-sm text-gray-600 hover:text-gray-900">Already have an account? Login</a>
    </article>