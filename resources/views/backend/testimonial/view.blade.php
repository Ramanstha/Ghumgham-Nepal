@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="{{route('create.testimonial')}}" class="btn btn-danger mb-2">
                            <i class="fa fa-plus-circle me-2"></i> Add Testimonial</a>
                    </div>
                </div>
                @if(Session::has('message'))
                <span class="text-primary">{{Session::get('message')}}</span>
                @endif
                <div class="table-responsive">
                    <table class="table table-centered table-striped dt-responsive nowrap w-100"
                        id="products-datatable">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>S.N</th>
                                <th>Name</th>
                                <th>Addres</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th style="width: 75px;">Action</th>
                            </tr>
                        </thead>
                        <tbody id="tablecontents">
                            @forelse($file as $key=>$site)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$site->name}}</td>
                                <td>{{$site->address}}</td>
                                <td><img src="{{asset('storage/testimonial/'.$site->image)}}" height="50"
                                    width="50"></td>
                                <td>{!!Str::limit($site->description,20)!!}</td>
                                <td>
                                    <a href="{{route('edit.testimonial',$site->id)}}" title="Edit"><i class="fa fa-edit "></i></a>
                                    <a href="{{route('delete.testimonial',$site->id)}}" onclick="return confirm('Are you sure you want to delete?')" id="sa-params"
                                        title="Delete"><i class="fa fa-trash mx-1 text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="px-6 whitespace-no-wrap">
                                    {{_('No Data Found')}}
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
@endsection