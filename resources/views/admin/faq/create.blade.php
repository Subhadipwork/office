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
                        <h4 class="card-title">Add FAQ</h4>
                        <div style="text-align: right;">
                            <a href="{{ route('faq.index') }}" class="btn btn-primary" style="margin-bottom: 10px; margin-right: 10px;text-align: right;">Back</a>
                        </div>


                        <form action="{{ isset($item) ? route('faq.update', $item->id) : route('faq.store') }}" method="POST">
                            @csrf
                            @if(isset($item) && $item->id)
                            @method('PUT')
                            @endif
                            <div class="mb-3 row">
                                <label for="category-name" class="col-sm-2 col-form-label">Question</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="question" id="category-name" placeholder="Question" value="{{ $item->question ?? '' }}" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="answer" class="col-sm-2 col-form-label">Answer</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="answer" id="answer" placeholder="Answer" required>{{ $item->answer ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" id="submit" class="btn btn-primary waves-effect waves-light">
                                        Save FAQ <i class="ri-arrow-right-line align-middle ms-2"></i>
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
<script src="{{ asset('admin_assets/libs/dropzone/min/dropzone.min.js')}}"></script>


@endpush