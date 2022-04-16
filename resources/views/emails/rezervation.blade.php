@extends('emails.layout')
@section('title')
    Site Üzerinden Bir Telefon Numarası Geldi
@stop
@section('content')
    <h2 style="color: #333333; font-weight:300; text-align:left; line-height: 30px; margin-bottom: 12px; margin: 0 0 12px;">
        {{ $data['name'] . ' - ' . $data['phone'] }}
    </h2>
    <h3 style="color: #333333; font-weight:300; text-align:left; line-height: 30px; margin-bottom: 12px; margin: 0 0 12px;"> Oda Tipi: <span>{{ $data['room'] ?: 'seçilmedi' }}</span> </h3>
    <h3 style="color: #333333; font-weight:300; text-align:left; line-height: 30px; margin-bottom: 12px; margin: 0 0 12px;"> Tarihler: <span>{{ $data['departing'] }} - {{ $data['returning'] }}</span></h3>
    <h3 style="color: #333333; font-weight:300; text-align:left; line-height: 30px; margin-bottom: 12px; margin: 0 0 12px;"> Not: <span>{{ $data['message'] }}</span></h3>
@stop