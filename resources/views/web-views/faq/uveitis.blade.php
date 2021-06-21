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
                    <h3 class="main-title">What is Uveitis?</h3>
                        <p>Uveal tract is the vascular middle coat of the eye ball. Inflammation of the uveal tract is called uveitis. Department of ocular immunology and inflammation (or Uveitis) has specialists who take care of patients with Uveitis in close coordination with other specialities in medicine such as rheumatology, infectious disease specialists, internists etc.</p>  

                    <h3 class="main-title">What are the symptoms of Uveitis?</h3>
                        <p>Symptoms of uveitis may include:</p>
                        <ul>
                            <li>Redness and irritation in the eye</li>
                            <li>Blurred vision</li>
                            <li>Eye pain</li>
                            <li>Increased sensitivity to light</li>
                        </ul>
                        <p>Left untreated, uveitis may permanently damage your vision.</p>

                    <h3 class="main-title">What are the causes of Uveitis?</h3>
                        <p>Uveitis, usually occurs if there is associated systemic disease in the patient, either an autoimmune disease or an infectious disease. Many a times, it can be idiopathic, i.e. without any cause.</p>
                        <p>Treatment of Uveitis:</p>
                        <p>Medical management of patients with uveitis involves continuous monitoring/control of their ocular inflammation which may require systemic treatment with drugs such as steroids and immunosuppressives.</p>
                        <p>The condition also needs close monitoring of the systemic disease in conjunction with the physicians. Management of uveitis with complicated cataract, is a specialized surgery performed exclusively by the Department of ocular immunology and inflammation. Uveitis with glaucoma, uveitis with vitreoretinal complications are handled in close cooperation with specialized Consultants in the respective fields. Our specialized faculty takes compassionate care of patients with this chronic disease.</p>

                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
