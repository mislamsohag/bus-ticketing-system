@include('Backend.Components.head')
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        
        @include('Backend.Components.header')
        @include('Backend.Components.left_sidebar')
        <!-- **************************************** -->

             @yield('content')

        <!-- **************************************** -->
        @include('Backend.Components.footer')

    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->
    
    <!-- Theme Settings Start -->
    @include('Backend.Components.theme_setting')
    <!-- Theme Settings End -->

     <!-- JAVASCRIPTS Links Here -->
   @include('Backend.Components.js_scripts_links')
</body>

</html>