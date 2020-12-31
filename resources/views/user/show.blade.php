@extends('layouts.app')

@section('content')
<h1>{{ $user->name }}</h1>

{!! Form::open(['url' => url('questions')]) !!}
{!! Form::hidden('user', $user->unique_id) !!}
{!! Form::textarea('body') !!}
{!! Form::Submit('投稿する') !!}
{!! Form::close() !!}
@endsection