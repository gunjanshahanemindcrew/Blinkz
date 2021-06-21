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
                    <h3 class="main-title">What is Amblyopia?</h3>
                        <p>The word Amblyopia is derived from Greek. It means dullness of vision, or lazy eye.</p>
                        <p>In this condition, vision does not develop properly in one eye. If itís left untreated, a childís vision may never develop optimally in that eye.</p>  

                    <h3 class="main-title">What causes Amblyopia or Lazy eye?</h3>
                        <p>When an image from one eye does not reach the brain frequently and distinctly over a period of months or years, the brain chooses to ignore that input from the eye. As the brain keeps ignoring that eye, it turns lazy</p>
                        <p>Strabismus is the most common cause of amblyopia. There is often a family history of this condition. A large plus or minus cylindrical power in one eye or asymmetrical numbers in both eyes can also cause this condition to occur.</p>

                    <h3 class="main-title">What are the symptoms of Amblyopia?</h3>
                        <p>Usually, amblyopia or lazy eye does not cause symptoms. But the child may:</p>
                        <ul>
                            <li>Have an eye that wanders or does not move with the other eye.</li>
                            <li>Have eyes that do not move in the same direction or fix on the same point.</li>
                            <li>Experience inability to judge depth correctly.</li>
                            <li>Cry or complain when one eye is covered.</li>
                            <li>Squint or tilt the head to look at something.</li>
                            <li>Have an upper eyelid that droops.</li>
                        </ul>

                    <h3 class="main-title">How is Amblyopia diagnosed?</h3>
                        <p>Amblyopis can be detected with the help of an eye exam. If the exam shows that the child has poor vision in one eye, the doctor may diagnose amblyopia after ruling out other causes.</p>
                        <p>To help make the diagnosis, the doctor should be told about any symptoms, or if your child has trouble reading, seeing the board at school, or watching TV. It is recommended that children be made to undergo an eye checkup between the ages of 3 and 5, and earlier in some cases. If you worry about your childís eyes or vision, take him or her to an eye doctor. No child is too young for an eye exam.</p>

                    <h3 class="main-title">What are the treatment options for Amblyopia?</h3>
                        <p>Amblyopia can be cured fully provided it is detected early and the treatment regimen is followed faithfully. The treatment aims to achieve maximum visual acuity for an individual.</p>
                        <p>The treatment consists of removing any ambloygenic factors such as cataract, drooping of eyelids etc., and correction of significant refractive errors by giving glasses and encouraging the child to use the lazy or amblyopic eye. This is done by forcing the lazy eye to see. This can be done by the following treatment methods:</p>
                        <p>1. Patching</p>
                        <p>Patching of the good eye is the mainstay of the treatment. This compels the amblyopic eye to see, and the brain is left with no choice but to analyse the inputs from this eye. The treatment needs to be followed everyday for at least 6 months to a year, depending on the age of the child, the severity of the lazy eye and how much the child is able to cooperate. Presently, this form of treatment is easy, effective and inexpensive.</p>
                        <p>2. Penalization</p>
                        <p>This treatment is used for children who absolutely do not comply with patching. It involves blurring the vision of the good eye through the use of medications and/or spectacle manipulation, thereby encouraging use of amblyopic eye. However, this modality cannot be used long term due to obvious side effects of long term use of eye drops.</p>
                        <p>3. Synaptophore exercises</p>
                        <p>These are machine exercises in which flashes ofn light in the form of a fan are projected onto the patientís retina. This stimulates the use of the lazy eye.</p>

                    <h3 class="main-title">What are the implications of Amblyopia?</h3>
                        <p>The psycho-social implications of this condition are tremendous. The patient may have reduced vocational and socio economic opportunities because normal vision in both eyes is required for many jobs. Besides that, people suffering from Amblyopia also face more risk of blindness in case of accident or injury to the normal eye.</p>

                    <h3 class="main-title">What happens after therapy?</h3>
                        <p>Once vision is improved by treatment, we recommend maintenance therapy by continuing patching for a few hours every day to minimize risk of recurrence till 10 years of age. Participation of parents in understanding and execution of Amblyopia treatment is an important factor in improving your childís vision.</p>
                        <p>NIO is one of the best eye hospitals in Pune, and it can prove to be the perfect choice for treatment of Amblyopia.</p>
                        <p>You can call our healthcare team on 02025536369 / 41460100 to schedule an eye checkup for your child.</p>

                        
                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
