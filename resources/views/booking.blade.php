@extends('layouts_other.layout')
@section('content')
    @php
    $i = 0;
    @endphp

        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                <!-- Карусель -->
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        
                        <div class="carousel-inner">
                            @php
                            $count = 0
                            @endphp
                            @foreach($images as $image)
                            @if ($image->category_id == $category->id)
                            <div class="carousel-item active">
                            <img src="../{{$image->image}}" class="d-block w-100" >
                            </div>
                            @php
                            $count = 1 + $count;
                            @endphp
                            @endif
                            @endforeach

                            @if ($count < 1)
                            @foreach($images as $image)
                            @if ($image->category_id == 0)
                            <div class="carousel-item active">
                            <img src="../{{$image->image}}" class="d-block w-100" >
                            </div>
                            @endif
                            @endforeach
                            @endif
                            

                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    </div>                
                    <!-- конец карусели -->

                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">{{$category->name}}</h1>
                        @php 
                            $stop = 0;
                        @endphp
                        @php
                        $pf = $category->price + 500;
                        @endphp
                        @if ($stop == 0)
                            @php
                                $stop++;
                            @endphp
                            <div class="fs-5">
                                <span class="text-decoration-line-through">{{$pf}} ₽</span><br>
                                <span>{{$category->price}} ₽</span>
                            </div>
                        @endif
                        @foreach($numbers as $number) 
                        
                            
                        @if ($number->category_id == $category->id)
                        
                            <p class="lead">
                            @if ($number->status == 0)
                            @php
                            $i = $i + 1;
                            @endphp
                            @endif
                            @endif
                            @endforeach
                                <p class="lead">На данный момент свободно номеров: {{$i}}
                                </p>
                            </p>
                        <div class="d-flex">
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Забронировать
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Related items section-->

        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
    @foreach($categories as $notthat)
    @if ($notthat->id != $category->id and $notthat->id != 0)
                            <div class="col mb-5">
                                <div class="card h-100">
                                    <!-- Product image-->
                                    @php
                                    $c = 0
                                    @endphp
                                    @foreach($images as $image)
                                    @if ($image->category_id == $notthat->id and $c < 1)
                                    <img class="card-img-top" src="../{{$image->image}}" />
                                    
                                    @php
                                    $c = 1 + $c;
                                    @endphp
                                    
                                    @endif
                                    @endforeach

                                    
                                    @foreach($images as $image)
                                    @if ($c == 0)
                                    @if ($image->category_id == 0)
                                    @php
                                    $c = 1 + $c;
                                    @endphp

                                    <img class="card-img-top" src="../{{$image->image}}" />
                                    @endif
                                    @endif
                                    @endforeach
                                    
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder">{{$notthat->name}}</h5>
                                            <!-- Product price-->
                                            {{$notthat->price}}
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('booking' , ['category' => $notthat])}}">Посмотреть</a></div>
                                    </div>
                                </div>
                            </div>
    @endif
@endforeach
                    </div>
                </div>
            </div>
        </section>
        


@endsection