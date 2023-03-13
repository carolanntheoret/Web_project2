<form action="/create-activity" method="post">
    @csrf
    <div>
        <span>Title :</span>
        <input name="title" type="text">
    </div>
    <div>
        <span>Description :</span>
        <textarea name="description" cols="30" rows="10"></textarea>
    </div>
    <div>
        <span>Presentation Time :</span>
        <input type="datetime-local" value="2023-03-08T11:30">
    </div>
    <div>
        <span>Image :</span>
        <input name="image" type="text">
    </div>
    <input type="submit" value="Submit">
</form>
