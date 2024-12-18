@extends('frontend.layouts.frontend')

@section('meta_title', 'Alia Wisata Travel Umroh Terbaik & Terpercaya')

@section('meta_description', 'Berdiri sejak 2000, sebagai travel umroh haji Alia Wisata terus memberikan pelayanan terbaik kepada Jamaahnya. Alia juga melayani Ticketing, Tours, Hotel dan lain-lain')

@section('cssCustom')

@endsection

@section('content')
<!-- Section Hero -->
<div id="swiper_banner" class="swiper w-full">
    <div class="swiper-wrapper">
    @forelse ($sliders as $slider)
        <div class="swiper-slide">
            <div class="h-[250px] md:h-[570px] w-full overflow-hidden">
                <div class="absolute inset-0">
                <img alt="title" class="h-full w-full object-cover object-center"
                    src="{!! Storage::url($slider->photo) !!}">
                {{-- <div class="absolute inset-0 bg-black opacity-60"></div> --}}
                </div>
                <div class="relative z-10 flex flex-col justify-center items-center h-full text-center">
                {{-- <h1
                    class="md:max-w-lg lg:max-w-lg xl:max-w-2xl mx-auto text-xl md:text-2xl md:leading-normal text-white">
                    {!! $slider->title !!}
                </h1> --}}
                {{-- <div
                    class="max-w-md md:max-w-xl lg:max-w-2xl mx-auto text-white md:leading-normal tracking-wide">
                    <p class="text-3xl md:text-4xl font-bold"> {!! $slider->detail !!}</p>
                </div>
                <h2 class="md:max-w-lg lg:max-w-lg xl:max-w-2xl mx-auto text-base md:text-lg  md:leading-normal text-white">
                    {!! $slider->sub_title !!}
                </h2> --}}
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        {{-- <div class="swiper-pagination"></div> --}}
        @empty
        <p class="text-sm md:text-base text-primary"> Data Belum Tersedia </p>
    @endforelse
    </div>
</div>

<!-- Section About -->
<section id="about" class="container relative max-w-screen-xl py-10 bg-primary">
    <div class="flex flex-wrap justify-between items-center w-full gap-8 align-middle">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-8 items-center">
        <div class="lg:col-span-2 w-full relative overflow-hidden">
            <div class="flex flex-col gap-[2px] py-4">
            <!-- <div class="w-full max-w-[400px] flex flex-col gap-[2px]"> -->
            {{-- <h3 class="text-xl md:text-2xl">Selamat datang</h3> --}}
            <h2 class="text-2xl md:text-3xl font-bold py-2">Alia Wisata, Travel Umroh Terbaik dan Terpercaya.</h2>
            <p class="text-sm md:text-base text-justify">Berdiri sejak tahun 2000, Alia Wisata terus berkembang
                memberikan pelayanan kepada
                Jamaah Umroh & Haji Khusus. Alia
                Wisata juga memberikan layanan pariwisata baik Dalam maupun Luar Negeri, baik di bidang Airlines
                Ticketing,
                Tours, Hotel
                Voucher dan MICE (Meeting, Incentive, Conference & Exhibition).<br><br>

                Alia Wisata memberikan layanan yang profesional dengan infrastruktur yang ada, didukung oleh tenaga ahli
                yang
                siap
                melayani pelanggan dengan didasari kejujuran, dedikasi dan loyalitas tinggi serta profesional dalam
                memberikan
                pelayanan.<br><br>

                Sebagai travel umroh haji terpercaya Alia Wisata terdaftar sebagai penyelenggara perjalanan ibadah umrah
                (PPIU) dengan
                SK NOMOR 832 TAHUN 2019 dan dapat di lihat pada web Sisko Patuh Kemenag melalui link berikut ini</p>
            </div>
            <div class="mt-auto py-6 md:py-5 w-full md:w-2/4">
                <a href="{{ route('about') }}" class="block btn-secondary">
                    <div class="flex flex-row gap-2 items-center justify-center align-center wid">
                        Tentang Kami
                    <ion-icon name="chevron-forward-outline" class="text-white"></ion-icon>
                    </div>
                </a>
            </div>
            <div class="grid grid-cols-6 gap-4">
            <div class="bg-white rounded-md">
                <img src="{!! asset('/assets/frontend/images/logo_lembaga/amphuri-logo.png') !!}" alt="" srcset="">
            </div>
            <div class="bg-white rounded-md">
                <img src="{!! asset('/assets/frontend/images/logo_lembaga/bank-bsi-logo.png') !!}" alt="" srcset="">
            </div>
            <div class="bg-white rounded-md">
                <img src="{!! asset('/assets/frontend/images/logo_lembaga/iata-logo.png') !!}" alt="" srcset="">
            </div>
            <div class="bg-white rounded-md">
                <img src="{!! asset('/assets/frontend/images/logo_lembaga/iqra-logo.png') !!}" alt="" srcset="">
            </div>
            <div class="bg-white rounded-md">
                <img src="{!! asset('/assets/frontend/images/logo_lembaga/kan-logo.png') !!}" alt="" srcset="">
            </div>
            <div class="bg-white rounded-md">
                <img src="{!! asset('/assets/frontend/images/logo_lembaga/logo-bnsp.png') !!}" alt="" srcset="">
            </div>
            <div class="bg-white rounded-md">
                <img src="{!! asset('/assets/frontend/images/logo_lembaga/logo-kemenag.png') !!}" alt="" srcset="">
            </div>
            <div class="bg-white rounded-md">
                <img src="{!! asset('/assets/frontend/images/logo_lembaga/siskopatuh-logo.png') !!}" alt="" srcset="">
            </div>
            <div class="bg-white rounded-md">
                <img src="{!! asset('/assets/frontend/images/logo_lembaga/tims-logo.png') !!}" alt="" srcset="">
            </div>
            </div>
        </div>
        <div class="lg:col-span-2 w-full relative overflow-hidden">
            <iframe class="w-full aspect-video rounded-[20px] bg-[#D9D9D9]"
            src="https://www.youtube.com/embed/glkiTD8Lqpg" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
        </div>
    </div>
