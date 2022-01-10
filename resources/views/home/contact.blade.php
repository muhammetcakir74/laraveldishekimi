@extends("layouts.home")
@section('title','About Us' + $setting->title)


@section('description'){{$setting->description}}@endsection

@section('keywords',$setting->keywords)


@section('content')

    {!! $setting->referances !!}

@endsection
