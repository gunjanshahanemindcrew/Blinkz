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
                    <h3 class="main-title">What is ocular allergy?</h3>
                        <p>Allergic ocular disease or Vernal keratoconjunctivitis (VKC) is a common problem in children, often occurring in association with asthma, allergic rhinitis (sneezing and runny nose) and atopic dermatitis (itchy rash on body). The condition, which is also called spring catarrh, occurs on a seasonal basis and is seen getting aggravated in summer. It is a common self-limiting disease, seen frequently in males between ages 5 to 20 years.</p>

                    <h3 class="main-title">What causes ocular allergy or Vernal keratoconjunctivitis?</h3>
                        <p>Though the exact cause is not known, it is thought to be of allergic origin mostly sunlight & dust, pollens. This condition can be the result of an allergic response thatís triggered by an over-reaction of the bodyís immune system to allergens, or foreign bodies. The immune system releases histamines and other mediators, resulting in itching, burning, and runny eyes that may become red and inflamed.</p>

                    <h3 class="main-title">What are the symptoms of ocular allergy?</h3>
                        <p>Marked itching and redness of eyes of recurrent and chronic nature are hallmarks of internal ocular disease of allergic origin. Other non specific signs like watering, stinging, burning or inability to bear light are also seen.</p>

                    <h3 class="main-title">How is Vernal Keratoconjunctivitis diagnosed?</h3>
                        <p>The eye doctor will diagnose VKC by listening carefully to your childís complaints and keeping in mind factors as the childís age, the climate in which he or she lives, and seasonal changes. Along with this, the doctor will also examine the eye closely by magnifying the structures of your childís eye.</p>

                    <h3 class="main-title">What are the treatment options for ocular allergy or Vernal keratoconjunctivitis?</h3>
                        <p>Although there is no specific treatment it can be controlled with topical steroids. The lowest concentration for the least amount of time is used. Cold compressors and oral anti-histaminics may also be helpful. Although the course may last several years, the recovery is usually excellent. Being a self limiting disease, it cannot be completely cured during its course, but the symptoms can only be treated to give some respite for the patient.</p>

                    <h3 class="main-title">How serious is ocular allergy?</h3>
                        <p>VKC is not known to cause permanent blindness in the patient as such. However, there are certain complications which can be vision threatening. Constant rubbing of the eyes can render the cornea thin (outer surface of the eye) leading to a serious condition called Keratoconus. Indiscriminate use of steroids can cause ulceration (shield ulcer) which can have vision threatening consequences.</p>

                    <h3 class="main-title">Word of caution about using steroids:</h3>
                        <p>Steroids are the mainstay of treatment of VKC. Even though they are wonder drugs, sometimes they can act like a two edged sword. Too much &/or usage for too long can harm the eye due to increasing the intra ocular pressure leading to glaucoma, opacification of lens which can further lead to cataract, ulceration of cornea, and make the eye prone to infection. All these complications though remediable to some extent, can cause considerable harm leading to irreparable vision loss.</p>
                        <p>It is recommended that these simple ground rules be followed:</p>
                        <ul>
                            <li>Never instill steroid drops without competent medical supervision.</li>
                            <li>Follow the schedule of dosage as prescribed by your doctor.</li>
                            <li>Maintain your follow up schedule as asked for by your doctor</li>
                            <li>In case of any untoward effect noted, contact you doctor immediately</li>
                        </ul>
                        <p>You can contact our healthcare team on 02025536369 / 41460100 to schedule an eye checkup and have your queries answered.</p>

                        
                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
