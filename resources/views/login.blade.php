<x-layout>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <h1>Log In</h1>

  <form action="/login" method="POST">
    @csrf
    <div>
        <x-input title="Email" type="text" nombre="email"/>
        @error('email')
                <p> {{ $message }} </p>
        @enderror
    </div>
    <div>
        <x-input title="Password" type="password" nombre="password"/>
        @error('password')
                <p> {{ $message }} </p>
        @enderror
    </div>

    <button type="submit" class="text-xl border p-6">Log in</button>

  </form>
</x-layout>
    