</section>

<!-- Section Select Best Package Umrah -->
<section id="packet" class="container relative max-w-screen-xl py-10 bg-white rounded-md">
    <div class="flex flex-col justify-between w-full gap-0 mb-[50px]">
        <h2 class="text-2xl md:text-3xl font-bold text-primary">Program Best Seller.</h2>
        <p class="text-base md:text-lg text-secondary">Kami memiliki paket-paket umroh yang dapat anda
            Tangal keberangkatan terdekat program umroh Alia Wisata.</p>
    </div>

    @forelse ($categories as $category)

        @if ($category->id == 1)

            <div id="swiper_product" class="swiper w-full pb-10">
                <div class="swiper-wrapper">
                    @foreach (@$category->products as $product)

                        @if ($product->category_packet === 'BEST')
                                <div class="swiper-slide w-[300px] rounded-2xl overflow-hidden relative bg-primary">
                                        <div class="group w-full overflow-hidden relative min-h-[350px] bg-primary">
                                            <img src="{!! Storage::url( $product->photo ) !!}" class="w-full h-full max-h-[250px]" alt="{!! $product->name!!}">
                                            <div class="p-4 w-full flex flex-col absolute h-full group-hover:-translate-y-[70%] transition ease-in-out duration-300 bg-primary">
                                                <div class="flex flex-wrap items-center justify-between gap-y-4">
                                                    {{-- <div class="flex flex-col gap-y-2">
                                                        <div class="flex flex-wrap gap-2">
                                                            @forelse ($product->ProductTags as $ProductTag)
                                                            <div class="bg-secondary px-2 py-1 rounded-md block">
                                                                <p class="text-[10px]">#{!! $ProductTag->name !!}</p>
                                                            </div>
                                                            @empty

                                                            @endforelse
                                                        </div>
                                                    </div> --}}
                                                    <div class="w-[150px]">
                                                        <div class="text-xl font-semibold truncate">
                                                            @forelse ($product->ProductAirlines as $ProductAirline)
                                                                <img class="w-full h-full max-w-[55%] bg-white rounded-xl" src="{!! Storage::url( $ProductAirline->airline->icon ) !!}" alt="">
                                                                @empty
                                                                <p class="text-sm md:text-base text-primary">
                                                                    Data Belum Tersedia
                                                                </p>
                                                            @endforelse
                                                        </div>
                                                        <p class="text-white text-sm mt-[6px]">
                                                            Priode •  {!! $product->start_priode->format('d-m-Y') !!}
                                                        </p>
                                                    </div>
                                                    <div class="w-[105px]">
                                                        <p class="text-[10px] text-white pb-1">Harga Mulai</p>
                                                        <p class="text-xl font-semibold text-secondary bg-white rounded-md py-2 px-1 text-center">
                                                            {!! $product->price_start_from !!} Juta
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mt-5">
                                                    <div class="flex flex-col gap-y-2">
                                                        <div class="flex items-center justify-between">
                                                            <h3 class="text-base md:text-lg font-bold text-secondary">Hotel</h3>
                                                            <ion-icon name="bed-outline" class="text-2xl bg-secondary block rounded-2xl p-1"></ion-icon>
                                                        </div>
                                                        @forelse ($product->ProductHoteles as $ProductHotel)
                                                            <div class="flex flex-row gap-2 items-center align-center justify-between">
                                                                {{-- <ion-icon name="checkmark-circle" class="text-secondary"></ion-icon> --}}
                                                                <p class="text-sm md:text-sm"> {!! $ProductHotel->hotel->name !!} </p>
                                                                <div class="flex flex-row">
                                                                    @if ($ProductHotel->hotel->rating == 1)
                                                                        <ion-icon name="star"></ion-icon>
                                                                    @elseif($ProductHotel->hotel->rating == 2)
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                    @elseif($ProductHotel->hotel->rating == 3)
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                    @elseif($ProductHotel->hotel->rating == 4)
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                    @elseif($ProductHotel->hotel->rating == 5)
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            @empty
                                                                <p class="text-sm md:text-base text-primary"> Data Belum Tersedia </p>
                                                            @endforelse
                                                    </div>
                                                </div>
                                                @if ($product->seat_available == 1)
                                                    <div class="mt-auto px-4 py-1 transition duration-300 ease-in-out opacity-0 group-hover:opacity-100">
                                                        <a href="{{ route('product.details', [$category->slug, $product->slug]) }}" class="block btn-orange">
                                                            <div class="flex flex-row gap-2 items-center justify-center align-center">
                                                                <ion-icon name="alert-circle-outline" class="text-white"></ion-icon>
                                                            Terbatas
                                                            </div>
                                                        </a>
                                                    </div>
                                                    @elseif($product->seat_available >= 1)
                                                    <div class="mt-auto px-4 py-1 transition duration-300 ease-in-out opacity-0 group-hover:opacity-100">
                                                        <a href="{{ route('product.details', [$category->slug, $product->slug]) }}" class="block btn-secondary">
                                                            <div class="flex flex-row gap-2 items-center justify-center align-center">
                                                                <ion-icon name="checkmark-circle" class="text-white"></ion-icon>
                                                                {!! $product->seat_available !!}
                                                                Tersisa
                                                            </div>
                                                        </a>
                                                    </div>
                                                    @else
                                                    <div class="mt-auto px-4 py-1 transition duration-300 ease-in-out opacity-0 group-hover:opacity-100">
                                                        <a href="#" class="block btn-red">
                                                            <div class="flex flex-row gap-2 items-center justify-center align-center">
                                                                <ion-icon name="close-circle-outline" class="text-white"></ion-icon>
                                                            Full Booked
                                                                </div>
                                                        </a>
                                                    </div>
                                                    @endif

                                            </div>

                                        </div>
                                </div>
                        @endif

                    @endforeach
                </div>
            </div>

            <div class="flex flex-col justify-between items-center">
                <a class="block btn-primary" href="{!! route('category', $category->slug) !!}">Paket Umroh Unggulan Lainnya</a>
            </div>

        @endif

        @empty
            <p class="text-sm md:text-base text-primary text-center"> Data Belum Tersedia </p>

    @endforelse

