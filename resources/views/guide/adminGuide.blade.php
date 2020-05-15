@extends('layouts.app')

@section('content')
    <div class="container dashCard p-5">
       <div class="">
           <div class="text-center">
               <h1>Hello, {{auth()->user()->name}}</h1>
               <h4>Here is a quick user guide to get you started</h4>
           </div>


          <div class="p-5">
              <p class="p-2">As coordinator you will have all privileges of managing the users, projects, etc., as presented below:</p>
              <div class="row">
                  <div class="col-md-6 pt-5">
                      <img src="{{asset('images/adminView.png')}}" alt="admin View" class="img-responsive card-img-top dashCard">
                  </div>
                  <div class="col-md-6">
                      <ol>
                          <li class="p-2">Posts is a functionality that allows you to create short posts visible by QA-SMOP users.</li>
                          <li class="p-2">Levels is a functionality where you can manage the study degree levels which includes creating, editing and deleting study fields</li>
                          <li class="p-2">Fields is a function which allows you to manage the courses list by creating new fields and taking actions as editing or deleting</li>
                          <li class="p-2">Subjects is a functionality where you can create, edit or delete new subjects</li>
                          <li class="p-2">Users is a function which allows you to manage users list such as, registering students or supervisors either by a form or via an excel file.</li>
                          <li class="p-2">Projects is a function where you can monitor ongoing projects</li>
                          <li class="p-2">Ideas is a functionality that allows you to suggest projects for each course and area of interest while at the same time manage your suggestions and view all records</li>
                      </ol>
                  </div>
              </div>

              <div class="row p-3">
                  <div class="col-md-6">
                      <p>A quick action button on the QA-SMOP platform will allow you to manage quicker your daily tasks as shown below</p>
                  </div>
                  <div class="col-md-6">
                      <img src="{{ asset('images/adminQuickLinks.png') }}" alt="admin quick links" class="img-responsive card-img-top dashCard">
                  </div>
              </div>

              <div class="row p-3">
                  <div class="col-md-6">
                      <img src="{{ asset('images/outlookAdmin.png') }}" alt="admin quick links" class="img-responsive card-img-top dashCard">
                  </div>
                  <div class="col-md-6">
                      <p>An email functionality will allow you to send emails to both the supervisors and the students</p>
                  </div>

              </div>
          </div>
           <div>

           </div>
       </div>
    </div>
    @endsection

