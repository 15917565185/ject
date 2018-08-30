@extends("Admin.public.public")
@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>添加友情链接</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/adminlink" method="post">
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">友情链接名称</label>
                    <div class="mws-form-item">
                        <input type="text" class="medium" name="title">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">友情链接地址</label>
                    <div class="mws-form-item">
                        <input type="text" class="medium" name="url">
                    </div>
                </div> 
                <div class="mws-form-row">
                    <label class="mws-form-label">状态</label>
                    <div class="mws-form-item">
                        <input type="text" class="medium" name="status">
                    </div>
                </div>                               
            </div>
            <div class="mws-button-row">
                {{csrf_field()}}
                <input type="submit" value="提交" class="btn btn-danger">
                <input type="reset" value="取消" class="btn ">
            </div>
        </form>
    </div>      
</div>
@endsection
@section("title",'友情链接')