<section id="home" class="parallax-searchs section welcome-area overlay"
         style="
                background:  url({{ $searchSetting->image }})
                no-repeat scroll center center/cover;"
>
    <div class="hero-main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-inner" data-aos="zoom-in">
                        <h1 class="title text-center">{{ $searchSetting->title }}</h1>
                        <h5 class="sub-title text-center">{{ $searchSetting->detail }}</h5>
                    </div>
                </div>
                <livewire:search-header.search-form />
            </div>
        </div>
    </div>
</section>
