@extends('backend.layout.master')


@section('admin_content')



		<!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Table</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto mt-2">
						
							<a href="{{route('add.career')}}" class="btn btn-primary">Add Career</a>
						
						
					</div>
				</div>
				<!--end breadcrumb-->



                <h6 class="mb-0 text-uppercase">DataTable Example</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Address</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

                                @foreach ($contacts as $key=>$contact)
                                    
									
									<tr>
										<td>{{$key+1}}</td> 
										<td>{{$contact->name}}</td>
										<td>{{$contact->email}}</td>
										<td>{{$contact->phone}}</td>
										<td>{{$contact->message}}</td>
										
										<td>
                                            <a href="" class="btn btn-success">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>
										
									</tr>


                                    @endforeach
							
								</tbody>
								<tfoot>
									<tr>
                                        <th>Id</th>
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Address</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>

@endsection