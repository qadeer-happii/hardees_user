@extends('layouts.main')

@section('content')

<div class="container" style="margin-top:150px ;">
    <div class="row" style="border:1px solid black; margin-top: 15px; margin-bottom: 20px;">
        <div class="col-sm">
            <div style="border:1px solid black; background-color:  white; margin-top: 10px;" class="form-control">
                <h5 style="margin-top: 5px;">CONTACT US</h5>
            </div>
            <lable class="font-weight-bold text-dark" style="padding-top: 10px;">We'd love to hear form you! Please drop your comments, queries and suggestions.</lable>
            <input type="text" name="name" placeholder="Name" class="form-control" style="margin-top: 10px;">
            <input type="text" name="name" placeholder="Email" class="form-control d-inline " style="margin-top: 10px;width: 550px;">
            <input type="text" name="name" placeholder="Phone Number" class="form-control  d-inline " style="margin-top: 10px; width: 550;">
            <div class="wrap-input1 validate-input" data-validate="Message is required">
                <textarea class="  form-control" name="message" style="height: 250; margin-top: 10px;" placeholder="Your Message"></textarea>
                <span class="shadow-input1"></span>
                <div class="text-center">
                    <button class="btn btn-lg font-weight-bold" style=" width:300; background-color: #f6bf2d;margin-top: 10px;">Send</button>
                </div>
            </div>
            <br>
        </div>


    </div>
</div>
@endsection