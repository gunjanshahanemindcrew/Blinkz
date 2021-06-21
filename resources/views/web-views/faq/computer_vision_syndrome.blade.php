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
                    <h3 class="main-title">What is ìcomputer vision syndromeî?</h3>
                        <p>The modern work and personal life involves staring at a computer monitor for hours on end. And inevitably, all of that staring can put a real strain on your eyes.</p>    
                        <p>Computer Vision Syndrome commonly known as CVS includes the eye problems caused by computer use. This condition likely doesnít cause permanent eye damage, but it can still affect computer usersí comfort.</p>    

                    <h3 class="main-title">How Can the Computer Screen Affect Vision?</h3>
                        <p>When working on a computer, your eyes need to continuously focus, move back and forth, and align itself with what you are seeing. With the computer screenís elements such as screen contrast, flicker, and glare, working on a computer is more challenging to the eye than reading a book or newspaper. Computer eye problems are more likely to occur if you already have an eye problem such as nearsightedness or astigmatism or if you need glasses but donít wear them or wear the wrong prescription for computer use.</p> 
                        <p>Computer vision syndrome is similar to other repetitive stress injuries and usually occurs when youíre carrying out the same motion over and over again. Just like those other repetitive stress injuries, computer vision syndrome can get worse the longer you continue the activity.</p>

                    <h3 class="main-title">What are the symptoms of CVS?</h3>
                        <ul>
                            <li>Eye strain and redness</li>
                            <li>Blurred or Double vision after computer use</li>
                            <li>Dry, red eyes</li>
                            <li>Eye irritation</li>
                            <li>Headaches</li>
                            <li>Neck or back pain</li>
                        </ul>
                        <p>Monitor Location: Ideally more than 25 inches from eye & 6 inches below the horizontal eye level.</p>
                        <p>Anti-glare screen: Will decrease the amount of light reflected from the screen.</p>
                        <p>Light effect: Use suspended lights from ceiling & windows with shades, blinds or curtains. Avoid light hitting directly on eyes.</p>
                        <p>A.C. Distance: Avoid sitting at a location with direct blow of air on eyes from a blower or A.C or for a long period in a room with low humidity.</p>
                        <p>20-20-20 rule: Take short breaks for your eyes every 20 minutes between your work for 20 seconds then look at objects that are at least 20 feet away.</p>
                        <p>Blinking: Blink frequently to keep the front surface of your eye moist.</p>
                        <p>NIO is one of the best eye hospitals in Pune, and it can prove to be the perfect choice for the treatment of your eye related problems.</p>
                        <p>You can call our healthcare team on 02025536369 / 41460100 to schedule an eye checkup, or if you have any questions.</p>

                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
