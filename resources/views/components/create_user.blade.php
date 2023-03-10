<div>
    <form action="<?= isset($user) ? '/modify-user' : '/create-user' ?>" method="post">
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
            <input type="password" name="password" <?= isset($user) ? '' : 'required' ?>>
        </div>
        <div>
            <span>Retype Password :</span>
            <input type="password_confirmation" name="password" <?= isset($user) ? '' : 'required' ?>>
        </div>
        @if ($admin)
            <div>
                <span>Role :</span>
                <select name="admin" required>
                    <option value="false" <?= isset($user) && $user->admin == 0 ? 'selected' : '' ?>>User</option>
                    <option value="true" <?= isset($user) && $user->admin == 1 ? 'selected' : '' ?>>Admin</option>
                </select>
            </div>
        @endif
        @if (isset($user))
            <input name="id" type="hidden" value="<?= $user->id ?>">
        @endif
        <input type="submit" value="Submit">
    </form>
</div>
