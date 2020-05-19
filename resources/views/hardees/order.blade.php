@extends('layouts.main')

@section('content')

<div class="container" style="margin-top: 10%; margin-bottom: 2%;">
    <div class="container" style="border:2px solid black; background-color: #edede6;">
        <div class="row">



            <div class="col-sm-8  ">
                <br><br>
                <div class="container">
                    <input type="radio">
                    <label class="font-weight-bold">Delivery Details</label>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A soluta odit aut error adipisci beatae blanditiis fugit dolores culpa recusandae.</p>
                    <div class="input-group">
                        <select class="custom-select " style="width:250px;" id="inputGroupSelect04" aria-label="Example select with button addon">
                            <option selected class="font-weight-bold">Add ones</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="custom-select " style="width:250px;" id="inputGroupSelect04" aria-label="Example select with button addon">
                            <option selected class="font-weight-bold">Now</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <a href="#" class="font-weight-bold text-dark">Cancel</a><br>
                    <input type="text" style="width:250; margin-top: 10px;" value="10">
                    <input type="text" value="Asad Umar" style="width:250 ;margin-top: 10px;">
                    <input type="text" value="Area" style="width:250 ;margin-top: 10px;">
                    <input type="text" value="Floor/Unit" style="width:251 ;margin-top: 10px;">
                    <input type="text" style="width:500; height: 100;margin-top: 10px;" placeholder="Note to Ride">
                    <button class="btn text-dark font-weight-bold " style=" margin-top: 10px;background-color:#f6bf2d;">Save</button>

                </div>



                <br><br>
            </div>
            <div class="col-sm" style="background-color: white;">
                <label class="font-weight-bold">Your Order Hardees</label><br><br>
                <label class="font-weight-bold">1</label><br><br>
                <label class="font-weight-bold">x</label><br><br>
                <lable class="font-weight-bold">Fanando Stay Mild</lable><br><br>
                <label class="font-weight-bold">+Coke</label><br><br>
                <label class="font-weight-bold">PKR 799.00</label><br><br>
                <div class="row">
                    <div class="col-sm-8">
                        <label class="font-weight-bold">Subtotal</label><br><br>
                        <label class="font-weight-bold">Delivery Fee</label><br><br>
                        <label class="font-weight-bold">Total (Incl. GST)</label>

                    </div>
                    <div class="col-sm-4 text-right">
                        <label class="font-weight-bold">PKR 799.00</label><br><br>
                        <label class="font-weight-bold">0.00</label><br><br>
                        <label class="font-weight-bold">PKR 926.84</label>
                    </div>
                </div>

            </div>
        </div>

        <label class="font-weight-bold">Delivery Details</label>
        <textarea rows="4" class="form-control" style="width: 550;" cols="50">
                    At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
                    </textarea>
        <a href="#" class="font-weight-bold" style="color:#f6bf2d"><i class="fa fa-edit"></i>Edit</a><br>
        <label class="font-weight-bold">Payment</label><br>
        <img width="10%;" src="{{asset('user')}}/img/visa1.png">
        <img width="10%;" src="{{asset('user')}}/img/visa2.png"><br>
        <label class="font-weight-bold">Delivery Details</label><br>
        <label style="margin-top: -15px;;">Cradit / Debit Card</label>

        <br><input type="text" style="width:250; margin-top: 10px;" value="Asad Umar">
        <br> <input type="text" value="Card Number" style="width:250; margin-top: 10px;">
        <br> <input type="date" value="MM//YY" style="width:250; margin-top: 10px;">
        <input type="text" value="" placeholder="CVC" style="width:251 ;margin-top: 10px;">
        <br><br>
        <input type="radio">
        <label class="text-dark"><b>Save My Card</b></label><br>
        <label style="color:#f6bf2d"><b>Do you have a voucher ?</b></label><br>
        <h5 style="color:black;"><b>By making this purchase agree to our terms and conditions</b></h5><br>
        <button class="btn btn-lg font-weight-bold" style="background-color: #a8adaa; width: 500;">PLACE ORDER</button>
        <p class="font-weight-bold" style="color:#a8adaa">I agree and I demand that you execute the order service before<br>
            the end of the revocation periond.I am aware that after complete<br>
            fullfillment of the service I lose my right of recission Payment<br>
            transection will be processed abroa.</p>
    </div>

</div>


@endsection