<div id="r-dt-travelguide">
    <div id="box-links">
        <h2>Travel Guide</h2>
        <ul>
            @foreach((new \App\PostCategory())->getAll() as $category)
            <li><a href="{{ $category->link }}" title="{{ $category->name }}"><span class="nav"></span>{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
    <div id="box-links">
        <h2>Newsletter</h2>
        <div id="newsletter">
            <p>Get our latest advice plus tips from our members. You'll also receive a free gift!</p>
            <input type="text" name="email_let" value="" id="email_let" placeholder="Enter Your Email" class="newsletter"/>
            <div class="father-sub">
                <a href="javascript:;" onclick="add_letter(); return false;" class="bt-submit"><p class="sub">Subscribe</p></a>
            </div>
            <font id="relet" style="float:left; width:71%;margin-top: 15px;">&nbsp;</font>
        </div>
    </div>
    <div id="box-links">
        <h2>Tour Packages</h2>
        <ul>
            @foreach((new \App\Group())->getAll() as $tourGroup)
            <li><a href="{{ $tourGroup->link }}" title="{{ $tourGroup->name }}"><span class="nav"></span>{{ $tourGroup->name }}</a></li>
            @endforeach
        </ul>
    </div>
    <a href="#"><img src="{{ frontend_asset('images/img-cart.png') }}"/></a>
</div>
        