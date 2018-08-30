@extends("Admin.public.public")
@section('content')
<body>
    <div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i> 友情链接</span>
        </div>
        <div class="mws-panel-body no-padding">
            <table class="mws-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>URL</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach ($link as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->title}}</td>
                        <td>{{$row->url}}</td>
                        <td>{{$row->status}}</td>                  
                        <td>                                           
                            <form action="/adminlink/{{$row->id}}" method="post">
                                {{csrf_field()}} 
                                {{method_field("DELETE")}}
                                <a href="/adminlink/{{$row->id}}/edit" class="btn btn-primary btn-small">修改</a> 
                                <input type="submit" value="删除" class="btn btn-danger btn-small">                        
                            </form>                           
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection
@section("title",'友情链接')