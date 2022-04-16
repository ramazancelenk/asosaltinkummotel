@extends('emails.layout')
@section('title')
    Site Üzerinden Bir Telefon Numarası Geldi
@stop
@section('content')
    <h2 style="color: #333333; font-weight:300; text-align:center; line-height: 30px; margin-bottom: 12px; margin: 0 0 12px;">
        {{ $phone }}
    </h2>
@stop