</section>

{{-- <img src="{!! asset('/assets/frontend/images/wavy-line-1.svg') !!}" class="absolute -z-10 md:top-[120rem] w-full" alt="tickety-assets"> --}}

<!-- Section Package Umrah -->
<section class="container relative max-w-screen-xl py-10">
    <div class="flex flex-col justify-between items-center w-full gap-1 mb-[50px]">
        <h2 class="text-2xl md:text-3xl font-bold text-white">Paket Categori</h2>
        <p class="text-base md:text-lg text-white text-center">Kami memiliki paket-paket umroh yang dapat anda
        pilih dari paket
        reguler dengan biaya yang lebih hemat hingga paket VIP
        untuk mendapatkan pelayanan terbaik. Semoga kita dimudahkan untuk beribadah umroh di Tanah Suci.</p>
    </div>


    <div class="flex flex-nowrap gap-4 items-center align-center justify-start md:justify-center overflow-x-auto">
        @forelse ($categories as $category)
        {{-- <a href="{!! route('category', $category->slug) !!}">
            <div class="overflow-hidden relative rounded-full w-40 h-40 border-4">
                <div class="absolute inset-0">
                    <div class="flex align-center items-center">
                        <img class="w-full h-full object-cover object-right md:object-center"
                        src="{!! Storage::url( $category->icon) !!}">
                        <div class="absolute inset-0 bg-black opacity-60"></div>
                    </div>
                </div>
                <div class="relative z-10 flex flex-col gap-y-2 justify-center items-center h-full">
                <h3 class="text-xl md:text-2xl font-bold">{!!  $category->name !!}</h3>
                </div>
            </div>
        </a> --}}
        <a href="{!! route('category', $category->slug) !!}">
            {{-- <div>
                <div class="w-[140px] rounded-full border-4">
                    <img class="w-full h-full " src="{!! Storage::url( $category->icon) !!}">
                </div>
                <div>
                    <h3 class="text-xl font-bold text-center">{!!  $category->name !!}</h3>
                </div>
            </div> --}}
            <div class="overflow-hidden relative rounded-full w-40 h-40 border-4">
                <div class="absolute inset-0 flex items-center align-center justify-center">
                    <img class="w-[70%]" src="{!! Storage::url( $category->icon) !!}">
                    <div class="absolute inset-0 bg-black opacity-30"></div>
                </div>
                <div class="relative z-10 flex flex-col gap-y-2 justify-center items-center h-full">
                    {{-- <h3 class="text-xl md:text-2xl font-bold">{!!  $category->name !!}</h3> --}}
                </div>
            </div>
            <div class="pt-5">
                <h3 class="text-xl font-bold text-center uppercase">{!!  $category->name !!}</h3>
            </div>
        </a>
        @empty
        <p class="text-sm md:text-base text-white text-center"> Data Belum Tersedia </p>
        @endforelse

    </div>
