@extends('student.layout.app')
@section('title', 'Confirmation')
@section('content')

<div style="margin-top:130px;">
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h4 class="text-center mb-3">PAYMENT CONFIRMATION</h4> 
            <div class="card shadow-lg">
                <div class="card-header">
                    <button class="btn btn-success btn-sm float-end"><i class="fa fa-download"></i> Download</button>
                </div>
                <div class="card-body">
                    <h6 class="text-center text-dark"><u>Payment Details for Olumide Orija</u></h6>
                    <p><span class="text-danger">Registration Number</span><span class="text-dark"> : 23456789</span></p>
                    <p><span class="text-danger">Name</span><span class="text-dark"> : Ojo Damilola</span></p>
                    <p><span class="text-danger">Activation ID</span><span class="text-dark"> : 4578645</span></p>
                    <p><span class="text-danger">Amount Paid</span><span class="text-dark"> : N6500</span></p>

                    <hr class="text-dark">
                    <p class="text-center">
                        <small class="text-danger">Please download this payment confirmation. The <em>Activation ID with your registration Number

                        </em> will be needed to proceed with your registration</small>
                    </p>
                </div>
            </div>
           
          </div>
        </div>
    </div>
</div>
@endsection