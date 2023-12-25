@extends('Layouts.home')

@section('content')   
 <!-- Small Serarch Section Start -->
    <section class="advanceSearch_banner__fX6cS">
        <div class="col-11 col-lg-12 col-xl-11 mx-auto">
            <div class="advanceSearch_advance-search__Z_V_h">
                <form id="searchBus" class="ant-form ant-form-horizontal">
                    <div class="searchPane_searchPane__tHrHb">
                        <div class="searchForm">
                            <div class="ant-row" style="margin-left:-6px;margin-right:-6px">
                                <div style="padding-left:6px;padding-right:6px"
                                    class="ant-col ant-col-xs-24 ant-col-lg-5">
                                    <div class="ant-row ant-form-item">
                                        <div class="ant-col ant-form-item-control">
                                            <div class="ant-form-item-control-input">
                                                <div class="ant-form-item-control-input-content">
                                                    <div class="ant-select ant-select-in-form-item ant-select-single ant-select-allow-clear ant-select-show-arrow ant-select-show-search"
                                                        style="width:100%">
                                                        <div class="ant-select-selector">
                                                            <span class="ant-select-selection-search">

                                                                <!-- Station Input -->
                                                                <input type="text" class="ant-select-selection-search-input" value="" placeholder="From">
                                                            </span>
                                                        </div>
                                                        <span class="ant-select-arrow" style="user-select:none;-webkit-user-select:none"
                                                            unselectable="on" aria-hidden="true"><span role="img"
                                                                aria-label="environment"
                                                                class="anticon anticon-environment mt-1"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="environment" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true">
                                                                    <path
                                                                        d="M854.6 289.1a362.49 362.49 0 00-79.9-115.7 370.83 370.83 0 00-118.2-77.8C610.7 76.6 562.1 67 512 67c-50.1 0-98.7 9.6-144.5 28.5-44.3 18.3-84 44.5-118.2 77.8A363.6 363.6 0 00169.4 289c-19.5 45-29.4 92.8-29.4 142 0 70.6 16.9 140.9 50.1 208.7 26.7 54.5 64 107.6 111 158.1 80.3 86.2 164.5 138.9 188.4 153a43.9 43.9 0 0022.4 6.1c7.8 0 15.5-2 22.4-6.1 23.9-14.1 108.1-66.8 188.4-153 47-50.4 84.3-103.6 111-158.1C867.1 572 884 501.8 884 431.1c0-49.2-9.9-97-29.4-142zM512 880.2c-65.9-41.9-300-207.8-300-449.1 0-77.9 31.1-151.1 87.6-206.3C356.3 169.5 431.7 139 512 139s155.7 30.5 212.4 85.9C780.9 280 812 353.2 812 431.1c0 241.3-234.1 407.2-300 449.1zm0-617.2c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm79.2 255.2A111.6 111.6 0 01512 551c-29.9 0-58-11.7-79.2-32.8A111.6 111.6 0 01400 439c0-29.9 11.7-58 32.8-79.2C454 338.6 482.1 327 512 327c29.9 0 58 11.6 79.2 32.8C612.4 381 624 409.1 624 439c0 29.9-11.6 58-32.8 79.2z">
                                                                    </path>
                                                                </svg></span>
                                                        </span>
                                                            <span class="ant-select-clear"
                                                            style="user-select: none;" unselectable="on"
                                                            aria-hidden="true"><span role="img"
                                                                aria-label="close-circle"
                                                                class="anticon anticon-close-circle"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="close-circle" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true">
                                                                    <path
                                                                        d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm165.4 618.2l-66-.3L512 563.4l-99.3 118.4-66.1.3c-4.4 0-8-3.5-8-8 0-1.9.7-3.7 1.9-5.2l130.1-155L340.5 359a8.32 8.32 0 01-1.9-5.2c0-4.4 3.6-8 8-8l66.1.3L512 464.6l99.3-118.4 66-.3c4.4 0 8 3.5 8 8 0 1.9-.7 3.7-1.9 5.2L553.5 514l130 155c1.2 1.5 1.9 3.3 1.9 5.2 0 4.4-3.6 8-8 8z">
                                                                    </path>
                                                                </svg></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="searchPane_searchSwap__gx4M0"><svg height="20" width="20"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32"
                                            d="M464 208 352 96 240 208m112-94.9V416M48 304l112 112 112-112m-112 94V96">
                                        </path>
                                    </svg></div>
                                <div style="padding-left:6px;padding-right:6px"
                                    class="ant-col ant-col-xs-24 ant-col-lg-5">
                                    <div class="ant-row ant-form-item">
                                        <div class="ant-col ant-form-item-control">
                                            <div class="ant-form-item-control-input">
                                                <div class="ant-form-item-control-input-content">
                                                    <div class="ant-select ant-select-in-form-item searchSelectTwo ant-select-single ant-select-allow-clear ant-select-show-arrow ant-select-show-search"
                                                        style="width:100%">
                                                        <div class="ant-select-selector">
                                                            <span class="ant-select-selection-search">
                                                                
                                                                <!-- Small Input Field -->
                                                                <input type="search" value="" class="ant-select-selection-search-input" placeholder=" to ">
                                                            </span>
                                                        </div>
                                                        <span class="ant-select-arrow" style="user-select:none;-webkit-user-select:none"
                                                            unselectable="on" aria-hidden="true"><span role="img"
                                                                aria-label="environment"
                                                                class="anticon anticon-environment mt-1"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="environment" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true">
                                                                    <path
                                                                        d="M854.6 289.1a362.49 362.49 0 00-79.9-115.7 370.83 370.83 0 00-118.2-77.8C610.7 76.6 562.1 67 512 67c-50.1 0-98.7 9.6-144.5 28.5-44.3 18.3-84 44.5-118.2 77.8A363.6 363.6 0 00169.4 289c-19.5 45-29.4 92.8-29.4 142 0 70.6 16.9 140.9 50.1 208.7 26.7 54.5 64 107.6 111 158.1 80.3 86.2 164.5 138.9 188.4 153a43.9 43.9 0 0022.4 6.1c7.8 0 15.5-2 22.4-6.1 23.9-14.1 108.1-66.8 188.4-153 47-50.4 84.3-103.6 111-158.1C867.1 572 884 501.8 884 431.1c0-49.2-9.9-97-29.4-142zM512 880.2c-65.9-41.9-300-207.8-300-449.1 0-77.9 31.1-151.1 87.6-206.3C356.3 169.5 431.7 139 512 139s155.7 30.5 212.4 85.9C780.9 280 812 353.2 812 431.1c0 241.3-234.1 407.2-300 449.1zm0-617.2c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm79.2 255.2A111.6 111.6 0 01512 551c-29.9 0-58-11.7-79.2-32.8A111.6 111.6 0 01400 439c0-29.9 11.7-58 32.8-79.2C454 338.6 482.1 327 512 327c29.9 0 58 11.6 79.2 32.8C612.4 381 624 409.1 624 439c0 29.9-11.6 58-32.8 79.2z">
                                                                    </path>
                                                                </svg></span></span><span class="ant-select-clear"
                                                            style="user-select: none;" unselectable="on"
                                                            aria-hidden="true"><span role="img"
                                                                aria-label="close-circle"
                                                                class="anticon anticon-close-circle"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    data-icon="close-circle" width="1em" height="1em"
                                                                    fill="currentColor" aria-hidden="true">
                                                                    <path
                                                                        d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm165.4 618.2l-66-.3L512 563.4l-99.3 118.4-66.1.3c-4.4 0-8-3.5-8-8 0-1.9.7-3.7 1.9-5.2l130.1-155L340.5 359a8.32 8.32 0 01-1.9-5.2c0-4.4 3.6-8 8-8l66.1.3L512 464.6l99.3-118.4 66-.3c4.4 0 8 3.5 8 8 0 1.9-.7 3.7-1.9 5.2L553.5 514l130 155c1.2 1.5 1.9 3.3 1.9 5.2 0 4.4-3.6 8-8 8z">
                                                                    </path>
                                                                </svg></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-left:6px;padding-right:6px"
                                    class="ant-col ant-col-xs-24 ant-col-lg-5">
                                    <div class="ant-row ant-form-item">
                                        <div class="ant-col ant-form-item-control">
                                            <div class="ant-form-item-control-input">
                                                <div class="ant-form-item-control-input-content">
                                                    <div class="ant-picker">
                                                        <div class="ant-picker-input">
                                                            
                                                            <!--Small Input Field JOURNEY DATE -->
                                                            <input value="" placeholder="JOURNEY DATE" >
                                                            
                                                            <span class="ant-picker-suffix"><span role="img" aria-label="calendar" class="anticon anticon-calendar"><svg
                                                                        viewBox="64 64 896 896" focusable="false" data-icon="calendar" width="1em" height="1em"
                                                                        fill="currentColor"><path d="M880 184H712v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H384v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H144c-17.7 0-32 14.3-32 32v664c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V216c0-17.7-14.3-32-32-32zm-40 656H184V460h656v380zM184 392V256h128v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h256v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h128v136H184z">
                                                                        </path>
                                                                    </svg></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-left:6px;padding-right:6px"
                                    class="ant-col ant-col-xs-24 ant-col-lg-5">
                                    <div class="ant-row ant-form-item">
                                        <div class="ant-col ant-form-item-control">
                                            <div class="ant-form-item-control-input">
                                                <div class="ant-form-item-control-input-content">
                                                    <div class="ant-picker ant-picker-disabled" style="width:100%">
                                                        <div class="ant-picker-input">
                                                            
                                                            <!-- Input Field -->
                                                            <input value="" placeholder="RETURN DATE" size="12">

                                                            <span class="ant-picker-suffix"><span role="img" aria-label="calendar" class="anticon anticon-calendar">
                                                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="calendar" width="1em" height="1em"
                                                                        fill="currentColor" aria-hidden="true"> <path d="M880 184H712v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H384v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H144c-17.7 0-32 14.3-32 32v664c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V216c0-17.7-14.3-32-32-32zm-40 656H184V460h656v380zM184 392V256h128v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h256v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h128v136H184z">
                                                                        </path>
                                                                    </svg></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-left:6px;padding-right:6px"
                                    class="ant-col ant-col-xs-24 ant-col-lg-4">
                                    <div class="ant-row ant-form-item">
                                        <div class="ant-col ant-form-item-control">
                                            <div class="ant-form-item-control-input">
                                                <div class="ant-form-item-control-input-content">
                                                    
                                                    <button style="margin:auto;width:100%;padding:10px;height:50px" class="btn btn-primary">
                                                        Search
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 d-lg-block d-none">
            <button class="btn btn-primary btn-xs" id="modal-btn-1">
                How To Buy tickets
            </button>
        </div>
    </section>
