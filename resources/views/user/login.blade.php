@extends('../layout')
@extends('../partials/_nav')
@section('content')
<form action="/user/authenticate" method="POST">
    @csrf
    <div>
        <label for="email">
            Email
        </label>
        <input
            type="email"
            name="email"
        />
        @error('email')
        <p class="error">{{$message}}</p>
        @enderror
    </div>

    <div>
        <label for="password">
            Password
        </label>
        <input
            type="password"
            name="password"
        />
        @error('password')
        <p class="error">{{$message}}</p>
        @enderror
    </div>

    <input type="submit">
</form>
@endsection