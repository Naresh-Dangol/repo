<div id="carouselExampleIndicators" class="carousel slide banner-slider" data-ride="carousel">
           <!-- <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>  -->
          <div class="carousel-inner">
            @foreach($sliders as $key=>$slider)
            <div class="carousel-item {{$key==0?'active':''}}">
              <img class="d-block w-100" src="{{asset('uploads/photo_gallery/'.$slider->file)}}" alt="First slide">
               <div class="container overlay overlay-bg ">
                <div class=" banner-content col-lg-9 col-md-12">
                  <div class="carousel-caption row overlay overlay-bg fullscreen d-flex align-items-center justify-content-between col-lg-9 col-md-12">
                     <h1 class="text-uppercase">
                      {{$slider->content}}     
                    </h1> 


                  </div>
                </div>
                </div>
              </div>
              @endforeach
                
                  
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>    