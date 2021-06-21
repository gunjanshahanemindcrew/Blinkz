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
    <style>
        .stripe-button-el {
            display: none !important;
        }

        .razorpay-payment-button {
            display: none !important;
        }
    </style>
@endpush

@section('content')
    <section class="bg-transparent mt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="border-box">
                        <h4 class="top-title">Please fill up following information</h4>
                        <form action="{!!route('appointment.slot-booked')!!}" method="POST">
                            @csrf
                            <input type="hidden" name="slot_date" value="{{$data['slot_date']}}">
                            <input type="hidden" name="slot_time" value="{{$data['slot_time']}}">
                            <div class="form-group mt-5">
                                <b><span>Who is consultation for?</span></b>
                                <div class="mt-2">
                                    <div onclick="selectRadio('for_me')" class="radio-parent">
                                        <input type="radio" name="for_who" id="for_me" class="radio-btn" checked
                                               value="me">
                                        <span class="checkmark" style="margin-right: 10px" for="for_me"></span>
                                        <span for="for_me">For Me</span>
                                    </div>
                                    <div onclick="selectRadio('for_other')" class="radio-parent">
                                        <input type="radio" name="for_who" id="for_other" class="radio-btn"
                                               value="other">
                                        <span class="checkmark" style="margin-right: 10px"></span>
                                        <span onclick="selectRadio('for_other')">For Another Person</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <b><span>Is this your first visit?</span></b>
                                <div class="mt-2">
                                    <div onclick="selectRadio('yes')" class="radio-parent">
                                        <input type="radio" name="is_first_visit" id="yes" class="radio-btn" checked
                                               value="yes">
                                        <span class="checkmark" style="margin-right: 10px" for="for_me"></span>
                                        <span for="for_me">Yes</span>
                                    </div>
                                    <div onclick="selectRadio('no')" class="radio-parent">
                                        <input type="radio" name="is_first_visit" id="no" class="radio-btn" value="no">
                                        <span class="checkmark" style="margin-right: 10px"></span>
                                        <span onclick="selectRadio('for_other')">No</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <b><span for="">Patient first name</span><span class="required-star">*</span></b>
                                <input type="text" class="form-control mt-2" name="first_name" required
                                       placeholder="Please enter patient first name">
                            </div>
                            <div class="form-group">
                                <b><span for="">Patient last name</span><span class="required-star">*</span></b>
                                <input type="text" class="form-control mt-2" name="last_name" required
                                       placeholder="Please enter patient last name">
                            </div>
                            <div class="form-group">
                                <b><span for="">Patient email</span><span class="required-star">*</span></b>
                                <input type="email" class="form-control mt-2" name="email" required
                                       placeholder="Please enter patient email">
                            </div>
                            <div class="form-group">
                                <b><span for="">Patient mobile</span><span class="required-star">*</span></b>
                                <input type="tel" class="form-control mt-2" name="mobile"
                                       placeholder="Please enter patient mobile" pattern="[0-9]{10}" required title="Please enter valid 10 digit mobile number">
                            </div>
                            <div class="form-group">
                                <b><span for="">Purpose of visit / comments (optional)</span></b>
                                <textarea class="form-control mt-2" name="purpose_of_visit" maxlength="250" rows="5"
                                          placeholder="Please enter purpose of visit / comments"></textarea>
                            </div>
                            <script src="https://checkout.razorpay.com/v1/checkout.js"
                                    data-key="{{ \Illuminate\Support\Facades\Config::get('razor.razor_key') }}"
                                    data-amount="{{(500)*100}}"
                                    data-buttontext="Pay {{(500)*100}} INR"
                                    data-name="{{\App\Model\BusinessSetting::where(['type'=>'company_name'])->first()->value}}"
                                    data-description=""
                                    data-image="{{asset('storage/app/public/company/'.\App\Model\BusinessSetting::where(['type'=>'company_web_logo'])->first()->value)}}"
                                    data-theme.color="{{$web_config['primary_color']}}">
                            </script>
                        </form>
                        <div class="form-group">
                            <a href="{{route('appointment.slot-availability')}}" class="btn btn-info"><i
                                        class="czi-arrow-left"></i> Back</a>
                            <button class="btn btn-primary" type="button" style="float: right"
                                    onclick="$('.razorpay-payment-button').click()">
                                <i class="czi-card"></i> Pay Now
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="border-box">
                        <div class="col-md-12 text-center">
                            <img class="doctor-photo-right" src="{{asset('public/camp/doctor.png')}}" alt="Doctor">
                        </div>
                        <div class="col-md-12 mt-4">
                            <h4 class="top-title">Appointment Hours</h4>
                            <span>
                                <b>
                                <i class="czi-time"></i>
                                <?php
                                    echo date("l, d M Y \a\\t h:i A", strtotime($data['slot_date'] . ' ' . $data['slot_time']));
                                    ?>
                                </b>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        function selectRadio(name) {
            $('#' + name).prop('checked', true);
        }
    </script>
    <script src="{{ asset('public/assets/front-end/js/appointment.js')}}"></script>
@endpush
