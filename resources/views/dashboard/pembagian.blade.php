@extends('layouts.main')
@section('container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3>Data Training</h3>
                <table id="example1" class="table table-sm table-striped text-center align-middle">
                    <thead class="table-dark vertical-align-middle">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>komentar</th>
                            <th>sentimen</th>
                        </tr>
                    </thead>
                    @if($train == null)
                    @else
                    <?php $no = 1 ?>
                    @foreach($train as $t)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $t->nama }}</td>
                        <td>{{ $t->komentar }}</td>
                        <td>{{ $t->sentimen }}</td>
                    </tr>
                    @endforeach
                    @endif
                    <tbody>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            @if($train == null)
            <h3>Confusion Matrix Data Training </h3>
            <div class="row">
                <div class="col-6">
                    Accuracy
                </div>
                <div class="col-6">
                    :
                </div>
            </div>
            <div class="row">

                <div class="col-6">
                    Recall
                </div>

                <div class="col-6">
                    :
                </div>
            </div>
            <div class="row">

                <div class="col-6">
                    Precission
                </div>

                <div class="col-6">
                    :
                </div>
            </div>
            @else
            <h3>Confusion Matrix Data Training </h3>
            <div class="row">
                <div class="col-6">
                    Accuracy
                </div>
                <div class="col-6">
                    : {{ $accuracytrain }}%
                </div>
            </div>
            <div class="row">

                <div class="col-6">
                    Recall
                </div>

                <div class="col-6">
                    : {{ $recalltrain }}%
                </div>
            </div>
            <div class="row">

                <div class="col-6">
                    Precission
                </div>

                <div class="col-6">
                    : {{ $precissiontrain }}%
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3>Data Testing</h3>
                <table id="example2" class="table table-sm table-striped text-center align-middle">
                    <thead class="table-dark vertical-align-middle">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>komentar</th>
                            <th>sentimen</th>
                        </tr>
                    </thead>
                    @if($train == null)
                    @else
                    <?php $no = 1 ?>
                    @foreach($test as $t)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $t->nama }}</td>
                        <td>{{ $t->komentar }}</td>
                        <td>{{ $t->sentimen }}</td>
                    </tr>
                    @endforeach
                    @endif
                    <tbody>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            @if($train == null)
            <h3>Confusion Matrix Data Testing </h3>
            <div class="row">
                <div class="col-6">
                    Accuracy
                </div>
                <div class="col-6">
                    :
                </div>
            </div>
            <div class="row">

                <div class="col-6">
                    Recall
                </div>

                <div class="col-6">
                    :
                </div>
            </div>
            <div class="row">

                <div class="col-6">
                    Precission
                </div>

                <div class="col-6">
                    :
                </div>
            </div>
            @else
            <h3>Confusion Matrix Data Testing </h3>
            <div class="row">
                <div class="col-6">
                    Accuracy
                </div>
                <div class="col-6">
                    : {{ $accuracytest }}%
                </div>
            </div>
            <div class="row">

                <div class="col-6">
                    Recall
                </div>

                <div class="col-6">
                    : {{ $recalltest }}%
                </div>
            </div>
            <div class="row">

                <div class="col-6">
                    Precission
                </div>

                <div class="col-6">
                    : {{ $precissiontest }}%
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection