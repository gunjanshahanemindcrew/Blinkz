@extends('layouts.front-end.app')
@section('title','Welcome To '. $web_config['name']->value)

@push('css_or_js')
    <meta property="og:image" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="og:title" content="Welcome To {{$web_config['name']->value}} Home"/>
    <meta property="og:url" content="{{env('APP_URL')}}">
    <meta property="og:description" content="{!! substr($web_config['about']->value,0,100) !!}">

    <meta property="twitter:card" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="twitter:title" content="Welcome To {{$web_config['name']->value}} Home"/>
    <meta property="twitter:url" content="{{env('APP_URL')}}">
    <meta property="twitter:description" content="{!! substr($web_config['about']->value,0,100) !!}">

    <link rel="stylesheet" href="{{asset('public/assets/front-end')}}/css/home.css"/>
    <link rel="stylesheet" href="{{asset('public/assets/front-end/css/appointment.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .section-heading{
            font-size: 30px;
            color: #2d2d32;
            line-height: 1.5;
            padding-bottom: 20px;
            font-weight: 700;
        }
        .mar-all-30{
            margin: 30px;
        }
        .content-titel{
            font-size: 20px;
            margin-bottom: 14px;
            color: #414146;
            font-weight: 700;
        }
        .card-content{
            font-size: 16px;
            line-height: 20px;
            color: #787887;
        }
        .padding-0{
            padding: 0!important;
        }
    </style>
@endpush

@section('content')
    <section class="bg-transparent mt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2 class="section-heading">Benefits of Online Consultation</h2>
                    <div class="card card-paper">
                        <div class="row col-12">
                            <div class="col-md-4 col-sm-6 col-12 padding-0">
                                <div class="mar-all-30">
                                    <h3 class="content-titel"><i class="fa fa-check mr-2" aria-hidden="true"></i>Consult Top Doctors 24x7</h3>
                                    <p class="card-content">Connect instantly with a 24x7 specialist or choose to video visit a particular doctor.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 padding-0">
                                <div class="mar-all-30">
                                    <h3 class="content-titel"><i class="fa fa-check mr-2" aria-hidden="true"></i>Convenient and Easy</h3>
                                    <p class="card-content">Start an instant consultation within 2 minutes or do video consultation at the scheduled time.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 padding-0">
                                <div class="mar-all-30">
                                    <h3 class="content-titel"><i class="fa fa-check mr-2" aria-hidden="true"></i>100% Safe Consultations</h3>
                                    <p class="card-content">Be assured that your online consultation will be fully private and secured.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 padding-0">
                                <div class="mar-all-30">
                                    <h3 class="content-titel"><i class="fa fa-check mr-2" aria-hidden="true"></i>Similar Clinic Experience</h3>
                                    <p class="card-content">Experience clinic-like consultation through a video call with the doctor. Video consultation is available only on the Blinkz app.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 padding-0">
                                <div class="mar-all-30">
                                    <h3 class="content-titel"><i class="fa fa-check mr-2" aria-hidden="true"></i>Free Follow-up</h3>
                                    <p class="card-content">Get a valid digital prescription and a 7-day, free follow-up for further clarifications.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img class="doctor-photo" src="{{asset('public/camp/doctor.png')}}" alt="Doctor">
                            <div class="doctor-info mt-4 mb-2">
                                <span class="dr-info dr-name mb-2">Dr. Sonalika Dubey</span>
                                <span class="dr-info dr-rating mb-2">
                                    <i class="czi-star-filled"></i>
                                    <i class="czi-star-filled"></i>
                                    <i class="czi-star-filled"></i>
                                    <i class="czi-star-filled"></i>
                                    <i class="czi-star-filled"></i>
                                </span>
                                <span class="dr-info dr-location"><i class="czi-location"></i> Pune, India</span>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <img class="book-banner" src="{{asset('public/camp/book.jpg')}}" alt="Book Slot">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <form action="{{route('appointment.slot-booking')}}" method="post" id="slot_form">
                                @csrf
                                <input type="hidden" name="slot_date" id="slot_date">
                                <input type="hidden" name="slot_time" id="slot_time">
                                <div class="slot-slider">
                                    @for($i = 0; $i < 15; $i++)
                                        <div class="slideitem {{($i == 1) ? 'current' : ''}}">
                                            <?php
                                            $currentDate = date('Y-m-d');
                                            $day = date('D', strtotime($currentDate . ' + ' . $i . ' days'));
                                            $date = date('d-m-Y', strtotime($currentDate . ' + ' . $i . ' days'));
                                            ?>
                                            <div class="slot-header text-center">
                                                <span class="day"><?php echo $day?></span>
                                                <span class="date"><?php echo $date?></span>
                                            </div>
                                            <div class="slot-wrapper">
                                                <?php
                                                $start = strtotime('09:00');
                                                $end = strtotime('21:00');
                                                for ($j = 0; $j < 48; $j++) {
                                                    $start = strtotime("+15 minutes", $start);
                                                    $slotTime = date('h:i A', $start);
													$dataDate = date('Y-m-d', strtotime($date));
													$dataTime = date('H:i:00', $start);
													$class="";
													if(in_array($dataDate." ".$dataTime, $appointments)) {
														$class="booked";
													}
                                                    echo '<span class="slot-time '.$class.'" data-date="' . $dataDate . '" data-slot="' . $dataTime . '">' . $slotTime . '</span>';
                                                }
                                                ?>
                                            </div>
                                            <?php
                                            ?>
                                        </div>
                                    @endfor
                                </div>
                                <div class="form-group text-right mt-4">
                                    <input type="submit" value="Proceed to fill from" class="btn btn-primary proceed-to-pay-btn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('script')
    <script src="{{ asset('public/assets/front-end/js/appointment.js')}}"></script>
@endpush
