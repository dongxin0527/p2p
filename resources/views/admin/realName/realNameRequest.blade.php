@extends('layouts.admin')
@section('content')
@if(empty($data))
<table class="table table-hover table-bordered">
	<tr>
		<th>ID</th>
		<th>用户名</th>
		<th>真实姓名</th>
		<th>性别</th>
		<th>出生日期</th>
		<th>身份证号</th>
		<th>籍贯</th>
		<th>审批</th>
	</tr>
	<tr>
		<th colspan="8">暂无申请</th>
	</tr>
</table>
@else
<table class="table table-hover table-bordered">
	<tr>
		<th>ID</th>
		<th>用户名</th>
		<th>真实姓名</th>
		<th>性别</th>
		<th>出生日期</th>
		<th>身份证号</th>
		<th>籍贯</th>
		<th>审批</th>
	</tr>
	@foreach($data as $v)
	<tr>
		<td>{{$v->id}}</td>
		<td>{{$v->username}}</td>
		<td>{{$v->name}}</td>
		<td>{{$v->sex == 1?'男':'女'}}</td>
		<td>{{$v->born}}</td>
		<td>{{$v->idcard}}</td>
		<td>{{$v->native_place}}</td>
		<td>
			<a class="glyphicon glyphicon-edit"></a>
		</td>
	</tr>
	@endforeach
</table>
@endif
@endsection