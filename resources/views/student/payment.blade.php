@extends('student.layout.app')
@section('title', 'Payment')
@section('content')

<div style="margin-top:130px;">
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h4 class="text-center mb-3">EXAM PAYMENT </h4>
            
            <!-- Registration form -->
            
            <div class="card shadow-lg">
                <div class="card-body">
                    <form action="">
                        <h5 class="text-danger text-center  mb-3"> Do you want to pay the exam amount of N6500?</h5>
                        <div class="text-center">
                            <button class="btn btn-success btn-lg"> <i class="fa fa-plus"></i> PAY NOW</button>
                        </div>
                    </form>

                    <div class="float-end">
                        <a href="{{route('home')}}">Go Back</a>
                    </div>    
                </div>
            </div>
            <!-- End registration form -->
          </div>
        </div>
    </div>
</div>
@endsection