@extends('layouts.master')

@section('title', "Corporate Form")


@section('top-styles')
    {{-- <meta name="description" content="{{$menu->seo_description}}">
    <meta name="og:description" content="{{$menu->seo_seo_description}}">
    <meta name="keywords" content="{{$menu->seo_tags}}"> --}}
    <link rel="stylesheet" href="{{url('')}}/assets/css/datepicker.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/daterangepicker.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/timepicker.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/timepicker.css">

  <link rel="stylesheet" href="{{url('')}}/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aksfileupload@1.0.0/dist/aksFileUpload.min.css">


  <style>


    /* Customize Parsley */

    .parsley-required {
      color: red;
      font-size: 15px;
    }

    .parsley-errors-list{
      margin-left: -40px;
    }

    ul {
    list-style-type: none;
}

    /* Customize the label (the container) */
.container1 {
  display: block;
  position: relative;
  padding-left: 25px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container1 .input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: red;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}


  </style>
@endsection

@section('header')
  @parent
@endsection

@section('content')
<div class="careerPage">
  <section class="heroSection" style="background-image: url('{{url('')}}/assets/images/career-bg.webp')">
    <div class="heroTitle">
      <h1>KYC FORM</h1>
    </div>
    <div class="heroBreadcrumb">
      <ul>
        <li>
          <a href="{{url('/')}}">Home</a>
        </li>
        <li>
          <i class="fa fa-angle-right"></i>
        </li>
        <li class="disabledLinked">
          <a href="javascript:void(0);">Corporate Cdd/Kyc Form</a>
        </li>
      </ul>
    </div>
  </section>
  <section id="page-content">
    <div class="section-white my-5">
        <div class="container">
            <div class="comment-box my-5 careerForm">
                <h3 class="mainTitlem">CORPORATE CDD/KYC FORM</h3>
                <div class="col-md-12"><hr></div>
                  @if ($errors->any())
                    <div class="alert alert-danger errors">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif

                  @if (session('success'))
                  <div class="alert alert-success" role="alert" id="success"> <i class="mdi mdi-check-all mr-2"></i> {{ session('success') }}
                  </div>
                  @endif

                <form action="#" method="POST" data-parsley-validate class="p-1 row">
                  @csrf
                
                
                    <div class="form-group col-md-6 my-3">
                        <label for="name">Company Name (as per trade license) <span>*</span></label>
                        <input class="form-control" required name="company_name" value="{{old('company_name')}}" type="text" >
                    </div>
                    {{-- 1input field start --}}
                    <div class="form-group col-md-6 my-3">
                        <label for="name">Country of Establishment<span>*</span></label>
                        <input class="form-control" required name="company_country" value="{{old('company_country')}}" type="text" >
                    </div>

                    <div class="form-group col-md-6 my-3">
                        <label for="name">Year of Incorporation <span>*</span></label>
                        <input type="text" required name="company_year"  class="form-control yearpicker" />
                      </div>

                    <div class="form-group col-md-6 my-3">
                         <label for="name">Business Registration Number <span>*</span></label>
                        <input class="form-control" name="business_registration_number" value="{{old('business_registration_number')}}" required type="text">
                    </div>

                    <div class="form-group col-md-6 my-3">
                      <label for="name">Registered Address <span>*</span></label>
                        <input class="form-control" required name="company_address" type="text" value="{{old('company_address')}}" >
                    </div>

                    <div class="form-group col-md-6 my-3">
                      <label for="name">Tax Identification/Registration Number <span>*</span></label>
                      <input class="form-control" name="tax_identification_registration_number" value="{{old('tax_identification_registration_number')}}" required type="text" >
                    </div>
                    {{-- 1input field end --}}
                    {{-- BENEFICIAL OWNERS addmore start --}}
                    <div class="col-md-10 mt-3">
                      <h3 class="mainTitle1">BENEFICIAL OWNERS</h3>
                    </div>
                    <div class="col-md-2 text-right plusbtn mt-3">
                      <button type="button" class="btn btn-sm add_more1"><i class="fa fa-plus"></i></button>
                    </div>
                    <div class="col-md-12"><hr></div>
                    <div class="col-md-12">
                      <div class="addMore">
                        <div class="addmore_cont1">
                          <div class="addMore_btn">
                              <div class="row addmore_cont1 ml5">
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                     {{--  BENEFICIAL OWNERS addmore end --}}

                      {{-- MANAGEMENT STRUCTURE addmore start --}}
                    <div class="col-md-10 mt-3">
                      <h3 class="mainTitle1">MANAGEMENT STRUCTURE</h3>
                    </div>
                    <div class="col-md-2 text-right plusbtn mt-3">
                      <button type="button" class="btn btn-sm add_more2"><i class="fa fa-plus"></i></button>
                    </div>
                    <div class="col-md-12"><hr></div>
                    <div class="col-md-12">
                      <div class="addMore">
                        <div class="addmore_cont">
                          <div class="addMore_btn2">
                              <div class="row addmore_cont2 ml5">
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                     {{-- MANAGEMENT STRUCTURE addmore end --}}
                    {{--  BANKING DETAILS addmore start --}}
                    <div class="col-md-10 mt-3">
                      <h3 class="mainTitle1">BANKING DETAILS</h3>
                    </div>
                    <div class="col-md-2 text-right plusbtn mt-2">
                      <button type="button" class="btn btn-sm add_more4"><i class="fa fa-plus"></i></button>
                    </div>
                    <div class="col-md-12"><hr></div>
                    <div class="col-md-12">
                      <div class="addMore">
                        <div class="addmore_cont">
                          <div class="addMore_btn4">
                              <div class="row addmore_cont4 ml5">
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    {{-- BANKING DETAILS addmore end --}}
                        {{-- Financial Information addmore start --}}
                      <div class="col-md-10 mt-3">
                        <h3 class="mainTitle1">Financial Information</h3>
                        <h4 class="mainTitle">Item of Financial Statements</h4>
                      </div>
                    
                      <div class="col-md-2 text-right plusbtn mt-2">
                        <button type="button" class="btn btn-sm add_more3"><i class="fa fa-plus"></i></button>
                      </div>
                      <div class="col-md-12"><hr></div>
                      <div class="col-md-12">
                        <div class="addMore">
                          <div class="addmore_cont">
                            <div class="addMore_btn3">
                                <div class="row addmore_cont3 ml5">
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{--  Financial Information addmore end --}}
                      
                        <div class="col-md-12 my-3">
                          <h3 class="mainTitlem">DECLERATION FORM FOR POLITICALLY EXPOSED PERSON (SOURCE OF FUNDS)</h3>
                        </div>
                        <div class="form-group col-md-12 my-3">
                          <div class="row">
                            <div class="col-md-2">
                              <p>I Declare that I am / (am not)</p>
                            </div>
                            <div class="col-md-3">
                              <input class="form-control" required name="declaration_name" type="text">
                            </div>
                            <div class="col-md-7">
                              <p> a Political Exposed Person (PEP) and entrusted ( or my family member or close associate) with:	</p>
                            </div>
                            <div class="col-md-12">
                              <p>If Yes Please Select Any One From the Options below :</p>
                            </div>
                            <div class="col-md-12">
                              <div>
                                <input id="radio-1" class="radio-style" name="declaration_option" value="Prominent public function" type="radio">
                                <label for="radio-1" class="radio-style-1-label radio-small">Prominent public function</label>
                              </div>
                              <div>
                                <input id="radio-2" class="radio-style" name="declaration_option" value="Head of state/ Government" type="radio">
                                <label for="radio-2" class="radio-style-2-label radio-small">Head of state/ Government</label>
                              </div>
                              <div>
                                <input id="radio-3" class="radio-style" name="declaration_option" value="Senior Politician/ party official" type="radio">
                                <label for="radio-3" class="radio-style-3-label radio-small">Senior Politician/ Party official</label>
                              </div>
                              <div>
                                <input id="radio-4" class="radio-style" name="declaration_option" value="Ambassador/ Senior person in International Organization" type="radio">
                                <label for="radio-4" class="radio-style-3-label radio-small">Ambassador/ Senior person in International Organization</label>
                              </div>
                              <div>
                                <input id="radio-5" class="radio-style" name="declaration_option" value="Senior Executive /director/of state owned corporation" type="radio">
                                <label for="radio-5" class="radio-style-3-label radio-small">Senior Executive /Director/of state owned corporation</label>
                              </div>

                             <input type="radio" class="radio-style" name="declaration_option" value="other" id="yesCheck"> 
                             <label for="yesCheck" class="radio-style-3-label radio-small">Other</label>
                            
                          
                            <input id="ifYes" style="display:none;" type='text' name="declaration_option_other" class="form-control yes">
                          
                                                      
                            </div>
                            <div class="col-md-10 mt-3">
                              <h3 class="mainTitle1">SOURCE OF FUNDS</h3>
                            </div>
                            <div class="col-md-12">
                              <p>I understand that I am required to declare the source of funds that I will be using for the purpose. I understand the requirements of the Federal Decree-Law No. (20) of 2018 On Anti-Money Laundering and Combatting the Financing of of Terrorism and Financing of Illegal Organisations and the Cabinet Decision No. (10) of 2019 Concerning the Implementing Regulation of Decree Law no. (20) of 2018 on Anti-Money Laundering and Combating the Financing of Terrorism and Illegal Organisations and do hereby undertake that the source of funds/metals are acquired from legitimate sources and evidence of such is available if needed or as requested. I/We do hereby undertake that the funds/metals do not originate from any sanctioned country/entity/person/s from the United Nations and other relevant sanction programs</p>
                              <div>
                                {{-- <input id="checkbox-9" class="checkbox-style" name="checkbox-10" type="checkbox">
                                <label for="checkbox-9" class="checkbox-style-3-label"><p>I Agree to the Terms And Conditions.  </p></label> --}}

                                <label class="container1"> 
                                  I Agree to the Terms And Conditions.<input type="checkbox" name="agree_check" class="input"><span class="checkmark"></span></label>

                              </div>
                            </div>
                            <div class="col-md-10 mt-3">
                              <h3 class="mainTitle1">TRANSACTION WITH IRAN OR NORTH KOREA</h3>
                            </div>
                            <div class="col-md-12 mt-3">
                              <label class="container1">I Declare that I Don't have any Transaction done during the year With Iran & North Korea.<input type="checkbox" name="declaration_check" class="input"><span class="checkmark"></span></label>
                              {{-- <label for="checkbox-10" class="checkbox-style-3-label"><p>I Declare that I Don't have any Transaction done during the year With Iran & North Korea.</p></label> --}}
                            </div>
                          </div>
                        </div>
                        <div class="form-field col-lg-12 text-center">
                          <input class="submit-btn" type="submit" value="Submit">
                        </div>



                </form>
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
  
  @section('bottom-bot-scripts')
  <script>


    //Year Picker
  function yearPicker () {
    $(".yearpicker").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
    });
  }
     
      // BENEFICIAL OWNERS addmore start
    $(document).ready(function(){
     
      $('form').parsley();

      $(".errors").fadeOut(20000);

      setTimeout(function() {
      $('#success').fadeOut('fast');
  }, 3000);

      $(document).on('click','.delete1',function() {
        $(this).parent().parent().remove();
      });
  
    $(document).on('click' , '.add_more1' , function(){

      $('.addMore_btn').append(
        `<div class="row addmore_cont1 ml5">
            <input type="hidden" value="1" class="radio_counter1" />
            <div class="form-group col-md-4 my-3">
              <label for="name">Name<span>*</span></label>
                <input required name="owner_name[]" required type="text"  class="form-control" aria-describedby="emailHelp" value="{{old('owner_name[]')}}">
            </div>
            <div class="form-group col-md-3 my-3">
              <label for="name">Percentage Holding (%)<span>*</span></label>
              <input required type="number" required name="percentage_holding[]" step="any" class="form-control" aria-describedby="emailHelp" value="{{old('percentage_holding[]')}}">
            </div>
            <div class="form-group col-md-4 my-3">
              <label for="name">Country of Incorporation/Nationalities <span>*</span></label>
              <input required type="text" required name="owner_country[]" class="form-control" aria-describedby="emailHelp" value="{{old('owner_country[]')}}">
            </div>
            <div class="form-group col-md-1 mt-5">
              <button type="button"  class="btn btn-danger waves-effect waves-light btn-sm delete1"><i class="fa fa-times"></i></button>
            </div>
            <div class="form-group col-md-4 my-3">
              <label for="name">Date of Incorporation/Birth <span>*</span></label>
              <div class="input-group date" data-provide="datepicker">
                  <input type="text" required name="owner_date_birth[]" {{old('owner_date_birth[]')}} class="form-control">
                  <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                  </div>
              </div>
            </div>
        </div>
        <hr style='background-color:red;'/>
        `
      );
      
    });

     // BENEFICIAL OWNERS addmore end
      // MANAGEMENT STRUCTURE addmore start
  $(document).on('click','.delete2',function() {
    $(this).parent().parent().remove();
  });

  $(document).on('click' , '.add_more2' , function(){

  $('.addMore_btn2').append(
    `
    <div class="row addmore_cont2 ml5">
        <input type="hidden" value="1" class="radio_counter1" />
        <div class="form-group col-md-4 my-3">
          <label for="name">Name<span>*</span></label>
            <input required type="text"  required name="management_name[]" class="form-control" aria-describedby="emailHelp"  value="{{old('management_name[]')}}">
        </div>
        <div class="form-group col-md-3 my-3">
          <label for="name">Title<span>*</span></label>
          <input required type="text" required name="management_title[]" class="form-control" aria-describedby="emailHelp"  value="{{old('management_title[]')}}">
        </div>
        <div class="form-group col-md-4 my-3">
          <label for="name">Nationalities <span>*</span></label>
          <input required type="text" required name="management_nationalities[]" class="form-control" aria-describedby="emailHelp" value="{{old('management_nationalities[]')}}">
        </div>
        <div class="form-group col-md-1 mt-5">
          <button type="button"  class="btn btn-danger waves-effect waves-light btn-sm delete2"><i class="fa fa-times"></i></button>
        </div>
        <div class="form-group col-md-4 my-3">
          <label for="name">Date of Birth <span>*</span></label>
          <div class="input-group date" data-provide="datepicker">
                  <input type="text" required name="management_date_birth[]" class="form-control">
                  <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                  </div>
              </div>
        </div>
    </div>
    <hr style='background-color:red;'/>
    `
  );
});
 //  MANAGEMENT STRUCTURE addmore end
  // FINANCIAL INFORMATION addmore start


$(document).on('click','.delete3',function() {
  $(this).parent().parent().remove();
});

$(document).on('click' , '.add_more3' , function(){

$('.addMore_btn3').append(
  `<div class="row addmore_cont3 ml5">
      <input type="hidden" value="1" class="radio_counter1" />
      <div class="form-group col-md-4 my-3">
        <label for="name">Share Capital</label>
          <input type="number" name="financial_share_capital[]" class="form-control" aria-describedby="emailHelp"  value="{{old('financial_share_capital[]')}}">
      </div>
      <div class="form-group col-md-3 my-3">
        <label for="name">Total Shareholder's Equity</label>
        <input type="number" name="financial_shareholder_equity[]" class="form-control" aria-describedby="emailHelp"  value="{{old('financial_shareholder_equity[]')}}">
      </div>
      <div class="form-group col-md-4 my-3">
        <label for="name">Total Balance Sheet</label>
        <input type="number" name="financial_balance_sheet[]" class="form-control" aria-describedby="emailHelp"  value="{{old('financial_balance_sheet[]')}}">
      </div>
      <div class="form-group col-md-1 mt-5">
        <button type="button"  class="btn btn-danger waves-effect waves-light btn-sm delete3"><i class="fa fa-times"></i></button>
      </div>
      <div class="form-group col-md-4 my-3">
        <label for="name">Sales</label>
        <input type="number" name="financial_sale[]s" class="form-control" aria-describedby="emailHelp"  value="{{old('financial_sale[]')}}">
      </div>
      <div class="form-group col-md-3 my-3">
        <label for="name">Net Income</label>
        <input type="number" name="financial_net_total[]" class="form-control" aria-describedby="emailHelp"  value="{{old('financial_net_total[]')}}">
      </div>
  </div>
  <hr style='background-color:red;'/>
`
);

});

 //FINANCIAL INFORMATION addmore end
 // Banking Detail addmore start

  

$(document).on('click','.delete4',function() {
  $(this).parent().parent().remove();
});

$(document).on('click' , '.add_more4' , function(){

$('.addMore_btn4').append(
  `<div class="row addmore_cont4 ml5">
      <input type="hidden" value="1" class="radio_counter1" />
      <div class="form-group col-md-4 my-3">
        <label for="name">Bank Name<span>*</span></label>
          <input required type="text" required name="bank_name[]" class="form-control" aria-describedby="emailHelp"  value="{{old('bank_name[]')}}">
      </div>
      <div class="form-group col-md-3 my-3">
        <label for="name">Country<span>*</span></label>
        <input required type="text" required name="bank_country[]" class="form-control" aria-describedby="emailHelp" value="{{old('bank_country[]')}}">
      </div>
      <div class="form-group col-md-4 my-3">
        <label for="name">Town / City<span>*</span></label>
        <input required type="text"  class="form-control" aria-describedby="emailHelp" required name="bank_city[]" value="{{old('bank_city[]')}}">
      </div>
      <div class="form-group col-md-1 mt-5">
        <button type="button"  class="btn btn-danger waves-effect waves-light btn-sm delete4"><i class="fa fa-times"></i></button>
      </div>
      <div class="form-group col-md-4 my-3">
        <label for="name">Account Name<span>*</span></label>
        <input required type="text" required name="bank_account_name[]" class="form-control" aria-describedby="emailHelp" value="{{old('bank_account_name[]')}}">
      </div>
      <div class="form-group col-md-3 my-3">
        <label for="name">Account Number<span>*</span></label>
        <input required type="text" required name="bank_account_number[]" class="form-control" aria-describedby="emailHelp" value="{{old('bank_account_number[]')}}">
      </div> 
      <div class="form-group col-md-4 my-3">
        <label for="name">Years of Relationship with the Bank<span>*</span></label>
        <input type="text" name="bank_year[]" required class="form-control yearpicker"/>
        </div> 
      <div class="form-group col-md-4 my-3">
        <label for="name">Origin of the Funds of the Company<span>*</span></label>
        <input required type="text" required name="bank_funds[]" class="form-control" aria-describedby="emailHelp"  value="{{old('bank_funds[]')}}">
      </div>
      <div class="form-group col-md-3 my-3">
        <label for="name">SWIFT<span>*</span></label>
        <input required type="text" required name="bank_swift[]" class="form-control" aria-describedby="emailHelp"  value="{{old('bank_swift[]')}}">
      </div>
      <div class="form-group col-md-4 my-3">
        <label for="name">Currency of Account<span>*</span></label>
        <input required type="text" required name="bank_currency[]" class="form-control" aria-describedby="emailHelp"  value="{{old('bank_currency[]')}}">
      </div>
    </div>
    <hr style='background-color:red;'/>
`
);

//Trigger yearPicker
yearPicker ()

});


$(".radio-style").on('click', function(){
  if($('#yesCheck').is(':checked')){
  $('.yes').show();
  }
  else {
    $('.yes').hide();
  }
});

//Trigger yearPicker
yearPicker ()
 
 
})
  
   
    
  </script>
  @endsection