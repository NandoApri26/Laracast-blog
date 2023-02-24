<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Log In!</h1>

                <form action="/login" method="POST" class="mt-10">
                    @csrf

                    {{-- Start Email --}}
                    <x-form.input name="email" type="email" autocomplete="username" />
                    {{-- End Email --}}

                    {{-- Start Password --}}
                    <x-form.input name="password" type="password" autocomplete="new-password" />
                    {{-- End Password --}}

                    {{-- Start Log In --}}
                    <x-form.button>Log In</x-form.button>
                    {{-- End Log In --}}
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
