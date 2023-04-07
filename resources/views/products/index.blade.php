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
        </tr> 
        @endforeach
    </tbody>

    <a href="/create">Create</a>
</table>