<!-- Small Serarch Section End -->

<!-- Large Serarch Section Start -->
    <section class="banner_banner__zEvCS overlay"
        style="background-image:url(images/banner/banner-bg-sm.webp);mix-blend-mode:normal">
        <div class="container" style="margin-top:50px">
            <div class="row">
                <div class="col-12 banner_banner-text__Dn1QT">
                    <h1>Many Routes, Many Tickets</h1>
                    <h2>Online Ticketing Platform</h2>
                </div>
                <div class="col-11 col-lg-12 col-xl-11 mx-auto">
                    <div class="advanceSearch_advance-search__Z_V_h">

                        <!-- Form Input -->
                        <form class="ant-form ant-form-horizontal">
                            <div class="searchPane_searchPane__tHrHb">
                                
                                <div class="searchForm">
                                    <div class="ant-row" style="margin-left:-6px;margin-right:-6px">
                                        <div style="padding-left:6px;padding-right:6px"
                                            class="ant-col ant-col-xs-24 ant-col-lg-5">
                                            <div class="ant-row ant-form-item">
                                                <div class="ant-col ant-form-item-control">
                                                    <div class="ant-form-item-control-input">
                                                        <div class="ant-form-item-control-input-content">
                                                            <div class="ant-select ant-select-in-form-item ant-select-single ant-select-allow-clear ant-select-show-arrow ant-select-show-search"
                                                                style="width:100%">
                                                                <div class="ant-select-selector">
                                                                    <span class="ant-select-selection-search">
                                                                        
                                                                        <!-- Large Input Field -->
                                                                        <input type="search" class="ant-select-selection-search-input" value="" placeholder="From">
                                                                    </span>                                                                    
                                                                </div>
                                                                <span class="ant-select-arrow" style="user-select:none;-webkit-user-select:none" unselectable="on" aria-hidden="true"><span
                                                                    role="img" aria-label="environment"
                                                                    class="anticon anticon-environment mt-1"><svg
                                                                        viewBox="64 64 896 896" focusable="false"
                                                                        data-icon="environment" width="1em"
                                                                        height="1em" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path d="M854.6 289.1a362.49 362.49 0 00-79.9-115.7 370.83 370.83 0 00-118.2-77.8C610.7 76.6 562.1 67 512 67c-50.1 0-98.7 9.6-144.5 28.5-44.3 18.3-84 44.5-118.2 77.8A363.6 363.6 0 00169.4 289c-19.5 45-29.4 92.8-29.4 142 0 70.6 16.9 140.9 50.1 208.7 26.7 54.5 64 107.6 111 158.1 80.3 86.2 164.5 138.9 188.4 153a43.9 43.9 0 0022.4 6.1c7.8 0 15.5-2 22.4-6.1 23.9-14.1 108.1-66.8 188.4-153 47-50.4 84.3-103.6 111-158.1C867.1 572 884 501.8 884 431.1c0-49.2-9.9-97-29.4-142zM512 880.2c-65.9-41.9-300-207.8-300-449.1 0-77.9 31.1-151.1 87.6-206.3C356.3 169.5 431.7 139 512 139s155.7 30.5 212.4 85.9C780.9 280 812 353.2 812 431.1c0 241.3-234.1 407.2-300 449.1zm0-617.2c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm79.2 255.2A111.6 111.6 0 01512 551c-29.9 0-58-11.7-79.2-32.8A111.6 111.6 0 01400 439c0-29.9 11.7-58 32.8-79.2C454 338.6 482.1 327 512 327c29.9 0 58 11.6 79.2 32.8C612.4 381 624 409.1 624 439c0 29.9-11.6 58-32.8 79.2z">
                                                                        </path>
                                                                    </svg></span>
                                                                </span>
                                                                        
                                                                <span class="ant-select-clear" style="user-select: none;"
                                                                    unselectable="on" aria-hidden="true"><span
                                                                        role="img" aria-label="close-circle"
                                                                        class="anticon anticon-close-circle"><svg
                                                                            viewBox="64 64 896 896" focusable="false"
                                                                            data-icon="close-circle" width="1em"
                                                                            height="1em" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm165.4 618.2l-66-.3L512 563.4l-99.3 118.4-66.1.3c-4.4 0-8-3.5-8-8 0-1.9.7-3.7 1.9-5.2l130.1-155L340.5 359a8.32 8.32 0 01-1.9-5.2c0-4.4 3.6-8 8-8l66.1.3L512 464.6l99.3-118.4 66-.3c4.4 0 8 3.5 8 8 0 1.9-.7 3.7-1.9 5.2L553.5 514l130 155c1.2 1.5 1.9 3.3 1.9 5.2 0 4.4-3.6 8-8 8z">
                                                                            </path>
                                                                        </svg></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="searchPane_searchSwap__gx4M0"><svg height="20" width="20"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32"
                                                    d="M464 208 352 96 240 208m112-94.9V416M48 304l112 112 112-112m-112 94V96">
                                                </path>
                                            </svg></div>
                                        <div style="padding-left:6px;padding-right:6px"
                                            class="ant-col ant-col-xs-24 ant-col-lg-5">
                                            <div class="ant-row ant-form-item">
                                                <div class="ant-col ant-form-item-control">
                                                    <div class="ant-form-item-control-input">
                                                        <div class="ant-form-item-control-input-content">
                                                            <div class="ant-select ant-select-in-form-item searchSelectTwo ant-select-single ant-select-allow-clear ant-select-show-arrow ant-select-show-search"
                                                                style="width:100%">
                                                                <div class="ant-select-selector">
                                                                    
                                                                    <span class="ant-select-selection-search">

                                                                        <!-- Input Field -->
                                                                        <input type="search" class="ant-select-selection-search-input" placeholder=" To ">
                                                                    </span>
                                                                </div>
                                                                <span class="ant-select-arrow" style="user-select:none;-webkit-user-select:none"  aria-hidden="true"><span
                                                                        role="img" aria-label="environment" class="anticon anticon-environment mt-1">
                                                                        <svg viewBox="64 64 896 896" focusable="false" data-icon="environment" width="1em" height="1em" fill="currentColor"
                                                                            aria-hidden="true"><path d="M854.6 289.1a362.49 362.49 0 00-79.9-115.7 370.83 370.83 0 00-118.2-77.8C610.7 76.6 562.1 67 512 67c-50.1 0-98.7 9.6-144.5 28.5-44.3 18.3-84 44.5-118.2 77.8A363.6 363.6 0 00169.4 289c-19.5 45-29.4 92.8-29.4 142 0 70.6 16.9 140.9 50.1 208.7 26.7 54.5 64 107.6 111 158.1 80.3 86.2 164.5 138.9 188.4 153a43.9 43.9 0 0022.4 6.1c7.8 0 15.5-2 22.4-6.1 23.9-14.1 108.1-66.8 188.4-153 47-50.4 84.3-103.6 111-158.1C867.1 572 884 501.8 884 431.1c0-49.2-9.9-97-29.4-142zM512 880.2c-65.9-41.9-300-207.8-300-449.1 0-77.9 31.1-151.1 87.6-206.3C356.3 169.5 431.7 139 512 139s155.7 30.5 212.4 85.9C780.9 280 812 353.2 812 431.1c0 241.3-234.1 407.2-300 449.1zm0-617.2c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm79.2 255.2A111.6 111.6 0 01512 551c-29.9 0-58-11.7-79.2-32.8A111.6 111.6 0 01400 439c0-29.9 11.7-58 32.8-79.2C454 338.6 482.1 327 512 327c29.9 0 58 11.6 79.2 32.8C612.4 381 624 409.1 624 439c0 29.9-11.6 58-32.8 79.2z">
                                                                            </path>
                                                                        </svg></span>
                                                                </span>
                                                                <span class="ant-select-clear" style="user-select: none;" unselectable="on" aria-hidden="true"><span
                                                                        role="img" aria-label="close-circle" class="anticon anticon-close-circle"><svg
                                                                            viewBox="64 64 896 896" focusable="false"
                                                                            data-icon="close-circle" width="1em"
                                                                            height="1em" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm165.4 618.2l-66-.3L512 563.4l-99.3 118.4-66.1.3c-4.4 0-8-3.5-8-8 0-1.9.7-3.7 1.9-5.2l130.1-155L340.5 359a8.32 8.32 0 01-1.9-5.2c0-4.4 3.6-8 8-8l66.1.3L512 464.6l99.3-118.4 66-.3c4.4 0 8 3.5 8 8 0 1.9-.7 3.7-1.9 5.2L553.5 514l130 155c1.2 1.5 1.9 3.3 1.9 5.2 0 4.4-3.6 8-8 8z">
                                                                            </path>
                                                                        </svg></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding-left:6px;padding-right:6px"
                                            class="ant-col ant-col-xs-24 ant-col-lg-5">
                                            <div class="ant-row ant-form-item">
                                                <div class="ant-col ant-form-item-control">
                                                    <div class="ant-form-item-control-input">
                                                        <div class="ant-form-item-control-input-content">
                                                            <div class="ant-picker">
                                                                <div class="ant-picker-input">
                                                                    
                                                                    <!-- Input Field JOURNEY DATE -->
                                                                    <input value="" placeholder="JOURNEY DATE" size="12">
                                                                        
                                                                        <span class="ant-picker-suffix"><span role="img" aria-label="calendar" class="anticon anticon-calendar"><svg
                                                                                viewBox="64 64 896 896" focusable="false" data-icon="calendar" width="1em" height="1em"
                                                                                fill="currentColor" aria-hidden="true">
                                                                                <path d="M880 184H712v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H384v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H144c-17.7 0-32 14.3-32 32v664c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V216c0-17.7-14.3-32-32-32zm-40 656H184V460h656v380zM184 392V256h128v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h256v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h128v136H184z">
                                                                                </path>
                                                                            </svg></span>
                                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding-left:6px;padding-right:6px"
                                            class="ant-col ant-col-xs-24 ant-col-lg-5">
                                            <div class="ant-row ant-form-item">
                                                <div class="ant-col ant-form-item-control">
                                                    <div class="ant-form-item-control-input">
                                                        <div class="ant-form-item-control-input-content">
                                                            <div class="ant-picker ant-picker-disabled"
                                                                style="width:100%">
                                                                <div class="ant-picker-input">
                                                                    
                                                                    <!-- Input Field RETURN DATE -->
                                                                    <input value="" placeholder="RETURN DATE" size="12">

                                                                    <span class="ant-picker-suffix"><span role="img" aria-label="calendar" class="anticon anticon-calendar"><svg
                                                                                viewBox="64 64 896 896"
                                                                                focusable="false" data-icon="calendar"
                                                                                width="1em" height="1em"
                                                                                fill="currentColor" aria-hidden="true">
                                                                                <path
                                                                                    d="M880 184H712v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H384v-64c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v64H144c-17.7 0-32 14.3-32 32v664c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V216c0-17.7-14.3-32-32-32zm-40 656H184V460h656v380zM184 392V256h128v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h256v48c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-48h128v136H184z">
                                                                                </path>
                                                                            </svg></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding-left:6px;padding-right:6px"
                                            class="ant-col ant-col-xs-24 ant-col-lg-4">
                                            <div class="ant-row ant-form-item">
                                                <div class="ant-col ant-form-item-control">
                                                    <div class="ant-form-item-control-input">
                                                        <div class="ant-form-item-control-input-content">

                                                            <button style="margin:auto;width:100%;padding:10px;height:50px" class="btn btn-primary">
                                                                Search
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 d-lg-block d-none">
                    <button class="btn btn-primary btn-xs" id="modal-btn-1">
                        How To Buy tickets
                    </button>
                </div>
            </div>
        </div>
    </section>
