@extends('student.layout.app')
@section('title', 'Login')
@section('content')

<div style="margin-top:130px;">
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h4 class="text-center mb-3">LOGIN HERE</h4>
            
            <!-- Login form -->
            
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
                            <label for="activation-id">
                                <h6 class="text-dark">Activation ID</h6>
                            </label>
                            <input type="text" name="activation-id" class="form-control">
                        </div>

                        <div class="text-center">
                            <button class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Login form -->
          </div>
        </div>
    </div>
</div>
@endsection