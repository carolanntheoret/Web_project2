<div>
    <form action="/reservation" method="post">
        @csrf
        <h3>{{ $pass->name }}</h3>
        <p>{{ $pass->description }}</p>
        <p><strong>${{ number_format((float)$pass->price, 2, '.', '') }}</strong></p>
        <select name="quantity">
            @for ($i = 1; $i <= 5; $i++)
                <option value="<?= $i ?>"><?= $i ?></option>
            @endfor
        </select>
        <input type="hidden" name="id" value="<?= $pass->id ?>">
        <input type="submit" value="Buy">
    </form>
</div>
