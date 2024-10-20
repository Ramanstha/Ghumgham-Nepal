@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Destination</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('update.destination',$data->id)}}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Title <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="simpleinput" class="form-control" name="title"
                                    value="{{$data->title}}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">SubTitle <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="simpleinput" class="form-control" name="subtitle"
                                    value="{{$data->subtitle}}">
                                @error('subtitle')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Price <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="simpleinput" class="form-control" name="price"
                                    value="{{$data->price}}">
                                @error('price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Description <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="description" rows="5" name="description"
                                    value="{{$data->description}}">{{$data->description}}</textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="example-file" class="form-label">Image<span
                                        class="text-danger">*</span></label>
                                <input type="file" id="example-file" class="form-control" name="image">
                                <img src="{{asset('storage/destination/'.$data->image)}}" width="100" height="100">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Update
                                Destination</button>
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
    CKEDITOR.replace('name');
</script>
@endsection