@extends('layouts.app')

@section('content')
<section class="text-center pt-4">
  <h1 style="font-size: 1.5rem">{{ $user->name }}</h1>
  <div class="mb-4">の2021年の抱負</div>

  {!! Form::open(['url' => url('questions')]) !!}
  {!! Form::hidden('user', $user->unique_id) !!}
  <div class="form-group">
    {!! Form::textarea('body', null, [
      'class' => 'form-control',
      'placeholder' => '頑張るぞ！',
      'required' => true,
    ]) !!}
  </div>
  {!! Form::Submit('投稿する', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}
</section>
@endsection