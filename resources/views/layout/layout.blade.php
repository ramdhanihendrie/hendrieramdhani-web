<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->
<x-head/>

<body class="home-5-body-color">

    <!-- Preloader Start -->
    <x-Preloader/>

    <!-- Back To Top Start -->
    <x-backtotop/>

    <!-- Offcanvas Area Start -->
    <x-Offcanvas/>

    <!-- Header Area Start -->
    <?php 

        if (!isset($header)) {
            ?>
            <x-header/>
            <?php
        }
    ?>

    <!--<< Breadcrumb Section Start >>-->
    <?php 

        if (!isset($breadcrumb)) {
            ?>
            <x-breadcrumb title='{{ $title}}' subTitle='{{ $subTitle}}' subTitle2='{{ $subTitle2}}'/>
            <?php
        }
    ?>

     @yield('content')

    <x-footer/>

    <!--<< All JS Plugins >>-->
    <x-script/>

</body>

</html>