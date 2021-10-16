@extends('student.layout.app')
@section('title', 'Home')
@section('content')

<div style="margin-top:130px;">
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h4 class="text-center mb-3">STUDENT REGISTRATION</h4>
            
            <!-- Registration form -->
            
            <div class="card shadow-lg">
                <div class="card-body">
                    <form action="">
                        <div class="form-group mb-2">
                            <label for="reg-no">
                                <h6 class="text-dark">Jamb Registration Number</h6>
                            </label>
                            <input type="text" name="reg-no" class="form-control">
                        </div>
            
                        <div class="form-group mb-2">
                            <label for="first-name">
                                <h6 class="text-dark">First Name</h6>
                            </label>
                            <input type="text" name="first-name" class="form-control">
                        </div>
            
                        <div class="form-group mb-3">
                            <label for="last-name">
                                <h6 class="text-dark">Last Name</h6>
                            </label>
                            <input type="text" name="last-name" class="form-control">
                        </div>

                        <div class="text-center">
                            <button class="btn btn-success">Start Registration</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End registration form -->
          </div>
        </div>
    </div>
</div>
@endsection