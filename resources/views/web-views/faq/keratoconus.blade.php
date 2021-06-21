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
                    <h3 class="main-title">What is Keratoconus?</h3>
                        <p>Keratoconus is a degenerative disorder of the eye in which structural changes within the cornea cause it to bulge outward like a cone.</p>
                        <p>Keratoconus can cause substantial distortion of vision, with multiple images, streaking and sensitivity to light all often reported by the patient. It is typically diagnosed in the patientís adolescent years; however it is also noticed in younger children infrequently. If afflicting both eyes, the deterioration in vision can affect the patientís ability to drive a car or read normal print.</p>

                    <h3 class="main-title">What Causes Keratoconus?</h3>
                        <p>The eye has tiny fibers of protein called collagen which help hold the cornea in place and keep it from bulging. When these fibers become weak, they are unable to hold the shape and the cornea becomes progressively more cone shaped.</p>
                        <p>Keratoconus appears to run in families. It is recommended to have your childís eyes checked for Keratoconus starting at age 10, in case you or your partner have had this condition.</p>
                        <p>The condition may also occur due to certain allergic conditions. Itís possible the condition could be related to chronic eye rubbing.</p>

                    <h3 class="main-title">What are the symptoms of Keratoconus?</h3>
                        <p>The earliest signs of keratoconus are usually blurred vision and frequent changes in eye glass prescription, or vision that cannot be corrected with glasses. Symptoms of keratoconus generally begin in late teenage years or early twenties, but can start at any time.</p>
                        <p>Another classic symptom of this condition is the perception of multiple ìghostî images where instead of seeing just one point, a person with keratoconus sees many images of the point, spread out in a chaotic pattern.</p>
                        <p>The changes in the shape of the cornea can happen quickly or may occur over several years. The changes can result in blurred vision, glare and halos at night, and the streaking of lights. In most people who suffer from keratoconus, both eyes are eventually affected, although not always to the same extent. It usually develops in one eye first and then later in the other eye.</p>
                        <p class="second-title">Other symptoms include:</p>
                        <ul>
                            <li>Increased light sensitivity</li>
                            <li>Difficultly driving at night</li>
                            <li>Eye strain</li>
                            <li>Headaches and general eye pain</li>
                            <li>Eye irritation, excessive eye rubbing</li>
                        </ul>

                    <h3 class="main-title">How Is Keratoconus diagnosed?</h3>
                        <p>Keratoconus can usually be diagnosed with a slit-lamp examination. The eye doctor may notice symptoms of this condition during the eye exam, which may include:</p>
                        <ul>
                            <li>Corneal thinning</li>
                            <li>Fleischerís ring (an iron colored ring surrounding the cone)</li>
                            <li>Vogtís striae (stress lines caused by corneal thinning)</li>
                            <li>Apical scarring (scarring at the apex of the cone)<br>To be certain that the patient is suffering from keratoconus, the doctor needs to measure the curvature of the cornea. This is done by:</li>
                            <li>Corneal topography: a computerized instrument that make three-dimensional ìmapsî of the cornea<br>A typical corneal topography map looks like this:</li>
                        </ul>
                        <p>Corneal topography has facilitated the diagnosis of keratoconus, helping detect the condition earlier, follow progression more accurately and differentiate keratoconus from other conditions.</p>
                        <p>Wearing glasses ñ In the early stages, wearing glasses with correction for astigmatism can be used.</p>
                        <p>Contact lenses ñ As the condition evolves, the increase in corneal thinning and bulging causes a highly irregular astigmatism. If glasses do not help improve the condition, correction is achieved through the use of rigid contact lenses.</p>
                        <p>C3R (Corneal Collagen Crosslinking with Riboflavin) ñ This is a non-invasive treatment to increase the strength of the cornea in order to prevent progression of the condition by cross linking the collagen matrix in the cornea using Riboflavin (Vit B2) along with UV light irradiation.</p>
                        <p>Intracorneal rings ñ When there is intolerance to contact lenses and when the condition continues to progress, intracorneal rings may be inserted in order to reinforce the cornea and reshape the surface of the eye.</p>
                        <p>Corneal transplant ñ in the advanced stages, either a partial thickness graft (Deep Anterior Lamellar Keratoplasty or DALK) or a full-thickness graft (Penetrating Keratoplasty or PK) may be necessary to salvage vision.</p>
                        <p>At NIO, the latest techniques in Corneal Transplantation are performed with good quality tissues. Our doctors strive to bring best possible eye care to the patients.</p>
                        <p>You can call our healthcare team on 020 25536369 / 41460100 to schedule an eye checkup and have your queries answered.</p>


                        
                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
