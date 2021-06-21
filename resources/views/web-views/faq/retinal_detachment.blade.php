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
                    <p>Your eye has a number of layers. The retina is the inner layer at the back of your eye. The retina changes light coming into your eye into images that are sent to your brain. Sometimes the retina can separate (detach), causing your vision to be blurred or a shadow to develop in your vision, as shown in the image below.</p>                     
                    <ul class="li-alpha">
                        <li>Normal retina</li>
                        <li>Torn retina</li>
                        <li>Detached retina</li>
                    </ul>

                    <h3 class="main-title">What are the types of retinal detachment?</h3>
                        <p>There are three type of retinal detachment</p>
                    <ul>
                        <li>Rhegmatogenous retinal detachment</li>
                    </ul>
                        <p>1) A rhegmatogenous retinal detachment occurs due to a break in the retina (called a retinal tear) that allows fluid to pass from the vitreous space into the subretinal space, between the sensory retina and the retinal pigment epithelium, and lifting the retina detaching it from its attachment.</p>
                    <ul>
                        <li>Exudative retinal detachment:</li>
                    </ul>
                        <p>An exudative retinal detachment occurs due to inflammation, injury or vascular abnormalities that results in fluid accumulating underneath the retina without the presence of a hole, tear, or break.</p>
                    <ul>
                        <li>Tractional retinal detachment</li>
                    </ul>
                        <p>A tractional retinal detachment occurs when fibrous or fibrovascular tissue, caused by an injury, inflammation or neovascularization, pulls the sensory retina from the retinal pigment epithelium.</p>

                    <h3 class="main-title">What are the causes of retinal detachment?</h3>
                        <p>Jelly (called vitreous) fills the centre of your eye. Most retinal detachments are caused by this jelly shrinking and pulling on the retina, causing a small hole or tear. You may notice ëfloatersí or flashing lights. Fluid then collects under the retina, causing it to separate. A retinal detachment can also be caused by an injury to your eye or a previous eye surgery.</p>

                    <h3 class="main-title">What are the signs and symptoms of retinal detachment?</h3>
                        <p>Flashing lights: Flashes of light or sparks may be experienced when you move your eyes or head. These flashes, which usually appear at the edge of your visual field, occur when the vitreous gel tugs on the retina (vitreous traction).</p>
                        <p>Floaters: Floaters are thick strands or clumps of solid vitreous gel that develop as the gel ages and breaks down. These are often dark specks, globs, strings, or small moving spots that appear in your field of vision.</p>
                        <p>While having floaters or flashes does not necessarily mean that you may end up having a detached retina, you should still consult an eye surgeon if you experience these symptoms.</p>
                        <p>If you experience a shadow or curtain in your field of vision, this may mean that a retinal tear has progressed to a detached retina. In this situation, you should immediately consult an eye doctor.</p>

                    <h3 class="main-title">What is vitreous haemorrhage?</h3>
                        <p>Vitreous hemorrhage is leakage of blood into the areas in and around the vitreous humor, the clear gel that fills the space between the lens and the retina of the eye. This can cause impaired vision, floaters, and photopsia.</p>

                    <h3 class="main-title">How is retinal detachment diagnosed?</h3>
                        <p>The doctor will check your eyes and examine your retina. To help make the diagnosis, the doctor should be told about any symptoms you experience.</p>
                        <p class="second-title">Types of surgery</p>
                        <p>Vitrectomy/Retina surgery: The vitreous is a normally clear, gel-like substance that fills the center of the eye, giving it form and shape. Certain problems affecting the back of the eye may require a vitrectomy, or surgical removal of the vitreous, especially retinal detachment, where vitreous pulling the retina may exaggerate or cause it.</p>
                        <p>Vitrectomy is a very delicate surgery performed with an operating microscope and special needle-sized instruments where the vitreous gel, which is pulling on the retina, is removed from the eye and is usually replaced with silicone oil or gas bubble. Endo laser is carried out to seal the breaks causing the detachment. This procedure is done using the state-of-the-art Micro Incision Vitrectomy System (MIVS).</p>
                        <p>Scleral buckling surgery: A flexible band, sclera buckle, is placed around the eye to counteract the force pulling the retina out of place. Fluid under the detached retina is drained, pulling the retina to its normal position against the back of the wall of the eye.</p>
                        <p>Scleral buckling surgery: A flexible band, sclera buckle, is placed around the eye to counteract the force pulling the retina out of place. Fluid under the detached retina is drained, pulling the retina to its normal position against the back of the wall of the eye.</p>

                    <h3 class="main-title">Difference between traditional and MIVS surgery</h3>

                    <h3 class="main-title">What is traditional retinal surgery?</h3>
                        <p>Several incisions are made on the sclera for inserting Fiber optic illumination, Infusing Solution and other instruments to cut and suck the vitreous. These incisions are relatively bigger and hence need to be stitched. This is traditional surgery.</p>

                    <h3 class="main-title">How is MIVS surgery different from traditional surgery?</h3>
                        <p>During MIVS surgery, the incisions made are very tiny, using special trocar cannulas and trocar blades. This eliminates the need to put stitches at the end of the surgery. However in case of thick membranes and other complications during surgery, it may become necessary to convert it to the traditional surgery, where stitch will be required.</p>

                    <h3 class="main-title">What are the benefits of MIVS surgery?</h3>
                    <ul>
                        <li>Less pain as it is stitch-less surgery</li>
                        <li>More comfort during the post operation recovery time.</li>
                        <li>Quicker healing of the incision</li>
                        <li>The wound is undetectable in 2 weeks time</li>
                        <li>The procedure is quicker</li>
                    </ul>

                    <h3 class="main-title">What is involved in retinal surgery?</h3>
                        <p>The surgery involves removal of the vitreous and repairing the retina. The aim is to prevent your vision from getting worse. Surgery may not result in your vision returning to normal. This depends on whether the macula (most central and sensitive part of the retina) is damaged and for how long it has been detached.</p>
                        <p>When you visit our OPD, our doctor will test your eyes to check how well you can see. The doctor will dilate your pupil in order to examine the condition of the lens and other parts of the eye and suggest the treatment accordingly. While you can bring your glasses or lenses along, it is advisable not to come for the surgery with your contact lens on.</p>
                        <p>The counseling department will then brief you about the surgery and run fitness & safety tests to ensure you are fit for the operation. You will be given a surgery date by the healthcare team.</p>
                        <p>The healthcare team at NIO will carry out a number of checks to make sure you have the operation you came in for and on the correct side. You can help by confirming to your surgeon and the healthcare team your name and the operation you are having.</p>

                    <h3 class="main-title">Can cataract surgery be combined with it?</h3>
                        <p>Vitrectomy increases the rate of cataract progression postoperatively. Hence, in coexistent cases, and to avoid a second surgery, cataract surgery is planned with vitrectomy. This just adds 15 minutes to the total surgical time.</p>

                    <h3 class="main-title">What will happen if you decide not to go for operation?</h3>
                        <p>More of the retina will usually detach, causing your vision to get worse. If the macula becomes detached and you leave it untreated for too long, you are likely to permanently lose the vision in your eye.</p>

                    <h3 class="main-title">What other conditions require retinal surgery?</h3>
                        <ul>
                            <li>Macular hole</li>
                            <li>Epiretinal membrane (ERM)</li>
                            <li>Vitreomacular traction(VMT)</li>
                        </ul>
                        <p>These conditions can lead to disturbances in the central vision, reading, writing and in worse conditions ñloss of central vision. These conditions can exist alone or in combination with retinal detachment and can be treated with the help of retinal surgery such as vitrectomy.</p>

                    <h3 class="main-title">What technology and procedures are used at NIO?</h3>
                        <ul>
                            <li>Constellation vision system:</li>
                        </ul>
                        <p>The CONSTELLATIONÆ Vision System delivers an exceptional level of performance through its advanced technologies like ULTRAVITÆ High Speed Vitrectomy Probes with Duty Cycle Control, Integrated Pressurized Infusion & IOP Compensation, Advanced Xenon Illumination, and V-LOCITY.</p>
                        <p>EIBOS wide angle lens system is used in association as it provides wider and better viewing of the surgical field.</p>
                        <ul>
                            <li>MIVS Surgery</li>
                        </ul>
                        <p>MIVS is stitch less surgery. It has patient related benefits like less pain & comfort to the patient during the post recovery time. It has faster healing of the incision. The wound is undetectable in 2 weeks time. Also it takes lesser time for the surgeon to complete the surgery.</p>
                        <ul>
                            <li>Total Plus Pro Pack</li>
                        </ul>
                        <p>All the instruments required for the surgery are available in one pack called the Total Plus Pak. Surgery done with this pack is retinal surgery with TPP. A new pack will be opened for your surgery. As the instruments are all fresh and used for the first time, the performance will be more predictable and also cross contamination will be eliminated & risk of infection will reduce.</p>
                        <ul>
                            <li>Endolaser (Endophotocoagulation)</li>
                        </ul>
                        <p>It is a procedure where laser is done by a probe put in the eye during vitreous surgery. It is used to treat retinal tears in retinal detachment and to do panretinal photocoagulation in proliferative retinopathies.</p>
                        <ul>
                            <li>Retinal cryotherapy</li>
                        </ul>
                        <p>Retinal cryopexy, also called retinal cryotherapy, is a procedure that uses intense cold to induce a chorioretinal scar and to destroy retinal or choroidal tissue.</p>
                        <p class="second-title">Several disorders can affect the retina and retinal cryopexy is used to treat the following conditions:</p>
                        <ul>
                            <li>Retinal breaks or detachments</li>
                            <li>Retinal ischemia (retinal tissue that lacks oxygen)</li>
                            <li>Neovascularization (proliferation of blood vessels in the retina)</li>
                            <li>Coatsí disease (abnormal retinal blood vessels that cause loss of vision)</li>
                            <li>Retinoblastoma (intraocular tumors)</li>
                            <li>Heine wireless indirect ophthalmoscope</li>
                        </ul>
                            <p>Built on the latest wireless technology, the indirect ophthalmoscope offers a one-of-a-kind mobility without restriction or hindrance caused by cables, cords or similar connections.</p>
                        <ul>
                            <li>Chandelier system</li>
                        </ul>
                            <p>Chandelier lighting systems provide a stationary and diffuse form of endoillumination from an anterior location. It enables bimanual surgery there by giving the surgeon more versatility during surgery and is ideal for complex cases such as proliferative vitreoretinopathy, giant retinal tears, intraocular foreign body, pars plana lensectomy for dropped nucleus, and tractional retinal detachments.</p>
                        <ul>
                            <li>Wide angle viewing system ñ EIBOS</li>
                        </ul>
                            <p>The wide-angle viewing system allows simultaneous observation of fundus and the incision areas in the eye. The system comes with spring-leaded suspension and offers superior safety to the patientís eyes.</p>

                        <h3 class="main-title">What complications can occur during and after surgery?</h3>
                            <p>The healthcare team at NIO will try to make the operation as safe as possible however complications can happen.</p>
                            <p class="second-title">General Complications of any operation</p>
                        <ul>
                            <li>Pain is usually only mild and easily controlled with simple painkillers such as paracetamol. In case of severe pain, let your surgeon know immediately.</li>
                            <li>Slight Bleeding or mild redness on the outside of your eye can be seen. If your eye is very red and painful, let your surgeon know immediately.</li>
                            <li>Infection which can result in blurred vision or even permanent loss of vision [Risk: 1 in 1,000]</li>
                            <li>Complications of anaesthesia</li>
                        </ul>
                            <p class="second-title">Your anaesthetist or surgeon will be able to discuss with you the possible complications of having an anaesthesia.</p>
                        <ul>
                            <li>Perforation of eyeball (very rare)</li>
                            <li>Needle damage to the optic nerve, which could destroy vision.(very rare)</li>
                            <li>Retrobulbar hemorrhage (very rare)</li>
                            <li>Possible drooping of eyelid (rare) in specific cases.</li>
                            <li>Double vision, if a silicone buckle is used. This usually gets better but sometimes you may need another operation (risk: 1 in 100).</li>
                        </ul>
                            <p>Double vision may be permanent (risk: 1 in 500). Occurs in specific cases.</p>
                        <ul>
                            <li>Some patients need low vision devices, thick glasses or contact lenses for improving the vision, in specific cases.</li>
                            <li>Inflammation in your other eye (sympathetic ophthalmia) occurs in specific cases. (Risk: 1 in 10,000). This is a potentially serious complication which may be treatable. If you develop pain or blurred vision in your other eye, let your surgeon know.</li>
                        </ul>
                        <p class="second-title">Specific complications of this operation:</p>
                        <ul>
                            <li>Heavy bleeding (vitreous haemorrhage) inside your eye during surgery</li>
                            <li>Reduced vision, which is not related to the detachment itself. This may happen if the lens of your eye becomes cloudy (cataract) (risk: 1 in 50).</li>
                            <li>Raised pressure in your eye (risk: 1 in 14). This can usually be treated with eye drops</li>
                            <li>The retina may become detached again. The risk depends on how severe the detachment is and the type of surgery you need. You may need another operation or may be inoperable depending upon the severity of detachment and response to and type of surgery. Silicone Oil or Gas may be required for tamponade. In case of Silicone Oil or Gas injection, maintenance of position depending upon the surgery is mandatory.</li>
                            <li>If Gas is injected, air travel is restricted until gas is absorbed.</li>
                            <li>If Silicone oil is injected then re-surgery will be required to remove the oil.</li>
                            <li>It may take up to 18 months before the final outcome of the surgery is known.</li>
                            <li>In a few cases, the underlying condition cannot be treated and blindness cannot be prevented and the eye may become small, opaque, white ( phthisis bulbi)</li>
                            <li>It may not be possible to predict before the operation which cases will do well Proliferative vitreoretinopathy (PVR): Sometimes after surgery, there is excessive tissue response and proliferation. This leads to PVR. PVR can be treated with surgery, but the visual outcome is very poor.</li>
                            <li>In some cases, more than one operation may be required.</li>
                            <li>Though extremely rare complications like infection, elevated eye pressure (glaucoma), poorly healing or non-healing corneal defects, corneal clouding and scarring, double vision, eyelid droop, and loss of circulation to vital tissues in the eye, may develop resulting in decrease or loss of vision</li>
                        </ul>
                            <p>NIO is one of the best eye care hospitals in Pune for treatment of retinal disorders. NIO offers quality health care services with the help of experienced doctors, and state-of-the-art facilities.</p>
                            <p>You can call our Healthcare team on 02025536369 / 41460100 if you have any queries regarding your eye.</p>

                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