<!-- Large Serarch Section End -->

    <div class="d-lg-block d-none">
        <section class="operators_bus-operators__oF55A">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="operators_section-title__BTzzh">AVAILABLE BUS OPERATORS</h2>
                    </div>
                    <div class="col-12">
                        <ul class="operators_bus-list__Dqfo4">
                            <li>Ahad Enterprise</li>
                            <li>AK Travels</li>
                            <li>Aqib Enterprise</li>
                            <li>Bablu Enterprise </li>
                            <li>Bipul Enterprise </li>
                            <li>Chapai Travels</li>
                            <li>Desh Travels </li>
                            <li>Dhaka Express </li>
                            <li>Dolphin</li>
                            <li>Econo Service</li>
                            <li>Falguni Modhumoti Paribahan</li>
                            <li>Falguni Paribahan </li>
                            <li>Grameen Travels</li>
                            <li>Green Bangla</li>
                            <li>Green Saintmartin Express</li>
                            <li>Green Xpress</li>
                            <li>Hanif Enterprise</li>
                            <li>Heritage Travels LTD</li>
                            <li>Jamuna Line</li>
                            <li>Jamuna Travels</li>
                            <li>Jeddah Express</li>
                            <li>K Line</li>
                            <li>Kingfisher Travels </li>
                            <li>Mintu Enterprise</li>
                            <li>Nabila Express</li>
                            <li>National Travels</li>
                            <li>NewHimachal Travels</li>
                            <li>Palki Express</li>
                            <li>President Travels</li>
                            <li>Relax king service</li>
                            <li>Relax Transport</li>
                            <li>Road Master</li>
                            <li>S.Alam Service</li>
                            <li>Saintmartin Heritage Travels</li>
                            <li>Saintmartin Kings Travels</li>
                            <li>Saintmartin Paribahan</li>
                            <li>Saintmartin Travels </li>
                            <li>Sakalsandhya Enterprise </li>
                            <li>Sakura Paribahan </li>
                            <li>Sarker Travels</li>
                            <li>Senjuti Travels</li>
                            <li>Seven Star Paribahan</li>
                            <li>Shadhin Travels</li>
                            <li>Shanti Paribahan</li>
                            <li>Shyamoli N.R Travels</li>
                            <li>SI Enterprise </li>
                            <li>Silk Line </li>
                            <li>SI Travels</li>
                            <li>Super Sony</li>
                            <li>Tisha Platinum</li>
                            <li>TR Travels Classic</li>
                            <li>Welcome Express</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="operators_bus-operators__oF55A bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title">POPULAR BUS ROUTES</h2>
                    </div>
                    <div class="col-12">
                        <ul class="operators_bus-list__Dqfo4 operators_routes__Xn3zT">
                            <li><a href="/popular-routes/dhaka-to-coxs-bazar">DHAKA-COX'S BAZAR</a></li>
                            <li><a href="/popular-routes/dhaka-to-khagrachari">DHAKA-KHAGRACHARI</a></li>
                            <li><a href="/popular-routes/dhaka-to-bandarban">DHAKA-BANDARBAN</a></li>
                            <li><a href="/popular-routes/dhaka-to-teknaf">DHAKA-TEKNAF</a></li>
                            <li><a href="/popular-routes/dhaka-to-rangamati">DHAKA-RANGAMATI</a></li>
                            <li><a href="/popular-routes/dhaka-to-chapainawabganj">DHAKA-CHAPAINAWABGANJ</a></li>
                            <li><a href="/popular-routes/dhaka-to-rajshahi">DHAKA-RAJSHAHI</a></li>
                            <li><a href="/popular-routes/dhaka-to-rangpur">DHAKA-RANGPUR</a></li>
                            <li><a href="/popular-routes/dhaka-to-barisal">DHAKA-BARISAL</a></li>
                            <li><a href="/popular-routes/dhaka-to-barguna">DHAKA-BARGUNA</a></li>
                            <li><a href="/popular-routes/dhaka-to-kuakata">DHAKA-KUAKATA</a></li>
                            <li><a href="/popular-routes/dhaka-to-satkhira">DHAKA-SATKHIRA</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <ul class="operators_bus-list__Dqfo4 operators_routes__Xn3zT">
                            <li><a href="/popular-routes/dhaka-to-khulna">DHAKA-KHULNA</a></li>
                            <li><a href="/popular-routes/dhaka-to-patuakhali">DHAKA-PATUAKHALI</a></li>
                            <li><a href="/popular-routes/dhaka-to-thakugaon">DHAKA-THAKURGAON</a></li>
                            <li><a href="/popular-routes/dhaka-to-chittagong">DHAKA-CHITTAGONG</a></li>
                            <li><a href="/popular-routes/dhaka-to-shyamnagar">DHAKA-SHYAMNAGAR</a></li>
                            <li><a href="/popular-routes/dhaka-to-kansat">DHAKA-KANSAT</a></li>
                            <li><a href="/popular-routes/dhaka-to-kaptai">DHAKA-KAPTAI</a></li>
                            <li><a href="/popular-routes/dhaka-to-benapole">DHAKA-BENAPOLE</a></li>
                            <li><a href="/popular-routes/chapainawabganj-to-dhaka">CHAPAINAWABGANJ-DHAKA</a></li>
                            <li><a href="/popular-routes/dhaka-to-pathorghata">DHAKA-PATHORGHATA</a></li>
                            <li><a href="/popular-routes/dhaka-to-kolkata">DHAKA-KOLKATA</a></li>
                            <li><a href="/popular-routes/dhaka-to-panchagarh">DHAKA-PANCHAGARH</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <ul class="operators_bus-list__Dqfo4 operators_routes__Xn3zT">
                            <li><a href="/popular-routes/dhaka-to-vandaria">DHAKA-VANDARIA</a></li>
                            <li><a href="/popular-routes/dhaka-to-khepupara">DHAKA-KHEPUPARA</a></li>
                            <li><a href="/popular-routes/dhaka-to-paikgasa">DHAKA-PAIKGASA</a></li>
                            <li><a href="/popular-routes/dhaka-to-burimari">DHAKA-BURIMARI</a></li>
                            <li><a href="/popular-routes/dhaka-to-tangail">DHAKA-TANGAIL</a></li>
                            <li><a href="/popular-routes/dhaka-to-pabna">DHAKA-PABNA</a></li>
                            <li><a href="/popular-routes/dhaka-to-dinajpur">DHAKA-DINAJPUR</a></li>
                            <li><a href="/popular-routes/dhaka-to-sylhet">DHAKA-SYLHET</a></li>
                            <li><a href="/popular-routes/dhaka-to-bagha">DHAKA-BAGHA</a></li>
                            <li><a href="/popular-routes/dhaka-to-kushtia">DHAKA-KUSHTIA</a></li>
                            <li><a href="/popular-routes/dhaka-to-jhenaidah">DHAKA-JHENAIDAH</a></li>
                            <li><a href="/popular-routes/dhaka-to-joypurhat">DHAKA-JOYPURHAT</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <ul class="operators_bus-list__Dqfo4 operators_routes__Xn3zT">
                            <li><a href="/popular-routes/dhaka-to-pirojpur">DHAKA-PIROJPUR</a></li>
                            <li><a href="/popular-routes/dhaka-to-naogaon">DHAKA-NAOGAON</a></li>
                            <li><a href="/popular-routes/dhaka-to-gaibandha">DHAKA-GAIBANDHA</a></li>
                            <li><a href="/popular-routes/dhaka-to-ishurdi">DHAKA-ISHURDI</a></li>
                            <li><a href="/popular-routes/rajshahi-to-dhaka">RAJSHAHI-DHAKA</a></li>
                            <li><a href="/popular-routes/barisal-to-dhaka">BARISAL-DHAKA</a></li>
                            <li><a href="/popular-routes/chittagong-to-dhaka">CHITTAGONG-DHAKA</a></li>
                            <li><a href="/popular-routes/coxs-bazar-to-dhaka">COX'S BAZAR-DHAKA</a></li>
                            <li><a href="/popular-routes/kuakata-to-dhaka">KUAKATA-DHAKA</a></li>
                            <li><a href="/popular-routes/tangail-to-dhaka">TANGAIL-DHAKA</a></li>
                            <li><a href="/popular-routes/khagrachari-to-dhaka">KHAGRACHARI-DHAKA</a></li>
                            <li><a href="/popular-routes/bandarban-to-dhaka">BANDARBAN-DHAKA</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <ul class="operators_bus-list__Dqfo4 operators_routes__Xn3zT">
                            <li><a href="/popular-routes/rangpur-to-dhaka">RANGPUR-DHAKA</a></li>
                            <li><a href="/popular-routes/kolkata-to-dhaka">KOLKATA-DHAKA</a></li>
                            <li><a href="/popular-routes/dinajpur-to-dhaka">DINAJPUR-DHAKA</a></li>
                            <li><a href="/popular-routes/khulna-to-dhaka">KHULNA-DHAKA</a></li>
                            <li><a href="/popular-routes/bagha-to-dhaka">BAGHA-DHAKA</a></li>
                            <li><a href="/popular-routes/satkhira-to-dhaka">SATKHIRA-DHAKA</a></li>
                            <li><a href="/popular-routes/kushtia-to-dhaka">KUSHTIA-DHAKA</a></li>
                            <li><a href="/popular-routes/pirojpur-to-dhaka">PIROJPUR-DHAKA</a></li>
                            <li><a href="/popular-routes/gaibandha-to-dhaka">GAIBANDHA-DHAKA</a></li>
                            <li><a href="/popular-routes/sylhet-to-dhaka">SYLHET-DHAKA</a></li>
                            <li><a href="/popular-routes/naogaon-to-dhaka">NAOGAON-DHAKA</a></li>
                            <li><a href="/popular-routes/teknaf-to-dhaka">TEKNAF-DHAKA</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <ul class="operators_bus-list__Dqfo4 operators_routes__Xn3zT">
                            <li><a href="/popular-routes/rangamati-to-dhaka">RANGAMATI-DHAKA</a></li>
                            <li><a href="/popular-routes/jhenaidah-to-dhaka">JHENAIDAH-DHAKA</a></li>
                            <li><a href="/popular-routes/dhaka-to-jessore">DHAKA-JESSORE</a></li>
                            <li><a href="/popular-routes/joypurhat-to-dhaka">JOYPURHAT-DHAKA</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="paymentMethods_clients__b4bzo">
            <div class="container d-lg-block d-none">
                <div class="row">
                    <div class="col-12">
                        <h2 class="paymentMethods_section-title__kgcND">We Accept</h2>
                    </div>
                    <div class="col-lg-10 mx-auto">
                        <div class="row g-5 justify-content-center">
                            <div class="col-lg-3 col-sm-4 col-6 text-center">
                                <div class="ant-image"><img alt="bkash" class="ant-image-img" style="max-width:100%"
                                        src="{{asset('FrontEnd/images')}}/payment-methods/bkash.png">
                                    <div class="ant-image-mask">
                                        <div class="ant-image-mask-info"><span role="img" aria-label="eye"
                                                class="anticon anticon-eye"><svg viewBox="64 64 896 896"
                                                    focusable="false" data-icon="eye" width="1em" height="1em"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z">
                                                    </path>
                                                </svg></span>Preview</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-6 text-center">
                                <div class="ant-image"><img alt="nagad" class="ant-image-img" style="max-width:100%"
                                        src="{{asset('FrontEnd/images')}}/payment-methods/nagad-3.png">
                                    <div class="ant-image-mask">
                                        <div class="ant-image-mask-info"><span role="img" aria-label="eye"
                                                class="anticon anticon-eye"><svg viewBox="64 64 896 896"
                                                    focusable="false" data-icon="eye" width="1em" height="1em"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z">
                                                    </path>
                                                </svg></span>Preview</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-6 text-center">
                                <div class="ant-image"><img alt="upay" class="ant-image-img" style="max-width:100%"
                                        src="{{asset('FrontEnd/images')}}/payment-methods/upay.png">
                                    <div class="ant-image-mask">
                                        <div class="ant-image-mask-info"><span role="img" aria-label="eye"
                                                class="anticon anticon-eye"><svg viewBox="64 64 896 896"
                                                    focusable="false" data-icon="eye" width="1em" height="1em"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z">
                                                    </path>
                                                </svg></span>Preview</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-6 text-center">
                                <div class="ant-image"><img alt="rocket" class="ant-image-img" style="max-width:100%"
                                        src="{{asset('FrontEnd/images')}}/payment-methods/rocket.png">
                                    <div class="ant-image-mask">
                                        <div class="ant-image-mask-info"><span role="img" aria-label="eye"
                                                class="anticon anticon-eye"><svg viewBox="64 64 896 896"
                                                    focusable="false" data-icon="eye" width="1em" height="1em"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z">
                                                    </path>
                                                </svg></span>Preview</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-6 text-center">
                                <div class="ant-image"><img alt="mx" class="ant-image-img" style="max-width:100%"
                                        src="{{asset('FrontEnd/images')}}/payment-methods/mx.png">
                                    <div class="ant-image-mask">
                                        <div class="ant-image-mask-info"><span role="img" aria-label="eye"
                                                class="anticon anticon-eye"><svg viewBox="64 64 896 896"
                                                    focusable="false" data-icon="eye" width="1em" height="1em"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z">
                                                    </path>
                                                </svg></span>Preview</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-6 text-center">
                                <div class="ant-image"><img alt="mastercard" class="ant-image-img"
                                        style="max-width:100%"
                                        src="{{asset('FrontEnd/images')}}/payment-methods/mastercard.png">
                                    <div class="ant-image-mask">
                                        <div class="ant-image-mask-info"><span role="img" aria-label="eye"
                                                class="anticon anticon-eye"><svg viewBox="64 64 896 896"
                                                    focusable="false" data-icon="eye" width="1em" height="1em"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z">
                                                    </path>
                                                </svg></span>Preview</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-6 text-center">
                                <div class="ant-image"><img alt="visa" class="ant-image-img" style="max-width:100%"
                                        src="{{asset('FrontEnd/images')}}/payment-methods/visa.png">
                                    <div class="ant-image-mask">
                                        <div class="ant-image-mask-info"><span role="img" aria-label="eye"
                                                class="anticon anticon-eye"><svg viewBox="64 64 896 896"
                                                    focusable="false" data-icon="eye" width="1em" height="1em"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z">
                                                    </path>
                                                </svg></span>Preview</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-6 text-center">
                                <div class="ant-image"><img alt="dbblnex" class="ant-image-img" style="max-width:100%"
                                        src="{{asset('FrontEnd/images')}}/payment-methods/dbblnex.png">
                                    <div class="ant-image-mask">
                                        <div class="ant-image-mask-info"><span role="img" aria-label="eye"
                                                class="anticon anticon-eye"><svg viewBox="64 64 896 896"
                                                    focusable="false" data-icon="eye" width="1em" height="1em"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z">
                                                    </path>
                                                </svg></span>Preview</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection