<div>
    <form action="connect" method="post">
        @csrf
        <div>
            <span>Email :</span>
            <input type="email" name="email">
        </div>
        <div>
            <span>Mot de Passe :</span>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Soumettre">
    </form>
</div>
