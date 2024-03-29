@extends('admin.layouts.layout')

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Data Tables</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Data Tables</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">List of Blog</h4>


                            <a href="{{ route('blog.create') }}" class="btn btn-primary"
                                style="margin-bottom: 10px; margin-right: 10px;">
                                <i class="mdi mdi-plus me-1"></i>
                            </a>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Blog Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Author</th>
                                        <th>Status</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($items->isNotEmpty())
                                        @foreach ($items as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->blog_title}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#sdescriptionModal_{{ $item->id }}">Show
                                                        Short Description </button>

                                                    <!-- The Modal -->
                                                    <div class="modal" id="sdescriptionModal_{{ $item->id }}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Description for
                                                                        {{ $item->blog_title }}
                                                                    </h4>
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    {{$item->short_description ?? 'N/A'}}
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <td>
                                                    <img src="{{ asset('uploads/blogs/' . $item->blog_image) }}" style="width: 50px; height: 50px; object-fit: cover;">
                                                </td>

                                                <td>{{ $item->blog_author}}</td>
                                                <td>
                                                    <input type="checkbox" class="status-toggle" data-url="{{ route('admin.blog.status', $item->id) }}" data-id="{{ $item->id }}" data-type="status"
                                                        id="status-switch{{ $item->id }}" switch="none" {{ $item->status == 1 ? 'checked' : '' }}>
                                                    <label for="status-switch{{ $item->id }}" data-on-label="Show" data-off-label="Hide"></label>
                                                </td>


                                                
                                                <td>
                                                    <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $item->id }}" data-url="{{ route('blog.destroy', $item->id) }}">Delete</a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('blog.edit', $item->id) }}"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>

                            <!-- Pagination links -->
                           

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div> <!-- container-fluid -->
    </div>
@endsection


@pushOnce('scripts')
    {{-- @livewireScripts --}}
    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>




    <!-- Required datatable js -->
    <script src="{{ asset('admin_assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('admin_assets/js/pages/datatables.init.js') }}"></script>
    <!-- toastr plugin -->
    <script src="{{ asset('admin_assets/libs/toastr/build/toastr.min.js') }}"></script>

    <!-- toastr init -->
    <script src="{{ asset('admin_assets/js/pages/toastr.init.js') }}"></script>


    <script src="{{ asset('admin_assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  
    <script>
        $('.delete').click(function() {
            var id = $(this).data('id');
            var url = $(this).data('url');
            
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'method': 'DELETE',
                    },
                    success: function(data) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-right',
                            iconColor: 'success',
                            customClass: {
                                popup: 'colored-toast'
                            },
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true
                        });
                        if (data.status == true) {
                            
                            Toast.fire({
                                icon: 'success',
                                title: data.message
                            })
                            location.reload();
                        }else{
                            Toast.fire({
                                icon: 'error',
                                title: data.message
                            })
                        }
                    }
                })
            }
            })

            
        });
    </script>
    <script>
    $(document).ready(function() {
        $('.status-toggle').change(function() {
            var categoryId = $(this).data('id');
            var type = $(this).data('type');
            var url = $(this).data('url');

            $.ajax({
                url: url,
                type: "get",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-right',
                            iconColor: 'success',
                            customClass: {
                                popup: 'colored-toast'
                            },
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true
                        });
                    if (data.status == true) {


                        Toast.fire({
                            icon: 'success',
                            title: data.message
                        });

                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: data.message
                        });
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'An error occurred while processing your request. Please try again.'
                    });
                }
            });
        });
    });
</script>



@endPushOnce

@pushOnce('styles')
    {{-- @livewireStyles
<link rel="stylesheet" href="{{ asset('vendor/livewire-alert/css/livewire-alert.css') }}"> --}}
    <link href="{{ asset('admin_assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/libs/toastr/build/toastr.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endPushOnce
