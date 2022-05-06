<div class="col-12">
    <div class="banner-search-wrap" data-aos="zoom-in">
        <div class="tab-content">
            <div class="tab-pane fade show active">
                <div class="rld-main-search">
                    <form action="{{ route('tim_kiem_nha_dat') }}" method="GET">
                        <div class="row">
                            <div class="rld-single-input col-md-3">
                                <input type="text" name="keyword" placeholder="Bạn muốn tìm....">
                            </div>
                            <div class="rld-single-select ml-22 col-md-3" >
                                <select class="select single-select" name="danh_muc">
                                    <option disabled selected>--  Danh, Mục  --</option>
                                    @foreach($danhMucs as $danhMuc)
                                    <option value="{{ $danhMuc->slug }}">{{ $danhMuc->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="rld-single-select col-md-3">
                                <select class="select single-select mr-0" name="quan_huyen">
                                    <option value="1">--  Quận, Huyện  --</option>
                                    @foreach($quanHuyens as $quanHuyen)
                                    <option value="{{ $quanHuyen->slug }}">{{ $quanHuyen->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 pl-0">
                                <button class="btn btn-yellow" type="submit">Tìm kiếm ngay</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
