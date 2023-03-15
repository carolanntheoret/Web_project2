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
        @if ($pass->id == 1)
            <select name="first_day">
                <option value="2023-06-02">Friday</option>
                <option value="2023-06-03">Saturday</option>
                <option value="2023-06-04">Sunday</option>
            </select>
            <input type="hidden" name="second_day" value="null">
        @endif
        @if ($pass->id == 2)
            <input type="hidden" name="first_day" value="2023-06-02">
            <select name="second_day">
                <option value="2023-06-03">Saturday</option>
                <option value="2023-06-04">Sunday</option>
            </select>
        @endif
        @if ($pass->id == 3)
            <input type="hidden" name="first_day" value="2023-06-03">
            <input type="hidden" name="second_day" value="2023-06-04">
        @endif
        @if ($pass->id == 4)
            <input type="hidden" name="first_day" value="2023-06-02">
            <input type="hidden" name="second_day" value="2023-06-04">
        @endif
        <input type="hidden" name="id" value="<?= $pass->id ?>">
        <input type="submit" value="Buy">
    </form>
</div>
