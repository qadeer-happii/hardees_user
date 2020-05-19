@extends('layouts.main')

@section('content')
<div class="container" style="margin-top:150px ;">
    <div class="row" style="border:1px solid black; margin-top: 15px; margin-bottom: 20px;">
        <div class="col-sm-12">
            <div style="border:1px solid black; background-color:  white; margin-top: 10px;" class="form-control ">
                <h4 style="margin-top: 5px;" class="font-weight-bold">Career Form</h4>
            </div>
        </div>
        <div class="col-sm-12"><label class="font font-weight-bold">PERSONAL INFO</label></div>




        <div class="col-sm-6"><input type="text" placeholder="Name" class=" inputs_style form-control"></div>
        <div class="col-sm-6"><input type="text" placeholder="Date of birth" class=" inputs_style form-control"></div>

        <div class="col-sm-6"><input type="text" placeholder="Country of birth" class=" inputs_style form-control"></div>
        <div class="col-sm-6"><input type="text" placeholder="City of birth" class=" inputs_style form-control"></div>

        <div class="col-sm-12"><input type="text" placeholder="CNIC Number" class=" inputs_style form-control"></div>

        <div class="col-sm-6"><input type="text" placeholder="CNIC issuan date" class=" inputs_style form-control"></div>
        <div class="col-sm-6"><input type="text" placeholder="CNIC expiry date" class=" inputs_style form-control"></div>

        <div class="col-sm-4"><input type="text" placeholder="Single" class=" inputs_style form-control"></div>
        <div class="col-sm-4"><input type="text" placeholder="Gender" class=" inputs_style form-control"></div>
        <div class="col-sm-4"><input type="text" placeholder="Religion" class=" inputs_style form-control"></div>

        <div class="col-sm-4"><input type="text" placeholder="Disability" class=" inputs_style form-control"></div>

        <div class="col-sm-12" style="margin-top: 20px;; margin-left: -10px;"><label class="font font-weight-bold">Address</label></div>

        <div class="col-sm-6"><input type="text" placeholder="Contact Number" class=" inputs_style form-control"></div>
        <div class="col-sm-6"><input type="text" placeholder="Address" class=" inputs_style form-control"></div>

        <div class="col-sm-4"><input type="text" placeholder="Country*" class=" inputs_style form-control"></div>
        <div class="col-sm-4"><input type="text" placeholder="State/Province*" class=" inputs_style form-control"></div>
        <div class="col-sm-4"><input type="text" placeholder="City" class=" inputs_style form-control"></div>

        <div class="col-sm-12" style="margin-top: 20px;; margin-left: -10px;"><label class="font font-weight-bold">JOB POSTING</label></div>

        <div class="col-sm-12"><input type="text" placeholder="How were you refferd to us?" class=" inputs_style form-control"></div>

        <div class="col-sm-6"><input type="text" placeholder="City Applying for*" class=" inputs_style form-control"></div>
        <div class="col-sm-6"><input type="text" placeholder="Position you are applying for" class=" inputs_style form-control"></div>

        <div class="col-sm-6"><input type="text" placeholder="Full Time" class=" inputs_style form-control"></div>
        <div class="col-sm-6"><input type="text" placeholder="Morning" class=" inputs_style form-control"></div>

        <div class="col-sm-12" style="margin-top: 20px;; margin-left: -10px;"><label class="font font-weight-bold">QUALIFICATION</label></div>

        <div class="col-sm-6"><input type="text" placeholder="Degree" class=" inputs_style form-control"></div>
        <div class="col-sm-6"><input type="text" placeholder="Majors" class=" inputs_style form-control"></div>

        <div class="col-sm-6"><input type="text" placeholder="Qualification Year" class=" inputs_style form-control"></div>
        <div class="col-sm-6"><input type="text" placeholder="Place of tottion" class=" inputs_style form-control"></div>

        <div class="col-sm-12" style="margin-top: 20px;; margin-left: -10px;"><label class="font font-weight-bold">EXPERIENCE</label></div>

        <div class="col-sm-4"><input type="text" placeholder="Total Year of experience" class=" inputs_style form-control"></div>
        <div class="col-sm-4"><input type="text" placeholder="Last Position" class=" inputs_style form-control"></div>
        <div class="col-sm-4"><input type="text" placeholder="Last Compan" class=" inputs_style form-control"></div>



    </div>
    <h5 class="font-weight-bold text-center">APLICANTS AGREEMENT (IMPORTANT-READ CAREFULLY BEFORE SIGNING).</h5>
    <p class="text-center">I certify that all information provided in this application is true and complete. I understand
        that any false informationor omission may disqualify me form further consideration for employment and may
        result in my dismissal if discovered at a late date. I authorize and agree to cooperate in a thorough
        investigation of all statements made herein and other matters relating to my background and qualification
        . I understand that any investigation conducted may include a request for employment, educational
        and criminal history. I authorize any person, school, current and former employer, consumer reporting
        agency and any other orgnization or agency to provide information relevant to such investigation I hereby
        release all persons and corporations requesting or supplying information pursuant to such investigation.
        form all liability or responsibility to me for doing so. I understand that ihave the right to make a
        written request within a reasonable period of time for complete disclosure of the nature and scope
        of any investigation. I further authorize any physician or hospital to release any information which
        may be necessary to determine my ability to perform the job for which I am being conidered or aby future
        job in the event that I am hired. I UNDERSTAND THAT THIS APPLICATION OR SUBSEQUENT EMPLOYMENT DOES
        NOT CREATE A CONTRACT OF EMPLOYMENT NOR GURANTEE EMPLOYMENT FOR ANY DEFINITE PERIOD OF TIME.
    </p>
    <input type="radio"><label class='font-weight-bold' style="margin-left: 5px;"> I AGREE WITH THE TERMS AND CONDITIONS.</label>
    <br>
    <button class="btn btn-warning">SUBMIT</button>
    <br><br>
</div>
<!-- Footer Start -->


</div>
<div class="upper-svg" class="col-12" style="margin-bottom:-25%;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f6bf2d" fill-opacity="1" d="M0,192L120,165.3C240,139,480,85,720,90.7C960,96,1200,160,1320,192L1440,224L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
    </svg>
</div>
@endsection