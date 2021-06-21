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
                    <h3 class="main-title">What is age related macular degeneration?</h3>
                        <p>Age related macular degeneration (AMD), is a leading cause of vision loss in adults who are 50 years or older. This disease destroys the sharp, central vision of the eye that is needed to see objects clearly and do everyday tasks like reading and driving. AMD affects the macula, the part of the eye that allows you to see fine detail. You may not experience pain, but the disease causes the cells in the macula to die. AMD is a bilateral disease i.e. it usually affects both eyes; however one eye may develop AMD before the other and severity can vary in both eyes.</p>
                        
                    <h3 class="main-title">What are the types of age related macular degeneration?</h3>
                        <p>Wet AMD: This occurs when abnormal blood vessels grow under the macula. These new blood vessels often leak blood and fluid. Wet AMD is known to quickly damage the macula.</p>
                        <p>Dry AMD: This occurs when the light-sensitive cells in the macula break down slowly. The affected eye gradually looses its central vision.</p>

                    <h3 class="main-title">What are the symptoms of age related macular degeneration?</h3>
                        <p>AMD has a few symptoms depending on whether it is dry or wet AMD. It is important to consult an eye surgeon to have your eyes examined regularly before the disease progresses.</p>
                        <p class="second-title">Some of the symptoms include:</p>
                    <ul>
                        <li>Blurring of central vision depite wearing glasses</li>
                        <li>Difficulty in reading a book or newspaper</li>
                        <li>Difficulty in recognizing faces</li>
                        <li>Needing more light for reading and doing other tasks</li>
                        <li>Straight lines may appear wavy</li>
                    </ul>

                    <h3 class="main-title">How is age related macular degeneration diagnosed?</h3>
                        <p>Detailed examination includes a dilated fundus examination, slit lamp biomicroscopy besides recording the visual acuity and intraocular pressure.</p>
                        <p class="second-title">Following tests are commonly done as indicated:</p>
                        <p>3D OCT (Optical Coherence Tomography): It is a rapid non-invasive latest diagnostic tool used for the accurate diagnosis of retinal disorders that mainly involve the center of the retina called macula. The retina can be scanned at microscopic level and information can be obtained within minutes. Since the machine also has non mydriatic camera facility, it may be possible to even do the retina scans within minutes without even dilation of pupils in some patients. At NIO, we have one of the most advanced OCT systems (Topcon) which has ultra high resolution to detect any thickness change at the earliest.</p>
                        <p>Flourescein Angiography: The ophthalmologist may decide to take this test if needed. It is a diagnostic test in which a dye is injected in the arm vein and retinal photographs are taken at regular intervals. This lets the doctor get an idea of the amount of leakage and the location of the abnormal retinal blood vessels. During the procedure, the patient may briefly feel somenausea. After the procedure, the patientís skin, eyes and urine may appear yellow for a few hours.</p>
                    <h3 class="main-title">What treatment options are available for AMD?</h3>
                        <p>Early diagnosis and proper treatment can help delay the progression of AMD. The earlier it is detected the better is your chance of retaining a good vision.</p>
                        <p>Dry AMD: Patients are usually followed up, and kept under observation after prescribing oral medication. But if the condition progresses to severe dry AMD or wet AMD then the treatment options for wet AMD might be prescribed.</p>
                        <p>Wet AMD: This condition usually requires one of the following treatment options</p>
                        <p>1. Intravitreal injections</p>
                        <p>An intravitreal injection is given through the white part of your eye into the jelly (called vitreous) that fills the inside of your eye. Special drugs injected into the jelly spread to the retina (inner layer at the back of your eye) and other structures in your eye.</p>
                        <p>Your surgeon will assess and tell you if an intravitreal injection is suitable for you. However, it is your decision to go ahead with the procedure or not.</p>
                        <p class="second-title">Types of intravitreal injections:</p>
                        <p>AVASTIN</p>
                        <p>AvastinTM was not initially developed to treat eye conditions. Based upon the results of clinical trials that demonstrated its safety and effectiveness, AvastinTM was approved by the Food and Drug Administration (FDA) for the treatment of metastatic colorectal cancer. Once a device or medication is approved by the FDA, physicians may use it ìoff-labelî for other purposes if they are well-informed about the product, based on its use on firm scientific method and sound medical evidence, and maintain records of its use and effect. Ophthalmologists are using AvastinTM ìoff-labelî to treat AMD and other macular pathology.</p>
                        <p>OZURDEX is a disposable injection device containing a rod shaped implant. It contains dexamethasone. Its effect last for upto 180 days and it has been approved by the FDA.</p>
                        <p>LEUCENTIS is an Anti VEGF medication; it is a monoclonal antibody fragment and is approved by FDA.</p>
                        <p>TRIAMCINOLONE ACETONIDE is a Steroid. It is an off label drug. Its effect lasts up to 120 days.</p>
                        <p>To know more about intravitreal injections</p>
                        <p>2. Low vision aids</p>
                        <p>Low vision aids such as magnifying glasses etc. may be helpful in cases where the patient is experiencing a severe degree of visual impairment. The low vision aid helps magnify whatever the person is trying to read. Tablets such as Ipads, and galaxy tabs are also used to achieve the purpose of magnifying text related to various daily activities of reading books or newspapers.</p>
                        <p>3. Other measures</p>
                        <ul>
                            <li>Stop smoking</li>
                            <li>Maintaining a balanced diet with green leafy vegetables</li>
                            <li>The eye surgeon may prescribe nutritional supplements in the form of anti oxidants, vitamin combinations etc. to reduce the risk of progression of this condition.</li>
                        </ul>
                        <p>It is important to remember that this condition is bilateral in nature and can occur in the other eye as well. Consult your eye surgeon if notice any symptoms, as detecting the condition early and getting proper treatment will help in best visual recovery. NIO is one of the best eye care hospitals in Pune for treatment of retinal disorders. NIO offers quality health care services with the help of experienced doctors, and state-of-the-art facilities.</p>
                        <p>You can call our Healthcare team on 02025536369 / 41460100 if you have any queries regarding your childís eye.</p>

                        
                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
