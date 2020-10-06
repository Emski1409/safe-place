@extends('layouts.default')
@section('jumbo')
  @include('widgets.jumbo', ['message' => 
    'Get Help - World Mental Health Day October 10th 2020!'])
@stop
@section('content')
<div id="step">
<h1> Take one small step to improve your mental health today</h1>
</div>
<br>
<br>

<h2>Information and Advice</h2>
<br>

<body id="my_img"> 
    <div class="container">
      <div class="row">
            <div class="col-md-3 ">
              <a href="https://www.mind.org.uk/">
              <img src="{{url('/images/mind.jpg')}}" class="img-thumbnail" alt="tiger"> 
                <h5>
                    Mind
                </h5>
                
            </div>
            <div class="col-md-3">
            <a href="https://www.rethink.org.uk/">
              <img src="{{url('/images/rethink.png')}}" 
              class="img-thumbnail" alt="tiger"> 
                 <h5>
                    Rethink
                </h5>
             
            </div>
            <div class="col-md-3">
            <a href="https://www.mentalhealth.org.uk/">
                <img src="{{url('/images/mhfoundation.png')}}" class="img-thumbnail" alt="tiger"> 
                    <h5>
                    The Mental Health Foundation
                    </h5>
               
            </div>
            <div class="col-md-3">
            <a href="https://www.nhs.uk/using-the-nhs/nhs-services/mental-health-services/">
              <img src="{{url('/images/nhs.png')}}"class="img-thumbnail" alt="tiger"> 
                 <h5>
                    NHS
                </h5>
            </div>
      </div>      
      <h2>Support</h2>
      <br>
       <div class="row">
            <div class="col-md-3">
              <a href ="www.anxietyuk.org.uk">
              <img src="{{url('/images/anxietyuk.jpg')}}"
              class="img-thumbnail" alt="tiger"> 
                <h5>
                    Anxiety UK
                </h5>
                
            </div>
            <div class="col-md-3">
            <a href ="www.bipolaruk.org.uk">
            <img src="{{url('/images/bipolaruk.jpg')}}"class="img-thumbnail" alt="tiger"> 
                 <h5>
                   Bipolar UK
                </h5>
               
            </div>
            <div class="col-md-3">
            <a href="https://www.samaritans.org/">
                <img src="{{url('/images/samaritans.png')}}" class="img-thumbnail" alt="tiger"> 
                    <h5>
                    The Samaritians
                    </h5>
             
            </div>
            <div class="col-md-3">
            <a href="https://www.papyrus-uk.org/">
              <img src="{{url('/images/pap.png')}}" class="img-thumbnail" alt="tiger"> 
                 <h5>
                 Papyrus suicide prevention
                </h5>
              
            </div>
       </div>
       <h2>Children and Young People</h2>
       <br>
       <div class="row">
            <div class="col-md-3">
              <a href="https://youngminds.org.uk/">
              <img src="{{url('/images/youngmind.png')}}" 
              class="img-thumbnail" alt="tiger"> 
                <h5>
                    Young Minds
                </h5>
               
            </div>
            <div class="col-md-3">
            <a href="https://www.familylives.org.uk">
              <img src="{{url('/images/familylives.jpg')}}"
              class="img-thumbnail" alt="tiger"> 
                 <h5>
                    Family Lives
                </h5>
            
            </div>
            <div class="col-md-3">
                <a href = "https://www.barnardos.org.uk/">
                <img src="{{url('/images/barnardos.png
                ')}}"
                class="img-thumbnail" alt="tiger"> 
                    <h5>
                   Banardos
                    </h5>
            </div>

            <div class="col-md-3">
               <a href= "https://www.princes-trust.org.uk/">  
              <img src="{{url('/images/prince.png
                ')}}" class="img-thumbnail" alt="tiger"> 
                 <h5>
                 The Prince's Trust
                </h5>
            </div>
        </div>
        
      <h2>Activities</h2>
      <br>
        <div class="row">
            <div class="col-md-3 ">
            <a href="https://www.headspace.com/">
              <img src="{{url('/images/Headspace.png')}}" class="img-thumbnail" alt="tiger">
                <h5>
                    Headspace
                </h5>
                
            </div>
            <div class="col-md-3">
               <a href = "www.thecalmzone.net">
              <img src="{{url('/images/calm.jpeg')}}"class="img-thumbnail" alt="tiger"> 
                 <h5>
                    The Calm Zone
                </h5>
             
            </div>
            <div class="col-md-3">
                <a href = "https://www.mindful.org/">
                <img src="{{url('/images/mindful.jpeg')}}"class="img-thumbnail" alt="tiger"> 
                    <h5>
                    Mindfulness Resources
                    </h5>
               
            </div>
            <div class="col-md-3">
              <a href = "https://www.youtube.com/results?search_query=meditation">  
              <img src="{{url('/images/youtube.png')}}"class="img-thumbnail" alt="tiger"> 
                 <h5>
                 YouTube Meditation
                </h5>
            </div>
      </div>       
      <h2>Your Legal Rights</h2>
        <div class="row">
            <div class="col-md-3 ">
               <a href="https://www.legislation.gov.uk/ukpga/1983/20/contents"> 
              <img src="{{url('/images/mha.jpeg
                ')}}" class="img-thumbnail" alt="tiger"> 
                <h5>
                  The Mental Health Act
                </h5>
                
            </div>
            <div class="col-md-3">
              <a href = "https://www.nhs.uk/using-the-nhs/nhs-services/mental-health-services/mental-health-act-your-rights-easy-read/">
              <img src="{{url('/images/rights.jpg
                ')}}"class="img-thumbnail" alt="tiger"> 
                 <h5>
                   Your rights an easy read
                </h5>
            </div>
      </div>     
    </div>
</body>
  @stop