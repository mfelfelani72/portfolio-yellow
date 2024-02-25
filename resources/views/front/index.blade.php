@extends('layouts.front.default.index')

@section('content')
    @include('front.elements.header-home')

    @include('front.elements.home')

    @include('front.elements.about')

    @include('front.elements.education')

    @include('front.elements.portfolio')

    @include('front.elements.contact')
@endsection
