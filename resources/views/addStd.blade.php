@extends('layout.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="box">
                        <form action="{{ route('student.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                    <label for="school_id" class="form-label">Select School ID</label>
                                    <select class="form-select" id="school_id" name="school_id">
                                            <option selected>Select School ID</option>
                                            @foreach($school as $sch)
                                            <option value="{{ $sch->id }}">{{ $sch->name }}</option>
                                            @endforeach
                                    </select>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Enter Your Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Enter Your Address</label>
                                <input type="text" class="form-control" id="address" name="address">
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

<script>
    $(function() {
        $('.btn-pilih').click(function() {
            // alert('clicked');
            var nama = $(this).attr('data-nama');
            var harga = $(this).attr('data-harga');
            var stok = $(this).attr('data-stok');

            $('#list-append').append('<br>Detail Produk<br>')
            $('#list-append').append('<br>- Nama Produk : '+nama)
            $('#list-append').append('<br>- Harga Produk : '+ harga)
            $('#list-append').append('<br><br>Jumlah<input type="number" min="1" max="'+stok+'" value="1" class="form-control" name="quantity" id="itemQty" required />')
        })
    })
</script>

@endsection
