<div>
    <form action="create-user" method="post">
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
        <div> <!-- Ajouter une condition -->
            <span>Role :</span>
            <select name="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
