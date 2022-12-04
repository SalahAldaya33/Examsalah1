@extends('parent')

@section('title','الادوار')

@section('main-title','اضافة دور جديد')

@section('sub-title','اضافة دور جديد')

@section('styles')

@endsection

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">اضافة دور</h3>
    </div>

    @csrf
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
        <div class="card-body">
            <div class="form-group col-3">
                <label for="full_name">الاسم الوظيفي</label>
                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="ادخل اسم مشرف جديد">
            </div>
            <div class="form-group col-2">
                <label for="phone">اسم الموظف</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="ادخل رقم الهاتف">
            </div>

        </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <div class="card-footer">
            <button type="button" onclick="performStore()"class="btn btn-success">اضافة</button>
            <a href="{{ route('roles.index') }}" type="submit" class="btn btn-secondary">الغاء</a>
         </div>
        </div>
    </form>
  </div>

@endsection

@section('scripts')

<script>
    function performStore(){
        let formData = new FormData();
        formData.append('name_job',document.getElementById('name_job').value);
        formData.append('account',document.getElementById('account').value);
        store('/cms/admin/roles', formData);
    }
</script>

@endsection
