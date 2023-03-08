<div>
    <form action="create-user" method="post">
        @csrf
        <div>
            <span>Prénom :</span>
            <input type="text" name="first_name" required>
        </div>
        <div>
            <span>Nom :</span>
            <input type="text" name="last_name" required>
        </div>
        <div>
            <span>Email :</span>
            <input type="email" name="email" required>
        </div>
        <div>
            <span>Mot de Passe :</span>
            <input type="password" name="password" required>
        </div>
        <div> <!-- Ajouter une condition -->
            <span>Rôle :</span>
            <select name="role" required>
                <option value="user">Utilisateur</option>
                <option value="admin">Administrateur</option>
                <option value="superadmin">BIG BOSS ADMINISTRATEUR !!!</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Soumettre">
        </div>
    </form>
</div>
