@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Transkrip</h1>
</div>

{{-- <div class="container">
    @if($scores->count())
    @foreach ($scores as $score)
        <article class="container mb-5 border-bottom">
                <p>Nama: {{$score->user->name}}</p>
                <p>NRP : {{$score->user->nrp}}</p>
                <p>Matkul : {{$score->course->nama_mata_kuliah}}</p>
                <p>Nilai : {{$score->nilai_angka}}</p>
        </article>
    @endforeach
    @endif
</div> --}}
<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">NRP</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $users)
      <tr>
        <div class="row"></div>
        <th scope="row">{{$users->id}}</th>

        <td>{{$users->name}}</td>
        <td>{{$users->nrp}}</td>
        <td><a class="btn btn-info col" href={{url('admin/transkrip/'.$users->id)}}><i class="bi bi-eye"></i></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