</section>

<!-- Section Select New Package Umrah -->
<section class="container relative max-w-screen-xl py-10 bg-white rounded-md">
    <div class="flex flex-col justify-between items-center w-full gap-0 mb-[50px]">
        <!-- <h3 class="text-xl md:text-2xl text-primary">Umroh Musim 1445 H</h3> -->
        <h2 class="text-2xl md:text-3xl font-bold text-secondary">Paket Umroh Terbaru</h2>
    </div>

    @forelse ($categories as $category)

    @if ($category->id == 1)

            <div id="swiper_product" class="swiper w-full pb-10">
                <div class="swiper-wrapper">
                    @foreach (@$category->products as $product)

                        @if ($product->category_packet === 'NEW')
                                <div class="swiper-slide w-[300px] rounded-2xl overflow-hidden relative bg-primary">
                                        <div class="group w-full overflow-hidden relative min-h-[350px] bg-primary">
                                            <img src="{!! Storage::url( $product->photo ) !!}" class="w-full h-full max-h-[250px]" alt="{!! $product->name!!}">
                                            <div class="p-5 w-full flex flex-col absolute h-full group-hover:-translate-y-[70%] transition ease-in-out duration-300 bg-primary">
                                                <div class="flex flex-wrap items-center justify-between gap-y-4">
                                                    {{-- <div class="flex flex-col gap-y-2">
                                                        <div class="flex flex-wrap gap-2">
                                                            @forelse ($product->ProductTags as $ProductTag)
                                                            <div class="bg-secondary px-2 py-1 rounded-md block">
                                                                <p class="text-[10px]">#{!! $ProductTag->name !!}</p>
                                                            </div>
                                                            @empty

                                                            @endforelse
                                                        </div>
                                                    </div> --}}
                                                    <div class="max-w-[150px]">
                                                        <div class="text-xl font-semibold truncate">
                                                            @forelse ($product->ProductAirlines as $ProductAirline)
                                                                <img class="w-full h-full max-w-[55%] bg-white rounded-xl" src="{!! Storage::url( $ProductAirline->airline->icon ) !!}" alt="">
                                                                @empty
                                                                <p class="text-sm md:text-base text-primary">
                                                                    Data Belum Tersedia
                                                                </p>
                                                            @endforelse
                                                        </div>
                                                        <p class="text-white text-sm mt-[6px]">
                                                            Priode •  {!! $product->start_priode->format('d-m-Y') !!}
                                                        </p>
                                                    </div>
                                                    <div class="max-w-[105px]">
                                                        <p class="text-[10px] text-white pb-1">Harga Mulai</p>
                                                        <p class="text-xl font-semibold text-secondary bg-white rounded-md py-2 px-1 text-center">
                                                            {!! $product->price_start_from !!} Juta
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mt-5">
                                                    <div class="flex flex-col gap-y-2">
                                                        <div class="flex items-center justify-between">
                                                            <h3 class="text-base md:text-lg font-bold text-secondary">Hotel</h3>
                                                            <ion-icon name="bed-outline" class="text-2xl bg-secondary block rounded-2xl p-1"></ion-icon>
                                                        </div>
                                                        @forelse ($product->ProductHoteles as $ProductHotel)
                                                            <div class="flex flex-row gap-2 items-center align-center justify-between">
                                                                {{-- <ion-icon name="checkmark-circle" class="text-secondary"></ion-icon> --}}
                                                                <p class="text-sm md:text-sm"> {!! $ProductHotel->hotel->name !!} </p>
                                                                <div class="flex flex-row">
                                                                    @if ($ProductHotel->hotel->rating == 1)
                                                                        <ion-icon name="star"></ion-icon>
                                                                    @elseif($ProductHotel->hotel->rating == 2)
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                    @elseif($ProductHotel->hotel->rating == 3)
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                    @elseif($ProductHotel->hotel->rating == 4)
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                    @elseif($ProductHotel->hotel->rating == 5)
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                        <ion-icon name="star"></ion-icon>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            @empty
                                                                <p class="text-sm md:text-base text-primary"> Data Belum Tersedia </p>
                                                            @endforelse
                                                    </div>
                                                </div>
                                                @if ($product->seat_available == 1)
                                                    <div class="mt-auto px-4 py-1 transition duration-300 ease-in-out opacity-0 group-hover:opacity-100">
                                                        <a href="{{ route('product.details', [$category->slug, $product->slug]) }}" class="block btn-orange">
                                                            <div class="flex flex-row gap-2 items-center justify-center align-center">
                                                                <ion-icon name="alert-circle-outline" class="text-white"></ion-icon>
                                                            Terbatas
                                                            </div>
                                                        </a>
                                                    </div>
                                                    @elseif($product->seat_available >= 1)
                                                    <div class="mt-auto px-4 py-1 transition duration-300 ease-in-out opacity-0 group-hover:opacity-100">
                                                        <a href="{{ route('product.details', [$category->slug, $product->slug]) }}" class="block btn-secondary">
                                                            <div class="flex flex-row gap-2 items-center justify-center align-center">
                                                                <ion-icon name="checkmark-circle" class="text-white"></ion-icon>
                                                                {!! $product->seat_available !!}
                                                                Tersisa
                                                            </div>
                                                        </a>
                                                    </div>
                                                    @else
                                                    <div class="mt-auto px-4 py-1 transition duration-300 ease-in-out opacity-0 group-hover:opacity-100">
                                                        <a href="#" class="block btn-red">
                                                            <div class="flex flex-row gap-2 items-center justify-center align-center">
                                                                <ion-icon name="close-circle-outline" class="text-white"></ion-icon>
                                                            Full Booked
                                                                </div>
                                                        </a>
                                                    </div>
                                                    @endif

                                            </div>

                                        </div>
                                </div>
                        @endif

                    @endforeach
                </div>
            </div>

        <div class="flex flex-col justify-between items-center">
            <a class="block btn-primary" href="{!! route('category', $category->slug) !!}">Paket Umroh Terbaru Lainnya</a>
        </div>
    @endif

    @empty
        <p class="text-sm md:text-base text-primary text-center"> Data Belum Tersedia </p>
    @endforelse

