@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="POST">
            @csrf

            <header class="flex items-center gap-8">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40"
                    class="rounded-full">
                <h2>Want to participate?</h2>
            </header>

            <div class="mt-5">
                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" id="" rows="5"
                    placeholder="Quick,thing of something to say!" required>
                                    </textarea>

                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200 pt-6">
                <x-form.button>Submit</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-bold ">
        <a href="/register" class="hover:underline text-blue-500 hover:text-blue-600">Register</a> or <a href="/login"
            class="hover:underline text-blue-500 hover:text-blue-600">Log In</a> to leave
        a comment
    </p>
@endauth
