@extends('../Layout.master')
@section('body')
<section class="page-banner">
    <img src="{{ asset('assets/img/banner-1-min.png') }}" class="img-fluid">
</section>

<section id="faqs-sec1">
    <div class="container">
        <div class="row">
        

        @foreach($faq_categories as $faq_category)
            

            <div class="col-lg-12">
                <div class="faq-title">
                    <h3>{{$faq_category->title}}</h3>
                </div>
                <div class="faq-accordion">
                    <div class="accordion" id="accordionExample{{$faq_category->id}}">
                    
                    @php $i=0; @endphp
                    @foreach($faqs as $faq)
                        @if($faq_category->id==$faq->category && $faq->status==1)

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne{{$faq->id}}">
                          <button class="accordion-button @if($i==0) @else collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$faq->id}}" @if($i==0) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="collapseOne{{$faq->id}}">
                            {{$faq->title}} 
                          </button>
                        </h2>
                        <div id="collapseOne{{$faq->id}}" class="accordion-collapse collapse @if($i==0) show @endif" aria-labelledby="headingOne{{$faq->id}}" data-bs-parent="#accordionExample{{$faq_category->id}}">
                          <div class="accordion-body">
                           {{$faq->description}} 
                          </div>
                        </div>
                      </div>

                        @php $i++; @endphp
                        @endif
                    @endforeach

                    </div>
                </div>
            </div>

                
        @endforeach
        

        </div>
    </div>
</section>
@endsection