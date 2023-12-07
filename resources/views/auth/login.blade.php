{{-- <h1>
    This is login Page
</h1> --}}

<form action="{{ route('login') }}" method="POST">
    @method('POST')
    @csrf

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
    <button type="submit">Login</button>

</form>