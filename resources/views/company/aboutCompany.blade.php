@extends('layouts.app3')
@section('content')


    <ul class="nav justify-content-center">
        <div class="navbar1 justify-content-center">
            <a class="nav-link1 nav-link-ltr1" href="/manager/home">profile</a>

            <a class="nav-link1 nav-link-ltr1" href="/company/list2">list of requests</a>
            <a class="nav-link1 nav-link-ltr1" href="/offerInternship">offer internship</a>
            <a class="nav-link1 nav-link-ltr1" href="/about">About company</a>



        </div>
    </ul>
<div class="nav justify-content-center">


                   <div class="card mb-3 justify-content-center" style="max-width:1000px">
                       <div class="row g-0">
                           <div class="col-md-4">
                               <img src="company.png" class="img-fluid rounded-start" alt="..."style="height: 400px;">
                           </div>
                           <div class="col-md-8">
                               <div class="card-body ">
                                   @foreach($managers as $manager)
                                       @if($manager->manager_id==Auth::id())
                                           <h5 class="card-title fw-bolder  fs-2">{{$manager->comp_name}}</h5>
                                           <ul class="list-group list-group-flush">

                                               <li class="list-group-item fw-bold fs-3">Internship manager: {{$manager->name}}</li>
                                               <li class="list-group-item  fs-3"> <i class="fa-solid fa-map-location-dot"></i>  Address : {{$manager->address}}</li>
                                               <li class="list-group-item fs-3"> <i class="fa-solid fa-phone" ></i>  Phone number : {{$manager->phone_num}}</li>
                                               <li class="list-group-item fs-3"> <i class="fa-solid fa-earth-americas"></i>  Website : {{$manager->website}}</li>
                                               <li class="list-group-item fs-3"> <i class="fa-solid fa-paper-plane"></i>  Email : {{$manager->comp_email}}</li>



                                           </ul>

                                       @endif
                                   @endforeach
                               </div>
                           </div>
                       </div>
                   </div>
</div>

@endsection
