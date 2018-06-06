@extends('layouts.newwebadmin')


@section('content')

<section id="page-title">
    <div class="container clearfix">
        <h1>List of Participants</h1>
        
    </div>
</section>

<section id="content">
    <div class="content-wrap">
        <div class="section notopborder nomargin header-stick">
            <div class="container clearfix">


                <p align="justify">the list of participants:</p> 

              <table class="table table-striped">
  <thead>
    <td><strong>No</strong></td>
    <td><strong>Registration ID</strong></td>
    <td><strong>Name</strong></td>
    <td><strong>Email</strong></td>
    <td><strong>Organization</strong></td>
    <td><strong>Country</strong></td>
    <td><strong>Student</strong></td>
    <td><strong>Allergies</strong></td>
    <td><strong>Payment</strong></td>
  </thead>
  <?php $count = 1;   ?>
  @foreach($user as $usr)
  <tr>
    <td>{{ $count }}<?php $count++; ?></td>
    <td><strong>{{ $usr->registration_id }}</strong></td>
    <td><strong>{{ $usr->firstname.' '.$usr->lastname }}</strong></td>
    <td><strong>{{ $usr->email }}</strong></td>
    <td><strong>{{ $usr->organization }}</strong></td>
      @if(isset($usr->country))
    <td><strong>{{ $usr->country->country_name }}</strong></td>
    @else
    <td></td>
    @endif

    <td><strong>{{ $usr->student }}</strong></td>
    <td><strong>{{ $usr->allergies }}</strong></td>
    
      @if(empty($usr->paymentConfirmation))
      <td>{{ $usr->payment }}</td>
      @else
      <td><a href="{{ url("storage/payment/".$usr->paymentConfirmation) }}"">{{ $usr->payment }}</a></td>
      @endif
  </tr>
  @endforeach
  </table>

                <div class="divider"><i class="icon-circle"></i></div>

      
         </div>

     </div>
 </div>

</div>
</section>
@endsection