</section>

<!-- Section Brosur -->
<section class="container relative max-w-screen-xl py-10">
    <div class="flex flex-col justify-between items-center w-full gap-1 mb-[50px]">
        <!-- <h3 class="text-xl md:text-2xl font-semibold text-white">Brosur Terbaru Update</h3> -->
        <h2 class="text-2xl md:text-3xl font-bold text-secondary">Brosur Terbaru Update</h2>
    </div>
    <div id="swiper_brochure" class="swiper w-full">
    <div class="swiper-wrapper" id="swiper_brochure_lg-swipper">
        @forelse ($brochures as $brochure)
        {{-- <div class="swiper-slide"> --}}
            <a data-src="{!! Storage::url($brochure->photo) !!}" class="swiper-slide">
                <img class="w-full rounded-lg" src="{!! Storage::url($brochure->photo) !!}" alt="{!! $brochure->name !!}">
            </a>
        {{-- </div> --}}
        @empty
        <p class="text-sm md:text-base text-white text-center"> Data Belum Tersedia </p>
        @endforelse
    </div>
    </div>
</section>

<!-- Section Services -->
<section class="container relative max-w-screen-xl py-10 bg-white rounded-md">
    <div class="flex flex-col justify-between items-center w-full gap-1 mb-[50px]">
        <h3 class="text-xl md:text-2xl font-semibold text-white">Layanan Kami</h3>
        {{-- <h2 class="text-2xl md:text-3xl font-bold text-primary">Kenapa Harus Kami</h2> --}}
        <h2 class="text-2xl md:text-3xl font-bold text-primary">Mengapa memilih kami?</h2>
    </div>
    {{-- <div class="flex flex-col md:flex-row flex-wrap justify-center gap-8 lg:gap-[120px] items-center">
        <img class="w-full md:max-w-[536px]"
        src="{!!  asset('/assets/frontend/images/cropped-1200px-Garuda_Indonesia_Boeing_737-800_PK-GMM_HKG_2012-7-18-780x405.png') !!}"
        alt="">
        <div class="max-w-[420px] w-full">
        <header>
            <h3 class="text-xl md:text-2xl font-bold text-primary mb-1">Poin Plus.</h3>
            <p class="text-sm md:text-base text-primary mb-1">Rasakan pengalaman ibadah umroh yang aman dan nyaman bersama Alia Wisata.</p>
        </header>
        <!-- Service Item -->
        <div class="flex items-center gap-6 py-3 bg-gradient-to-tr from-emerald-500 rounded-lg p-2 mb-2">
            <img class="w-[60px]" src="{!! asset('/assets/frontend/images/man.png') !!}" alt="">
            <div>
            <h3 class="text-xl md:text-2xl font-bold text-primary mb-1">Support</h3>
            <p class="text-sm md:text-base text-primary mb-1">Guna memberikan pelayanan terbaik, Alia Wisata bekerja
                sama
                dengan mitra usaha
                terpercaya melalui
                jaringan luas kami,
                baik maskapai penerbangan, hotel, maupun pemerintah</p>
            </div>
        </div>
        <div class="flex items-center gap-6 py-3 bg-gradient-to-tr from-emerald-500 rounded-lg p-2 mb-2">
            <img class="w-[60px]" src="{!! asset('/assets/frontend/images/tawaf.png') !!}" alt="">
            <div>
            <h3 class="text-xl md:text-2xl font-bold text-primary mb-1">Quality</h3>
            <p class="text-sm md:text-base text-primary mb-1">Produk jasa Alia Wisata dirancang dan dikemas oleh
                tenaga
                kerja
                yang profesional dan
                berpengalaman,
                sehingga terjaga
                kualitas dan layanannya</p>
            </div>
        </div>
        <div class="flex items-center gap-6 py-3 bg-gradient-to-tr from-emerald-500 rounded-lg p-2 mb-2">
            <img class="w-[60px]" src="{!! asset('/assets/frontend/images/umrah.png') !!}" alt="">
            <div>
            <h3 class="text-xl md:text-2xl font-bold text-primary mb-1">Responsive</h3>
            <p class="text-sm md:text-base text-primary mb-1">Alia Wisata sebagai travel umrah haji berkomitmen pada
                standar
                kerja tinggi, untuk
                memberikan pelayanan
                terbaik dan
                amanah kepada setiap pelanggan maupun mitra usahanya</p>
            </div>
        </div>

        </div>
    </div> --}}

    <div class="flex flex-wrap">

        @forelse ($services as $key => $service)
            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div class="mb-9 rounded-[20px] bg-secondary p-4 shadow-2 hover:shadow-lg md:px-7 xl:px-5">
                    <div class="relative w-14 h-14 bg-primary rounded-full flex justify-center items-center text-center p-5 shadow-xl -mt-10 mx-auto mb-5 text-xl">
                        {{-- <span class="absolute text-8xl left-0 top-0 text-purple-800">"
                        </span> --}}
                        {!! $key + 1 !!}
                    </div>
                    <div class="bg-primary mb-5 flex h-[70px] w-[70px] items-center justify-center rounded-2xl mx-auto">
                        <img class="w-[60px]" src="{!! Storage::url( $service->icon ) !!}" alt="">
                    </div>
                    <h4 class="text-white mb-[14px] text-sm md:text-base text-center">
                        {!! $service->description !!}
                    </h4>
                </div>
            </div>

        @empty

        @endforelse

    </div>

