@extends('layouts.main')
@section('container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Import
                </button>
                <a href="/hapussemua" class="btn btn-danger mb-3">Hapus ALL</i></a>
                <form action="/pembagian-data" method="post">
                    @csrf
                    <select class="form-select" name="nilai" aria-label="Default select example">
                        <option selected>Pembagian Data</option>
                        <option value="90">90% - 10%</option>
                        <option value="80">80% - 20%</option>
                        <option value="70">70% - 30%</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-3 mb-3">Proses</button>
                </form>

                <table id="example1" class="table table-sm table-striped text-center align-middle">
                    <thead class="table-dark vertical-align-middle">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Komentar</th>
                            <th>Sentimen</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @foreach($komen as $k)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $k->nama }}</td>
                            <td>{{ $k->komentar }}</td>
                            <td>{{ $k->sentimen }}</td>
                            <td>
                                <a href="/hapus/{{ $k->id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/data-komen" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="file" name="file" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection