<x-guest-layout>
    <div class="flex h-screen">
        <div class="m-auto flex flex-col items-center bg-white p-12 rounded-lg shadow-md">
            <h1 class="text-4xl font-bold">Buy Some Course</h1>
            @if (Route::has('login'))
                <div class="mt-16">
                    @auth
                        <a class="bg-gray-900 text-white text-xl px-5 py-2 rounded-md hover:bg-gray-800" href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a class="bg-gray-900 text-white text-xl px-5 py-2 rounded-md hover:bg-gray-800" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="bg-gray-900 text-white text-xl px-5 py-2 ml-4 rounded-md hover:bg-gray-800" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</x-guest-layout>
