@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>About Us</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('store.aboutus')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Description <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="description" rows="5" name="description"
                                    value="{{old('description')}}">{{old('description')}}</textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-file" class="form-label">Image <span
                                        class="text-danger">*</span></label>
                                <input type="file" id="example-file" class="form-control" name="image">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Add
                                Aboutus</button>
                        </form>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#category').on('change', function(e) {
            var cat_id = e.target.value;
            $.ajax({
                url: "{{ route('select.aboutcategory') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    cat_id: cat_id
                },
                success: function(data) {
                    console.log(data);
                    var d = $('select[name="subcategory_id"]').empty();
                    $('select[name="subcategory_id"]').append(
                        '<option value="">Select  SubCategory</option>');
                    $.each(data.subcategories, function(key, value) {
                        $('select[name="subcategory_id"]').append(
                            '<option value="' + value.id +
                            '" class="text-capitalize">' + value
                            .title + '</option>');
                    });
                }
            })
        });
    });
</script>
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection