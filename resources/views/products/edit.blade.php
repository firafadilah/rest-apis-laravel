<h1>Edit Tiket Wisatawan</h1>

<form action="/products/{{ $wisatas->id }}" method="POST">
    @method('PUT')
    @csrf
    Name : <input type="text" name="name" value="{{ $wisatas->name }}"><br>
    Description: <input type="text" name="description" value="{{ $wisatas->description }}"><br>
    Price : <input type="number" name="price" value="{{ $wisatas->price }}"><br>
    Lokasi : <input type="text" name="lokasi" value="{{ $wisatas->lokasi }}"><br>
    Lokasi : <input type="text" name="image_url" value="{{ $wisatas->image_url }}"><br>

    <input type="submit" value="save">
</form>
