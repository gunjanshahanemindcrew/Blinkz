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
    <style type="text/css">
        section {
            padding: 0 0 80px 0;
        }

        .section-titel {
            color: #505257;
            text-align: center;
            opacity: 1;
            font-size: 30px;
            font-weight: 700;
            margin-top: 0;
        }

        .one {
            display: flex;
            flex-wrap: wrap;
            margin-top: 48px;
            color: #312419;
            font-weight: 300;
        }

        .two {
            display: flex;
            flex-direction: row;
            width: 50%;
        }

        .resposiv-content .one .two:nth-child(odd) {
            padding-right: 80px;
        }

        .resposiv-content .one .two:nth-child(even) {
            padding-left: 80px;
        }

        .resposiv-content .one .two .why_icon {
            min-width: 60px;
            min-height: 53px;
            margin: 25px 25px 25px 0;
        }

        .resposiv-content .one .two .why_icon .why_icon_img {
            width: 100%;
        }

        .resposiv-content .one .two .why_content {
            padding-bottom: 15px;
            border-bottom: 1px solid #f0f4f7;
        }

        .resposiv-content .one .two .why_content .why_content_heading {
            text-align: left;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 0;
            color: #505257;
        }

        .resposiv-content .one .two .why_content .based_content {
            text-align: left;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            letter-spacing: 0;
            color: #727983;
            opacity: 1;
        }

        @media only screen and (max-width: 768px) {
            .two{
                width: 100%;
            }
            .resposiv-content .one .two:nth-child(even) {
                padding-left: 0px;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Hero (Banners + Slider)-->
    <section class="bg-transparent mt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <b>
                        <h3 class="section-titel">
                            <span>Why Blinkz?</span>
                        </h3>
                    </b>
                </div>
            </div>
            <div class="resposiv-content">
                <div class="one">
                    <div class="two">
                        <div class="why_icon">
                            <img src="{{asset('public/camp')}}/corona.svg"
                                 class="why_icon_img">
                        </div>
                        <div class="why_content">
                            <h3 class="why_content_heading">Blinkz is COVID-19 safe</h3>
                            <div class="based_content">
                                <p>Your safety is taken care of by thermal screening, social distancing, sanitized
                                    clinics and hospital rooms, sterilized surgical equipment and mandatory PPE kits
                                    during surgery.</p>
                            </div>
                        </div>
                    </div>
                    <div class="two">
                        <div class="why_icon">
                            <img src="{{asset('public/camp')}}/insurance.svg"
                                 class="why_icon_img">
                        </div>
                        <div class="why_content">
                            <h3 class="why_content_heading">Assisted Surgery Experience</h3>
                            <div class="based_content">
                                <p>A dedicated Medical Coordinator assists you throughout the surgery journey from
                                    insurance paperwork, to free commute from home to hospital & back and
                                    admission-discharge process at the hospital.</p>
                            </div>
                        </div>
                    </div>
                    <div class="two">
                        <div class="why_icon">
                            <img src="{{asset('public/camp')}}/medical.svg"
                                 class="why_icon_img">
                        </div>
                        <div class="why_content">
                            <h3 class="why_content_heading">Medical Expertise With Technology</h3>
                            <div class="based_content">
                                <p>Our surgeons spend a lot of time with you to diagnose your condition. You are
                                    assisted in all pre-surgery medical diagnostics. We offer advanced laser and
                                    laparoscopic surgical treatment. Our procedures are USFDA approved.</p>
                            </div>
                        </div>
                    </div>
                    <div class="two">
                        <div class="why_icon">
                            <img src="{{asset('public/camp')}}/patient_care.svg"
                                 class="why_icon_img">
                        </div>
                        <div class="why_content">
                            <h3 class="why_content_heading">Post Surgery Care</h3>
                            <div class="based_content">
                                <p>We offer free follow-up consultations and instructions including dietary tips as well
                                    as exercises to every patient to ensure they have a smooth recovery to their daily
                                    routines.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-2">
                <img class="mr-2" src="{{asset('public/camp')}}/our_clinic.jpg" alt="Eng">
            </div>
        </div>
    </section>
@endsection

@push('script')

@endpush
