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
    <style>
        .title-eyecamp {
            padding: .5em 0;
            margin: .5em 0;
            font-size: 1.6em;
            font-weight: 600;
            position: relative;
            margin-bottom: 1.5em;
            text-align: center;
        }

        .title-eyecamp::after {
            display: block;
            position: absolute;
            left: 0;
            right: 0;
            margin: 10px auto;
            width: 10%;
            height: 3px;
            background-color: #035390;
            content: '';
            line-height: 0;
            -webkit-transition: all 1s ease;
            -o-transition: all 1s ease;
            transition: all 1s ease;
        }

        .top-text {
            margin: 0 0 .8em;
            /* font-size: 1.2em; */
            color: #454545;
            display: block;
            text-align: center;
        }

        .title2 {
            text-transform: uppercase;
            text-align: center;
            display: block;
            font-size: 1.42em;
            font-weight: 500;
            color: #454545;
        }

        .eye-test-parent {
            background: #edf8fc;
        }

        .eye-test-parent li {
            list-style: none;
        }

        .eye-test-parent li .bullet-number-type {
            display: inline-block;
            position: absolute;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
            color: #fff;
            background: #035390;
        }

        .eye-test-parent .list-item-content {
            padding-left: 40px;
        }

        .eye-test-parent .list-item-content h3 {
            font-weight: 600;
            color: #454545;
            font-size: 1em;
        }

        .eye-test-parent .list-item-content p {
            font-size: 1em !important;
            font-weight: 500;
        }

        .counter-section {
            background: #fbfbfb;
        }

        .ver-middle {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            display: -webkit-box;
            align-items: center;
            flex-wrap: wrap;
        }

        .title-eyecamp-small {
            font-size: 1.42em;
            font-weight: 500;
            color: #454545;
        }

        .counter-value {
            position: relative;
            font-size: 2.9em;
            color: #035390;
            font-weight: 600;
        }

        .bg-light-blue {
            background: #edf8fc;
        }

        .left-info {
            min-height: 25em;
        }

        .left-info2 {
            min-height: 32em;
        }

        .required-star {
            color: red;
            font-weight: bold;
        }
    </style>
@endpush