</section>

<!-- Section Testimonial -->
<section class="container relative max-w-screen-xl py-10">
    <div class="flex flex-col justify-between w-full gap-1 mb-[50px]">
        <h2 class="text-2xl md:text-3xl font-bold text-white">Testimoni Jamaah.</h2>
        <p class="text-base md:text-lg text-white">Dapatkan promo potongan harga menarik untuk perjalanan ibadh umroh sahabat semua.</p>
    </div>

    <div id="swiper_testimonial" class="swiper w-full">
        <div class="swiper-wrapper">
            @forelse ($testimonials as $testimonial)
            <div class="swiper-slide">
                    <div>
                        <video class="player rounded-xl" playsinline crossorigin controls data-poster="{!! Storage::url($testimonial->thumbnail) !!}">
                            <source src="{!! Storage::url($testimonial->video) !!}" type="video/mp4" />
                    </div>
                        {{-- <source src="/path/to/video.webm" type="video/webm" /> --}}

                        <!-- Captions are optional -->
                        {{-- <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default /> --}}
                    </video>
            </div>
                {{-- <div class="lg:col-span-4 col-span-12">
                    <div class="flex flex-col gap-4 bg-white p-5 rounded-lg">
                        <div class="flex flex-row gap-4 items-center text-primary">
                                <img class="h-14 rounded-full" src="{!! Storage::url($testimonial->photo) !!}" alt="">
                            <div class="flex flex-col">
                                <h4 class="text-base md:text-lg font-bold">{!!$testimonial->name !!}</h4>
                                <p>{!!$testimonial->title !!}</p>
                                </div>
                        </div>
                        <p class="text-sm md:text-base text-primary">{!!$testimonial->comments !!}
                        </p>
                        <div class="flex flex-row gap-x-1 text-secondary items-center justify-center text-xl">
                                @if ($testimonial->rating == 1)
                                    <ion-icon name="star"></ion-icon>
                                @elseif($testimonial->rating == 2)
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                @elseif($testimonial->rating == 3)
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                @elseif($testimonial->rating == 4)
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                @elseif($testimonial->rating == 5)
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                @endif
                        </div>
                    </div>
                </div> --}}
            @empty

            @endforelse
                {{-- <div class="swiper-slide">
                    <div class="lg:col-span-4 col-span-12">
                        <div class="flex flex-col gap-4 bg-white p-5 rounded-lg">
                        <div class="flex flex-row gap-4 items-center text-primary">
                            <img class="h-12" src="./assets/images/testimonial/tria_member.png" alt="">
                            <div class="flex flex-col">
                            <h4 class="text-base md:text-lg font-bold">Yuni Asri</h4>
                            <p>Jamaah</p>
                            </div>
                        </div>
                        <p class="text-sm md:text-base text-primary">Puji Syukur kepada Allah akhirnya saya bisa melaksanakan ibadah
                            umroh, dan
                            terimakasih buat Alia Wisata yang telah
                            memberikan pelayanan terbaik hingga pulang ke tanah air
                        </p>
                        <div class="flex flex-row gap-x-1 text-secondary items-center justify-center text-xl">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="lg:col-span-4 col-span-12">
                        <div class="flex flex-col gap-4 bg-white p-5 rounded-lg">
                        <div class="flex flex-row gap-4 items-center text-primary">
                            <img class="h-12" src="./assets/images/testimonial/tria_member.png" alt="">
                            <div class="flex flex-col">
                            <h4 class="text-base md:text-lg font-bold">Yuni Asri</h4>
                            <p>Jamaah</p>
                            </div>
                        </div>
                        <p class="text-sm md:text-base text-primary">Puji Syukur kepada Allah akhirnya saya bisa melaksanakan ibadah
                            umroh, dan
                            terimakasih buat Alia Wisata yang telah
                            memberikan pelayanan terbaik hingga pulang ke tanah air
                        </p>
                        <div class="flex flex-row gap-x-1 text-secondary items-center justify-center text-xl">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="lg:col-span-4 col-span-12">
                        <div class="flex flex-col gap-4 bg-white p-5 rounded-lg">
                        <div class="flex flex-row gap-4 items-center text-primary">
                            <img class="h-12" src="./assets/images/testimonial/tria_member.png" alt="">
                            <div class="flex flex-col">
                            <h4 class="text-base md:text-lg font-bold">Yuni Asri</h4>
                            <p>Jamaah</p>
                            </div>
                        </div>
                        <p class="text-sm md:text-base text-primary">Puji Syukur kepada Allah akhirnya saya bisa melaksanakan ibadah
                            umroh, dan
                            terimakasih buat Alia Wisata yang telah
                            memberikan pelayanan terbaik hingga pulang ke tanah air
                        </p>
                        <div class="flex flex-row gap-x-1 text-secondary items-center justify-center text-xl">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        </div>
                    </div>
                </div> --}}

        </div>
    </div>
