<!-- <html>
<body>
<ul>
    @foreach($avtori as $author)
    <li><a href="{{ route('avtor.prikazi',['id'=>$author->id]) }}">{{$author->name}}</li>
    @endforeach
</ul>
</body>
</html> -->



@extends('_layout.cork')
@section('content')
    
<div class="row justify-content-center">
<div class="faq container"> <div class="faq-layouting layout-spacing"> 
    <div class="kb-widget-section">
         <div class="row justify-content-center">
             @foreach($avtori as $author) 
             <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3"> 
                <div class="card"> 
                <div class="card-body"> 
                    <a href="{{ route('avtor.prikazi', ['id' => $author->id])}}">
                        <div class="card-icon mb-4">
                             <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> -->
                                <img src="" alt=""> 
                                <h5 class='card-title mb-0'>{{$author->name}}</h5>
                        </div>
                </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div> 
    </div>
</div>
</div> 
               
@endsection