@extends('backend.layout.master')


@section('admin_content')

<div class="page-content"> 


				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">User Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">User Profilep</li>
							</ol>
						</nav>
					</div>
				
				</div>


				    @php
						use App\Models\User;
						use Illuminate\Support\Facades\Auth;

						if(Auth::check()){
							$user = Auth::user();
						}
					@endphp


				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
											<img src="{{asset($user->photo)}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
											<div class="mt-3">
												<h4>{{$user->name}}</h4>
												<p class="text-secondary mb-1">Software Engineer</p>
												<p class="text-muted font-size-sm">Dhamrai,Dhaka</p>
												<button class="btn btn-primary">Follow</button>
												<button class="btn btn-outline-primary">Message</button>
											</div>
										</div>
										<hr class="my-4" />
									
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card">
									<div class="card-body">



                      <form action="{{route('admin.profile.store', $userProfile->id)}}"  method="POST" enctype="multipart/form-data">
					  @csrf  

										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Name</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name="name" class="form-control" value="{{$userProfile->name}}" />
											</div>
										</div>

                                        <div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">User Name</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name="user_name" class="form-control" value="{{$userProfile->name}}" />
											</div>
										</div>

										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Email</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name="email" class="form-control" value="{{$userProfile->email}}"  />
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Phone</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name="phone" class="form-control"value="{{$userProfile->phone}}" />
											</div>
										</div>
									
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Address</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name="address" class="form-control" value="{{$userProfile->address}}" />
											</div>
										</div>


                                        <div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Photo</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="file" name="photo" class="form-control"/>
											</div>
										</div>

										@if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif

										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9 text-secondary">
												<input type="submit" class="btn btn-primary px-4" value="Save Changes" />
											</div>
										</div>

                        </form>


									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>

@endsection