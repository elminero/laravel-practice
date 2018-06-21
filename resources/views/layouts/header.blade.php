<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-3 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
        </div>
        <div class="col-3 text-center">
            <a class="blog-header-logo text-dark" href="#">Large</a>
        </div>



        @if (Auth::check())
            <div class="col-3 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#">

                </a>
                <a class="btn btn-sm btn-outline-secondary" href="#">{{Auth::user()->name}}</a>
            </div>
        @endif



        <div class="col-3 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">

            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
        </div>



    </div>
</header>