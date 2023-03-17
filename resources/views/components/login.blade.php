<div>
    <form action="/connect" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <div class="login-input">
            <input class="submit" type="submit" value="LOGIN">
            <img src="{{ asset('arrow.png') }}">
        </div>
    </form>
</div>
