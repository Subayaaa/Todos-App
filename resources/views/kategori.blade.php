@extends('template.index')

@section('judul', 'Kategori')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/kategori/add">
                    <button type="button" class="btn btn-success">Tambah</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Keterangan</th>
                            <th style="max-width: 200px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $row->kd_kategori }}</th>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->ket }}</td>
                                <td>
                                    <a href="/kategori/{{ $row->kd_kategori }}/edit">
                                        <button type="button" class="btn btn-primary">Edit</button>
                                    </a>
                                    <a href="/kategori/{{ $row->kd_kategori }}/delete">
                                        <button type="button" class="btn btn-danger">Hapus</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
