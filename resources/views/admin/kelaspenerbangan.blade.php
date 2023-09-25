<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
<div>
    <p>Halo, Admin!</p>
    <p><strong>Daftar kelas penerbangan</strong></p>
    @foreach ( $kelas_penerbangan as $class )
    <div>
        <p>ID: {{ $class->id }}</p>
        <p>ID PENERBANGAN: {{ $class->penerbangan_id }}</p>
        <p>TIPE KELAS: {{ $class->tipe_kelas }}</p>
        <p>HARGA: {{ $class->harga }}</p>
        <p>JUMLAH KURSI: {{$class->jumlah_kursi}}</p>
        <p style="font-size: 8px">SEAT LAYOUT: {{$class->jumlah_kursi}}</p>
    </div>
    @endforeach
</div>
<div>
    <form method="POST" action="{{route('admin.kelaspenerbangan.add')}}">
        @csrf
        <div>
            <label for="penerbangan_id">ID Penerbangan</label>
            <input type="text" name="penerbangan_id" id="penerbangan_id">
        </div>
        <div>
            <label for="tipe_kelas">Tipe Kelas</label>
            <input type="text" name="tipe_kelas" id="tipe_kelas">
        </div>
        <div>
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga">
        </div>
        <div>
            <label for="jumlah_kursi">Jumlah kursi</label>
            <input type="text" name="jumlah_kursi" id="jumlah_kursi">
        </div>
        <div>
            <label for="seat_layout">Seat layout</label>
            <input type="text" name="seat_layout" id="seat_layout">
        </div>
        <div>
            <button type="submit">Tambah</button>
    </form>
</div>
</body>
</html>
