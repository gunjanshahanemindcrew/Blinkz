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
                    <h3 class="main-title">Why does my child have glasses?</h3>
                        <p>Children usually inherit glasses from their parents. If either parent has glasses, then there is a fair chance that the child may get it. If both parents have glasses, chances are that the children will have them too. However sometimes even when the parents do not have glasses the kids may still get it. This is also a possibility as heredity is not the only causative factor. Having glasses seems to be a multifactorial problem.</p> 

                    <h3 class="main-title">How do glasses help see clearly?</h3>
                        <p>Eye glasses help bend the incoming light rays so that they are focused properly on the retina of the eye. Adults wear glasses to see more clearly, however children may wear glasses for a variety of reasons.</p>
                        <p>Rays of light form a point of focus on the sensitive part of the eye known as retina and the eye can see clearly without any aid. But in a myopic eye (short sightedness), the axial length of the eye being larger than normal do not let the rays of light form a point focus on the fovea, and thus objects are seen blurred. When a concave lens (minus number lens) is placed in front of the eye, the rays of light falling on the eye make a point focus on the retina thus enabling the eye to see clearly.</p>
                        <p>In a hypermetropic eye (long sightedness) the axial length of the eye is smaller and hence rays of light falling on the retina do not form a point focus on the retina (fovea). But when a convex lens (plus number glasses) is placed in front of the eye, the eye can see clearly.</p>

                    <h3 class="main-title">What is astigmatism?</h3>
                        <p>Astigmatism occurs when the cornea is not symmetrical. The cornea has 2 radii of curvature ñ horizontal and vertical. When these 2 are not balanced, i.e. one meridian is steeper than the other; the condition is known as astigmatism. The patient perceives seeing shadows around objects or straight lines appear slanting. This is remedied by adding ìCylindrical lensesî (eye glasses or contact lenses) which have power only in one meridian.</p>

                    <h3 class="main-title">Will my childís number reduce if he/she wears glasses all the time?</h3>
                        <p>The eyeís number usually does not disappear only because the child has been wearing glasses all the time. As illustrated earlier, having glasses is an optical phenomenon, related to the length of the eyeball. As the child grows his eye balls also increases in length and hence till he/she is 18 years (in some cases 21 years old), the number does not stabilize. As age advances, with growth of the child, the number may increase.</p>
                        <p>My child watches TV too much, does not eat carrots and vegetables properly. Is that why he/she has glasses today?</p>
                        <p>Just watching TV for a prolonged duration may not lead to glasses. Similarly, vegetables, carrots, though contain vitamins and essential nutrients do not contribute towards needing glasses or otherwise. Even if a child with glasses eats carrots regularly, the number will not disappear only because of this.</p>

                    <h3 class="main-title">Is it necessary for my child to wear glasses, though he/she is not complaining of eye strain or headache?</h3>
                        <p>Yes. Depending upon the power of glasses whether plus or minus, your doctor will advice you regarding the wearing schedule. Remember, by wearing glasses only, some types of lazy eye can be prevented/cured.</p>

                    <h3 class="main-title">What do I do if the child refuses to wear glasses?</h3>
                        <p>If your child refuses to wear glasses, consult an eye doctor to make sure the prescription is correct. If the prescription is correct, you may want to use positive reinforcement and explain why itís important to wear them.</p>

                    <h3 class="main-title">How can I get rid of my childís glasses?</h3>
                        <p>When the number stabilizes by 18-21 years (that is, there is no change in power atleast for a year or so) laser can be utilized to get rid of glasses. It is a very safe and effective method to get rid of glasses permanently.</p>



                        
                    @include('web-views.faq.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
