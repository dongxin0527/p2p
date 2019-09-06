@extends("layouts.index")
@section("content")
	<div align="center" style="height: 260px">
		<img src="/index/images/waiting.png">
	</div>
	<script src="/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		
        var t = setInterval("check()",3000);
        function check()
        {
           $.post(
                "{{url('/index/loan/loanWait_do')}}",
                function(msg){
                    if(msg.data == 2){
                        clearInterval(t);
                        alert("恭喜您,审核通过");
                        location.href = "{{url('/index/loan/gaveMoneyForm')}}";
                    }else if(msg.data == 3){
                        clearInterval(t);
                        alert("很遗憾,审核未通过");
                        location.href = "{{url('/')}}";
                    }
                },
                'json'
            )
        }
	</script>
@endsection
