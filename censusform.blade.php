@extends('layouts.master')

@section('title', 'Donation')
@section('top-styles')
<script defer src="{{url('').mix('js/donate.js')}}"></script>
@endsection
@section('header')
  @parent
@endsection

@section('content')
<h1>Dhoraji Association</h1>
<h2>Census Form</h2>
<form action="#" method="POST" data-parsley-validate class="p-1 row">
<div class="form-group col-md-6 my-3">
                        <label for="name">Name: <span>*</span></label>
                        <input class="form-control" required name="name" value="{{old('name')}}" type="text" >
                    </div>
                    {{-- 1input field start --}}
                    <div class="form-group col-md-6 my-3">
                        <label for="name">Father/Husband's Name: <span>*</span></label>
                        <input class="form-control" required name="father's/husband's name" value="{{old('father/husband name')}}" type="text" >
                    </div>

                    <div class="form-group col-md-6 my-3">
                        <label for="name">Grandfather's Name: <span>*</span></label>
                        <input type="text" required name="grandfather's name"  class="form-control" />
                      </div>

                    <div class="form-group col-md-6 my-3">
                         <label for="name">Residential Address <span>*</span></label>
                        <input class="form-control" name="residential address" value="{{old('residential address')}}" required type="text">                        
                    </div>
                    <div class="form-group col-md-6 my-3">
                    <label for="name">Surname: <span>*</span></label>
                        <input class="form-control" required name="surname" value="{{old('surname')}}" type="text" >
                    </div>
</form>
@endsection

@section('footer')
  @parent
@endsection
