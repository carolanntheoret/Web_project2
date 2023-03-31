<form action="<?= isset($activity) ? '/modify-activity' : '/create-activity' ?>" method="post">
    @csrf
    <div>
        <input name="title" type="text" value="<?= isset($activity) ? $activity->title : '' ?>" placeholder="Activity's title">
    </div>
    <div>
        <textarea name="description" cols="20" rows="5" placeholder="Write activity's description here"><?= isset($activity) ? $activity->description : '' ?></textarea>
    </div>
    <div>
        <input name="day" type="date" value="<?= isset($activity) ? gmdate('Y-m-d', $activity->first_time) : '2023-06-02' ?>">
        <input name="hour1" type="time" value="<?= isset($activity) ? gmdate('H:i', $activity->first_time) : '11:00' ?>">
        <input name="hour2" type="time" value="<?= isset($activity) ? gmdate('H:i', $activity->second_time) : '15:30' ?>">
        <input name="hour3" type="time" value="<?= isset($activity) ? gmdate('H:i', $activity->third_time) : '20:00' ?>">
    </div>
    @if (isset($activity))
        <input type="hidden" name="id" value="<?= $activity->activity_id ?>">
    @endif
    <div>
        <input name="image" type="text" value="<?= isset($activity) ? $activity->image : '' ?>" placeholder="Image URL">
    </div>
    <div class="submit">
    <input type="submit" value="" style="background: url('{{ asset('images/edit-button.png') }}'); background-size:cover; width: 25px; height:25px; border: none;">
</div>
</form>
