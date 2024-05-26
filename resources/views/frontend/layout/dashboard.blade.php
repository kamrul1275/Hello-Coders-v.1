@extends('frontend.layout.master')



@section('content')
<section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <!-- <span>Technology</span> -->
        <h2>Our Services</h2>
      </div>

      <div class="row gy-5">
      
      @foreach ($services as $service)
        
      <div
          class="col-xl-4 col-md-6 equal-height"
          data-aos="zoom-in"
          data-aos-delay="400"
        >
          <div class="service-item">
            <div class="img">
              <img
                src="{{asset($service->services_image)}}"
                class="img-fluid"
                alt=""
              />
            </div>
            <div class="details">
              <a href="#" class="stretched-link">
                <h3>{{$service->title}}</h3>
                <i class="fs-3 fa-sharp fa-solid fa-eye"></i>
              </a>
              <p>
              {{($service->job_position)}}
              </p>
            </div>
          </div>
        </div>
      @endforeach

        <!-- End Service Item -->

      
      </div>
    </div>
  </section>

@endsection