<header class="Page-header">
    <div class="Page-header-bar">
        <div class="Page-header-bar-logo">
            <a aria-label="home page" href="{{ env('APP_URL') }}" data-cms-ai="0" style="font-size:18px">
                <div style="color:red;font-weight:500;">
                    <img src="{{ asset('assets/images/logo.png') }}" style="height:30px;width:30px;float:left;">
                    <div style="display:inline-block;margin-top:5px;font-size:18px;font-weight:600;color:#666">urgewares</div>
                </div>
                <div style="clear:both;"></div>
                <div style="color:#ed1c24;font-size:16px;font-weight:600;font-family:arial;">Technologies Ltd</div>
            </a>
        </div>
        <div class="Page-header-eyebrow">
            <a class="Link" href="{{ route(\App\Http\Controllers\RoutesController::$products) }}" data-cms-ai="0">Products</a>
        </div>
    </div>
</header>