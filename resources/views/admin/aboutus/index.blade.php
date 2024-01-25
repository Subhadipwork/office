@extends('admin.layouts.layout')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Forms Elements</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Forms Elements</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h4 class="card-title">About Us</h4>

                        <div style="text-align: right;">
                            <a href="{{ route('blog.index') }}" class="btn btn-primary" style="margin-bottom: 10px; margin-right: 10px;text-align: right;">Back</a>
                        </div>
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <form action="{{ route('admin.about.update', $aboutus->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-6 mb-6">
                                    <label for="blog-name" class="col-sm-6 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="title" id="blog-name" placeholder="Blog Name" value="{{ $aboutus->title }}" required>
                                    </div>
                                </div>

                           

                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label for="blog-name" class="col-sm-6 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                       <textarea name="description" id="ckeditor" >{{ $aboutus->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="blog-name" class="col-sm-6 col-form-label">Career</label>
                                    <div class="col-sm-10">
                                       <textarea name="career" id="" >{{ $aboutus->career }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="blog-name" class="col-sm-6 col-form-label">Image</label>
                                    <div class="col-sm-5">
                                    <input type="file" class="form-control" value="" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <div class="col-sm-5">
                                        <img id="blah" src="{{ asset('uploads/aboutus/'.$aboutus->image) }}" alt="" style="width: 100px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                    <div class="card">
                                        <div class="card-body">
                                        @foreach ($timing as $key => $value)
                                            <div class="row addmore">
                                                <div class="col-lg-6">
                                                    <label class="form-label" for="image">Day</label>
                                                    <input type="text" name="timing[{{ $key }}][day]" id="" class="form-control" value="{{ $value->day }}">
                                                    
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label" for="image">Time</label>
                                                    <input type="text" name="timing[{{ $key }}][open]" id="" class="form-control" value="{{ $value->open }}">
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-sm-10 mt-3">
                                    <button type="submit" id="submit" class="btn btn-primary waves-effect waves-light">
                                        Save Category <i class="ri-arrow-right-line align-middle ms-2"></i>
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
<script src="{{ asset('admin_assets/libs/dropzone/min/dropzone.min.js')}}"></script>

<script>
    ClassicEditor.create(document.querySelector('#ckeditor'));
</script>

@endpush
