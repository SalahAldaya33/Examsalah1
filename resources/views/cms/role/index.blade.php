@extends('parent')

@section('title','الادوار')

@section('main-title','عرض الادوار')
@section('sub-title','عرض الادوار')

@section('styles')

@endsection

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">rolr</h3>
      <a href="{{ route('roles.create') }}" class="btn btn-info">اضافة دور جديدة</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">ID</th>
            <th>الاسم الوظيفي</th>
            <th>اسم المستحدم</th>
            <th>الاعدادات</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
            {{-- @foreach ($salaries as $salary) --}}


            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name_job }}</td>
                <td>{{ $user->account }}</td>
                {{-- <td>{{ $user->status }}</td> --}}
                <td>
                    <div class="btn group">
                      <a href="{{route('roles.edit', $role->id)}}" class="btn btn-primary" title="Edit">تعديل</a>
                      <a href="#" onclick="performDestroy({{$role->id}} , this)"  class="btn btn-danger" title="Delete">حذف</a>
                    </div>
                  </td>
            </tr>
            {{-- @endforeach --}}
            @endforeach
        </tbody>
      </table>
    </div>

  </div>

@endsection

@section('scripts')

<script>
    function performDestroy(id , referance){
        let url = '/cms/admin/roles/' + id
        confirmDestroy(url , referance)
    }
</script>

@endsection
