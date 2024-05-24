@extends('user.partials.layouts.app')

@push('css')
@endpush

@section('title', 'Tas Belanja')

@section('content')
@include('user.partials.pages.order.chart')
@endsection

@push('scripts')
@vite('resources/js/user/order/cart.js')
@endpush