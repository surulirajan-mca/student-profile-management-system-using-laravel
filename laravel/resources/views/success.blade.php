@extends('studentnew.layouts.student-layout')
@section('title', $datas['success_title'])
@section('main-content')
  <main class="container mt-4">
    <div class="card text-center">
      <div class="card-body">
        <h2 class="card-title">{{ $datas['success_title']  }}</h2>
        <h5 class="card-text">{{ $datas['success_description'] }}</h5>
        <!-- Buttons -->
        <div class="mt-4">
          <a href="{{ url('student-list') }}" class="btn btn-success mr-3">{{ __('studentnew.student_list_title') }}</a>
          <a href="{{ url('create-student') }}" class="btn btn-warning">{{ __('studentnew.student_new_registration') }}</a>
        </div>
      </div>
    </div>
  </main>
@endsection