<x-layout>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->

   <form action="/register" method="post">
    @csrf
    <h1>Register</h1>
        <div>
             <label for="">Name</label>
             <input type="text" name="name">
            @error('name')
                <p> {{ $message }} </p>
            @enderror
        </div>

        <div>
             <label for="">Email</label>
             <input type="text" name="email">
             @error('email')
                <p> {{ $message }} </p>
            @enderror
        </div>

        <div>
            <label for="">Password</label>
            <input type="password" name="password">
            @error('password')
                <p> {{ $message }} </p>
            @enderror
       </div>

       <div>
        <label for="">Birthday</label>
        <input type="birthday" name="birthday">
        @error('name')
                <p> {{ $message }} </p>
            @enderror
   </div>

       <button type="submit">Send</button>
   </form>
</x-layout>
