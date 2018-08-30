@extends("Admin.public.public")
@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i> 分类列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
            <form action="/admincate" method="get">
                <div class="dataTables_filter" id="DataTables_Table_1_filter">
                    <label>搜索: 
                        <input type="text" aria-controls="DataTables_Table_1" name="keywords" value="{{$request['keywords'] or ''}}">
                    </label>
                    <input type="submit" value="搜索" class="btn btn-primary btn-small">
                </div>
            </form>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 255px;">
                       ID
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 334px;">
                        用户名
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 307px;">
                        父类ID
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 226px;">
                        PATH
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 173px;">
                        操作
                    </th>
                </tr>
            </thead>           
            <tbody role="alert" aria-live="polite" aria-relevant="all">
                @foreach($cate as $row)
                <tr class="odd">
                    <td class="  sorting_1">{{$row->id}}</td>
                    <td class=" ">{{$row->name}}</td>
                    <td class=" ">{{$row->pid}}</td>
                    <td class=" ">{{$row->path}}</td>
                    <td class=" ">
                        <form action="/admincate/{{$row->id}}" method="post">
                            {{csrf_field()}}
                            {{method_field("DELETE")}}
                            <a href="/admincate/{{$row->id}}/edit" class="btn btn-primary btn-small">修改</a>                  
                            <input type="submit" value="删除" class="btn btn-danger btn-small">     
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="dataTables_paginate paging_full_numbers" id="pages">
            {{$cate->appends($request)->render()}}
        </div>
    </div>
    </div>
</div>
@endsection
@section("title",'分类列表')