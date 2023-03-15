<form action="/add-activity-time" method="post">
    @csrf
    <input type="datetime-local" name="time" value="2023-03-08T11:30">
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="submit" value="Submit">
</form>
