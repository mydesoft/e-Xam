@extends('student.layout.app')
@section('title', 'Confirmation')
@section('content')

<div style="margin-top:100px;">
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h4 class="text-center mb-3">REGISTRATION CONFIRMATION</h4> 
            <div class="card shadow-lg mb-5">
                <div class="card-header">
                    <button class="btn btn-success btn-sm float-end"><i class="fa fa-download"></i> Download</button>
                </div>
                <div class="card-body">
                    <h6 class="text-dark text-center">Olumide Orija your exam registration was successful</h6>
                    <h6 class="text-center text-dark"><u>Registration Details </u></h6>
                    <p><span class="text-danger">Registration Number</span><span class="text-dark"> : 23456789</span></p>
                    <p><span class="text-danger">Name</span><span class="text-dark"> : Ojo Damilola</span></p>
                    <p><span class="text-danger">Application Number</span><span class="text-dark"> : 4578645</span></p>
                    <p><span class="text-danger">Faculty</span><span class="text-dark"> : Science</span></p>
                    <p><span class="text-danger">Department</span><span class="text-dark"> : Computer Science</span></p>

                    <hr class="text-dark">
                    <p class="text-center">
                        <small class="text-danger">Please download this registration confirmation. The <em>Application Number
                        </em> will be needed on the exam day</small>
                    </p>
                    <hr class="text-dark">
                    <h6 class="text-center text-dark">Check for your Exam Date Later!!</h6>
                </div>
            </div>
           
          </div>
        </div>
    </div>
</div>
@endsection