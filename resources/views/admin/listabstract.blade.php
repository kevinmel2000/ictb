@extends('layouts.newwebadmin')


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
    <td><strong>Title</strong></td>
    <td><strong>Abstract</strong></td>
    <td><strong>App Type</strong></td>
    <td><strong>Theme</strong></td>
    <td><strong>Subtheme</strong></td>
    <td><strong>Publication</strong></td>
  </thead>
  <?php $count = 1;   ?>
  @foreach($abstracts as $abs)
  <tr>
    <td>{{ $count }}<?php $count++; ?></td>
    <td>{{ $abs->participant->registration_id }}</td>
    <td>{{ $abs->title }}</td>
      <td><strong><a href="{{ url("storage/abstract/".$abs->abstract) }}">Abstract</a></strong></td>
    <td>{{ $abs->apptype->type }}</td>
    <td>{{ $abs->subtheme->theme->theme }}</td>
    <td>{{ $abs->subtheme->sub_theme }}</td>
    
    <td>{{ $abs->publicationtype->type }}</td>
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
