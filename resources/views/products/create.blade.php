<h1>Create Tiket Wisatawan</h1>

<form action="/products" method="POST">
    @csrf
    Name : <input type="text" name="name"><br>
    Description: <input type="text" name="description"><br>
    Price : <input type="number" name="price"><br>
    Lokasi : <input type="text" name="lokasi"><br>
    Lokasi : <input type="text" name="image_url"><br>

    <input type="submit" value="save">
</form>
