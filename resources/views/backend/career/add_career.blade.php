@extends('backend.layout.master')

@section('admin_content')

<div class="page-content">


				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Career Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Career Profile</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<a href="{{ route('add.career')}}" class="btn btn-primary">Add Career</a>
						
		
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">

							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">


										
            <form action="{{ route('store.career') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Job Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" name="job_title" class="form-control" />
                            @if ($errors->has('job_title'))
                                <span class="text-danger">{{ $errors->first('job_title') }}</span>
                            @endif
                        </div>
                    </div>

					<div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Job Destination</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" name="job_position" class="form-control" />
                            @if ($errors->has('job_position'))
                                <span class="text-danger">{{ $errors->first('job_position') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Photo</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="file" name="career_image" class="form-control"/>
                            @if ($errors->has('career_image'))
                                <span class="text-danger">{{ $errors->first('career_image') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 text-secondary">
                            <input type="submit" class="btn btn-primary px-4" value="Save Career" />
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


