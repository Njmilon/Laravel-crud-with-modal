@extends('layouts.app')


@section('content')




    <div class="container border mt-4">


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Create New User
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Enter User Information: </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('crud.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name: </label>
                                <input type="text" class="form-control @error('firstName')is-invalid @enderror" id="firstName" name="firstName">
                                @error('firstName')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name: </label>
                                <input type="text" class="form-control @error('lastName')is-invalid @enderror" id="lastName" name="lastName">
                                @error('lastName')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address: </label>
                                <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone No:</label>
                                <input type="number" class="form-control @error('phone')is-invalid @enderror" id="phone" name="phone">
                                @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="Password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('Password')is-invalid @enderror" id="Password" name="Password">
                                @error('Password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address: </label>
                                <input type="text" class="form-control @error('address')is-invalid @enderror" id="address" name="address">
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{--  <div class="form-check">
                                <input value="0" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                                    checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input value="0" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                </label>
                            </div>  --}}

                                <label>Gender:</label><br>
                                <input type="radio" value="1" id="male" name="flexRadioDefault">
                                <label for="male">Male</label><br>
                                <input type="radio" value="1" id="female" name="flexRadioDefault">
                                <label for="female">Female</label>
                           
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                    </form>
                </div>

                </div>
            </div>
        </div>

                        {{-- User List --}}

        <h2><strong style="color: green">User Lists:</strong></h2>
        
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
            
        @endif
        <div class="row">
            <table class="table table-striped border mt-2">
                <thead style="color: rgb(0, 132, 255)">
                    <tr>
                        <th scope="col">Sl</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $key=>$data)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $data->firstName }}</td>
                        <td>{{ $data->lastName }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->address }}</td>
                        <td>
                            <a href="{{ route('crud.edit',$data->id) }}"><i style="color: rgb(68, 0, 255)"
                                class="fas fa-edit fa-lg"></i></a>
                            <a href="{{ route('crud.destroy',$data->id) }}"><i style="color: rgb(255, 0, 0)"
                                onclick="return confirm('Are you sure you want to delete this item?');"
                            class="fas fa-trash fa-lg"></i></a>
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>

@endsection
