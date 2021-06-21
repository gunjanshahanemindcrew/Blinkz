@extends('layouts.back-end.app')
@section('title','Appointment Inquiry List')
@push('css_or_js')
    <!-- Custom styles for this page -->
    <link href="{{asset('public/assets/back-end')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="{{asset('public/assets/back-end/css/croppie.css')}}" rel="stylesheet">

@endpush

@section('content')
<div class="content container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{trans('messages.Dashboard')}}</a></li>
            <li class="breadcrumb-item" aria-current="page">{{trans('messages.appointment')}}</li>
        </ol>
    </nav>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h4 class=" mb-0 text-black-50">{{trans('messages.appointment')}}</h4>
    </div>

    <div class="row" >
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{trans('messages.appointment_inq_table')}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th scope="col">{{trans('messages.SL#')}}</th>
                                <th scope="col">{{trans('messages.contact_first_name')}}</th>
                                <th scope="col">{{trans('messages.contact_last_name')}}</th>
                                <th scope="col" width="10%">{{trans('messages.contact_email')}}</th>
                                <th scope="col">{{trans('messages.contact_mobile')}}</th>
                                <th scope="col">{{trans('messages.contact_purpose_of_visit')}}</th>
                                <th scope="col">{{trans('messages.contact_slot_date')}}</th>
                                <th scope="col">{{trans('messages.contact_slot_time')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                                @foreach($appointmentslists as $key => $appointmentslist)
                                    <tr>
                                        <td scope="col">{{$i++}}</td>
                                        <td scope="col">{{$appointmentslist->first_name}}</td>
                                        <td scope="col">{{$appointmentslist->last_name}}</td>
                                        <td scope="col"><a href="mailto:{{$appointmentslist->email}}">{{$appointmentslist->email}}</a></td>
                                        <td scope="col">{{$appointmentslist->mobile}}</td>
                                        <td scope="col">{{$appointmentslist->purpose_of_visit}}</td>
                                        <td scope="col">{{date('d-m-Y', strtotime($appointmentslist->slot_date))}}</td>
                                        <td scope="col">{{date('h:i A',strtotime($appointmentslist->slot_time))}}</td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <!-- Page level plugins -->
    <script src="{{asset('public/assets/back-end')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/assets/back-end')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable();
        });
    </script>
@endpush
