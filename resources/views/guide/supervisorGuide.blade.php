@extends('layouts.app')

@section('content')
    <div class="container dashCard p-5">
       <div class="">
           <div class="text-center">
               <h1>Hello, {{auth()->user()->name}}</h1>
               <h4>Here is a quick user guide to get you started</h4>
           </div>


          <div class="p-5">
              <p class="p-2">
                  As supervisor you will have the options to create new diary records, suggest new projects, monitor the projects, take the attendance, add tasks to a project, send emails, and many more. The below images should briefly introduce to the functions offered by QA-SMOP.
              </p>
              <div class="row">
                  <div class="col-md-6 pt-2">
                      <img src="{{asset('images/supervisorView.png')}}" alt="supervisor View" class="img-responsive card-img-top dashCard">
                  </div>
                  <div class="col-md-6">
                      <ol>
                          <li class="p-2">Diary is a functionality which allows the supervisor to create, edit and delete a diary record it also offers an option to export your records</li>
                          <li class="p-2">Ideas is a functionality that allows the supervisor to suggest project ideas for a course or an area of interest</li>
                          <li class="p-2">Projects is a function where the supervisor can monitor the projects</li>
                      </ol>
                  </div>
              </div>

              <div class="row p-3">
                  <div class="col-md-4">
                      <p>A quick action button on the QA-SMOP platform will allow you to manage quicker your daily tasks as shown below</p>
                  </div>
                  <div class="col-md-8">
                      <img src="{{ asset('images/supervisorQuickLinks.png') }}" alt="supervisor quick links" class="img-responsive card-img-top dashCard">
                  </div>
              </div>

              <div class="row p-3">
                  <div class="col-md-8">
                      <img src="{{ asset('images/supervisorOutlook.png') }}" alt="admin quick links" class="img-responsive card-img-top dashCard">
                  </div>
                  <div class="col-md-4 pt-4">
                      <p>An email functionality will allow you to send emails to both your supervisor and the coordinator</p>
                  </div>

              </div>

              <div class="row  pt-2">
                  <div class="col-md-4 pt-3">
                      <p class="">As supervisor you'll have to modify your availability and are of expertise in order for the coordinator to be able to assign you to projects</p>
                      <p class="pt-2">These can be modified in your profile as shown in the image</p>
                  </div>
                  <div class="col-md-8">
                      <img src="{{ asset('images/supervisorProfile.png') }}" alt="admin quick links" class="img-responsive card-img-top dashCard">
                  </div>
              </div>

          </div>
           <div>

           </div>
       </div>
    </div>
    @endsection

