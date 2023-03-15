<div>
    <form action="/connect" method="post">
        @csrf
        <div>
            <span>Email :</span>
            <input type="email" name="email" placeholder="Enter Email">
        </div>
        <div>
            <span>Password :</span>
            <input type="password" name="password" placeholder="Enter Password">
        </div>
        <input type="submit" value="Submit">
    </form>
</div>
