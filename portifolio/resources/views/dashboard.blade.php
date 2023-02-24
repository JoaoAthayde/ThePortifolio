@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')

<x-dashboard.navbar/>

@php
    $x = "liste";
@endphp

@if  ($x == "teste")
    <p>rodou</p>

@elseif ($x == "liste")
<x-dashboard.liste/>
@else
@endif

<x-dashboard.about-modal/>
<x-dashboard.portfolio-modal/>
<x-dashboard.service-modal/>
<x-dashboard.signature-modal/>
<x-dashboard.testimonials-modal/>










@endsection