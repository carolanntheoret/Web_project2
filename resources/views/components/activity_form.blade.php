<form action="<?= isset($activity) ? '/modify-activity' : '/create-activity' ?>" method="post">
    @csrf
    <div>
        <span>Title :</span>
        <input name="title" type="text" value="<?= isset($activity) ? $activity->title : '' ?>" placeholder="Activity's title">
    </div>
    <div>
        <span>Description :</span>
        <textarea name="description" cols="30" rows="10" placeholder="Write activity's description here"><?= isset($activity) ? $activity->description : '' ?></textarea>
    </div>
    @if (!isset($activity))
        <div>
            <span>Presentation Time :</span>
            <input name="time" type="datetime-local"  value="2023-03-08T11:30">
        </div>
    @else
        <input type="hidden" name="id" value="<?= $activity->id ?>">
    @endif
    <div>
        <span>Image :</span>
        <input name="image" type="text" value="<?= isset($activity) ? $activity->image : '' ?>" placeholder="Image URL">
    </div>
    <input type="submit" value="Submit">
</form>
