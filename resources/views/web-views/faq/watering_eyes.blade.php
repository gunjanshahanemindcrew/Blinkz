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
                    <h3 class="main-title">What is ìwatering eyeî?</h3>
                        <p>In this condition, tears flow out of the eye constantly. It usually happens if the childís tears donít drain away properly.<br>o3o.cc/payday-advances-online (link is external)</p>

                    <h3 class="main-title">How tears work?</h3>
                        <p>Tears are produced to keep the eyes moist. They are produced in small glands (lacrimal glands) located underneath the upper eyelids. When a person blinks, tears get spread over the front of the eyes. The tears then pass into tiny channels known as canaliculi, before draining into a tear (nasolacrimal) ìsacî and flowing down the tear duct into the nose. Watering eyes are the result of problems with this process.</p>

                    <h3 class="main-title">What causes ìwatering eyeî?</h3>
                        <p>In infants, the most common cause of persistent watery eyes is a blocked or incompletely opened tear duct. Corneal diseases or congenital glaucoma may also lead to this condition.</p>

                    <h3 class="main-title">How can it be treated?</h3>
                        <p>Conservative management consists of waiting for spontaneous resolution with regular lid hygiene & massage and occasional use of antibiotic drops. Lacrimal sac massage is an important part of early treatment. The technique, which was first described by Creiger in 1923 is called Creiger maneuver. It consists of applying pressure over the lacrimal sac with the finger sliding down the nose towards the mouth. This attempts to break obstruction in the nasolacrimal duct by hydrostatic pressure. 10 strokes at a time should be applied, 4 times a day (=40 stokes/day)</p>

                    <h3 class="main-title">For how many days should I continue Lacrimal sac massage?</h3>
                        <p>Several studies have documented high success rate with Lacrimal sac massage continued till the infant become one year old. By one year of age, more than 96% cases get resolved with sac massage alone</p>

                    <h3 class="main-title">What is to be done if watering persists beyond one year of age despite sufficient massage?</h3>
                        <p>A small procedure called probing is done under General Anesthesia, whereby a thin long metal probe is passed through the lacrimal drainage system in an attempt to break the obstruction. It is safe and a simple procedure and does not take much time. However, if watering persists, probing may need to be repeated second or the third time.</p>
                        <p>In cases where repeated probing does not resolve the problem, other surgical procedures like Ballon Catheter dilatation or dacryocystorhinostomy (DCR) may need to be deployed as directed by the doctor.</p>
                        <p>NIO is one of the best eye hospitals in Pune, and it can prove to be the perfect choice for treatment of your childís eye.</p>
                        <p>You can call our healthcare team on 02025536369 / 41460100 to schedule an eye checkup for your child.</p>

                        
                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
