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
                    <h3 class="main-title">What is Diabetic Retinopathy?</h3>
                        <p>Diabetic retinopathy, is retinopathy (damage to the retina) caused by complications of diabetes, which can eventually lead to blindness.</p>
                        <p>Any person with diabetes can potentially develop diabetic retinopathy, irrespective of the type of diabetes; however, it is observed that nearly half of all the people with diabetes develop some degree of diabetic retinopathy during their lifetime. Diabetes may affect both the young (type I) and the old (type II). The latter is far more common. As a general statement, the prevalence of Diabetic Retinopathy (DR) of any severity in the diabetic population as a whole is approximately 30%.
                        </p>

                    <h3 class="main-title">Stages/types of Diabetic Retinopathy:</h3>
                        <ul>
                            <li>Non Proliferative Stage</li>
                        </ul>
                        <p>In Diabetes, the blood vessels of the retina become leaky and therefore blood spots are seen on the retinal surface. This stage of retinopathy is called Non Proliferative stage. This early stage of diabetic retinopathy needs no treatment, however, adequate control of blood sugar levels and regular evaluation is mandatory. If it progresses, then laser treatment is needed to prevent further deterioration.</p>
                        <ul>
                            <li>Proliferative Stage</li>
                        </ul>
                        <p>As the first stage of Diabetic retinopathy progresses, the abnormal retinal blood vessels start proliferating on the retinal surface. This is called as proliferative stage of retinopathy and needs prompt treatment. The abnormal blood vessels leak fluid and blood, leading to severe bleeding inside the eye, called vitreous hemorrhage.</p>
                        <ul>
                            <li>Diabetic Retinopathy</li>
                        </ul>
                        <p>The abnormal blood vessels can also pull the retina and cause another serious blinding condition called as retinal detachment. It is therefore important to recognize the presence of diabetic retinopathy at the earliest, so that prompt and timely treatment can prevent blindness.
                        </p>
                        <ul>
                            <li>Diabetic Maculopathy</li>
                        </ul>
                        <p>The abnormal blood vessels can also pull the retina and cause another serious blinding condition called as retinal detachment. It is therefore important to recognize the presence of diabetic retinopathy at the earliest, so that prompt and timely treatment can prevent blindness</p>
                    
                    <h3 class="main-title">How does diabetes affect the eye?</h3>
                        <p>Diabetes causes weakening of the blood vessels in the body. The tiny, delicate retinal blood vessels are particularly susceptible. This deterioration of retinal blood vessels accompanied by structural changes in the retina can lead to loss of vision which can be permanent in case it is not treated in time.</p>
                        <p>Diabetic retinopathy is gradual in onset and is related to the duration of diabetes. High blood glucose levels, high blood pressure and genetics influence the development and progression of diabetic retinopathy.</p>
                    
                    <h3 class="main-title">What are the signs and symptoms of diabetic retinopathy?</h3>
                        <p>In early stages there are no warning signs but if there is retinal bleeding it can cause floaters or swelling of central retina and lead to blurring of vision. In case bleeding is severe it may take days, months or even years to clear.</p>
                        <p>As new blood vessels form at the back of the eye as a part of proliferative diabetic retinopathy (PDR), they can bleed (ocular hemorrhage) and blur the vision. The first time this happens, it may not be very severe. In most cases, it will leave just a few specks of blood, or spots, floating in a personís visual field, though the spots often go away after a few hours.</p>
                        <p>These spots are often followed within a few days or weeks by a much greater leakage of blood, which blurs vision.</p>
                        <p>In extreme cases, a person might only be able to tell light from dark in that eye. It may take the blood, anywhere from a few days to months or even years, to clear from the inside of the eye, and in some cases the blood will not clear. These types of large hemorrhages tend to happen more than once, often during sleep.</p>
                    
                    <h3 class="main-title">Who can get diabetic retinopathy?</h3>
                        <p>People who have some or all of the below mentioned are more likely to develop diabetic retinopathy in their lifetime.</p>
                    <ul>
                        <li>Longer duration of diabetes</li>
                        <li>Poor control of blood sugar levels</li>
                        <li>Pregnant women</li>
                        <li>Patients having hypertension</li>
                        <li>Patients with kidney disorders</li>
                        <li>Smoking</li>
                        <li>Obesity</li>
                        <li>Increased cholesterol levels</li>
                    </ul>
                    
                    <h3 class="main-title">What are the treatment options for Diabetic Retinopathy?</h3>
                        <p>There are many treatment options depending on the severity and stage of diabetic retinopathy. Your ophthalmologist will work with you to design a treatment plan thatís best for you.</p>
                        <p>People with non proliferative diabetic retinopathy may not need treatment. However, they should be on close follow-up with an eye doctor trained to treat diabetic retinopathy. Treatment is needed once the doctor notices new blood vessels growing in your retina (neovascularization) or if you develop macular edema, or swelling of central retina. Treatment usually does not reverse damage that has already occurred, but it can help prevent the disease from getting worse.</p>
                        <p class="second-title">You may need more than one type of treatment, which includes the following:</p>
                    <ul>
                        <li>Lourescein Angiography</li>
                    </ul>
                        <p>In case the retinopathy is severe, the ophthalmologist may decide to make the patient undergo Fluorescein Angiography. It is a diagnostic test in which a dye is injected in the arm vein and retinal photographs are taken at regular intervals. This lets the doctor get an idea of the amount of leakage and the location of the abnormal retinal blood vessels. During the procedure, you may briefly feel some nausea. After the procedure, your skin, eyes and urine may appear yellow for a few hours.</p>
                    <ul>
                        <li>3D OCT (Optical Coherence Tomography)</li>
                    </ul>
                        <p>It is rapid non-invasive latest diagnostic tool used for the accurate diagnosis of retinal disorders that mainly involve the center of the retina called macula. The retina can be scanned at microscopic level and information can be obtained within minutes. Since the machine also has non mydriatic camera facility, it may be possible to even do the retina scans within minutes without even dilation of pupils in some patients.</p>
                    <ul>
                        <li>Laser Photocoagulation</li>
                    </ul>
                        <p>This is an OPD procedure in which a laser beam (commonly 532 nm wavelength) is used to stop the growth of abnormal vessels and the leakage from the blood vessels. The aim of the treatment is to prevent further loss of vision and preserve the existing vision. The laser treatment is not aimed at improving the vision. The laser treatment is often completed in 3 to 5 sessions depending on the severity of the retinopathy.</p>
                        <p>This treatment doesnít cure diabetic retinopathy, however is known to slow or hault the progression of the disease.</p>
                    <ul>
                        <li>Anti VEGF Injection</li>
                    </ul>
                        <p>This is a new modality of treatment. In patients who fail to show adequate response inspite of the laser treatment, or those patients who already have very severe retinopathy, an injection of the Anti VEGF drug is given inside the eye, to arrest growth of the abnormal blood vessels or reduce macular edema. The procedure is done in the operation room and an eye pad is given for 3-4 hours. You will be required to stay in hospital for at least half-an-hour after the injection. Some patients may require more than one injection.</p>
                    <ul>
                        <li>Intra-vitreal Triamcinolone injection</li>
                    </ul>
                        <p>In patients with macular edema, an injection of triamcinolone, a depot steroid, is given to stop or reduce the swelling of the macula. The procedure is done in the operating room and an eye pad is given for 3-4 hours. You will be required to stay in hospital for at least half-an-hour after the injection. Some patients may require more than one injection.</p>
                    <ul>
                        <li>OZURDEX Implant</li>
                    </ul>
                        <p>A steroid implant injected in the eye to reduce macular edema. This implant releases a fixed dose of the medicine at regular intervals. Procedure is done in operation room and an eye pad is given for 3-4 hours. You will be required to stay in the hospital for at least half an hour after the injection.</p>
                    <ul>
                        <li>Vitreo Retinal Surgery</li>
                    </ul>
                        <p>In patients with non-resolving vitreous hemorrhage or retinal detachment, a complex surgery is performed. In this surgery the blood or debris is removed and an attempt is made to reattach the retina. The laser procedure is then carried out. If needed, the surgeon can choose to put silicone oil or gas inside the eye, to provide tamponade to the retinal surface. The surgery may last for 1-2 hours. Some patients may need another operation, if the retina does not get attached after the first surgery.</p>

                    <h3 class="main-title">What is an intravitreal injection?</h3>
                        <p>An intravitreal injection is given through the white part of your eye into the jelly (called vitreous) that fills the inside of your eye. Special drugs injected into the jelly spread to the retina (inner layer at the back of your eye) and other structures in your eye.</p>
                        <p>Your surgeon will assess and tell you if an intravitreal injection is suitable for you. However, it is your decision to go ahead with the procedure or not.</p>
                        <p class="second-title">Types of intravitreal injections:</p>
                        <p>AVASTIN</p>
                        <p>AvastinTM was not initially developed to treat eye conditions. Based upon the results of clinical trials that demonstrated its safety and effectiveness, AvastinTM was approved by the Food and Drug Administration (FDA) for the treatment of metastatic colorectal cancer. Once a device or medication is approved by the FDA, physicians may use it ìoff-labelî for other purposes if they are well-informed about the product, based on its use on firm scientific method and sound medical evidence, and maintain records of its use and effect. Ophthalmologists are using AvastinTM ìoff-labelî to treat AMD and other macular pathology.</p>
                        <p>OZURDEX is a disposable injection device containing a rod shaped implant. It contains dexamethasone. Its effect last for upto 180 days and it has been approved by the FDA.</p>
                        <p>LEUCENTIS is an Anti VEGF medication; it is a monoclonal antibody fragment and is approved by FDA</p>
                        <p>TRIAMCINOLONE ACETONIDE is a Steroid. It is an off label drug. Its effect lasts up to 120 days.</p>

                    <h3 class="main-title">What are the benefits of an intravitreal injection?</h3>
                        <p>The most common reason for needing an intravitreal injection is to treat wet age-related macular degeneration. It may also be needed for macular edema caused by factors such as diabetic retinopathy, vascular occlusion, inflammation, trauma or surgery, dystrophy etc (macular pathology)</p>
                        <p>The macular is a specialised area of the retina responsible for visual sharpness. Retina converts the light entering your eye into images that are sent to your brain.</p>
                        <p>An injection of an anti-vascular endothelial growth factor (anti-VEGF) /steroid into the jelly can help to treat macular pathology. You usually need a course of injections over a year or longer for the treatment to be effective.</p>

                    <h3 class="main-title">Are there any alternatives to the injection?</h3>
                        <p>Laser treatment may be suitable for you but is less effective than an intravitreal injection.</p>

                    <h3 class="main-title">What will happen if I decide not to have the injection?</h3>
                        <p>Your vision is likely to get worse. If your retina becomes scarred or you leave the problem for too long, you may get permanent reduced vision in the affected eye.</p>

                    <h3 class="main-title">What does the procedure involve?</h3>
                    <p>The healthcare team will carry out a number of checks to make sure you have the procedure you came in for and on the correct side. You can help by confirming to your surgeon and the healthcare team your name and the procedure you are having. The healthcare team will ask you to sign the consent form once you have read this document and they have answered your questions.</p>
                    <p>You will need to lie still and flat during the injection. If you cannot lie still and flat, let your surgeon know.</p>
                    <p>The injection is usually performed under a local anaesthetic given as eye drops. The injection usually takes about 30 seconds. Your surgeon will also place drops of an anti-bacterial solution and an antibiotic on your eye. Your surgeon will insert a fine needle through the white part of your eye (sclera) and inject the injection into the jelly in the centre part of your eye. It is normal for your eye to feel slight discomfort during the injection, but due to local anesthesia generally there is very little or no pain.</p>
                    <p class="second-title">Please inform your surgeon if you are Pregnant or there is infection.</p>

                    <h3 class="main-title">What complications can occur?</h3>
                    <ul>
                        <li>Slight Pain (risk 1 in 20)</li>
                        <li>Bleeding: Any bleeding is usually little and your eye may be slightly red.</li>
                        <li>Heavy bleeding: heavy bleeding inside the jelly (vitreous haemorrhage) during the injection, which may cause loss of vision (risk: less than 1 in 1,000)</li>
                        <li>Raised pressure in your eye</li>
                        <li>Retinal detachment</li>
                        <li>Damage to the lens that causes a cataract</li>
                        <li>Inflammation in your eye</li>
                    </ul>
                    <h3 class="main-title">How soon will I recover?</h3>
                        <p>After the injection you will be transferred to the recovery area where you can rest. Your eye may feel uncomfortable but this usually settles within a few hours. You should be able to go home after about an hour.</p>
                        <p>Most people will need one to two days off work.</p>



                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