</section>

{{-- <!-- Section Promo -->
<section class="container relative max-w-screen-xl py-10 bg-white rounded-md">
    <div class="flex flex-col justify-between w-full gap-0 mb-[50px]">
        <h2 class="text-2xl md:text-3xl font-bold text-secondary">Klaim Voucher</h2>
        <p class="text-base md:text-lg text-primary">Dapatkan promo potongan harga menarik untuk perjalanan ibadah umroh sahabat semua.</p>
    </div>
    <div id="swiper_promo" class="swiper w-full">
        <div class="swiper-wrapper">
        @forelse ($promos as $promo)
            <div class="swiper-slide">
                <img class="w-[550px] h-[200px] rounded-2xl" src="{!! Storage::url($promo->photo) !!}" alt="">
            </div>
        @empty
            <p class="text-sm md:text-base text-white text-center"> Data Belum Tersedia </p>
        @endforelse
        </div>
    </div>
</section> --}}

<!-- Section News -->
<section class="container relative max-w-screen-xl py-10 bg-white rounded-md">
    <div class="flex flex-col justify-between w-full gap-0 mb-[50px]">
        <h2 class="text-2xl md:text-3xl font-bold text-secondary">News.</h2>
        <p class="text-base md:text-lg text-primary">Dapatkan berita menarik untuk perjalanan ibadah umroh sahabat semua.</p>
    </div>

    <div id="swiper_blog" class="swiper w-full">
        <div class="swiper-wrapper">
            @forelse ($blogscraps as $blogscrap)
            <div class="swiper-slide">
                <a href="{!! $blogscrap->url !!}" target="_blank">
                    <div class="lg:col-span-4 col-span-12">
                        <div class="flex flex-col gap-4 bg-primary p-5 rounded-lg">
                            <div class="flex flex-row gap-4 items-center text-white">
                                <img class="h-20" src="{!! Storage::url($blogscrap->photo) !!}" alt="">
                                <div class="flex flex-col">
                                <h4 class="text-base font-bold">{!! $blogscrap->title !!}</h4>
                                {{-- <p>Jamaah</p> --}}
                                </div>
                            </div>
                            <p class="text-sm md:text-base text-white">
                                {!! substr($blogscrap->detail, 0, 200) !!} {!! strlen($blogscrap->detail) > 50 ? '...' : '' !!}

                            </p>
                        </div>
                    </div>
                </a>
            </div>

            @empty

            @endforelse
        </div>
    </div>
    {{-- <div id="swiper_promo" class="swiper w-full">
        <div class="swiper-wrapper">
        @forelse ($promos as $promo)
            <div class="swiper-slide">
                <img class="w-[550px] h-[200px] rounded-2xl" src="{!! Storage::url($promo->photo) !!}" alt="">
            </div>
        @empty
            <p class="text-sm md:text-base text-white text-center"> Data Belum Tersedia </p>
        @endforelse
        </div>
    </div> --}}
