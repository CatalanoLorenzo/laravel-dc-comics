<footer>
    <section class="top text-white m-auto">
        <div class="container">
            <div class="row flex-column">
                <div class="col">
                    <nav class="navbar navbar-expand-sm shop p-3">
                        <div class="container-fluid ">
                            @foreach($shops as $shop)

                            <div class="py-3" >
                                <a class="navbar-brand" >
                                    <img class="m-2" src="{{$shop['src'] == 'buy-dc-power-visa' ? Vite::asset('resources/img/' . $shop['src'] . '.svg') : Vite::asset('resources/img/'. $shop['src'] .'.png')}}" alt="element.text">
                                    <span class="text-white">{{ $shop['text'] }}</span>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </nav>

                </div>
            </div>
        </div>
        <section class="center p-3 position-relative">
            <div class="container ">
                <div class="row">
                    <div class="col">
                        <nav class=" contacts d-flex align-items-start">
                            <div class="col-2 p-0 d-flex flex-wrap">
                                <section class="py-1 d-flex flex-column h-100 justify-content-end">
                                    <div class="container">
                                        <div class="row row-cols-3 d-flex flex-nowrap">
                                            @foreach($about_nav as $element )
                                            @if($element['title'] == 'DC COMICS')
                                            <div class="col">
                                                <h4 class="text-white">{{$about_nav[0]['title']}}</h4>
                                                <ul class="px-0 list-unstyled">
                                                    @foreach($about_nav[0]['link'] as $value)
                                                    <li>
                                                        <a class="text-decoration-none text-white" href="/{{$value}}">{{$value}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                <h4 class="text-white">{{$about_nav[1]['title']}}</h4>
                                                <ul class="px-0 list-unstyled">
                                                    @foreach($about_nav[1]['link'] as $value)
                                                    <li>
                                                        <a class="text-decoration-none text-white" href="/{{$value}}">{{$value}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @elseif($element['title'] == 'SHOP')
                                            @else
                                            <div class="col">
                                                <h4 class="text-white">{{$element['title']}}</h4>
                                                <ul class="px-0 list-unstyled">
                                                    @foreach($element['link'] as $value)
                                                    <li>
                                                        <a class="text-decoration-none text-white" href="/{{$value}}">{{$value}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>

                                </section>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="bottom py-1 position-relative">
            <div class="container py-2">
                <div class="row justify-content-between py-4">
                    <div class="col">
                        <a name="" id="" class="btn text-white border-1 border-primary" href="#" role="button">
                            SIGN-UP NOW!
                        </a>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <div class="followUs d-flex py-2 ">
                            <h4 class="text-white px-3 d-flex align-items-center">Follow US</h4>
                            <div class="icon">
                                @foreach($footericon as $icon => $path)
                                <a href="" class=" text-decoration-none">
                                    <img class="m-1" src="{{ Vite::asset('resources/img/' . $path . '.png')}} " alt="{{$icon}}">
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>