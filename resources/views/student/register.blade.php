@extends('student.layout.app')
@section('title', 'Register')
@section('content')

<div style="margin-top:90px;">
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h4 class="text-center mb-3">REGISTER HERE</h4>
            
            <!-- Registration form -->
            
            <div class="card shadow-lg" style="margin-bottom: 60px;">
                <div class="card-body">
                    <form action="">
                         <div class="form-group mb-2">
                            <label for="name">
                                <h6 class="text-dark">First Name</h6>
                            </label>
                            <input type="text" name="first-name" class="form-control" value="" disabled>
                        </div>

                        <div class="form-group mb-2">
                            <label for="name">
                                <h6 class="text-dark">Last Name</h6>
                            </label>
                            <input type="text" name="last-name" class="form-control" value="" disabled>
                        </div>

                         <div class="form-group mb-2">
                            <label for="email">
                                <h6 class="text-dark">Email</h6>
                            </label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="form-group mb-2">
                            <label for="reg-no">
                                <h6 class="text-dark">Jamb Registration Number</h6>
                            </label>
                            <input type="text" name="reg-no" class="form-control"  value="" disabled>
                        </div>

                        <div class="form-group mb-2">
                            <label for="faculty">
                                <h6 class="text-dark">Faculty</h6>
                            </label>
                            <select name="faculty" id="faculty" class="form-select">
                                <option value="">Select Faculty</option>
                                <option value="Science">Science</option>
                                <option value="Arts">Arts</option>
                                <option value="Social-science">Social-science</option>
                            </select>
                        </div>

                        <div class="form-group mb-2">
                            <label for="course">
                                <h6 class="text-dark">Course</h6>
                            </label>
                            <select name="course" id="course" class="form-select">
                                <option value="">Select course</option>
                                <option value="computer science">Computer Science</option>
                                <option value="law">Law</option>
                                <option value="medicine">Medicine</option>
                            </select>
                        </div>

            
                        <div class="form-group mb-2">
                            <label for="activation-id">
                                <h6 class="text-dark">Activation ID</h6>
                            </label>
                            <input type="text" name="activation-id" class="form-control"  value="" disabled>
                        </div>

                        <div class="form-group mb-2">
                            <label for="image">
                                <h6 class="text-dark">Recent Photograph</h6>
                            </label>
                            <div>

                                <input type="file" name="image">
                            </div>
                        </div>
                        <hr class="text-dark">
                        <div class="text-center">
                            <button class="btn btn-success"> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Registration form -->
          </div>
        </div>
    </div>
</div>
@endsection