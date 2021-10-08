@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-7">
    <div class="box">
    <div class="box-body">

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th></th><th></th><th></th><th></th><th></th><th></th>
                <th><a style="margin:5px 8px;" class="btn btn-sm btn-primary pull-right" href="{{ route('student.new_std') }}"><i class="fa fa-pencil-square-o"></i> Create </a></th>
            </tr>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Student ID</th>
                <th scope="col">School Name</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($student as $std)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $std->id }}</td>
                    <td>{{ $std->school->name }}</td>
                    <td>{{ $std->name }}</td>
                    <td>{{ $std->address }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editStd{{ $loop->iteration }}">Edit</button>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDel{{ $loop->iteration }}">Delete</button>



                        <div class="modal" id="confirmDel{{ $loop->iteration }}">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Corfimation</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('student.destroy', $std->id ) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            Are you sure to delete - {{ $std->id }} | {{ $std->name }} ?
                                            <br><br>
                                            <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">No</button>
                                                    <button type="submit" class="btn btn-sm btn-danger">Yes</button>
                                            </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>

                        <div class="modal fade" id="editStd{{ $loop->iteration }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Student - ID: {{ $std->id }} | {{ $std->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="{{ route('student.update', $std->id) }}" method="post">
                                            @csrf
                                            @method('PATCH')

                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Student Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="{{ $std->name }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="address" class="form-label">School Address</label>
                                                        <input type="text" class="form-control" id="address" name="address" value="{{ $std->address }}" required>
                                                </div>
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-primary float-right">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
    </div>
    </div>
    </div>
</div>


@endsection
