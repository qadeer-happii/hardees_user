@extends('layouts.main')

@section('content')

<div style="background-color: #edede6; margin-top: 10%; margin-bottom: 2%;">
    <br>
    <div>
        <div class="container">
            <div class="row">

                <div class="col-sm">
                    <img src="{{asset('user')}}/img/burger.png" height="400" width="400">
                </div>

                <div class="col-sm border border-dark">
                    <br><br>
                    <div class="container">
                        <h4>Meal for two</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A soluta odit aut error adipisci beatae blanditiis fugit dolores culpa recusandae.</p>
                        <div class="input-group">
                            <select class="custom-select form-control" id="inputGroupSelect04" aria-label="Example select with button addon">
                                <option selected class="font-weight-bold">Add ones</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                        </div>
                        <div class="input-group" style="margin-top: 4px;">
                            <select class="custom-select form-control" id="inputGroupSelect04" aria-label="Example select with button addon">
                                <option selected>Add drinks</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <p class="font-weight-bold">Rs.1360</p>

                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" id="minus" class="btn btn-danger" data-type="minus" data-field="">-</button>

                                </button>
                            </span>
                            <input type="text" id="qty" name="quantity" style="width: 30px; text-align:center" class="input-number" value="0" min="1" max="100">
                            <span class="input-group-btn">
                                <button id="qtyadd" type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">+</button>
                                <a href="{{route('angus')}}" class="btn text-light" style="background-color:black; margin-left:5px;"><b>ADD TO BUCKET</b></a>
                            </span>
                        </div>

                        <p class="font-weight-bold">Prices may at. . .</p>

                        <br><br>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>
@endsection