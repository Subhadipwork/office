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

                            <h4 class="card-title">List Project</h4>
         

                            <a href="{{ route('project.create') }}" class="btn btn-primary"
                                style="margin-bottom: 10px; margin-right: 10px;">
                                <i class="mdi mdi-plus me-1"></i>
                            </a>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
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
                                                <td>{{ $item->title }}</td>
                                                <td>
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#descriptionModal_{{ $item->id }}">Show
                                                    Description</button>

                                                <!-- The Modal -->
                                                <div class="modal" id="descriptionModal_{{ $item->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Description for
                                                                    {{ $item->title }}
                                                                </h4>
                                                               
                                                            </div>
                                                            <div class="modal-body">
                                                                {!!$item->description ?? 'N/A'!!}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </td>
                                                @if (!empty($item->projectimage[0]->image))
                                                    <td><img src="{{ asset('/uploads/projects/' . $item->projectimage[0]->image) }}"
                                                            width="100px" height="100px"></td>
                                                @else
                                                    <td><img src="https://picsum.photos/200/300" width="100px"
                                                            height="100px"></td>
                                                @endif
                                                <td>
                                                    <input type="checkbox" class="status-toggle" data-is="{{ $item->id }}" data-type="status"
                                                        id="status-switch{{ $item->id }}" switch="none" {{ $item->status == 1 ? 'checked' : '' }}>
                                                    <label for="status-switch{{ $item->id }}" data-on-label="Show" data-off-label="Hide"></label>
                                                </td>

                                                <td>
                                                    <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $item->id }}" data-url="{{ route('project.destroy', $item->id)}}">Delete</a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('project.edit', $item->id) }}"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>

                       

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div> <!-- container-fluid -->
    </div>
@endsection


@pushOnce('scripts')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<!-- toastr plugin -->




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
    $(document).ready(function() {
        $('.status-toggle').change(function() {
            var element = $(this);
            var categoryId = $(this).data('is');
            var status = this.checked ? 1 : 0;
            var type = $(this).data('type');
            
            $.ajax({
                url: "{{ route('project.updateStatus') }}",
                type: "POST",
                data: {
                    id: categoryId,
                    status: status,
                    type: type
                },
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


<script>

    $('.delete').on('click', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var url = $(this).data('url');
        $.ajax({
            url: url,
            type: 'DELETE',
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

                     location.reload();

                   } else {
                       Toast.fire({
                           icon: 'error',
                           title: data.message
                       });
                   }
               
            }
        })
    })
</script>




@endPushOnce

@pushOnce('styles')
    {{-- @livewireStyles
<link rel="stylesheet" href="{{ asset('vendor/livewire-alert/css/livewire-alert.css') }}"> --}}
    <link href="{{ asset('admin_assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/libs/toastr/build/toastr.min.css') }}">
@endPushOnce
