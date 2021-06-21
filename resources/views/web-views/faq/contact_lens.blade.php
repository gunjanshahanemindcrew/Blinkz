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
                    <h3 class="main-title">What are contact lenses?</h3>
                        <p>Contact lens is a light weight corrective, cosmetic or therapeutic device that is usually placed directly onto the cornea of the eye. Contact lenses have many benefits for the wearer including appearances and practicality. Many people choose to wear contact lens as opposed to eye glasses; they provide a wider field of vision and are more suitable for a number of seeing activities.</p>

                    <h3 class="main-title">Types of contact lens:</h3>
                        <p>1. Rigid Gas Permeable (RGP) Lenses</p>
                        <p>Brand: Purecon</p>
                        <ul>
                            <li>Colour Lensó-Soft Lens</li>
                            <li>Toric Lensó-Soft Lens</li>
                            <li>Spherical Lensó-Soft Lens</li>
                            <li>Yearly Disposableó-Soft Lens</li>
                            <li>Monthly Disposableó-Soft Lens</li>
                            <li>UV Filter Lensó-Soft Lens</li>
                            <li>Bandage lensó-Soft Lens</li>
                        </ul>
                        <p>2. Prosthetic Lens</p>
                        <p>Brand: Bausch & Lomb</p>
                        <ul>
                            <li>Yearly Disposableó-Soft Lens</li>
                            <li>Monthly Disposableó-Soft Lens</li>
                            <li>Toric Lensó-Soft Lens</li>
                            <li>Multifocal Lensó-Soft Lens</li>
                            <li>Silicon Hydrogeló-Soft Lens</li>
                            <li>Colour Contact Lensó-Soft Lens</li>
                        </ul>
                        <p>3. Bandage Contact Lens</p>
                        <p>Brand: Conta Sofew</p>

                    <h3 class="main-title">Insertion of Contact Lenses</h3>
                        <ul>
                            <li>Place the wet, clean lens on the tip of the index finger of your dominant hand. Be sure the lens is correct side out. The edges should face upwards (cup shape), and not outwards (saucer shape)</li>
                            <li>Pull down the lower lid of your eye with the middle of the same hand. Use your other hand to hold the upper lid (along with lashes) firmly open.</li>
                            <li>Look directly at the lens or into a mirror and place the lens directly on the cornea (Black portion of eye)</li>
                            <li>Release your lower lid first and then slowly release you upper lid look down and blink normally.</li>
                        </ul>
                        <p>In case you feel an abnormal discomfort, remove the lens and check that it is not inside out.</p>
                        <p>If discomfort persists, remove lens immediately and seek advice from your eye care practitioner.</p>

                    <h3 class="main-title">Removal of Contact Lenses</h3>
                        <ul>
                            <li>Look up and pull the lower lid of your eye down with the middle finger of your dominant hand.</li>
                            <li>Place your index finger on the lower edges of the contact lens and slide it down to the white of your eye.</li>
                            <li>Squeeze the lens lightly between your finger and thumb and remove it out of your eye gently.</li>
                        </ul>

                    <h3 class="main-title">Some handy wear and care tips for your contact lens</h3>
                        <p>Do’s</p>
                        <ul>
                            <li>Handle your lenses with finger tips avoiding contact with finger nails.</li>
                            <li>Wash, rinse, and dry your hands before handling lenses.</li>
                            <li>Use lint free cotton towels and tissues and avoid pump and moisturizing soap</li>
                            <li>Use only approved contact lens solutions for lubricating or wetting your lenses.</li>
                            <li>Always use fresh solution in your lens case when disinfecting your lenses.</li>
                            <li>Ask your contact lens practitioner about wearing lenses during water activities and other sports. In some cases alternative lenses may be prescribed for sport, other hobbies and specific work related activities</li>
                            <li>Store lens and solution at room temperature and keep out of the reach of children.</li>
                            <li>Contact lenses wear out with time and should be replaced regularly.</li>
                            <li>Do remove, wet and reinsert the lenses at least once a day after about 7-8 hours of wear</li>
                            <li>Schedule and keep follow-up appointments with your contact lens practitioner. You should have eye examinations every 6 x to 12 months or as recommended by your contact lens practitioner.</li>
                            <li>Contact lens storage cases can be a source of bacteria and other microbial growth. Lens cases should be cleaned, rinsed and allowed to air dry each time the lenses are removed. Replace the lens case frequently.</li>
                            <li>Disposable lenses should be thrown away after the recommended wearing period prescribed by your contact lens practitioner.</li>
                        </ul>
                        <p>Don’ts</p>
                        <ul>
                            <li>Never wear lenses longer than prescribed.</li>
                            <li>Do not wear daily lenses while sleeping.</li>
                            <li>Do not put the lenses in your mouth or use saliva to wet them.</li>
                            <li>Do not wear your lenses overnight unless recommended by your contact lens practitioner. Wearing contact lenses overnight increases the risk of complications.</li>
                            <li>Never use non-sterile home-prepared saline. The use of home-prepared saline with contact lenses has been associated with serious infections.</li>
                            <li>Do not get lotions, creams, sprays or chemicals in your eyes or on your lenses. It is best to insert lenses before applying make-up and remove them before removing make-up. Water- based and gel-based cosmetics are less likely to damage lenses than oil-based products.</li>
                            <li>Do not apply eyeliner on the inside rim of the eyelids.</li>
                            <li>Do not re-use daily disposable lenses.</li>
                            <li>Stop using contact lens in case of eye infection or allergy.</li>
                        </ul>
                        <p>If your eyes become red, irritated, painful, abnormally light sensitive or if your vision worsens while wearing lenses immediately remove the lens and consult a contact lens practitioner.</p>


                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
