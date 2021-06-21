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
                    <h3 class="main-title">What is Congenital Cataract?</h3>
                        <p>Congenital cataract is, clouding of the lens of the eye, that is present at birth. The white opacity seen in a childís eye may be due to several reasons; however the most common reason is cataract. If such opacity is seen in a childís eye since birth, it is called congenital cataract.</p>  

                    <h3 class="main-title">What causes Congenital Cataracts?</h3>
                        <p>Most common reason for a new born baby to have cataract is maternal infections acquired during pregnancy called TORCH group of infections. Out of these, rubella, also known as German measles is an important cause for congenital cataracts in India.</p>
                        <p class="second-title">Other causes are:</p>
                        <ul>
                            <li>Heredity: Approximately one eighth of bilateral cataracts are inherited. Families with history of congenital cataracts should seek genetic counseling.</li>
                            <li>Metabolic disorders and syndromes: Cataracts are also seen in children with abnormalities of other systems of the body and eye.</li>
                            <li>Injury to the eye: A blunt or penetrating injury to the eye can lead to this condition.</li>
                            <li>Steroids: When used for a long time, either systemically or through eye drops, steroids can cause cataract in one or both eyes in young children. Children often are steroid responders and are more prone to various side effects of steroids taken for a long time.</li>
                        </ul>
                        <h3 class="main-title">What are the symptoms of Congenital Cataract?</h3>
                        <ul>
                            <li>Gray or white cloudiness of the pupil (which is normally black)</li>
                            <li>Infant may not be able to see (if cataracts are in both eyes)</li>
                            <li>No ìRed eyeî glow of the pupil in photos</li>
                            <li>Unusual rapid eye movements (nystagmus)</li>
                        </ul>

                    <h3 class="main-title">What are the implications of congenital cataract?</h3>
                        <p>Cataract surgery involves removing the cataract and replacing with an artificial lens implant.</p>
                        <p>Cataracts in infants or children are not uncommon and can lead to moderate to severe visual impairment. Infants with complete cataracts in both eyes often show very little ëvisual interestí and have delayed development. Lazy eye can develop in some cases, called ìStimulus deprivation amblyopiaî, because due to the presence of cataract, the brain receives no visual information thereby making the eye ëlazyí. Such lazy eyes are difficult to treat due to the severity of amblyopia. Unsteady gaze or nystagmus also develops which indicates poor vision.</p>

                    <h3 class="main-title">What are the treatment options for congenital cataract?</h3>
                        <p>Moderate to severe cataracts that affect vision, or a cataract that is in only one eye, will need to be treated with surgery. Significant cataracts whether present in one eye or both eyes, should be removed urgently if the baby is too young. In slightly older children, timing of surgery depends on the duration of visually significant opacity.</p>
                        <p>Babies who are younger than 2 years of age are given glasses or contact lenses after surgery, till they attain 2 years of age, after which intraocular lenses can be implanted in the eye. Parents are first taught how to insert and remove contact lenses and also how to maintain hygiene, which is of utmost importance. Once they master the insertion and removal process, the lenses are handed over to them with clear instructions to consult the doctor if they face any difficulties in handling the lens or if the baby does not seem comfortable with lenses on.</p>
                        <p>Finally, once the child crosses 2 years of age, lens implantation is performed as a second stage procedure. If the cataract is seen in a younger child but only in one eye, usually intraocular lens is inserted inside the eye irrespective of the age of the child, after which the child will require glasses.</p>
                        <p>Patching of the normal eye, to force the child to use the weaker eye, is often needed to prevent amblyopia. The infant may also need to be treated for the inherited disorder that is causing the cataracts.</p>

                    <h3 class="main-title">What care should I follow after the surgery?</h3>
                        <ul>
                            <li>Your baby will be given a short course of steroid eye drops. Please use them only as advised and for the stipulated time period. Children tend to have steroid-inflammatory reaction hence these eye drops are very important.</li>
                            <li>Keep the eyes clean and do not miss out on the timings of eye drops.</li>
                            <li>Use of glasses or contact lenses is mandatory and should be followed meticulously.</li>
                            <li>Patching of the good eye as prescribed should be followed.</li>
                            <li>Children are often uncooperative for all these post-operative necessities. Parents must cajole them and coax them into following all the above instructions.</li>
                            <li>If there is discharge from the childís eye, the child is rubbing the operated eye all the time, or the eye is looking reddish, please consult your pediatric ophthalmologist immediately.</li>
                            <li>One must remember that even though there are newer techniques of cataract removal and good quality intraocular lenses, management of this condition does not end with surgery only. Proper postoperative care, use of glasses, and therapy for lazy eye, is extremely important for actual rehabilitation of the affected children. They must be followed years after surgery as some complications may arise and early detection and treatment is the key to tackling theses complications.NIO is one of the best eye care hospitals in Pune for cataract surgery, where experienced doctors provide patients with quality health care services and new technological advancements.</li>
                        </ul>
                        <p>You can call our Healthcare team on 02025536369 / 41460100 if you have any queries regarding your childís eye.</p>

                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
