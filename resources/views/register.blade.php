@extends('base')

<img src="/images/background1.png" alt="">

@section('content')
<br><br><br>
<div class="container" style="margin-top:-6rem;">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card" style="background-color: #0008;">
                <div class="card-header text-white" style="background-color: #0008;">
                    <h3 class="card-title" style="text-align:center;">Registration Form</h3>
                </div>

                <div class="card-body">
                    <form action="{{url('/register')}}" method="post">
                        {{csrf_field()}}
                        <div class="mb-3 text-white">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" id="name" class="form-control text-white" style="background-color: #0008;">
                        </div>

                        <div class="mb-3 text-white">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control text-white" style="background-color: #0008;">
                        </div>

                        <div class="mb-3 text-white">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control text-white" style="background-color: #0008;">
                        </div>

                        <button class="btn btn-success form-control" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@stop