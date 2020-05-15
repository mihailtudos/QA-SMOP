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
                 As student you will be able to submit new topic, see the suggested projects, create new diary record and send emails to the assigned supervisor and the coordinator
              </p>
              <div class="row">
                  <div class="col-md-6 pt-2">
                      <img src="{{asset('images/studentView.png')}}" alt="admin View" class="img-responsive card-img-top dashCard">
                  </div>
                  <div class="col-md-6">
                      <ol>
                          <li class="p-2">Topic is a function which allows you to create and submit a topic</li>
                          <li class="p-2">Ideas is a functionality where you will be able to view and claim a project suggestion</li>
                          <li class="p-2">Diary is a functionality where you will be able to keep track of your diary records by creating, editing and deleting diary records. You will also also able to export the diary record and attache to your dissertation</li>
                          <li class="p-2">Project is the place where you can see relevant project details, set new meetings, create new diary records, complete tasks and many more</li>
                          <li class="p-2">Before starting working on your project you'll have to submit an ethical form by filling in the relevant information. Once it is approved by your supervisor you'll be able to export and attache it to your research.</li>
                      </ol>
                  </div>
              </div>

              <div class="row p-3">
                  <div class="col-md-6">
                      <p>A quick action button on the QA-SMOP platform will allow you to manage quicker your daily tasks as shown below</p>
                  </div>
                  <div class="col-md-6">
                      <img src="{{ asset('images/studentQuickLinks.png') }}" alt="admin quick links" class="img-responsive card-img-top dashCard">
                  </div>
              </div>

              <div class="row p-3">
                  <div class="col-md-6">
                      <img src="{{ asset('images/studentOutlook.png') }}" alt="admin quick links" class="img-responsive card-img-top dashCard">
                  </div>
                  <div class="col-md-6">
                      <p>An email functionality will allow you to send emails to both your supervisor and the coordinator</p>
                  </div>

              </div>
          </div>
           <div>

           </div>
       </div>
    </div>
    @endsection

