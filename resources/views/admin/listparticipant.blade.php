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
    <td><strong>Registration ID</strong></td>
    <td><strong>Name</strong></td>
    <td><strong>Email</strong></td>
    <td><strong>Organization</strong></td>
    <td><strong>Country</strong></td>
    <td><strong>Student</strong></td>
    <td><strong>Allergies</strong></td>
    <td><strong>Payment</strong></td>
  </thead>
  @foreach($user as $usr)
  <tr>
    <td><strong>{{ $usr->registration_id }}</strong></td>
    <td><strong>{{ $usr->firstname.' '.$usr->lastname }}</strong></td>
    <td><strong>{{ $usr->email }}</strong></td>
    <td><strong>{{ $usr->organization }}</strong></td>
      @if(isset($usr->country))
    <td><strong>{{ $usr->country->country_name }}</strong></td>
    @endif
    <td><strong>{{ $usr->student }}</strong></td>
    <td><strong>{{ $usr->allergies }}</strong></td>
    <td><strong>{{ $usr->payment }}</strong></td>
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
