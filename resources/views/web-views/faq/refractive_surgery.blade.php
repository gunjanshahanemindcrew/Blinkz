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
                        <p>A refractive error is the term for a problem with the eyeís ability to focus on images correctly. Light enters the eye through the cornea at the front of the eye, passes through the lens and is focused on a point on the retina at the back of the eye. The retina converts the light into an impulse that travels from the retina along the optic nerve to the brain, which interprets the information as a visual image. There are a number of conditions where objects can appear blurred because of focusing problems. Non-surgical management of these conditions is with prescription glasses or contact lenses.</p>
                        <p>In the early 1980s, Dr. Rangaswamy Srinivasan, known as the father of LASIK, discovered that an ultraviolet excimer laser could etch living tissue with great precision without causing any damage to the surrounding area. The Indian-American doctor named this phenomenon Ablative Photodecomposition (APD), after which ophthalmic surgeons refined it to arrive at the corrective eye surgery generically called Lasik (which stands for Laser Assisted In-Situ Keratomileusis) for the benefit of millions of short-sighted people worldwide.</p>

                    <h3 class="main-title">What is refractive surgery?</h3>
                        <p>Refractive surgery is a surgical procedure used to correct the eyeís refractive defects that lead to conditions such as Short-sightedness (Myopia), Long-sightedness (Hyperopia), Presbyopia or Astigmatism. In this type of surgery, the ophthalmologist uses a microsurgical instrument and a laser to reshape the cornea in the front of the eye. This improves the way the eye focuses light rays onto the retina at the back of the eye.</p>
                        <p>The two main techniques used in laser eye surgery for vision problems are photo-refractive keratectomy (PRK) and laser assisted in-situ keratomileusis (LASIK). Both forms of laser eye surgery are performed under high magnification with an operating microscope by an ophthalmologist (eye specialist). Both are day-stay procedures and take approximately fifteen minutes.</p>

                    <h3 class="main-title">IntraLase (Blade Free) LASIK Method</h3>
                        <p>What is the IntraLase Method?</p>
                        <p>The IntraLase Method is a 100% blade ñ free approach to creating your LASIK flap ñ the thin flap of tissue that the doctor flods back in order to perform your LASIK procedure. The IntraLase Method can only be performed using the IntraLase Laser.</p>
                        <p>Traditionally, doctors have used an instrument called a microkeratome for the creation of LASIK flaps. The microkeratome is a hand held blade that moves across the eye, cutting the LASIK flap as it goes. LASIK is extremely safe, but if complications do occur, the microkeratome is frequently the cause.</p>
                        <p>The IntraLase Method, by contrast, enables your doctor to create an individualized LASIK flap without a blade ever touching your eye.</p>
                        <p>How Does it Work?</p>
                        <p>With the IntraLase Method, tiny pulses of laser light, a quadrillionth of a second each, pass harmlessly thorough the outer portion of your cornea and form a uniform layer of microscopic bubbles just beneath the surface of your eye.</p>
                        <p>The exact dimensions of this layer of bubbles are determined by your doctor based on whatís best for your eye, and are computer controlled for maximum precision ñ things that are not possible with a hand ñ held blade. The IntraLase flap creation process takes about 15 to 20 seconds per eye and a total of 10 minutes for the entire LASIK procedure.</p>
                        <p>When itís time for your LASIK treatment to be performed, your doctor easily lifts the flap to apply the LASIK treatment. When LASIK is complete, a flap created using the IntraLase Method is uniquely able to ìlockî back into place. Your eye then begins to rapidly heal.</p>
                        <p>Is it Right for Me?</p>
                        <p>If youíre looking for a blade free treatment that virtually eliminates the most severe sight ñ threatening complications, the answer is YES.</p>
                        <p>The IntraLase Method also delivers outstanding results ñ it has been shown to improve outcomes for more patients. Patients may experience faster recovery, fewer LASIK flap ñ related complications, and fewer induced higher order aberrations. Higher order aberrations may contribute to visual disturbances such as glare and halos.</p>

                    <h3 class="main-title">Photo-refractive keratectomy (PRK)</h3>
                        <p>PRK was the first type of laser eye surgery for vision correction. It is most suitable for treating mild degrees of myopia and astigmatism. PRK is also useful in treating patients whose corneas are too thin to perform LASIK.</p>
                        <p>In this procedure, the surgeon uses a special instrument to remove the epithelium (layer of cells covering the cornea). The laser is then used to remove small amounts of tissue from the outer surface of the cornea. This alters the shape of the front of the cornea and so alters the ability of the eye to focus the rays on retina.</p>

                    <h3 class="main-title">What is the procedure?</h3>
                        <ul>
                            <li>When you visit our OPD, our doctor will test your eyes to check how well you can see. The doctor will dilate your pupil in order to examine the condition of the lens and other parts of the eye and suggest the treatment accordingly.</li>
                            <li>The counseling department will then brief you about the surgery and run fitness & safety tests to ensure you are fit for the operation. You will be given a surgery date by the healthcare team.</li>
                            <li>People who usually wear contact lenses will be advised to remove these for a period of time before the test or operation. The specific length of time will vary depending on the type of lenses (hard or soft) and the surgeonís preference.</li>
                            <li>If both eyes are affected, each eye is treated on separate days, with at least a week between each eye being treated.</li>
                            <li>Immediately prior to the procedure the eye will be anaesthetised using eye drops so that, although remaining awake during surgery, little or no discomfort will be felt. The eye not being treated will be covered to protect it from the laser light. A small speculum will be placed on the eye being treated, to prevent blinking.</li>
                            <li>Following PRK surgery either an eye patch or a soft contact lens bandage is applied. This is worn for a few days until the epithelium heals.</li>
                            <li>Driving home after a laser eye surgery is not permitted so arrangements need to be made for alternative transport.</li>
                        </ul>
                        <p>Moderate discomfort is expected for two to four days after PRK. Vision improves slowly over two to four weeks.</p>

                    <h3 class="main-title">Laser assisted in-situ keratomileusis (LASIK)</h3>
                        <p>In this procedure, a thin circular ìflapî is created on the eyeís surface using a microkeratome or a femtosecond laser surgical tool. The surgeon then folds back the hinged flap to access the stroma and reshapes the corneal tissue using an excimer laser.</p>
                        <p>The flap is then returned to its original position and serves as a natural bandage, keeping the eye comfortable as it heals. The flap adheres securely without stitches, and healing occurs relatively quickly.</p>
                        <p>At NIO, the doctors use the Intralase method, which is a 100% blade-free treatment procedure that virtually eliminates the most severe sight-threatening complications. In this procedure, tiny pulses of laser light, a quadrillionth of a second each, pass harmlessly through the outer portion of your cornea and form a uniform layer of microscopic bubbles just beneath the surface of your eye. The exact dimensions of this layer of bubbles are determined by your doctor based on whatís best for your eye, and are computer controlled for maximum precision ñ things that are not possible with a handheld blade. It gives your doctor an extremely high degree of surgical control for exceptional outcomes.</p>
                        <p>The flap creation process takes about 15-20 seconds for each eye and a total of 10 minutes for the entire LASIK procedure. When it is time for the surgery, the doctor easily lifts the flap to apply the LASIK treatment. Once the LASIK is complete, the flap created using the IntraLase method is uniquely able to lock back into place. The eye then begins to heal rapidly.</p>
                        <p>Benefits of LASIK:</p>
                        <ul>
                            <li>Safe and trusted method where millions of surgeries have been performed safely and effectively</li>
                            <li>The procedure is fast, usually lasting approximately 15 minutes</li>
                            <li>It’s preferred by patients as it is generally painless.</li>
                            <li>Being the most advanced treatment technique, the doctor has an extremely high degree of surgical control thereby leading to precise and accurate results.</li>
                            <li>The Intralase method delivers outstanding results. Patients experience faster recovery, fewer flap-related complications, and fewer induced higher-order aberrations (that contribute to visual disturbance such as glare and halos)</li>
                        </ul>

                    <h3 class="main-title">What is involved in the laser eye surgery procedure?</h3>
                        <ul>
                            <li>When you visit our OPD, our doctor will test your eyes to check how well you can see. The doctor will dilate your pupil in order to examine the condition of the lens and other parts of the eye and suggest the treatment accordingly.</li>
                            <li>The counseling department will then brief you about the surgery and run fitness & safety tests to ensure you are fit for the operation. You will be given a surgery date by the healthcare team.</li>
                            <li>People who usually wear contact lenses will be advised to remove these for a period of time before the test or operation. The specific length of time will vary depending on the type of lenses (hard or soft) and the surgeonís preference.</li>
                            <li>Unlike the PRK procedure, in the LASIK procedure both eyes can be treated on the same day.</li>
                            <li>Immediately prior to the procedure the eye will be anaesthetised using eye drops so that, although remaining awake during surgery, little or no discomfort will be felt.</li>
                            <li>The eye not being treated will be covered to protect it from the laser light. A small speculum will be placed on the eye being treated, to prevent blinking.</li>
                            <li>Following LASIK surgery a clear plastic eye shield is placed over the eye. The shield is usually removed the following day.</li>
                            <li>Driving home after a laser eye surgery is not permitted so arrangements need to be made for alternative transport.</li>
                        </ul>
                        <p>Most people report only minimal discomfort following LASIK surgery. Your eyes may feel irritated or itchy immediately after the surgery but under no circumstances should you rub them (rubbing can dislodge the corneal flap, potentially requiring an additional procedure to reposition it). The improvement in vision is usually very rapid, although complete healing and stability of vision can take one to three months. Most commonly reported side effects include dry gritty eyes and sensitivity to glare. These are temporary in most cases.</p>

                    <h3 class="main-title">Who is suitable for laser eye surgery?</h3>
                        <ul>
                            <li>Laser eye surgery is suitable for people over 20 years of age who have had a stable glasses or contact lens prescription for approximately two years. It is also important that the eyes are otherwise in good health.</li>
                            <li>Laser eye surgery is not suitable if the cornea has become thin or protruded into a cone shape (keratoconus).</li>
                            <li>Laser eye surgery is also not recommended for pregnant women, people with certain medical conditions or those taking medications that may slow wound healing eg: prednisone.</li>
                        </ul>
                        <p>People with certain autoimmune diseases such as systemic lupus erythematosus and rheumatoid arthritis may be poor candidates for the surgery because their condition can affect post-operative healing.</p>
                        <ul>
                            <li>People who participate in sports like boxing and martial arts may not be good candidates for LASIK because there is a risk of corneal flap dislocation if the eye sustains major trauma.</li>
                        </ul>
                        <p>Your ophthalmologist will look for factors that may not make you a good candidate for the procedure and direct you accordingly.</p>

                    <h3 class="main-title">What are the complications of the surgery?</h3>
                        <p>Perfect results cannot be guaranteed with either procedure. Short-term complications following laser eye surgery can occur in some cases but they usually resolve by themselves or respond to treatment and are not expected to have any long-term effects on vision.</p>
                        <p class="second-title">Short-term complications can include:</p>
                        <ul>
                            <li>Photophobia (increased light sensitivity) may be experienced for one to three months following PRK and for one to two weeks following LASIK.</li>
                            <li>Increased sensitivity to glare from oncoming car headlights or other bright lights in the evening may be noticed.</li>
                            <li>Following PRK a sensation of a foreign body in the eye may be experienced.</li>
                            <li>Infection is a possible complication following any surgery but this is very rare after laser eye surgery.</li>
                            <li>Refraction after surgery can be slow to stabilise. It appears to reach stability between six and 24 months after surgery.</li>
                        </ul>
                        <p class="second-title">Long-term complications can also occur. These may include:</p>
                        <ul>
                            <li>Under-correction. This problem is less common following LASIK treatment than after PRK treatment. It is possible to revise the surgery if necessary. If under correction persists it may be necessary to wear glasses or contact lenses.</li>
                            <li>Over-correction. It is possible for over-correction to occur; making it necessary to wear glasses or contact lenses.</li>
                            <li>Mild corneal haze is part of the healing process after PRK but can be more severe on occasions. If this occurs it can often be treated with further laser surgery.</li>
                            <li>Following LASIK surgery there is the possibility of debris under the corneal flap or problems with the repositioning of the flap. If any problems do occur they can usually be effectively treated.</li>
                        </ul>

                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
