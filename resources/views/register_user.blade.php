@foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    
@endforeach

<form action="{{ route('validate_register') }}" method="POST">
    @csrf

    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email">

    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password">

    <input type="checkbox" name="remember" id="remember">
    <label for="remember">I agree to the terms and conditions</label>

    <button type="submit">
        Register
    </button>
</form>