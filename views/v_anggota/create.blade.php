<h3></h3>
<form action="{{ route('anggota.store') }}" method="post">
    @csrf
    <label>Nama</label><br>
    <input type="text" name="nama" id="" value="{{old('nama')}}">
    <p></p>
    <label>HP</label><br>
    <input type="text" name="hp" id="" value="{{old('hp')}}">
    <p></p>
    <button type="submit">Simpan</button>
    <a href="{{ route('anggota.index') }}">
        <button type="button">Batal</button>
    </a>
</form>