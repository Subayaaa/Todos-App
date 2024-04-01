@extends('template.index')

@section('judul', 'Add')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="/kategori/save" method="POST">
                    @csrf
                    @isset($data)
                        <input type="hidden" name="old_kode" value="{{ @$data->kd_kategori }}">
                    @endisset
                    <div class="mb3">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" class="form-control" name="kode" value="{{ @$data->kd_kategori }}">
                    </div>
                    <div class="mb3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ @$data->nama }}">
                    </div>
                    <div class="mb3">
                        <label for="ket" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" name="ket" value="{{ @$data->ket }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
