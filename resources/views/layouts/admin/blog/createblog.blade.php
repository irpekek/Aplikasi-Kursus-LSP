@extends('layouts.admin.panel')

@section('konten')
<div class="card">
    <div class="card-header">Blog Management</div>
    <div class="card-body">
        <div class="container">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            

            <form method="post" action="{{url('/dashboard/admin/blog/add')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" placeholder="Masukan Judul" name="judul">
                </div>
                <div class="form-group">
                    <label for="konten">Konten</label>
                    <textarea class="form-control" id="konten" rows="3" name="konten"></textarea>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload Gambar</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input form-control" name="image[]" id="file" multiple="multiple" aria-describedby="fileHelp">
                        <label class="custom-file-label" for="file">Choose file</label>
                    </div>
                </div>
                <div class="text-right">
                    <button id="submit" type="submit" class="btn btn-primary tune-ico"><i class="las la-save la-lg"></i>Save</button>
                </div>                
            </form>
        </div>
    </div>
</div>
@endsection