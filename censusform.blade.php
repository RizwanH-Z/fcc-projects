@extends('layouts.master')

@section('title', 'Register')


@section('top-styles')
<link rel="stylesheet" href="{{url('')}}/assets/css/pmd/select2.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="{{url('')}}/assets/css/pmd/select2-bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="{{url('')}}/assets/css/pmd/pmd-select2.css" type="text/css" media="screen" />
<link rel="stylesheet" href="{{url('')}}/assets/css/pmd/textfield.css" type="text/css" media="screen" />


<style>
  .w-100{
    width: 100% !important;
  }
  .parsley-required{
    color: red !important;
  }
  .form-group{
    margin-top:1rem;
  }
  .form-group > input{
    height: 37px;
    border: 1px solid;
    border-radius: 10px;
    border-color: #e3e3e3;
  }
  .theme_btn{
    float: right;
    width: 25%;
  }
  .input-group-text{
    background-color: #fff;
    border:  1px solid #e3e3e3;
    padding:5px;
    height:35px;
    width:15%;
    text-align: center;
  }
  input[type="radio"]{
    opacity: 1 !important;
    z-index: 0 !important;
  }
  .input-group-field{
    width:85%;
    border: 1px solid;
    border-radius: 4px;
    border-color: #e3e3e3;
  }
  textarea{
    border: 1px solid;
    border-radius: 4px;
    border-color: #e3e3e3;
  }
  .alert-dhoraji{
    background-color: #1d506f !important;
    color: white !important;
    height: 50px;
  }
  .btn-add{
    background: transparent;
    border:none;
    float: right;
    color: white;
    width:40px;
    cursor: pointer;
  }
</style>
@endsection

@section('header')
@parent
@endsection

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul id="breadcrumbs-one">
                    <li><a href="{{route('home')}}"><i class="ion-ios7-home"></i>Home</a></li>
                    <li><a class="current">Census Form</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section style="margin-bottom: 100px">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="box_style">
          <h3 class="heading_1 mt-5">Census Form</h3>
          <div class="alert alert-success alert-dhoraji" role="alert">
            Applicant's Information
          </div>
          <form class="row" action="">
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="name">Name <span class="text-danger">*</span></label>
                <input type="text" id="name" name="name" class="w-100" value="" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="fname">Father's/Husband's Name <span class="text-danger">*</span></label>
                <input type="text" id="fname" name="fname" class="w-100" value="" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="gfname">Grand Father Name <span class="text-danger">*</span></label>
                <input type="text" id="gfname" name="gfname" class="w-100" value="" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="surname">Surname <span class="text-danger">*</span></label>
                <input type="text" id="surname" name="surname" class="w-100" value="" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="address">Resedential Address <span class="text-danger">*</span></label>
                <input type="text" id="address" name="address" class="w-100" value="" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="area">Area <span class="text-danger">*</span></label>
                <input type="text" id="area" name="area" class="w-100" value="" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="city">City<span class="text-danger">*</span></label>
                <input type="text" id="city" name="city" class="w-100" value="" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="phone">Mobile No. <span class="text-danger">*</span></label>
                <input type="text" id="phone" name="phone" class="w-100" value="" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input type="mail" id="email" name="email" class="w-100" value="" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="gender">Status of Resedential Accomodation<span class="text-danger">*</span></label>
                <select  name="gender" class="form-control select-with-search pmd-select2 form-control" data-parsley-errors-container="#error" required>
                  <option value="" disabled selected >Select Status</option>
                  <option value="house">House</option>
                  <option value="flat">Flat</option>
                  <option value="parents">With Parents</option>
                  <option value="rental">Rental</option>
                  <option value="goodwill">Goodwill</option>
                  <option value="owner">Ownership</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
          </form>


          <div class="alert alert-success alert-dhoraji" role="alert">
            Head of Family
          </div>
          <form class="row" action="" id="form-family">
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="name">Full Name <span class="text-danger">*</span></label>
                <input type="text" id="name" name="name" class="w-100" value="" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="gender">Gender<span class="text-danger">*</span></label>
                <select  name="gender" class="form-control select-with-search pmd-select2 form-control" data-parsley-errors-container="#error" required>
                  <option value="" disabled selected >Select Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="dob">Date of Birth <span class="text-danger">*</span></label>
                <input type="date" id="dob" name="dob" class="w-100" value="{{$member->date_of_birth ?? null}}" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="gender">Relation with Head of Family<span class="text-danger">*</span></label>
                <select  name="gender" class="form-control select-with-search pmd-select2 form-control" data-parsley-errors-container="#error" required>
                  <option value="" disabled selected >Select Relation</option>
                  <option value="mother">M - Mother</option>
                  <option value="wife">W - Wife</option>
                  <option value="son">S - Son</option>
                  <option value="daughter">D - Daughter</option>
                  <option value="brother">B - Brother</option>
                  <option value="sister">R - Sister</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="cnic">CNIC Number <span class="text-danger">*</span></label>
                <input type="text" id="cnic" name="cnic" class="w-100" value="cnic" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="membership">Membership No. <span class="text-danger">(if any)</span></label>
                <input type="text" id="membership" name="membership" class="w-100" value="" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="maritial">Maritial Status<span class="text-danger">*</span></label>
                <select  name="maritial" class="form-control select-with-search pmd-select2 form-control" data-parsley-errors-container="#error" required>
                  <option value="" disabled selected >Select Maritial Status</option>
                  <option value="single">Single</option>
                  <option value="married">Married</option>
                  <option value="divorced">Divorced</option>
                  <option value="widow">Widow</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="academic">Academic Qualification <span class="text-danger">*</span></label>
                <input type="text" id="academic" name="academic" class="w-100" value="" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="profession">Professional Qualification <span class="text-danger">*</span></label>
                <input type="text" id="profession" name="profession" class="w-100" value="" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="occupation">Occupational Status<span class="text-danger">*</span></label>
                <select  name="occupation" class="form-control select-with-search pmd-select2 form-control" data-parsley-errors-container="#error" required>
                  <option value="" disabled selected >Select Occupational Status</option>
                  <option value="business">Business</option>
                  <option value="employed">Employed</option>
                  <option value="unemployed">Unemployed</option>
                  <option value="student">Student</option>
                  <option value="housewife">Housewife</option>
                  <option value="retired">Retired</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="income">Monthly Income<span class="text-danger">*</span></label>
                <select  name="income" class="form-control select-with-search pmd-select2 form-control" data-parsley-errors-container="#error" required>
                  <option value="" disabled selected >Select Monthly Income</option>
                  <option value="1-15">Upto 15,000</option>
                  <option value="15-40">15,001 - 40,000</option>
                  <option value="40-100">40,000 - 100,000</option>
                  <option value="100-more">100,001 or above</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="disable">Disablity <span class="text-danger">(if any)</span></label>
                <input type="text" id="disable" name="disable" class="w-100" value="" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-4">
                <label for="blood">Blood Group<span class="text-danger">*</span></label>
                <input type="text" id="blood" name="blood" class="w-100" value="" required>
              </div>
            </div>
          </form>
          <div class="alert alert-success alert-dhoraji mt-5" role="alert" id="new">
            Add Another Family Member
            <button class="btn-add" id="btn-add">
              <i class="fa fa-plus"></i>
            </button>
          </div>
          <div class="new-member" id="new-member">
          </div>
          <div class="col-md-12 mt-3">
            <button class="btn btn-sm animated-button theme_btn"><span>Submit</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection


@section('footer')
@parent
@endsection

@section('bottom-mid-scripts')


@endsection
