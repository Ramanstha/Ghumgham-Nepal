@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Contact</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('update.contact',$data->id)}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Phone<span
                                        class="text-danger">*</span></label>
                                <input type="tel" id="simpleinput" class="form-control" placeholder="Phone" name="phone"
                                    value="{{$data->phone}}" />
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Email<span
                                        class="text-danger">*</span></label>
                                <input type="email" id="simpleinput" class="form-control" placeholder="Email"
                                    name="email" value="{{$data->email}}" />
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Address<span
                                        class="text-danger">*</span></label>
                                <input type="address" id="simpleinput" class="form-control" placeholder="Address"
                                    name="address" value="{{$data->address}}" />
                                @error('address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Update
                                Contact</button>
                        </form>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection