@extends("Admin.public.public")
@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>修改分类</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admincate" method="post">
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">分类名</label>
                    <div class="mws-form-item">
                        <input type="text" class="medium" name="name">
                    </div>
                </div>
                <div class="mws-form-row"> 
                    <label class="mws-form-label">父类</label> 
                    <div class="mws-form-item"> 
                        <select class="medium" name="pid">
                            <option value="0">--请选择--</option>
                            
                            <option value=""></option>
                           
                        </select>
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
@section("title",'分类修改')