@extends('admin_layout')
@section('admin_content')
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Id categoria</th>
								  <th>Nombre de categoria</th>
								  <th>Descripcion de la categoria</th>
								  <th>Estado</th>
								  <th>Accion</th>
							  </tr>
						  </thead>   
				  	@foreach($all_category_info as $v_category)
						  <tbody>
							<tr>
								<td>{{$v_category->category_id}}</td>
								<td class="center">{{$v_category->category_name}}</td>
								<td class="center">{{$v_category->category_description}}</td>

								<td class="center">
									@if($v_category->publication_status==1)
									<span class="label label-success">Activo</span>
									@else
									<span class="label label-danger">Inactivo</span>
									@endif
								</td>

								<td class="center">
									@if($v_category->publication_status==1)
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>						
						  </tbody>
				  	@endforeach
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection
