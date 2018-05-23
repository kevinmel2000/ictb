@extends('layouts.newweb')


@section('content')

<section id="page-title">
    <div class="container clearfix">
        <h1>List of Author</h1>
        
    </div>
</section>

<section id="content">
    <div class="content-wrap">
        <div class="section notopborder nomargin header-stick">
            <div class="container clearfix">


                <p align="justify">The Conference theme, “Conservation, Enhancement and Sustainable Use of Indigenous Tropical Flora and Fauna”, will cover the following sub-themes and topics:</p> 

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
    <td><strong>Abstract</strong></td>
  </thead>
  <?php $count = 1;   ?>
  @foreach($user as $usr)
  <tr>
    <td>{{ $count }}<?php $count++; ?></td>
    <td>{{ $usr->registration_id }}</td>
    <td>{{ $usr->firstname.' '.$usr->lastname }}</td>
    <td>{{ $usr->email }}</td>
    <td>{{ $usr->organization }}</td>
    @if(isset($usr->country))
    <td>{{ $usr->country->country_name }}</td>
    @endif
    <td>{{ $usr->student }}</td>
    <td>{{ $usr->allergies }}</td>
    <td>{{ $usr->payment }}</td>
    @if(isset($usr->application))
      <td><strong><a href="{{ url("storage/abstract/".$usr->application->abstract) }}">Abstract</a></strong></td>
    @else
      - 
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
