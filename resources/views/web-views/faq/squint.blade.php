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
                    <h3 class="main-title">What is squint?</h3>
                        <p>Normally, our eyes are straight while looking at any object. However, in some children, while looking straight, the eyes do not see in the same direction. While one eye looks straight ahead, the other eye is turned either inwards or outwards. This is called a squint.</p> 

                    <h3 class="main-title">Why does squint occur?</h3>
                        <p>This can happen due to various reasons, letís take a look at some of them-</p>
                        <ul>
                            <li>Sometimes a squint is seen right since birth or within first six months from birth, where in both eyes are turned inwards towards the nose.</li>
                            <li>The other frequent cause of squint is having high plus power glasses. Such children have glasses of + 4-5D or even higher.</li>
                            <li>The presence of any other eye problem which hampers vision can also give rise to squint, where in the eye deviates more commonly outwards towards the ear.</li>
                            <li>Some other causes are- spectrum of syndromes such as Duaneís retraction syndrome, Mobius syndrome, Brown syndrome which have squint as the main feature.</li>
                            <li>Over action or under action or restriction of muscles can also cause eyes to squint.</li>
                        </ul>
                        <p>You can contact our healthcare team on 02025536369 to schedule an eye checkup and have your queries answered.</p>

                    <h3 class="main-title">What are the types of squint?</h3>
                        <p>There are three types of squint- convergent squint, essential infantile esotropia, and divergent squint.</p>
                        <ul>
                            <li>Sometimes a squint is seen right since birth or within first six months from birth, where in both eyes are turned inwards towards the nose. This is called convergent squint.</li>
                            <li>The presence of some other eye problems which hampers vision can give rise to a squint, wherein the eye deviates outwards towards the ear. This type of squint is known as divergent squint. It can also develop if the patient has lost his/ her eye sight of one eye due to an injury, accident, or other causes.</li>
                        </ul>

                    <h3 class="main-title">What are the treatment options available for squint?</h3>
                        <ul>
                            <li>Initially a complete detailed eye examination is necessary. Whenever short sightedness is detected, wearing glasses is the treatment, as many a times the squint decreases or disappears once the person starts wearing glasses.</li>
                            <li>When other eye problems are noted in the patient, he/ she should be treated with medication for the concerned problem. Frequently, in such cases the squint may take care of itself once all eye problems are solved.</li>
                            <li>In case if there is no need for glasses or no underlying pathology leading to squint is noted, surgery for the squint is necessary.</li>
                        </ul>
                    
                    <h3 class="main-title">When is it advisable to operate squint?</h3>
                        <p>Many factors are considered before deciding the timing for a squint surgery.</p>
                        <ul>
                            <li>If the patient is less then two years of age and squints since birth, or since sixth month of age with no other eye problem, he or she must be operated as early as possible.</li>
                            <li>If the patient is older than two years and squints with one eye most of the times, then that eye is prone to become a lazy eye. In such cases, patching needs to be instituted first, so as to train the lazy eye to see. Squint surgery can be performed after waiting for few weeks to months of patching.</li>
                            <li>Patients who have grown out of the lazy eye treatment amenable stage can be operated anytime.</li>
                        </ul>

                    <h3 class="main-title">Considerations before surgery</h3>
                        <ul>
                            <li>Squint surgery is a dynamic process. The over acting muscles are weakened and weak muscles are strengthened. The muscles have their own blood supply, and without compromising both, surgery is performed on both eye muscles. Hence, many a times, a second or third stage operation may be required.</li>
                            <li>Redness of the eye may persist for a month. There is no ìno stitchî surgery available for a squint yet.</li>
                            <li>The pressure inside the eye may increase in the post operative period needing medication and regular follow up.</li>
                        </ul>
                        <p>vTreatment, if required, should be performed on time, as psychologically, a squint in a patient saps away his/her confidence and self esteem.</p>
                        <ul>
                            <li>In children, squint surgery is performed under general anesthesia. Thus, the risk of the same must be borne in mind.</li>
                        </ul>

                    <h3 class="main-title"></h3>
                        <ul>
                            <li>People suffering from a squint with very low vision in the squinting eye may have recurrence of the squint in that eye after surgery. There is no way to tell when the squint would recur.</li>
                            <li>Regular follow up after the surgery is important. Patching and exercises, if necessary, needs to be done as advised by your ophthalmologist.</li>
                            <li>A squint surgery does not improve the vision. It only corrects the squint.</li>
                        </ul>
                        <p>NIO is one of the best hospitals for squint surgery in Pune, thanks to its experienced team of Doctors and latest surgery equipments.</p>
                        <p>You can call our healthcare team on 020 25536369 / 41460100 to schedule an eye check up</p>

                        
                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
