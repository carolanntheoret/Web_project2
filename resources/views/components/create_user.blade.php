<div>
    <form action="/create-user" method="post">
        @csrf
        <div>
            <span>First Name :</span>
            <input type="text" name="first_name" required>
        </div>
        <div>
            <span>Last Name :</span>
            <input type="text" name="last_name" required>
        </div>
        <div>
            <span>Email :</span>
            <input type="email" name="email" required>
        </div>
        <div>
            <span>Password :</span>
            <input type="password" name="password" required>
        </div>
        @if ($admin)
            <div>
                <span>Role :</span>
                <select name="admin" required>
                    <option value="false">User</option>
                    <option value="true">Admin</option>
                </select>
            </div>
        @endif
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
