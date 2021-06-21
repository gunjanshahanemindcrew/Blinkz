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
                    <h3 class="main-title">What is Congenital Glaucoma?</h3>
                        <p>Primary congenital glaucoma (PCG) is a type of glaucoma that affects children between the ages of birth and 3 years. Glaucoma is a disease of the eye which exhibits a typical optic neuropathy resulting in progressive visual field loss. This condition causes damage to the eyeís optic nerve and is known to get worse over time.</p>   
                        <p>If glaucoma appears after about 3-4 years of age, it is known as juvenile glaucoma.</p>
                        <h3 class="main-title">What causes Congenital Glaucoma?</h3>
                        <ul>
                            <li>Heredity: Most congenital glaucoma cases have genetic origin. It affects about one in every 10,000 infants. Males are more commonly affected than females.</li>
                            <li>Metabolic disorders and syndromes: This condition is also seen in children with abnormalities of other systems of the body and eye.</li>
                        </ul>
                        <p>Congenital glaucoma can also occur in infants with no family history of glaucoma. Such cases are sporadic.</p>
                        <p>When there is no family history of congenital glaucoma, thereís approximately a 5% chance that he/she will have a child also suffering from congenial glaucoma. If the first born is affected, then there is 5% chance of a second child being affected.</p>

                    <h3 class="main-title">What are the symptoms of Congenital Glaucoma?</h3>
                        <ul>
                            <li>Photophobia ñ oversensitivity to normal light</li>
                            <li>Excessive tearing</li>
                            <li>Buphthalmos’ or Cow’s eye ñ enlargement of the cornea (in infants who grow slightly older)</li>
                            <li>Cloudiness of the cornea</li>
                            <li>Enlargement of one or both eyes</li>
                            <li>Red eye</li>
                        </ul>

                    <h3 class="main-title">What treatment options are available for congenital / juvenile glaucoma?</h3>    
                        <p>The first choice for treating primary congenital glaucoma is almost always surgery. If the condition affects both eyes, the doctor may operate on both at the same time.</p>
                        <p>Many a times repeated surgeries may be necessary. All the surgeries aim at reducing the intraocular pressure. About 80 to 85% of cases can be well controlled with surgery. Remaining cases of glaucoma are complicated and may present a lifelong challenge. Certain medications and eye drops are also utilized. However, all of these can have several side effects on the young child. Severity of the disease, at times, warrants use of these medications. Often lifelong therapy is needed.</p>

                    <h3 class="main-title">What postoperative care needs to be taken?</h3>    
                        <ul>
                            <li>Diligent follow-up is necessary in all cases of childhood glaucoma. Careful repeated follow up is the only way to ensure control over the disease and preservation of vision. Even children, apparently cured after successful surgery, can relapse years later and have visual loss. Hence, follow up should continue years after surgery.</li>
                            <li>After a surgery or a change in medical therapy, control of the eye pressure needs to be assessed within 2 weeks.</li>
                            <li>Size and clarity of cornea need to be frequently assessed.</li>
                            <li>Sometimes, if the child is too uncooperative, examination under short general anesthesia may be necessary</li>
                        </ul>
                        <p>NIO is one of the best eye care hospitals in Pune for treatment of glaucoma. NIO offers quality health care services with the help of experienced doctors, and state-of-the-art facilities.</p>
                        <p>You can call our Healthcare team on 02025536369 / 41460100 if you have any queries regarding your childís eye.</p>

                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