@section('content')
    <!-- Hero (Banners + Slider)-->
    <section class="bg-transparent mt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="mr-2" src="{{asset('public/camp')}}/eyetestbannerrevised.jpg" alt="Eng">
                </div>
                <div class="col-12">
                    <h1 class="title-eyecamp">Organize Free Eye Test Camp with Blinkz</h1>
                    <span class="underline"></span>

                    <span class="top-text">
                        Eyesight is one of the most important amongst our senses. Almost 80% of what we perceive is with the help of our sight which is why keeping it in-check is equally necessary. And when it comes to your organization/institution, this indeed becomes a responsibility.
                    </span>
                    <span class="top-text">
                    Organize a Free Eye Test Camp for your students, employees or staff with Blinkz and ensure they have a perfect sight for all future roles and goals.
                    </span>
                </div>
                <div class="col-12 mt-4">
                    <span class="title2 mb-4">WHAT WE BRING TO THE TABLE</span>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <img class="mr-2" src="{{asset('public/camp')}}/eyetest1.jpg" alt="Eng">
                        </div>
                        <div class="col-md-6 col-xs-12 eye-test-parent">
                            <ul class="list-group mt-4 mb-4">
                                <li class="mt-2"><span class="bullet-number-type">1</span>
                                    <div class="list-item-content">
                                        <h3>FREE EYE TEST BY CERTIFIED REFRACTIONIST</h3>
                                        <p>
                                            Our certified refractionist will perform your eye test completely free of
                                            cost. Feel free to ask him which lenses will suit you the best.
                                            Organize a Free Eye Test Camp for your students, employees or staff with and
                                            ensure they have a perfect sight for all future roles and goals.
                                        </p>
                                    </div>
                                </li>
                                <li class="mt-2"><span class="bullet-number-type">2</span>
                                    <div class="list-item-content">
                                        <h3>HI-TECH EYE TESTING EQUIPMENT</h3>
                                        <p>Powerful and advanced eye testing equipment to deliver cent percent accuracy
                                            and precision.</p>
                                    </div>
                                </li>
                                <li class="mt-2"><span class="bullet-number-type">3</span>
                                    <div class="list-item-content">
                                        <h3>100% EYE-POWER ACCURACY</h3>
                                        <p>Quick, easy & 100% accurate results of your test in less than 5 minutes.
                                            Simply walk-in and walk out with your prescription.</p>
                                    </div>

                                </li>
                                <li class="mt-2"><span class="bullet-number-type">4</span>
                                    <div class="list-item-content">
                                        <h3>ASSISTANCE IN PLACING ONLINE ORDERS FOR GLASSES</h3>
                                        <p>Need help in placing your first order? One of our team members will assist
                                            you to do so there & then.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 counter-section mt-4">
                    <div class="container-self">
                        <div id="counter">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 ver-middle p-0 text-center">
                                    <div class="counter-heading title-eyecamp-small">Total Camps Till Date</div>
                                    <div class="counter-value">15</div>
                                </div>
                                <div class="col-md-4 col-sm-4 p-0">
                                    <img class="img-fluid" src="{{asset('public/camp')}}/eyetest2.jpg" alt="Eng">
                                </div>
                                <div class="col-md-4 col-sm-4 ver-middle p-0 text-center">
                                    <div class="counter-heading title-eyecamp-small">Total Tests Till Date</div>
                                    <div class="counter-value">350</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="bg-light-blue ver-middle left-info">
                                <div class="contact-left-block mx-4">
                                    <h4 class="title-eyecamp-small Heading-type-2 mb-2">Cataract camp</h4>
                                    <p>
                                        Cataracts are often related to the ageing process and found mostly in older
                                        people, It is completely treatable but if left untreated, the person becomes
                                        totally blind. But due to poverty, many senior citizens live with blindness.
                                        Organization can conduct free eye camps and surgeries for poor patients
                                        suffering from cataracts.
                                        Our doctor team will screen cataract Patients and are provided with
                                        consultation, surgery, accommodation, spectacles, medicine, transportation, and
                                        follow-up treatment
                                        By supporting this program you can help a poor senior citizen get free cataract
                                        surgery and reclaim his life.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="ver-middle left-info">
                                <div class="contact-left-block mx-4">
                                <h4 class="title-eyecamp-small Heading-type-2 mb-2">School camp</h4>
                                    <p>
                                        School can conduct eye camps. our optometrist team will screen kids with
                                        refractive error ,provide them with glasses and kids with refractive error,
                                        squint, amblyopia ,congenital cataract will refer to our clinics for further
                                        management and assist them in surgeries if required
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="ver-middle left-info">
                                <div class="contact-left-block mx-4">
                                    <h4 class="title-eyecamp-small Heading-type-2 mb-2">Diabetic retinopathy screening camp</h4>
                                    <p>
                                        Diabetic Retinopathy is retinopathy (damage to the retina) caused by complications of diabetes mellitus, which can eventually lead to blindness. 90% of the DR incidence can be averted if there is early diagnosis and proper treatment and monitoring of the eyes.
                                    </p>
                                    <p>
                                        In a DR screening camp, a team of medical and paramedical personnel with sufficient equipment, who work linearly with the diabetes screening team, screen diabetic patients for DR. The major activities in community outreach camps are screening, diagnosing, advising patients with early DR on medical management, and referring those requiring further treatment to secondary and tertiary care centers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-md-6 col-xs-12">
                            <div class="bg-light-blue ver-middle left-info">
                                <div class="contact-left-block mx-4">
                                    <h4 class="title-eyecamp-small Heading-type-2 mb-2">School camp</h4>
                                    <p>
                                        School can conduct eye camps. our optometrist team will screen kids with
                                        refractive error ,provide them with glasses and kids with refractive error,
                                        squint, amblyopia ,congenital cataract will refer to our clinics for further
                                        management and assist them in surgeries if required
                                    </p>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="bg-light-blue ver-middle left-info2">
                                <div class="contact-left-block mx-4">
                                    <h4 class="title-eyecamp-small Heading-type-2 mb-2">LET’S CONNECT OVER FREE EYE
                                        TEST</h4>
                                    <p>
                                        Give us a shout-out for a Free Eye Test at your organization/institution at
                                        <a href="mailto:blinkzeyecare@gmail.com">blinkzeyecare@gmail.com</a> or enter
                                        your details in the form & we’ll get in touch with you.
                                    </p>
                                    <p><sup>*</sup>Strength of minimum 50 people required for the Eye Test Camp.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <form class="mt-3" action="{{route('save-camp-inquiry')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <b><label for="name">{{trans('messages.contact_name')}}
                                            <span class="required-star">*</span>
                                        </label></b>
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="{{trans('messages.please_enter')}} {{trans('messages.contact_name')}}"
                                           required maxlength="30">
                                </div>
                                <div class="form-group">
                                    <b><label for="email">{{trans('messages.contact_email')}}
                                            <span class="required-star">*</span>
                                        </label></b>
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="{{trans('messages.please_enter')}} {{trans('messages.contact_email')}}"
                                           required maxlength="30">
                                </div>
                                <div class="form-group">
                                    <b><label for="mobile">{{trans('messages.contact_mobile')}}
                                            <span class="required-star">*</span>
                                        </label></b>
                                    <input type="tel" class="form-control mt-2" id="mobile" name="mobile"
                                           placeholder="{{trans('messages.please_enter')}} {{trans('messages.contact_mobile')}}" pattern="[0-9]{10}" required title="Please enter valid 10 digit mobile number">
                                </div>
                                <div class="form-group">
                                    <b><label for="org_name">{{trans('messages.contact_org_name')}}
                                            <span class="required-star">*</span>
                                        </label></b>
                                    <input type="text" class="form-control" id="org_name" name="org_name"
                                           placeholder="{{trans('messages.please_enter')}} {{trans('messages.contact_org_name')}}"
                                           required maxlength="50">
                                </div>
                                <div class="form-group">
                                    <b><label for="website">{{trans('messages.contact_website')}}
                                            ({{trans('messages.optional')}} )</label></b>
                                    <input type="url" class="form-control" id="website" name="website"
                                           placeholder="{{trans('messages.contact_website')}}">
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                            class="btn btn-primary">{{trans('messages.contact_send')}}</button>
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

@endpush
