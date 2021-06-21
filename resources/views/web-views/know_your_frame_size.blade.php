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
     .content-titel{
        /*text-align: center;*/
        margin:20px auto;
        font-size: 24px; 
     }   
     .over-siz-content{
        padding: 0 0 30px 0;
     }
     .over-siz-content-img{
        text-align: center;
     }
     .over-siz-content ul{
        margin-bottom: 32px;
     }
     .over-siz-content ul li{
        margin-bottom: 6px;
     }
     .responsive_table table{
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        width: 100%;
        margin-bottom: 15px;
        margin-top: 25px;
     }
     .responsive_table table thead tr{
        border: 1px solid #ddd;
     }
     .responsive_table table thead tr th{
        text-transform: uppercase;
        padding: .625em;
        text-align: center;
        border: 1px solid #eaeff3;
        font-size: .85em;
        font-weight: bold;
     }
     .responsive_table table tbody tr {
        border: 1px solid #ddd;
        padding: .35em;
     }
     .responsive_table table tbody tr td{
        padding: .625em;
        text-align: center;
        border: 1px solid #eaeff3;
        font-size: 12px;
     }

    </style>
@endpush

@section('content')
    <!-- Hero (Banners + Slider)-->
<section class="bg-transparent mt-4 mb-4">
    <div class="container">
        <div class="col-12">
            <h6 class="content-titel" style="text-align: center;">Our frame sizes</h6>
            <div class="over-siz-content">
                <p>All our frames are designed keeping in mind an ideal Indian face. Most of our collections fall in Medium Size Category.</p>
                <p>We have over 1 million happy customers. Yet, in case you're uncomfortable ordering due to size/fitment issues, don't worry. All our products come with a 14-Day No Questions Asked Returns Policy. You can return the frame & we'll refund your complete money including the money you have paid for Lenses. Yes, you read it right! We refund even the Lenses Price, if you are not happy with the fit.</p>
                <p>You may also take help from the quick & easy ways to find your frame size below -</p>
            </div>
            <h6 class="content-titel">1. Picking Size from Current Frames</h6>
            <div class="over-siz-content">
                <p>Reading your frame size is easy. Take your current pair of eyewear which fits well on your face and look on the insides of the temples. Find the set of numbers reflecting the order of measurement e.g. 53-15-140. These are the lens width, bridge width and temple length respectively.</p>
                <p class="over-siz-content-img">
                    <span>
                        <img src="https://djgn3cwvdf3zo.cloudfront.net/eyeglasses-size11jan.jpg">
                    </span>
                </p>
                <p>
                    <strong>Lens Width/Diameter</strong> – This is the horizontal width of each lens in millimeters. It ranges between 40-62mm.
                </p>
                <p>
                    <strong>Bridge Width</strong> – This is the distance between the two lenses in millimeters. It ranges between 14-24mm.
                </p>
                <p>
                    <strong>Temple Length</strong> – This is the length from screw to temple tips. It ranges between 110-150mm.
                </p>
            </div>
            <h6 class="content-titel">2. Measuring Frames with Ruler</h6>
            <div class="over-siz-content">
                <p>There may be a possibility that the measurement on your current frames is faded or is not printed. In this case, you will need a millimeter ruler or a cloth measuring tape to measure the frame yourself. Find size as shown above and purchase your next set of eyeglasses or sunglasses without any hassle.</p>
                <p class="over-siz-content-img">
                    <span>
                        <img src="https://djgn3cwvdf3zo.cloudfront.net/size-guide_img_measuringframe_5jan18.jpg">
                    </span>
                </p>
            </div>
            <h6 class="content-titel">3. Finding Frame Size by Clothing Size</h6>
            <div class="over-siz-content">
                <p>Broadly, you can also follow the below chart to find your frame size.</p>
                <ul>
                    <li>If you wear small-sized attires, frames with less than or equal to 50mm of lens-width would fit you easily in case of eyeglasses. For sunglasses the width of 55mm or less should be your choice.</li>
                    <li>Similarly, for people who go for large-sized clothes, must opt for spectacles with lens-width or diameter of 55mm or more. In case of shades, this will be 65mm or more.</li>
                    <li>People who wear M size, should get frames between 51mm to 54mm of lens-width for eyeglasses and 56mm to 64mm for sunglasses.</li>
                </ul>
            </div>
            <h6 class="content-titel">Eyeglasses Size Chart</h6>
            <div class="responsive_table">
                <table width="100%">
                    <thead>
                        <tr>
                            <th>SMALL</th>
                            <th>MEDIUM</th>
                            <th>LARGE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>50mm or less</td>
                            <td>51mm-54mm</td>
                            <td>55mm or more</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h6 class="content-titel">Sunglasses Size Chart</h6>
            <div class="responsive_table">
                <table width="100%">
                    <thead>
                        <tr>
                            <th>SMALL</th>
                            <th>MEDIUM</th>
                            <th>LARGE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>55mm or less</td>
                            <td>56mm-64mm</td>
                            <td>65mm or more</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h6 class="content-titel">4. Using Credit Card to Measure Frame Size</h6>
            <div class="over-siz-content">
                <p class="over-siz-content-img">
                    <span>
                        <img src="https://djgn3cwvdf3zo.cloudfront.net/size-guide_img_creditcard_5jan18.jpg">
                    </span>
                </p>
                <p>Know your frame size while you’re on-the-go with your credit or debit card. Surprisingly, the standard width of the card can be compared to a medium (M) sized frame.</p>
                <p>To measure, place one edge of the card at the center of your nose and see where it ends. If the card ends at the tip of your eyes, a medium sized frame would fit you perfectly. If the card width extends the eyes, a small size would be perfect for you. Just in case the card edge finishes before your eyes end, you need a (L) large-sized frame.</p>
            </div>
            <h6 class="content-titel">5. Still Unsure About the Exact Size?</h6>
            <div class="over-siz-content">
                <p>Don’t worry. Give us a call on 919325892542 or mail @ <a href="mailto:blinkzeyecare@gmail.com">blinkzeyecare@gmail.com</a> and we’ll together find your perfect frame-size.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')

@endpush
