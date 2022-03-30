@extends('layouts.app')


@section('content')

<div class="container border">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">

            <h2 class="">Edit User Information: </h2>

<form action="{{ route('crud.update',$editProduct->id) }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="firstName" class="form-label">First Name: </label>
        <input required value="{{ $editProduct->firstName }}" type="text" class="form-control @error('firstName')is-invalid @enderror" id="firstName" name="firstName">
        @error('firstName')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="lastName" class="form-label">Last Name: </label>
        <input required value="{{ $editProduct->lastName }}" type="text" class="form-control @error('lastName')is-invalid @enderror" id="lastName" name="lastName">
        @error('lastName')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email Address: </label>
        <input required value="{{ $editProduct->email }}" type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email">
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone No:</label>
        <input required value="{{ $editProduct->phone }}" type="number" class="form-control @error('phone')is-invalid @enderror" id="phone" name="phone">
        @error('phone')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="Password" class="form-label">Password</label>
        <input required value="{{ $editProduct->password }}" type="password" class="form-control @error('Password')is-invalid @enderror" id="Password" name="Password">
        @error('Password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Address: </label>
        <input required value="{{ $editProduct->address }}" type="text" class="form-control @error('address')is-invalid @enderror" id="address" name="address">
        @error('address')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>    
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
<div class="col-lg-3"></div>
</div>

</div>

@endsection