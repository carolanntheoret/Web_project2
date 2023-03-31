<form action="<?= isset($activity) ? '/modify-activity' : '/create-activity' ?>" method="post">
    @csrf
    <div>
        <input name="title" type="text" value="<?= isset($activity) ? $activity->title : '' ?>" placeholder="Activity's title">
    </div>
    <div>
        <textarea name="description" cols="20" rows="5" placeholder="Write activity's description here"><?= isset($activity) ? $activity->description : '' ?></textarea>
    </div>
    @if (!isset($activity))
        <div>
            <input name="time" type="datetime-local"  value="2023-03-08T11:00">
        </div>
    @else
        <div>
            <input name="day" type="date" value="">
            <input name="hour1" type="time" value="">
            <input name="hour2" type="time" value="">
            <input name="hour3" type="time" value="">
        </div>
        <input type="hidden" name="id" value="<?= $activity->activity_id ?>">
    @endif
    <div>
        <input name="image" type="text" value="<?= isset($activity) ? $activity->image : '' ?>" placeholder="Image URL">
    </div>
    <div class="submit">
    <input type="submit" value="" style="background: url('{{ asset('images/edit-button.png') }}'); background-size:cover; width: 25px; height:25px; border: none;">
</div>
</form>
