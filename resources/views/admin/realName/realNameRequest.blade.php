@extends('layouts.admin')
@section('content')
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
	@if(empty($data))
	<tr>
		<th colspan="8" style="text-align: center"><h2>暂无申请</h2></th>
	</tr>
	@else
	@foreach($data as $v)
	<tr nid="{{$v['id']}}">
		<td>{{$v['id']}}</td>
		<td>{{$v['username']}}</td>
		<td>{{$v['name']}}</td>
		<td>{{$v['sex'] == 1?'男':'女'}}</td>
		<td>{{$v['born']}}</td>
		<td>{{$v['idcard']}}</td>
		<td>{{$v['native_place']}}</td>
		<td>
			<a class="glyphicon glyphicon-edit" id="open_div"></a>
		</td>
	</tr>
	@endforeach
	@endif
</table>
<div align="center" style="display: none;background-color: #ccc;width: 100%;height: 100%;position: absolute;top: 0;left: 0;opacity: 0.9;text-align: center;padding-top: 15%" id="div">
	<form action="{{url('admin/realName/realNameRequestDo')}}" method="post">
		<input type="hidden" name="id">
		<b><input type="radio" name="type" value="2" checked> 通过</b>
		<b><input type="radio" name="type" value="3"> 不通过</b>
		&ensp;&ensp;<a class="glyphicon glyphicon-remove" align="right" id="close_div"></a><p>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
	
</div>
<script type="text/javascript">
	$(document).on('click','#open_div',function(){
		var id = $(this).parent().parent().attr('nid');
		$('#div').show();
		$('input[name="id"]').val(id);
	})
	$(document).on('click','#close_div',function(){
		$('#div').hide();
	})
</script>

@endsection