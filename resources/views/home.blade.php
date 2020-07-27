@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-15">
           <img src="https://yt3.ggpht.com/a-/AAuE7mDMgJdxLr67xIch3lj0egc9RZXiZhMXIglFew=s240-mo-c-c0xffffffff-rj-k-no" class="rounded-circle">
       </div>
       <div class="col-9">
           <div class="d-flex justify-content-between align-items-baseline">
              <h1>{{ $user->username}}</h1> 
              <button class="btn btn-dark"><a href="">Add New Post</a></button>

            </div>
           <div class="d-flex">
               <div class=pr-4><strong>153</strong> posts</div>
               <div class=pr-4><strong>23K</strong> followers</div>
               <div class=pr-4><strong>13K</strong> following</div>
           </div>
           <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
           <div>{{$user->profile->description}}</div>
           <div><a href="#"> {{$user->profile->url}} </a></div>
       </div>      
   </div>
   <div class="row pt-5">
         <div class="col-4">
             <img src="https://instagram.fcgp3-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.107.924.924a/s640x640/101418871_149220720095600_2797518877581952974_n.jpg?_nc_ht=instagram.fcgp3-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=JlIM9q_nBgoAX8xuLL3&amp;oh=ffa0600db905b4afa26b4502abe638ce&amp;oe=5F1F8ECA" class="w-100">
         </div>
         <div class="col-4">
             <img src="https://instagram.fcgp3-1.fna.fbcdn.net/v/t51.2885-15/e35/c64.0.548.548a/100898919_639147106680041_7770796487488702501_n.jpg?_nc_ht=instagram.fcgp3-1.fna.fbcdn.net&amp;_nc_cat=105&amp;_nc_ohc=FcWsIPACSp0AX-SACA3&amp;oh=bcaa4c95d832446ebf9e1a5bc7752266&amp;oe=5F1CE905" class="w-100">
         </div>
         <div class="col-4">
             <img src="https://instagram.fcgp3-1.fna.fbcdn.net/v/t51.2885-15/e35/c127.0.495.495a/100950429_172849147497410_8469189274443807895_n.jpg?_nc_ht=instagram.fcgp3-1.fna.fbcdn.net&amp;_nc_cat=102&amp;_nc_ohc=Pmi2r2G6bM4AX9FdcKW&amp;oh=56d5dec869929a5f781c02e5af6771fb&amp;oe=5F1CBD84" class="w-100">
         </div>
         
         

       
   </div>


</div>
@endsection
