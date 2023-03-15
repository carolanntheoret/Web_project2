@if ($reservation->id <= 2)
    <form action="/modify-reservation">
        @csrf
        @if ($reservation->id == 1)
            <select name="first_day">
                <option value="2023-06-02" <?= $reservation->first_day == '2023-06-02' ? 'selected' : '' ?>>Friday</option>
                <option value="2023-06-03" <?= $reservation->first_day == '2023-06-03' ? 'selected' : '' ?>>Saturday</option>
                <option value="2023-06-04" <?= $reservation->first_day == '2023-06-04' ? 'selected' : '' ?>>Sunday</option>
            </select>
            <input type="hidden" name="second_day" value="null">
        @endif
        @if ($reservation->id == 2)
            <input type="hidden" name="first_day" value="2023-06-02">
            <select name="second_day">
                <option value="2023-06-03" <?= $reservation->second_day == '2023-06-03' ? 'selected' : '' ?>>Saturday</option>
                <option value="2023-06-04" <?= $reservation->second_day == '2023-06-04' ? 'selected' : '' ?>>Sunday</option>
            </select>
        @endif
        <input type="hidden" name="id" value="<?= $reservation->id ?>">
        <input type="submit" value="Modify">
    </form>
@endif
