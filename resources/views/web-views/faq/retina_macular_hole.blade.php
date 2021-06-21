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
                    <p>A macular hole is a small break in the macula, located in the center of the eyeís light-sensitive tissue called the retina. The macula provides the sharp, central vision we need for reading, driving, and seeing fine detail.</p>
                    <p>A macular hole can cause blurred and distorted central vision. Macular holes are related to aging and usually occur in people over age 60 years.</p>
                    
                    <h3 class="main-title">What causes a macular hole?</h3>
                        <p>Most of the eyeís interior is filled with vitreous, a gel-like substance that fills about 80 percent of the eye and helps it maintain a round shape. The vitreous contains millions of fine fibers that are attached to the surface of the retina. As we age, the vitreous slowly shrinks and pulls away from the retinal surface.</p>
                        <p>If the vitreous is firmly attached to the retina when it pulls away, it can tear the retina and create a macular hole.</p>    
                        <p>Macular holes can also occur in other eye disorders, such as high myopia (nearsightedness), injury to the eye, retinal detachment, and, rarely, macular pucker.</p>
                    
                    <h3 class="main-title">What are the symptoms of a macular hole?</h3>    
                        <p>Macular holes often begin gradually. In the early stage of a macular hole, people may notice a slight distortion or blurriness in their straight-ahead vision. Straight lines or objects may appear bent or wavy.</p>

                    <h3 class="main-title">How is a macular hole treated?</h3>
                        <p>Although some macular holes can seal themselves and require no treatment, surgery is necessary in many cases to help improve vision. In this surgical procedure known as vitrectomy, the vitreous gel is removed to prevent it from pulling on the retina and replaced with a bubble containing a mixture of air and gas. The bubble acts as an internal, temporary bandage that holds the edge of the macular hole in place as it heals. Surgery is performed under local anesthesia and often on an out-patient basis.</p>

                    <h3 class="main-title">What are the different types of macular hole?</h3>
                        <p>There are three stages to a macular hole:</p>
                        <ul>
                            <li>Foveal detachments (Stage I). Without treatment, about half of Stage I macular holes will progress.</li>
                            <li>Partial-thickness holes (Stage II). Without treatment, about 70 percent of Stage II macular holes will progress.</li>
                            <li>Full-thickness holes (Stage III).</li>
                        </ul>
                        <p>The size of the hole and its location on the retina determine how much it will affect a personís vision. When a Stage III macular hole develops, most central and detailed vision can be lost. If left untreated, a macular hole can lead to a detached retina, a sight-threatening condition that should receive immediate medical attention.</p>

                    <h3 class="main-title">What does the operation involve?</h3>
                        <p>Macular hole surgery involves removing the jelly part of your eye and replacing it with air or gas to help the hole get sealed. The gas absorbs after a while. Your eye will make fluid to replace the gas.</p>
                        <p>When you visit our OPD, our doctor will test your eyes to check how well you can see. The doctor will dilate your pupil in order to examine the condition of the lens and other parts of the eye and suggest the treatment accordingly. While you can bring your glasses or lenses along, it is advisable not to come for the surgery with your contact lens on.</p>
                        <p>The counseling department will then brief you about the surgery and run fitness & safety tests to ensure you are fit for the operation. You will be given a surgery date by the healthcare team.</p>
                        <p>The healthcare team at NIO will carry out a number of checks to make sure you have the operation you came in for, and on the correct side. You can help by confirming to your surgeon and the healthcare team your name and the operation you are having.</p>
                        <p>Various anaesthetic techniques are possible, including a general anaesthetic or a local anaesthetic that is injected around your eye to numb it. Your anaesthetist or surgeon will discuss the options with you and recommend the best form of anaesthesia for you. You may also have injections of local anaesthetic to help with the pain after the operation. The operation usually takes 90 minutes to two hours.</p>

                    <h3 class="main-title">What technologies do we use at NIO?</h3>
                        <ul>
                            <li>Constellation vision system</li>
                        </ul>
                            <P>The CONSTELLATIONÆ Vision System delivers an exceptional level of performance through its advanced technologies like ULTRAVITÆ High Speed Vitrectomy Probes with Duty Cycle Control, Integrated Pressurized Infusion & IOP Compensation, Advanced Xenon Illumination, and V-LOCITY.</P>
                        <ul>
                            <li>MIVS Surgery</li>
                        </ul>
                            <P>MIVS is stitch less surgery. It has patient related benefits like less pain & comfort to the patient during the post operative recovery time. It has faster healing of the incision. The wound is undetectable in 2 weeks time. Also it takes lesser time for the surgeon to complete the surgery.</P>
                        <ul>
                            <li>Total Plus Pak</li>
                        </ul>
                        <P>All the instruments required for the surgery are available in one pack called the Total Plus Pak. Surgery done with this pack is retinal surgery with TPP. A new pack will be opened for your surgery. As the instruments are all fresh and used for the first time, the performance will be more predictable and also cross contamination will be eliminated & risk of infection will reduce.</P>
                        <ul>
                            <li>Endolaser (Endophotocoagulation)</li>
                        </ul>
                            <P>It is a procedure where laser is done by a probe put in the eye during vitreous surgery. It is used to treat retinal tears in retinal detachment and to do panretinal photocoagulation in proliferative retinopathies.</P>
                        <ul>
                            <li>Wireless indirect ophthalmoscope</li>
                        </ul>
                            <P>Built on the latest wireless technology, the indirect ophthalmoscope offers a one-of-a-kind mobility without restriction or hindrance caused by cables, cords or similar connections.</P>
                        <ul>
                            <li>Wide angle viewing system</li>
                        </ul>
                            <P>The wide-angle viewing system allows simultaneous observation of fundus and the incision areas in the eye. The system comes with spring-leaded suspension and offers superior safety to the patientís eyes.</P>
                        <ul>
                            <li>Chandelier system</li>
                        </ul>
                            <P>Chandelier lighting systems provide a stationary and diffuse form of endoillumination from an anterior location. It enables bimanual surgery there by giving the surgeon more versatility during surgery and is ideal for complex cases such as proliferative vitreoretinopathy, giant retinal tears, intraocular foreign body, pars plana lensectomy for dropped nucleus, and tractional retinal detachments.</P>

                        <h3 class="main-title">What are the benefits of surgery?</h3>
                            <p>The aim is to prevent your vision from getting worse. Surgery may not result in your vision returning to normal. This depends on the stage of macular hole and for how long it has been there.</p>

                        <h3 class="main-title">How successful is this surgery?</h3>
                            <p>Vision improvement varies from patient to patient. People that have had a macular hole for less than six months have a better chance of recovering vision than those who have had one for a longer period. Discuss vision recovery with your doctor before your surgery. Vision recovery can continue for as long as three months after surgery.</p>

                        <h3 class="main-title">What if I cannot remain in a face-down position after the surgery?</h3>
                            <p>If you cannot remain in a face-down position for the required period after surgery, vision recovery may not be successful. People who are unable to remain in a face-down position for this length of time may not be good candidates for a vitrectomy. However, there are a number of devices that can make the ìface-downî recovery period easier for you. There are also some approaches that can decrease the amount of ìface-downî time. Discuss these with your doctor.</p>


                        <h3 class="main-title">What will happen if I decide not to have the operation?</h3>
                            <p>Macular hole will increase in thickness and the vision will get worse, if left untreated for too long it may lead to permanent loss of vision in that eye.</p>

                        <h3 class="main-title">What can I do to help make the operation a success?</h3>
                            <ul>
                                <li>Keeping in the same position</li>
                            </ul>
                            <p>After the operation your surgeon may ask you to remain in prone position. This may help to keep the hole sealed. If the operation is performed under a local anaesthetic, you will need to lie still and flat during the operation. If you cannot lie still and flat, let your surgeon know. Your face will be covered with a porous cloth to allow your surgeon to work on a clean surface. Air will be blown gently towards your nose. If you are claustrophobic, let your surgeon know.</p>
                            <ul>
                                <li>Lifestyle changes</li>
                            </ul>
                                <p>If you smoke, stopping smoking will improve your long-term health. Try to maintain a healthy weight. You have a higher risk of developing complications if you are overweight.</p>

                        <h3 class="main-title">What complications can happen?</h3> 
                            <p>The healthcare team will try to make the operation as safe as possible but complications can happen. Some of these can be serious. You should ask your doctor if there is anything you do not understand. Any numbers which relate to risk are from studies of people who have had this operation. Your doctor may be able to tell you if the risk of a complication is higher or lower for you</p>

                            <p class="second-title">General Complications of any operation</p>

                        <ul>
                            <li>Pain is usually only mild and easily controlled with simple painkillers such as paracetamol. In case of severe pain, let your surgeon know immediately.</li>
                            <li>Slight Bleeding or mild redness on the outside of your eye can be seen. If your eye is very red and painful, let your surgeon know immediately.</li>
                            <li>Infection which can result in blurred vision or even permanent loss of vision [Risk: 1 in 1,000]</li>
                        </ul>
                            <p>Complications of anaesthesia</p>
                            <p class="second-title">Your anaesthetist or surgeon will be able to discuss with you the possible complications of having an anaesthesia.</p>

                        <ul>
                            <li>Perforation of eyeball (very rare)</li>
                            <li>Needle damage to the optic nerve, which could destroy vision.(very rare)</li>
                            <li>Retrobulbar hemorrhage (very rare)</li>
                            <li>Possible drooping of eyelid (rare) in specific cases.</li>
                            <li>Double vision, if a silicone buckle is used. This usually gets better but sometimes you may need another operation (risk: 1 in 100). Double vision may be permanent (risk: 1 in 500). Occurs in specific cases.</li>
                            <li>Some patients need low vision devices, thick glasses or contact lenses for improving the vision, in specific cases.</li>
                            <li>Inflammation in your other eye (sympathetic ophthalmia) occurs in specific cases. (Risk: 1 in 10,000). This is a potentially serious complication which may be treatable. If you develop pain or blurred vision in your other eye, let your surgeon know.</li>
                        </ul>
                        <p class="second-title">Specific complications of this operation:</p>
                        <ul>
                            <li>Heavy bleeding (vitreous haemorrhage) inside your eye during surgery, which may cause permanent loss of vision (risk: 1 in 200).</li>
                            <li>Reduced vision, which is not related to the macular hole itself. This may happen if the lens of your eye becomes cloudy (cataract) (risk: 1 in 50). The risk depends on the type of surgery you need.</li>
                            <li>Raised pressure in your eye (risk: 1 in 14). This can usually be treated with eye drops, so let your surgeon know if you have blurred vision, pain, headaches or nausea.</li>
                            <li>Macular hole may reopen again. The risk depends on stage of hole and duration of hole before surgery. You may need another operation or may be inoperable Depending upon the surgery, Silicone Oil or Gas may be required for tamponade.</li>
                            <li>In case of Silicone Oil or Gas injection, maintainance of position depending upon the surgery is mandatory.</li>
                            <li>If Gas is injected, air travel is restricted until gas is absorbed.</li>
                            <li>It may take up to 18 months before the final outcome of the surgery is known.</li>
                            <li>In a few cases, the underlying condition cannot be treated and blindness cannot be prevented and the eye may become small, opaque and white (phthisis bulbi).</li>
                            <li>It may not be possible to predict before the operation which cases will do well.</li>
                            <li>In some cases, more than one operation may be required.</li>
                        </ul>

                    <h3 class="main-title">I have an insurance policy how do I go about?</h3>
                        <p>There are various insurance panels the hospital is attached to. You need to see our counseling desk with the following necessary documents so that preop request can be sent to your insurance company in advance for approval of cashless facility.</p>
                        <ul>
                            <li>Personal policy</li>
                        </ul>
                        <p>Xerox copy of your current and previous year policy</p>
                        <p>ID proof</p>
                        <p>Cashless card</p>
                        <ul>
                            <li>Corporate policy</li>
                        </ul>
                        <p>Cashless card</p>
                        <p>ID proof</p>
                        <p>I am CGHS / CSMA how do I go about?</p>

                    <h3 class="main-title">See the counselor with following details and book a tentative date.</h3>
                    <ul>
                        <li>CGHS pensioner</li>
                        <li>CGHS card.</li>
                        <li>CGHS Employee</li>
                    </ul>
                        <p>CGHS card</p>
                    <ul>
                        <li>Salary slip</li>
                        <li>CSMA</li>
                        <li>CSMA ID card</li>
                    </ul>

                    <h3 class="main-title">What tests will I have to undergo?</h3>
                    <ul>
                        <li>Blood sugar</li>
                        <li>Complete haemogram</li>
                        <li>Urine Routine and microscopy</li>
                        <li>E.C.G, HIV I &II</li>
                        <li>Fitness by MD physician for LA/GA</li>
                        <li>Blood pressure</li>
                    </ul>
                    <h3 class="main-title">What do I have to do after my fitness and tests are done?</h3>
                        <ul>
                            <li>Private patients/ Insurance patients</li>
                        </ul>
                        <p>After the test confirm your date with the counselor, you will be advised to start antibiotic eye drops 2 days before surgery and will be advised to come on required time for surgery, you will be re informed prior to surgery day.</p>
                        <ul>
                            <li>CGHS/ CSMA patient</li>
                        </ul>
                        <p>After taking the tentative date you will come a day prior to surgery with your memo for the tests</p>
                        <p>You will be informed the time of surgery on the same day.</p>

                    <h3 class="main-title">What is the procedure on the day of surgery?</h3>
                    <ul>
                        <li>You will come along with a responsible relative to the checking counter on the ground floor.</li>
                        <li>You can have 2-3 biscuits with tea or coffee 2 hours prior to surgery. All the medications should be taken in the morning on the day of surgery.</li>
                    </ul>
                    <h3 class="main-title">Post operative instructions</h3>
                        <ul>
                            <li>Please do not touch or rub the operated eye.</li>
                            <li>Please take head bath only after fifteen days but you can take bath over the shoulders (take care that water/ soap does not enter the eye).</li>
                            <li>Please follow the schedule for putting drops as advised by the doctor.</li>
                            <li>While cleaning the eye, boil 2-3 cotton swabs in water for 15 minutes. Once the water lukewarm, clean the eye with these cotton swabs from outside with the eye closed. Pull the lower lid look up and clean the lower lid margin then look down lift upper lid and clean upper lid margin. Do not replace the same cotton swab in this water again and do not attempt to reuse these swabs</li>
                            <li>Before you start exercising, ask the healthcare team or your GP for advice. Do not swim or lift anything heavy until you have checked with your surgeon. Do not drive until you can read a number plate from 20.5 metres (67 feet) and always check your insurance policy and with your surgeon.</li>
                            <li>Please do not use any napkin or towel or cloth to clean the eye. Use only the cotton as described above. Please protect yourself from dust, smoke and unclean water, injury.</li>
                            <li>You have to maintain the position suggested by your doctor for at least one week</li>
                            <li>Please avoid weight lifting or vigorous exercise (walking allowed), yoga, travelling for two weeks.</li>
                            <li>Please use dark glasses provided to you for one week at home and up to one month while going out. While sleeping one should remove glasses.</li>
                            <li>Please wash your hands with soap and clean water before putting the eye drops.</li>
                            <li>While putting the drops pull the lower lid down and instill the drop. Routine meals can be taken from same evening.</li>
                        </ul>
                        <p>IN CASE OF ANY EMERGENCY OR ANY INCREASE IN PAIN, WATERING, REDNESS, DECREASED VISION OR HEADACHE RUSH TO THE HOSPITAL IMMEDIATELY!!</p>
                        <p>Please follow the follow up schedule strictly.</p>
                        <p>In case you are diabetic or have high blood pressure etc. please consult your treating doctor for controlling the same and regarding continuation of medicines.</p>
                        <p>Do not drive, operate machinery (this includes cooking) or do any potentially dangerous activities for atleast 24 hours and not until you have fully recovered feeling if you had a general anaesthesia or sedation, you should also not sign legal documents.</p>
                        <ul>
                            <li>After two to three months we usually prescribe you new glasses.</li>
                        </ul>

                    <h3 class="main-title">How soon will I recover?</h3>
                        <ul>
                            <li>In hospital</li>
                        </ul>
                        <p>After the operation you will be transferred to the recovery area and then to the ward. You should be able to go home the same day after couple of hours of observation. However, your doctor may recommend that you stay a little longer. If gas was used, you may need to stay in a certain position for a few days. Although this is inconvenient, it is important to help make the operation a success.</p>
                        <p>If you are worried about anything, in hospital or at home, contact the healthcare team. They should be able to reassure you or identify and treat any complications.</p>
                        <ul>
                            <li>Returning to normal activities</li>
                        </ul>
                        <p>Your surgeon will tell you when you can return to normal activities. Regular exercise should improve your long-term health. It is important to maintain the position.</p>
                        <p>The futureMost people make a good recovery. It may take some time before your vision starts to improve, especially if your eye was filled with gas or oil. If there was a lot of damage to the retina before the operation, your vision may not return to normal.</p>
                        <p>SummarySurgery is usually safe and effective but complications can happen. You need to know about them to help you to make an informed decision about surgery. Knowing about them will also help to detect and treat any problems early.</p>
                        <p>NIO is one of the best eye care hospitals in Pune for treatment of retinal disorders. NIO offers quality health care services with the help of experienced doctors, and state-of-the-art facilities.</p>
                        <p>You can call our Healthcare team on 02025536369 / 41460100 if you have any queries regarding your eye.</p>

                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
