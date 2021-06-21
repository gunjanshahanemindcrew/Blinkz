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
    <link rel="stylesheet" href="{{asset('public/assets/front-end/css/faq.css')}}"/>
@endpush

@section('content')
    <section class="bg-transparent mt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                  
                        <p>Ophthalmic Plastic and Reconstructive Surgery is a specialized area of ophthalmology that deals with the management of deformities and abnormalities of the eyelids, lacrimal (tear) system, the orbit (the bony cavity surrounding the eye), and the adjacent face. An ophthalmic plastic and reconstructive surgeon is an ophthalmologist (medical doctor and eye surgeon) who has completed additional training in plastic surgery as it relates to the eyes and their surrounding structures.</p>
                        <p>Ophthalmic plastic surgery is plastic surgery of the structures surrounding the eye and face. Since such surgery can affects oneís ability to see, ophthalmic plastic surgeons are best qualified to perform these delicate surgeries and also provide any care that the eye itself may need.</p>
                        <p class="second-title">SPECTRUM</p>
                        <ul>
                            <li>Eyelids</li>
                            <li>Orbit</li>
                            <li>Lacrimal Disorder</li>
                            <li>Thyroid Eye Disease</li>
                            <li>Facial Aesthetic Surgeries</li>
                            <li>Botox& Fillers</li>
                            <li>Facial Rejuvenation</li>
                            <li>Trauma</li>
                        </ul>

                    <h3 class="main-title">What can I expect during my initial visit?</h3>
                        <p>You have to you make an appointment with Dr. Goyal for consultation. The hospital reception desk will provide you all of the information you will need. Most often, in the initial visit all your questions will be answered and you will be educates about your condition. Various treatment options, both surgical and non-surgical procedures will be explained to you.</p>
                        
                    <h3 class="main-title">If I decide to have surgery, when can it be scheduled?</h3>
                        <p>A. Your surgeon will explain how and when you can schedule the surgery. The surgery scheduling centre (SSC) would help your with the pre operative investigations, doís and doníts related to your specific surgery, availability of surgery dates and insurance pre certification (if needed).</p>

                    <h3 class="main-title">How much is the surgery going to cost?</h3>
                        <p>A. In order to provide you with fees for procedures, the surgeon needs to see and evaluate you. Each patient is different and has his or her own combination set of problems, options, concerns and structural/functional and aesthetic goals which must be addressed individually and personally. As a result, the doctor and staff will discuss with you the cost of various procedures and options at the time of your final consultation visit prior to surgery.</p>

                    <h3 class="main-title">When is payment for surgery due?</h3>
                        <p>A. If the service is not covered by insurance the hospital will require a deposit to confirm the date of surgery and then the balance after the surgery is performed.</p>

                    <h3 class="main-title">Can the hospital help me if I cannot bear the surgical expense?</h3>
                        <p>A. If the service is not covered by your insurance or if there is some other issue the SSC will refer your case to the management authorities for providing some type of finance. You may be required to submit a few documents to know the genuineness of your case.We encourage you to ask early in the conversation if this is an issue.</p>

                    <h3 class="main-title">Where will my surgery be performed?</h3>
                        <p>A. The hospital houses a state of art well equipped operation theatre which is accredited by NABH. All surgeries are perfomed in house on days depending on surgeon and patient preference.</p>

                    <h3 class="main-title">Q. Will my surgery be performed under general or local anesthesia?</h3>
                        <p>A. The surgeon will decide which is the most effective anesthesia for your particular situation and provide you information on this. All pediatric surgeries and most cases of trauma need general anesthesia.</p>

                    <h3 class="main-title">How much time should I plan to take off work following surgery?</h3>
                        <p>A. Normally most patients feel comfortable returning to work and resuming their social activities in about two weeks. This may vary depending on your type of procedure and how quickly you heal. Your operating surgeon will discuss this in your pre operative review and also on your first post operative visit.</p>

                    <h3 class="main-title">What should I avoid during my recovery period?</h3>
                        <p>A. Refrain from doing any activity that has the potential to raise your blood pressure such as exercising, bending, lifting heavy weights, straining and brisk walking. Do not drink alcoholic beverages. Do not take medicines or supplements which thin the blood. The doctor will inform you when it is safe to resume these activities.</p>

                    <h3 class="main-title">When will my first follow up appointment be scheduled?</h3>
                        <p>A. Usually the opearating surgeon will see you once from 1 ñ 7 days following surgery. The doctor will determine this on the day of your surgery. You will be given an appointment for your first post operative visit along with detailed instructions which you must follow carefully. Your printed discharge summary will carry all relavant information and emergency helpline numbers.</p>

                    <h3 class="main-title">When will my stitches be removed?</h3>
                        <p>A. Normally in about one week, or when the wound is adequately healed. This usually happens on your second post operative visit.</p>

                    <h3 class="main-title">Can I do anything to minimize bruising and swelling?</h3>
                        <p>A. Yes.</p>
                        <ul>
                            <li>Sleep in a reclining (not horizontal) position for 1 week following surgery to minimize the collection of fluids in the face and eyelids.</li>
                            <li>Follow the instructions you will be given about making and administering your cold and warm compresses. These will not only reduce bruising and swelling but will maximize and promote healing.</li>
                        </ul>




                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
