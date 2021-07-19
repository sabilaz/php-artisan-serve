<!DOCTYPE html>
<html lang="en">
    @include('partials/header_script')
<body>
    @include('components/_header')
    
    <div class="dashboard">
        @include('components/_sidebar')
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="title-page">
                        @yield('title-page')
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    @yield('breadcrumbs')
                </div>
            </div>

            @yield('content')
        </div>
    </div>

    @include('components/_footer')
    @include('partials/footer_script')
</body>
</html>