<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-100 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>

            <form action="/register" method="POST" class="mt-10">
                @csrf

                {{-- Start Name --}}
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                        Name
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="name"
                        value="{{ old('name') }}" id="name" required>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                {{-- End Name --}}

                {{-- Start Username --}}
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                        Username
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="username"
                        value="{{ old('username') }}" id="username" required>
                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                {{-- End Username --}}

                {{-- Start Email --}}
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="email"
                        value="{{ old('email') }}" id="email" required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                {{-- End Email --}}

                {{-- Start Password --}}
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password"
                        required>
                </div>
                {{-- End Password --}}

                {{-- Start Submit --}}
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
                {{-- End Submit --}}
            </form>
        </main>
    </section>
</x-layout>
