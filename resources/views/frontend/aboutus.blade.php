@extends('frontend.main')
@section('title', 'About-Us')
@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-12 col-md-12 aboutus-div">
            @if (!empty($aboutus))
            <img src="{{asset('storage/aboutus/'.$aboutus->image)}}" width="5000" height="500">
            <div class="col-lg-12 col-md-12 mt-4 p-3 bg-secondary">
                <p>{!! $aboutus->description !!}</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection