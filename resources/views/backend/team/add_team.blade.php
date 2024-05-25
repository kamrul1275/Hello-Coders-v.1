@extends('backend.layout.master')

@section('admin_content')

<div class="page-content">


				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Team Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Team Profile</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<a href="{{ route('add.team')}}" class="btn btn-primary">Add Team</a>
						
		
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


										
            <form action="{{ route('store.team') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0"> Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" name="team_name" class="form-control" />
                            @if ($errors->has('team_name'))
                                <span class="text-danger">{{ $errors->first('team_name') }}</span>
                            @endif
                        </div>
                    </div>

					<div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Position</h6>
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
                            <h6 class="mb-0"> Photo</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="file" name="team_image" class="form-control"/>
                            @if ($errors->has('team_image'))
                                <span class="text-danger">{{ $errors->first('team_image') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 text-secondary">
                            <input type="submit" class="btn btn-primary px-4" value="Save Team" />
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


