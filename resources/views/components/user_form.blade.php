<form action="<?= isset($user) ? '/modify-user' : '/create-user' ?>" method="post">
    @csrf
    <div class="createAccountName">
        <input type="text" name="first_name" value="<?= $user->first_name ?? '' ?>" placeholder="First Name" required>
        <input type="text" name="last_name" value="<?= $user->last_name ?? '' ?>" placeholder="Last Name" required>
    </div>
    <input type="email" name="email" value="<?= $user->email ?? '' ?>" placeholder="Email" required>
    <input type="password" name="password" <?= isset($user) ? '' : 'required' ?> placeholder="Password">
    @if (!isset($user))
        <input id="password_confirmation" type="password" name="password_confirmation" <?= isset($user) ? '' : 'required' ?> placeholder="Confirm Password">
    @endif
    @if ($admin && strpos(url()->current(), '/admin'))
        <input type="hidden" name="admin" value="<?= isset($createAdmin) ?? '0' ?>">
    @endif
    @if (isset($user))
        <input name="id" type="hidden" value="<?= $user->id ?>">
    @endif
    <div class="createAccountInput">
        @if (strpos(url()->current(), '/admin'))
            <input class="submit" type="submit" value="" style="background: url('{{ asset('images/edit-button.png') }}'); background-size:cover; width: 25px; height:25px; border: none;">
        @else
            <input class="submit fw-semibold" id="submit" type="submit" value="CREATE ACCOUNT">
            <p class="plus">+</p>
        @endif
    </div>
</form>
