@extends('layout.master')

@section('judul')
Tambah peran
@endsection

@section('content')
<form method="post" action="/peran">
    @csrf
    <div class="form-group">
        <label>Film</label>
        <input type="text" name="judul" value="" class="form-control">
    </div>
    @error('film')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror

    <div class="form-group">
        <label>Ringkasan</label>
        <textarea class="form-control" name="ringkasan"> </textarea>
    </div>
    @error('ringkasan')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror
    <div class="form-group">
        <label>Tahun</label>
        <input type="text" name="tahun" value="" class="form-control">
    </div>
    @error('tahun')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror
    <div class="form-group">
        <label>Poster</label>
        <input type="text" name="poster" value="" class="form-control">
    </div>
    @error('poster')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror
    <div class="form-group">
        <label>Genre</label>
        <select class="form-control" name="genre">
        <option value="">Pilih Genre</option>
            @forelse ($genre as $key => $item)
        <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
            @empty
            @endforelse
        </select>
    </div>
    @error('genre_id')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror



    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection