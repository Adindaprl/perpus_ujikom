{{-- @extends('layout.dashboard')
@section('sdbar')

    <div class="main-body">
      <div class="promo_card">
        <h1>Welcome to EasyPay</h1>
        <span>Lorem ipsum dolor sit amet.</span>
        <button>Learn More</button>
      </div>
    </div>

@endsection --}}

@extends('layout.dashboard')
@section('sdbar')

<form method="POST" action="{{route('daftarbuku')}}">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Judul</label>
    <input type="text" class="form-control" name="judul">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Penulis</label>
    <input type="text" class="form-control" name="penulis">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Penerbit</label>
    <input type="text" class="form-control" name="penerbit">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tahun Terbit</label>
    <input type="text" class="form-control" name="tahunTerbit">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cover</label>
    <input type="file" class="form-control" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection



