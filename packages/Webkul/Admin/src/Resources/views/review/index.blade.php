@extends('admin::layouts.content')
@section('content')


    <style>
        /* Custom Font and Size */
        table {
            font-family: 'Arial', sans-serif;
            font-size: 14px;
        }
        th, td {
            border-bottom: 1px solid #ddd;
        }
    </style>

    <table id="myTable" class="display">
        <thead>
        <tr>
            <th style="background-color: #f8f9fa;">Name</th>
            <th style="background-color: #f8f9fa;">Email</th>
            <th style="background-color: #f8f9fa;">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customerReviews as $reviews)
            <tr>
                <td>{{ $reviews->customer_name }}</td>
                <td>{{ $reviews->customer_email }}</td>
                <td>
                    <a href="{{ route('admin.customer.reviews.show', $reviews->id) }}" class="btn btn-primary btn-sm">View</a>
                    <a href="{{ route('admin.customer.reviews.delete', $reviews->id) }}" onclick="event.preventDefault(); deleteConfirmation('{{ route('admin.customer.reviews.delete', $reviews->id) }}')" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>

        <a href="{{ url('/admin/dashboard') }}" class="btn btn-primary mt-4">Back to Dahboard</a>
    </table>

{{--@if ($customerReviews == null || count($customerReviews) === 0)--}}
{{--    <h1 style="display: none;">No Reviews</h1>--}}
{{--@endif--}}


<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });

    function deleteConfirmation(deleteUrl) {
        if (confirm('Are you sure you want to delete this user?')) {
            window.location.href = deleteUrl;
        }
    }
</script>


@endsection
{{--    <input type="hidden" id="headerdata" value="{{ __('REVIEW') }}">--}}
{{--    <div class="content-area">--}}
{{--        <div class="mr-breadcrumb">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h4 class="heading">{{ __('Reviews') }}</h4>--}}
{{--                    <ul class="links">--}}
{{--                        <li>--}}
{{--                            <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="javascript:;">{{ __('Product Discussion') }} </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="{{ route('admin.customer.reviews') }}">{{ __('Reviews') }}</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="product-area">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="mr-table allproduct">--}}
{{--                        @include('alerts.admin.form-success')--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table id="customerReviewsTable">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Customer Name</th>--}}
{{--                                    <th>Customer Email</th>--}}
{{--                                    <th>Review</th>--}}
{{--                                    <th>Action</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    --}}{{-- ADD / EDIT MODAL --}}

{{--    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">--}}

{{--        <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="submit-loader">--}}
{{--                    <img src="{{asset('assets/images/'.$gs->admin_loader)}}" alt="">--}}
{{--                </div>--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title"></h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}

{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--    --}}{{-- ADD / EDIT MODAL ENDS --}}


{{--    --}}{{-- DELETE MODAL --}}

{{--    <div class="modal fade" id="confirm-delete">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}

{{--                <!-- Modal Header -->--}}
{{--                <div class="modal-header text-center">--}}
{{--                    <h4 class="modal-title w-100">{{ __('Confirm Delete') }}</h4>--}}
{{--                </div>--}}

{{--                <!-- Modal body -->--}}
{{--                <div class="modal-body">--}}
{{--                    <p class="text-center">{{ __('You are about to delete this Review.') }}</p>--}}
{{--                    <p class="text-center">{{ __('Do you want to proceed?') }}</p>--}}
{{--                </div>--}}

{{--                <!-- Modal footer -->--}}
{{--                <div class="modal-footer justify-content-center">--}}
{{--                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Cancel') }}</button>--}}
{{--                    <form action="" class="d-inline delete-form" method="POST">--}}
{{--                        <input type="hidden" name="_method" value="delete" />--}}
{{--                        <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
{{--                        <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>--}}
{{--                    </form>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    --}}{{-- DELETE MODAL ENDS --}}
{{--@dd('here')--}}
{{--@endsection--}}



{{--@section('scripts')--}}

{{--    --}}{{-- DATA TABLE --}}



{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            $('#customerReviewsTable').DataTable({--}}
{{--                processing: true,--}}
{{--                serverSide: true,--}}
{{--                ajax: "{{ route('admin.customer.reviews.datatables') }}",--}}
{{--                columns: [--}}
{{--                    { data: 'Customer Name', name: 'customer_name' },--}}
{{--                    { data: 'Customer Email', name: 'customer_email' },--}}
{{--                    { data: 'review', name: 'text' },--}}
{{--                    { data: 'action', name: 'action', orderable: false, searchable: false },--}}

{{--                ],--}}
{{--            });--}}

{{--            // Handle delete action--}}
{{--            $(document).on('click', '.delete', function() {--}}
{{--                let deleteUrl = $(this).data('href');--}}
{{--                if (confirm('Are you sure you want to delete this review?')) {--}}
{{--                    $.ajax({--}}
{{--                        url: deleteUrl,--}}
{{--                        type: 'DELETE',--}}
{{--                        success: function(response) {--}}
{{--                            // Handle success response--}}
{{--                            alert('Review deleted successfully.');--}}
{{--                            $('#customerReviewsTable').DataTable().ajax.reload();--}}
{{--                        },--}}
{{--                        error: function(xhr) {--}}
{{--                            // Handle error response--}}
{{--                            alert('Failed to delete review.');--}}
{{--                        }--}}
{{--                    });--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}


{{--    <script type="text/javascript">--}}

{{--        (function ($) {--}}
{{--            "use strict";--}}

{{--            var table = $('#geniustable').DataTable({--}}
{{--                ordering: false,--}}
{{--                processing: true,--}}
{{--                serverSide: true,--}}
{{--                ajax: '{{ route('admin.customer.reviews.datatables') }}',--}}
{{--                columns: [--}}
{{--                    {data: 'customer_name', name: 'customer_name', searchable: false, orderable: false},--}}
{{--                    {data: 'customer_email', name: 'customer_email'},--}}
{{--                    {data: 'text', name: 'text'},--}}
{{--                    {data: 'action', searchable: false, orderable: false}--}}

{{--                ],--}}
{{--                --}}{{----}}{{--language: {--}}
{{--                --}}{{----}}{{--    processing: '<img src="{{asset('assets/images/'.$gs->admin_loader)}}">'--}}
{{--                --}}{{----}}{{--}--}}
{{--            });--}}

{{--        })(jQuery);--}}


{{--    </script>--}}

{{--    --}}{{-- DATA TABLE --}}

{{--@endsection--}}
