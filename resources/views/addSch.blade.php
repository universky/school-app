@extends('layout.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="box">
                        <form action="{{ route('school.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">School Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter School Name">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">School Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter School Address">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>

@endsection
