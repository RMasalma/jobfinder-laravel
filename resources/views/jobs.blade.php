@extends('layouts.main')

@section('content')
 <!-- Hero Area Start-->
 <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Get your job</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
<!-- single-job-content -->
@foreach ($ajobs as $ajob)
<div class="single-job-items mb-30">
    <div class="job-items">
        
        <div class="job-tittle job-tittle2">
            <a href="#">
                <h4>{{$ajob->title}}</h4>
            </a>
            <ul>
                <li>{{$ajob->company}}</li>
                <li><i class="fas fa-map-marker-alt"></i>{{$ajob->location}}</li>
                <li>{{$ajob->salary}}</li>
            </ul>
            <div>
                {{$ajob->description}}
            </div>

        </div>
    </div>
    <div class="items-link items-link2 f-right">
        <a href="job_details.html">{{$ajob->type}}</a>
        
    </div>
</div>
@endforeach
@endsection