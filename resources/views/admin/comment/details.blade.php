@extends('layout.admin.master')

@section('content')
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Bình Luận</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel panel-info">
					<div class="panel-heading">
					Chi Tiết
					</div>
					<div class="panel-body">
						<p>{{$comment->content}}</p>						
					</div>
					<div class="panel-footer">
						<form action="admin/comment/duyetComment/{{$comment->id}}" method="post">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="status" value="1">
							<button type="submit" class="btn btn-default">Duyệt Comment</button>
							<a class="btn btn-danger" onClick="return confirm('Are You Sure ?')" href="admin/comment/delete/{{$comment->id}}">Delete</a> 
						</form>
					</div>
				</div>
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
</div>
<!-- /#page-wrapper -->
@endsection