</section>

<!-- Section Maskapai -->
<section class="container relative max-w-screen-xl py-10">
    <div class="flex flex-col justify-between w-full gap-1 mb-[50px]">
        <h2 class="text-2xl md:text-3xl font-bold text-white">Partner Maskapai.</h2>
        <p class="text-base md:text-lg text-white">Dapatkan promo potongan harga menarik untuk perjalanan ibadah umroh sahabat semua.</p>
    </div>
    <div id="swiper_maskapai" class="swiper w-full">
    <div class="swiper-wrapper">
    {{-- <div id="mitraCarousel"> --}}
        @forelse ($airlines as $airline)
        <div class="swiper-slide">
            <img class="rounded-2xl bg-white" src="{!! Storage::url($airline->photo) !!}"
                alt="{!! $airline->title !!}">
            {{-- <img class="w-[150px] h-[120px] rounded-2xl mr-[30px]" src="{!! Storage::url($airline->icon) !!}"
                alt="{!! $airline->title !!}"> --}}
        </div>
        @empty
        <p class="text-sm md:text-base text-white text-center"> Data Belum Tersedia </p>
        @endforelse
    {{-- </div> --}}
    </div>
    </div>
</section>

<!-- Section Map -->
<section class="relative w-full h-96 pt-10">
<iframe class="absolute top-0 left-0 w-full h-full"
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1983.0592767550183!2d106.910004!3d-6.248105!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f32ce6fef20f%3A0x89dca65a133bb62!2sAlia%20Wisata!5e0!3m2!1sid!2sid!4v1725100268556!5m2!1sid!2sid"
    style="border:0;" allowfullscreen="" frameborder="0" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@endsection

@section('jsCustom')

@endsection
