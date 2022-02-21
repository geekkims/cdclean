<!DOCTYPE html>
<html lang="zxx">

@include('components.css')

    <body>
        <!-- Preloader -->
        <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Navbar Area -->
       @include('components.nav')
        <!-- End Navbar Area -->

        <!-- Banner -->
       @include('components.banner')
        <!-- End Banner -->

        <!-- Counter -->
     @include('components.counter')
        <!-- End Counter -->

        <!-- Choose -->
        @include('components.about')
        <!-- End Choose -->

        <!-- Services -->
      @include('components.service')
        <!-- End Services -->

        <!-- Estimate -->
        @include('components.form')
        <!-- End Estimate -->




        <!-- Footer -->
        @include('components.footer')
        <!-- End Footer -->


        <!-- Essential JS -->
       @include('components.js')
    </body>
</html>
