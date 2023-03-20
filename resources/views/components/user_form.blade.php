<form action="<?= isset($user) ? '/modify-user' : '/create-user' ?>" method="post">
    @csrf
    <div class="createAccountName">
        <input type="text" name="first_name" value="<?= $user->first_name ?? '' ?>" placeholder="First Name" required>
        <input type="text" name="last_name" value="<?= $user->last_name ?? '' ?>" placeholder="Last Name" required>
    </div>
    <input type="email" name="email" value="<?= $user->email ?? '' ?>" placeholder="Email" required>
    <input type="password" name="password" <?= isset($user) ? '' : 'required' ?> placeholder="Password">
    <input type="password_confirmation" name="password" <?= isset($user) ? '' : 'required' ?> placeholder="Confirm Password">
    @if ($admin && strpos(url()->current(), '/admin'))
        <div>
            <span>Role :</span>
            <select name="admin" required>
                <option value="false">User</option>
                <option value="true">Admin</option>
            </select>
        </div>
    @endif
    @if (isset($user))
        <input name="id" type="hidden" value="<?= $user->id ?>">
    @endif
    <div class="createAccountInput">
        <input class="submit" type="submit" value="CREATE ACCOUNT">
        <p class="plus">+</p>
    </div>
</form>
