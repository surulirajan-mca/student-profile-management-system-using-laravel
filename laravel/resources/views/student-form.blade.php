@extends('studentnew.layouts.student-layout')
@section('title', $datas['title'])
@section('main-content')
<main class="container mt-4 overflow-auto">
    <div class="student-list-heading text-center">
      <h2 class="mb-3">{{ $datas['heading'] }}</h2>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="register-form">
              <form method="POST" action="{{ $datas['action'] }}" class="form-group">
                <div class="form-group mt-3">
                  <label for="name" class="mb-1 mx-1">{{ __('studentnew.text_name') }}</label>
                  @isset($datas['studentdetails'])
                    <input type="text" name="name" id="name" value="{{ $datas['studentdetails']->name }}" class="form-control" placeholder="Enter Your Name" required autofocus >
                  @else
                    <input type="text" name="name" id="name" value="" class="form-control" placeholder="Enter Your Name" required autofocus >
                  @endisset
                </div>
                <div class="form-group mt-3">
                  <label for="email" class="mb-1 mx-1">{{ __('studentnew.text_email') }}</label>
                  @isset($datas['studentdetails']->email)
                    <input type="email" name="email" id="email" value="{{ $datas['studentdetails']->email }}" class="form-control" placeholder="Enter Your Email Address" required> 
                  @else
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email Address" required> 
                  @endisset
                </div>
                <div class="form-group mt-3">
                  <label for="age" class="mb-1 mx-1">{{ __('studentnew.text_age') }}</label>
                  @isset($datas['studentdetails']->age)
                    <input type="number" name="age" id="age" value="{{ $datas['studentdetails']->age }}" class="form-control" placeholder="Enter Your Age">
                  @else
                    <input type="number" name="age" id="age" class="form-control" placeholder="Enter Your Age">
                  @endisset                  
                </div>
                <div class="form-group mt-3">
                  <label for="mobile" class="mb-1 mx-1">{{ __('studentnew.text_mobile') }}</label>
                  @isset($datas['studentdetails']->mobile)
                    <input type="number" name="mobile" id="mobile" value="{{ $datas['studentdetails']->mobile }}" class="form-control" placeholder="Enter Your Mobile No" required>
                  @else
                    <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Enter Your Mobile No" required>
                  @endisset
                </div>
                <div class="form-group mt-3">
                  <label for="department" class="mb-1 mx-1">{{ __('studentnew.text_department') }}</label>
                  <select class="form-control" name="department" id="department" required>
                    <option value="" disabled>Please Select a Department</option>
                    <option value="Computer Science" {{ isset($datas['studentdetails']) && $datas['studentdetails']->department == 'Computer Science' ? 'selected' : '' }}>Computer Science Department</option>
                    <option value="Accounts" {{ isset($datas['studentdetails']) && $datas['studentdetails']->department == 'Accounts' ? 'selected' : '' }}>Accounts Department</option>
                    <option value="Managment" {{ isset($datas['studentdetails']) && $datas['studentdetails']->department == 'Managment' ? 'selected' : '' }}>Management Department</option>
                  </select>
                </div>
                <div class="form-group mt-3">
                  <input type="submit" name="submit" id="submit" value="{{ $datas['submit'] }}" class="form-control btn btn-primary btn-block bg-success mt-2">                
                </div>
                @csrf
              </form>
            </div>
        </div>
      </div>
    </div>
</main> 
@endsection
