<div>
    <form action="/create-user" method="post">
        @csrf
        <div>
            <span>First Name :</span>
            <input type="text" name="first_name" value="<?= $user->first_name ?? '' ?>" required>
        </div>
        <div>
            <span>Last Name :</span>
            <input type="text" name="last_name" value="<?= $user->last_name ?? '' ?>" required>
        </div>
        <div>
            <span>Email :</span>
            <input type="email" name="email" value="<?= $user->email ?? '' ?>" required>
        </div>
        <div>
            <span>Password :</span>
            <input type="password" name="password" required>
        </div>
        <div>
            <span>Retype Password :</span>
            <input type="password_confirmation" name="password" required>
        </div>
        @if ($admin)
            <div>
                <span>Role :</span>
                <select name="admin" required>
                    <option value="false" <?= $user ?? $user->admin == 0 ? 'selected' : false ?>>User</option>
                    <option value="true" <?= $user ?? $user->admin == 1 ? 'selected' : false ?>>Admin</option>
                </select>
            </div>
        @endif
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
