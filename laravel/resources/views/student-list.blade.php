@extends('layouts.student-layout')
@section('title', __($datas['title']))
@section('main-content')
<main class="container mt-4 overflow-auto">
    <!-- <div class="student-list-heading text-center">
      <h2 class="mb-3">{{ $datas['heading'] }}</h2>
    </div> -->
    <div class="container-fluid">
      <div class="row">
        <!-- Left Side (Heading) -->
        <div class="col-md-6">
          <h1 class="text-center">{{ $datas['heading'] }}</h1>
        </div>
        <!-- Right Side (Go Back Button) -->
        <div class="col-md-6">
          <div class="text-md-right text-center mt-md-0 mt-3">
            <a href="{{ route('create-student') }}" class="btn btn-warning">{{ __('studentnew.student_new_registration') }}</a>
          </div>
        </div>
      </div>
    </div>
    <table class="table table-hover">
      <thead class="table-light">
        <tr>
          <th scope="col">{{ __('Name') }}</th>
          <th scope="col">{{ __('Email') }}</th>
          <th scope="col">{{ __('Mobile No') }}</th>
          <th scope="col">{{ __('Department') }}</th>
          <th scope="col">{{ __('Edit') }}</th>
          <th scope="col">{{ __('Delete') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($datas['students'] as $student)
          <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->mobile }}</td>
            <td>{{ $student->department }}</td>
            <td><a href="{{ route('edit-student',['student_id' => $student->student_id]) }}" class="btn btn-warning btn-sm">{{ __('Edit') }}</a></td>
            <td>
              <a class="btn btn-danger btn-sm" id="DelButtons" onclick="ConfirmDelete({{ $student->student_id }})">{{ __('Delete') }}</a>
              <input type="hidden" id="redirecturl{{$student->student_id}}" value="{{ route('delete-student',['student_id' => $student->student_id]) }}" >
            </td>
          </tr>
        @endforeach        
      </tbody>
    </table>
    <!-- Bootstrap Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="confirmationModalLabel">Confirm Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to delete?</p>
          </div>
          <div class="modal-footer">
            <button type="button" id="noDeleteButton" onclick="NoDelete()" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="button" id="confirmDeleteButton" class="btn btn-danger">Yes</button>
          </div>
        </div>
      </div>
    </div>
</main> 
@endsection
