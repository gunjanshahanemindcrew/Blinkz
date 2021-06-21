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
                    <h3 class="main-title">What is cataract?</h3>
                    <p>Our eyes consist of lens which helps us to see. As we grow old the natural crystalline lens
                        becomes harder and loses its natural flexibility to focus on things at varying distances and
                        creates vision problems. Gradually, the lens turns cloudy and your natural lens becomes like a
                        window that is frosted or yellowed.</p>
                    <p>Cataract is a cloudy area in the lens inside the eye which is normally clear. Cataract can
                        develop in one or both eyes.</p>
                    <p>Cataracts are most often caused by our body's natural aging process, although they can also be
                        the result of heredity or accidents.</p>

                    <h3 class="main-title">What are the symptoms of cataract?</h3>
                    <span class="second-title">A painless blurring of vision</span>
                    <p>Cataract leads to blurred, fuzzy and hazy vision while normal vision ensures crisp, clear
                        well-defined images.</p>
                    <span class="second-title">Light sensitivity</span>
                    <p>Cataract leads to reduced light sensitivity resulting in glare and undefined images.</p>
                    <span class="second-title">Double vision in one eye</span>
                    <p>Cataract may lead to double vision in one eye, resulting in difficulty while driving and doing
                        other day to day activities.</p>
                    <span class="second-title">Some other symptoms of cataract are:</span>
                    <ul>
                        <li>Poor night vision</li>
                        <li>Changes in the way you see colors</li>
                        <li>Glare in front of eyes while driving</li>
                        <li>Difficulty in identifying faces from distance</li>
                    </ul>

                    <h4 class="main-title">What treatment options are available?</h4>
                    <p>Developing a cataract does not mean a permanent loss of vision quality, or having to give up the
                        things you love, because cataract surgery is a safe and effective way to improve your
                        vision.</p>
                    <p>Fortunately, there is a commonly performed surgery to treat a cataract. This involves removing
                        the natural lens from the eye and replacing it with a new artificial lens.</p>

                    <h4 class="main-title">What is involved in surgery?</h4>
                    <p>Cataract surgery involves removing the cataract and replacing with an artificial lens
                        implant.</p>
                    <p>When you visit our OPD, our doctor will test your eyes to check how well you can see. The doctor
                        will dilate your pupil in order to examine the condition of the lens and other parts of the eye
                        and suggest the treatment accordingly. While you can bring your glasses or lenses along, it is
                        advisable not to come for the surgery with your contact lens on.</p>
                    <p>The counseling department will then brief you about the surgery and run fitness & safety tests to
                        ensure you are fit for the operation. You will be given a surgery date by the healthcare
                        team.</p>
                    <p>The healthcare team at NIO will carry out a number of checks to make sure you have the operation
                        you came in for and on the correct side. You can help by confirming to your surgeon and the
                        healthcare team your name and the operation you are having.</p>

                    <h4 class="main-title">Types of Surgery</h4>
                    <p>Currently, the two most frequently used techniques to remove a cataract are</p>
                    <ul>
                        <li>Phacoemulsification (PKE)</li>
                        <li>Micro Incision Cataract Surgery (MICS)</li>
                        <li>Extracapsular cataract extraction (ECCE)</li>
                        <li>SICS (Small Incision Sutureless Cataract Surgery)</li>
                    </ul>

                    <h4 class="main-title">What is Phacoemulsification?</h4>
                    <p>Phacoemulsification is the surgery which involves removing the cataract from your eye and
                        replacing it with an artificial lens implant.</p>
                    <p>In this surgery, the eye surgeon makes a very small cut at the edge of the eyes clear front
                        covering, known as cornea. Sound waves (ultrasound) break the cataract into small pieces. These
                        pieces are removed from the eye using suction. Through the same incision, a new artificial lens
                        (intraocular lens implant) is then inserted into the eye and placed behind the iris in the lens
                        capsule that held the natural lens of the eye.</p>
                    <p class="second-title">Benefits of Phacoemulsification</p>
                    <ul>
                        <li>The surgery requires no stitches</li>
                        <li>It is quicker</li>
                        <li>Less post-operative discomfort as the surgery is gentler and less invasive</li>
                        <li>Early rehabilitation</li>
                        <li>Less chances of induced astigmatism</li>
                        <li>Faster healing and recovery time</li>
                    </ul>

                    <h4 class="main-title">What is Micro Incision Cataract Surgery (MICS)</h4>
                    <p>Recent advances in the conventional phacoemulsification cataract surgery procedures have
                        gradually reduced the size of the incisions needed for the surgery from 12 mm to 2.8 mm, making
                        it safer and less invasive.</p>
                    <p>MICS is the advanced, state-of-the-art technique for treating cataracts. In this type of surgery,
                        the cataract is emulsified using sound waves through a micro incision.</p>
                    <p>In MICS, incision of 1.8 mm to 2.2 mm is required to perform the entire cataract surgery
                        procedure. The micro incision heals fast, enabling you to recover quickly.</p>
                    <ul>
                        <li>Benefits of MICS</li>
                        <li>Safe and reliable surgery</li>
                        <li>Improved patient comfort as the surgery is gentler and less invasive</li>
                        <li>Prevents unwanted interferences to vision known as astigmatism</li>
                        <li>Faster healing and recovery time</li>
                    </ul>

                    <h3 class="main-title">What is Extracapsular cataract extraction (ECCE)?</h3>
                        <p>In this type of surgery, the eye surgeon makes an 8 mm to 10 mm cut at the edge of   the eyes clear front covering, known as cornea, and another small cut into the front portion of the lens capsule.</p>
                        <p>The lens is then removed in a single piece. An intraocular lens implant (IOL) may then be placed inside the lens capsule. And the incision is closed using sutures.
                        </p>

                    <h3 class="main-title">What is SICS (Small Incision Sutureless Cataract Surgery)</h3>
                        <p>Manual small incision cataract surgery is a non-phaco type of cataract surgery through a small corneo-scleral tunnel with the help of self sealing corneal valve through which the nucleus is delivered intact or by dividing into two or three pieces.
                        </p>

                    <h3 class="main-title">What is intraocular lens (IOL)? What are the various types of intraocular lens?</h3>
                        <p>Once the natural lens from the eye is removed, it is replaced with an artificial lens know as intraocular lens (IOL). This lens focuses light on the retina and restores clarity of vision. Aspheric lens and non- aspheric lens are two main types of intraocular lens (IOL).</p>

                        <p class="second-title">Aspheric lens</p>
                            <p>Traditional IOLs are spherical and have their front surface uniformly curved. Aspheric IOLs are slightly flatter in the periphery and are designed to provide better contrast sensitivity.
                            </p>
                            <p>Let’s take a look at some of the types of aspheric lens-</p>
                        <ul>
                            <li>Accommodative lenses / Multifocal</li>
                        </ul>
                        <p>The lenses with multifocal or accommodative designs provide vision at multiple distances and help the patient reduce dependency on glasses. Studies have shown that majority of patients (8 out of 10) can achieve this</p>
                        <ul>
                            <li>Toric lenses</li>
                        </ul>
                        <p>These are a special variety of lenses designed with an aim to reduce dependency on glasses, and reduce high cylindrical number (astigmatism)</p>
                        <ul>
                            <li>Monofocal</li>
                        </ul>
                        <p class="second-title">Non-aspheric (traditional) lens</p>
                        <p>Non-aspheric lenses are lenses whose surfaces are parts of a plane or parts of a sphere. Compared to aspheric lens, non aspheric lens are simple and relatively cheaper.</p>

                    <h3 class="main-title">How is the IOL power calculated before surgery?</h3>
                        <p>IOL power calculations at NIO are done by trained personnel and every endeavor is made to minimize errors. This is done using Ziess IOLMaster and or ultrasound biometry.</p>

                    <h3 class="main-title">What is the life span of an IOL?</h3>
                        <p>Once implanted in the eye, it remains in place for the remainder of one's lifetime.</p>

                    <h3 class="main-title">What will happen if you decide not to go for operation?</h3>
                        <p>Cataract usually gets worse day by day. Leaving a Cataract untreated will not threaten your vision immediately; however, it can slowly disable your eyes until you have little vision left. In worst case scenario, untreated Cataract can also damage the optic nerve of your eye due to raised intraocular pressure which can damage the nerve.</p>

                    <h3 class="main-title">What type of anesthesia is used during surgery?</h3>
                        <p>The surgery usually takes about 20 minutes. The operation is usually performed under a local anesthesia in the form of injection or eye drops. Rarely, a general anesthesia is used. Your anesthetist or surgeon will discuss the options with you and recommend the best form of anesthesia for you</p>

                    <h3 class="main-title">Which surgery equipments are used in NIO?</h3>
                        <p>NIO has several technically advanced Phacoemulsification machines like-</p>
                        <ul>
                            <li>The Stellaris Vision Enhancement Microphaco system</li>
                        </ul>
                            <p>Stellaris Vision Enhancement System is one of the world's most trusted platforms for advanced lens surgery. It is designed to complement the doctor's surgical technique and exceed the patient's expectations. It enables sub-2 mm lens surgery through a flexible, hybrid approach to fluidics and advanced, ultra-efficient cutting dynamics. It offers increased wound sealability, reduction in endothelial cell loss and surgically induced astigmatism while resulting in a more rapid visual recovery.</p>
                        <ul>
                            <li>The AMO Whitestar Ellips FX transverse Phaco system</li>
                        </ul>
                            <p>The WHITESTAR Signature System with the Ellips FX handpiece offers both longitudinal and transverse phacoemulsification and represents a breakthrough in easy lens removal technology. The technology has improved followability, holdability, and overall performance compared with earlier units, although a 2.7-mm incision is required. It has been manufactured by the company that has pioneered virtually every major breakthrough in phacoemulsification in the past two decades.</p>
                        <ul>
                            <li>Ozil Torsional technology</li>
                        </ul>
                            <p>The OZil Torsional system is designed to optimize phaco procedure with intelligent energy management, Enhanced thermal safety and superb followability. With enhanced fluidic management and surgical control, the system delivers the strategic advantage in customized phaco procedures.</p>
                        <ul>
                            <li>Oertli systems</li>
                        </ul>
                            <p>The Oertli system is designed for modern cataract, vitrectomy and glaucoma surgery. The system has been distinctively designed to offer easy handling, fewer unnecessary gimmicks, maximum functionality, and the highest safety levels.</p>
                            <p>These machines offer the advantage of reducing the ultrasonic energy required to break up the cataract resulting in a safe surgery and lesser collateral damage to the eye.</p>
                            <p>If you have any questions that this website does not answer you can call our health care team on 020 25536369 / 41460100.</p>

                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
