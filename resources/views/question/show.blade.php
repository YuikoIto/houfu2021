@extends('layouts.app')

@section('title', "{$user->name}の2021年の抱負")
@section('ogp', url("questions/{id}/ogp.png"))

@section('content')
<section class="text-center">
  <h1 style="font-size: 1.5rem">抱負</h1>
  <div class="mb-4">
    <img src="{{ url("questions/{id}/ogp.png") }}">
  </div>
</section>
@endsection