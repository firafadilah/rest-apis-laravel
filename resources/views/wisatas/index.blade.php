<h1>List Wisatawan</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Lokasi</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($wisatas as $wisata)
        <tr>
            <td>{{ $wisata->name }}</td>
            <td>{{ $wisata->lokasi }}</td>
            <td>{{ $wisata->description }}</td>
            <td>{{ $wisata->price }}</td>
            <td>
                <a href="/wisatas/{{ $wisata->id }}/edit">Edit</a>
                <form action="/wisatas/{{ $wisata->id }}"  method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr> 
        @endforeach
    </tbody>

    <a href="/wisatas/create">Create</a>
</table>


