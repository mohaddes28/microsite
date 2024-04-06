@extends('layouts.admin-master')
@section('title')
    Dashboard
@endsection

@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                                <p class="mb-4">
                                    You have done <span class="fw-bold">72%</span> more sales today. Check your new
                                    badge in
                                    your profile.
                                </p>

                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                     alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                     data-app-light-img="illustrations/man-with-laptop-light.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success"
                                             class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Profit</span>
                                <h3 class="card-title mb-2">$12,628</h3>
                                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                    +72.80%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                             class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span>Sales</span>
                                <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                    +28.42%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total Revenue -->
            <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                    <div class="row row-bordered g-0">
                        <div class="col-md-8">
                            <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                            <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                                <div id="apexchartso7uowqf4"
                                     class="apexcharts-canvas apexchartso7uowqf4 apexcharts-theme-light"
                                     style="width: 436px; height: 300px;">
                                    <svg id="SvgjsSvg1615" width="436" height="300" xmlns="http://www.w3.org/2000/svg"
                                         version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                         transform="translate(0, 0)" style="background: transparent;">
                                        <foreignObject x="0" y="0" width="436" height="300">
                                            <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top"
                                                 xmlns="http://www.w3.org/1999/xhtml"
                                                 style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                                <div class="apexcharts-legend-series" rel="1" seriesname="2021"
                                                     data:collapsed="false" style="margin: 2px 10px;"><span
                                                        class="apexcharts-legend-marker" rel="1"
                                                        data:collapsed="false"
                                                        style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="1" i="0"
                                                        data:default-text="2021" data:collapsed="false"
                                                        style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="2" seriesname="2020"
                                                     data:collapsed="false" style="margin: 2px 10px;"><span
                                                        class="apexcharts-legend-marker" rel="2"
                                                        data:collapsed="false"
                                                        style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="2" i="1"
                                                        data:default-text="2020" data:collapsed="false"
                                                        style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span>
                                                </div>
                                            </div>
                                            <style type="text/css">

                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
                                                    flex-wrap: wrap
                                                }

                                                .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                                                    justify-content: flex-start;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                    justify-content: center;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                    justify-content: flex-end;
                                                }

                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }

                                                .apexcharts-legend-text *, .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }

                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: inline-block;
                                                    cursor: pointer;
                                                    margin-right: 3px;
                                                    border-style: solid;
                                                }

                                                .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                    display: inline-block;
                                                }

                                                .apexcharts-legend-series.apexcharts-no-click {
                                                    cursor: auto;
                                                }

                                                .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }

                                                .apexcharts-inactive-legend {
                                                    opacity: 0.45;
                                                }</style>
                                        </foreignObject>
                                        <g id="SvgjsG1617" class="apexcharts-inner apexcharts-graphical"
                                           transform="translate(53.796875, 51)">
                                            <defs id="SvgjsDefs1616">
                                                <linearGradient id="SvgjsLinearGradient1621" x1="0" y1="0" x2="0"
                                                                y2="1">
                                                    <stop id="SvgjsStop1622" stop-opacity="0.4"
                                                          stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1623" stop-opacity="0.5"
                                                          stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1624" stop-opacity="0.5"
                                                          stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMasko7uowqf4">
                                                    <rect id="SvgjsRect1626" width="372.203125" height="223.73" x="-5"
                                                          y="-3" rx="0" ry="0" opacity="1" stroke-width="0"
                                                          stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMasko7uowqf4"></clipPath>
                                                <clipPath id="nonForecastMasko7uowqf4"></clipPath>
                                                <clipPath id="gridRectMarkerMasko7uowqf4">
                                                    <rect id="SvgjsRect1627" width="366.203125" height="221.73" x="-2"
                                                          y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                          stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect1625" width="21.7321875" height="217.73" x="0" y="0"
                                                  rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                                  fill="url(#SvgjsLinearGradient1621)" class="apexcharts-xcrosshairs"
                                                  y2="217.73" filter="none" fill-opacity="0.9"></rect>
                                            <g id="SvgjsG1647" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1648" class="apexcharts-xaxis-texts-g"
                                                   transform="translate(0, -4)">
                                                    <text id="SvgjsText1650" font-family="Helvetica, Arial, sans-serif"
                                                          x="25.871651785714285" y="246.73" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="13px" font-weight="400"
                                                          fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1651">Jan</tspan>
                                                        <title>Jan</title></text>
                                                    <text id="SvgjsText1653" font-family="Helvetica, Arial, sans-serif"
                                                          x="77.61495535714286" y="246.73" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="13px" font-weight="400"
                                                          fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1654">Feb</tspan>
                                                        <title>Feb</title></text>
                                                    <text id="SvgjsText1656" font-family="Helvetica, Arial, sans-serif"
                                                          x="129.35825892857144" y="246.73" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="13px" font-weight="400"
                                                          fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1657">Mar</tspan>
                                                        <title>Mar</title></text>
                                                    <text id="SvgjsText1659" font-family="Helvetica, Arial, sans-serif"
                                                          x="181.1015625" y="246.73" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="13px" font-weight="400"
                                                          fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1660">Apr</tspan>
                                                        <title>Apr</title></text>
                                                    <text id="SvgjsText1662" font-family="Helvetica, Arial, sans-serif"
                                                          x="232.84486607142856" y="246.73" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="13px" font-weight="400"
                                                          fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1663">May</tspan>
                                                        <title>May</title></text>
                                                    <text id="SvgjsText1665" font-family="Helvetica, Arial, sans-serif"
                                                          x="284.5881696428571" y="246.73" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="13px" font-weight="400"
                                                          fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1666">Jun</tspan>
                                                        <title>Jun</title></text>
                                                    <text id="SvgjsText1668" font-family="Helvetica, Arial, sans-serif"
                                                          x="336.33147321428567" y="246.73" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="13px" font-weight="400"
                                                          fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1669">Jul</tspan>
                                                        <title>Jul</title></text>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1684" class="apexcharts-grid">
                                                <g id="SvgjsG1685" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1687" x1="0" y1="0" x2="362.203125" y2="0"
                                                          stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1688" x1="0" y1="43.546" x2="362.203125"
                                                          y2="43.546" stroke="#eceef1" stroke-dasharray="0"
                                                          stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1689" x1="0" y1="87.092" x2="362.203125"
                                                          y2="87.092" stroke="#eceef1" stroke-dasharray="0"
                                                          stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1690" x1="0" y1="130.638" x2="362.203125"
                                                          y2="130.638" stroke="#eceef1" stroke-dasharray="0"
                                                          stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1691" x1="0" y1="174.184" x2="362.203125"
                                                          y2="174.184" stroke="#eceef1" stroke-dasharray="0"
                                                          stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1692" x1="0" y1="217.73" x2="362.203125"
                                                          y2="217.73" stroke="#eceef1" stroke-dasharray="0"
                                                          stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1686" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1694" x1="0" y1="217.73" x2="362.203125" y2="217.73"
                                                      stroke="transparent" stroke-dasharray="0"
                                                      stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1693" x1="0" y1="1" x2="0" y2="217.73"
                                                      stroke="transparent" stroke-dasharray="0"
                                                      stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1628" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1629" class="apexcharts-series" seriesName="2021" rel="1"
                                                   data:realIndex="0">
                                                    <path id="SvgjsPath1631"
                                                          d="M 15.005558035714285 120.638L 15.005558035714285 62.255200000000016Q 15.005558035714285 52.255200000000016 25.005558035714287 52.255200000000016L 20.737745535714282 52.255200000000016Q 30.737745535714282 52.255200000000016 30.737745535714282 62.255200000000016L 30.737745535714282 62.255200000000016L 30.737745535714282 120.638Q 30.737745535714282 130.638 20.737745535714282 130.638L 25.005558035714287 130.638Q 15.005558035714285 130.638 15.005558035714285 120.638z"
                                                          fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                          stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="6" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="0"
                                                          clip-path="url(#gridRectMasko7uowqf4)"
                                                          pathTo="M 15.005558035714285 120.638L 15.005558035714285 62.255200000000016Q 15.005558035714285 52.255200000000016 25.005558035714287 52.255200000000016L 20.737745535714282 52.255200000000016Q 30.737745535714282 52.255200000000016 30.737745535714282 62.255200000000016L 30.737745535714282 62.255200000000016L 30.737745535714282 120.638Q 30.737745535714282 130.638 20.737745535714282 130.638L 25.005558035714287 130.638Q 15.005558035714285 130.638 15.005558035714285 120.638z"
                                                          pathFrom="M 15.005558035714285 120.638L 15.005558035714285 120.638L 30.737745535714282 120.638L 30.737745535714282 120.638L 30.737745535714282 120.638L 30.737745535714282 120.638L 30.737745535714282 120.638L 15.005558035714285 120.638"
                                                          cy="52.255200000000016" cx="63.74886160714286" j="0" val="18"
                                                          barHeight="78.38279999999999" barWidth="21.7321875"></path>
                                                    <path id="SvgjsPath1632"
                                                          d="M 66.74886160714286 120.638L 66.74886160714286 110.15580000000001Q 66.74886160714286 100.15580000000001 76.74886160714286 100.15580000000001L 72.48104910714285 100.15580000000001Q 82.48104910714285 100.15580000000001 82.48104910714285 110.15580000000001L 82.48104910714285 110.15580000000001L 82.48104910714285 120.638Q 82.48104910714285 130.638 72.48104910714285 130.638L 76.74886160714286 130.638Q 66.74886160714286 130.638 66.74886160714286 120.638z"
                                                          fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                          stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="6" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="0"
                                                          clip-path="url(#gridRectMasko7uowqf4)"
                                                          pathTo="M 66.74886160714286 120.638L 66.74886160714286 110.15580000000001Q 66.74886160714286 100.15580000000001 76.74886160714286 100.15580000000001L 72.48104910714285 100.15580000000001Q 82.48104910714285 100.15580000000001 82.48104910714285 110.15580000000001L 82.48104910714285 110.15580000000001L 82.48104910714285 120.638Q 82.48104910714285 130.638 72.48104910714285 130.638L 76.74886160714286 130.638Q 66.74886160714286 130.638 66.74886160714286 120.638z"
                                                          pathFrom="M 66.74886160714286 120.638L 66.74886160714286 120.638L 82.48104910714285 120.638L 82.48104910714285 120.638L 82.48104910714285 120.638L 82.48104910714285 120.638L 82.48104910714285 120.638L 66.74886160714286 120.638"
                                                          cy="100.15580000000001" cx="115.49216517857143" j="1" val="7"
                                                          barHeight="30.482199999999995" barWidth="21.7321875"></path>
                                                    <path id="SvgjsPath1633"
                                                          d="M 118.49216517857143 120.638L 118.49216517857143 75.31900000000002Q 118.49216517857143 65.31900000000002 128.49216517857144 65.31900000000002L 124.22435267857142 65.31900000000002Q 134.22435267857142 65.31900000000002 134.22435267857142 75.31900000000002L 134.22435267857142 75.31900000000002L 134.22435267857142 120.638Q 134.22435267857142 130.638 124.22435267857142 130.638L 128.49216517857144 130.638Q 118.49216517857143 130.638 118.49216517857143 120.638z"
                                                          fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                          stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="6" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="0"
                                                          clip-path="url(#gridRectMasko7uowqf4)"
                                                          pathTo="M 118.49216517857143 120.638L 118.49216517857143 75.31900000000002Q 118.49216517857143 65.31900000000002 128.49216517857144 65.31900000000002L 124.22435267857142 65.31900000000002Q 134.22435267857142 65.31900000000002 134.22435267857142 75.31900000000002L 134.22435267857142 75.31900000000002L 134.22435267857142 120.638Q 134.22435267857142 130.638 124.22435267857142 130.638L 128.49216517857144 130.638Q 118.49216517857143 130.638 118.49216517857143 120.638z"
                                                          pathFrom="M 118.49216517857143 120.638L 118.49216517857143 120.638L 134.22435267857142 120.638L 134.22435267857142 120.638L 134.22435267857142 120.638L 134.22435267857142 120.638L 134.22435267857142 120.638L 118.49216517857143 120.638"
                                                          cy="65.31900000000002" cx="167.23546875" j="2" val="15"
                                                          barHeight="65.31899999999999" barWidth="21.7321875"></path>
                                                    <path id="SvgjsPath1634"
                                                          d="M 170.23546875 120.638L 170.23546875 14.35460000000002Q 170.23546875 4.354600000000019 180.23546875 4.354600000000019L 175.96765625 4.354600000000019Q 185.96765625 4.354600000000019 185.96765625 14.35460000000002L 185.96765625 14.35460000000002L 185.96765625 120.638Q 185.96765625 130.638 175.96765625 130.638L 180.23546875 130.638Q 170.23546875 130.638 170.23546875 120.638z"
                                                          fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                          stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="6" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="0"
                                                          clip-path="url(#gridRectMasko7uowqf4)"
                                                          pathTo="M 170.23546875 120.638L 170.23546875 14.35460000000002Q 170.23546875 4.354600000000019 180.23546875 4.354600000000019L 175.96765625 4.354600000000019Q 185.96765625 4.354600000000019 185.96765625 14.35460000000002L 185.96765625 14.35460000000002L 185.96765625 120.638Q 185.96765625 130.638 175.96765625 130.638L 180.23546875 130.638Q 170.23546875 130.638 170.23546875 120.638z"
                                                          pathFrom="M 170.23546875 120.638L 170.23546875 120.638L 185.96765625 120.638L 185.96765625 120.638L 185.96765625 120.638L 185.96765625 120.638L 185.96765625 120.638L 170.23546875 120.638"
                                                          cy="4.354600000000019" cx="218.97877232142855" j="3" val="29"
                                                          barHeight="126.28339999999999" barWidth="21.7321875"></path>
                                                    <path id="SvgjsPath1635"
                                                          d="M 221.97877232142855 120.638L 221.97877232142855 62.255200000000016Q 221.97877232142855 52.255200000000016 231.97877232142855 52.255200000000016L 227.71095982142856 52.255200000000016Q 237.71095982142856 52.255200000000016 237.71095982142856 62.255200000000016L 237.71095982142856 62.255200000000016L 237.71095982142856 120.638Q 237.71095982142856 130.638 227.71095982142856 130.638L 231.97877232142855 130.638Q 221.97877232142855 130.638 221.97877232142855 120.638z"
                                                          fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                          stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="6" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="0"
                                                          clip-path="url(#gridRectMasko7uowqf4)"
                                                          pathTo="M 221.97877232142855 120.638L 221.97877232142855 62.255200000000016Q 221.97877232142855 52.255200000000016 231.97877232142855 52.255200000000016L 227.71095982142856 52.255200000000016Q 237.71095982142856 52.255200000000016 237.71095982142856 62.255200000000016L 237.71095982142856 62.255200000000016L 237.71095982142856 120.638Q 237.71095982142856 130.638 227.71095982142856 130.638L 231.97877232142855 130.638Q 221.97877232142855 130.638 221.97877232142855 120.638z"
                                                          pathFrom="M 221.97877232142855 120.638L 221.97877232142855 120.638L 237.71095982142856 120.638L 237.71095982142856 120.638L 237.71095982142856 120.638L 237.71095982142856 120.638L 237.71095982142856 120.638L 221.97877232142855 120.638"
                                                          cy="52.255200000000016" cx="270.7220758928571" j="4" val="18"
                                                          barHeight="78.38279999999999" barWidth="21.7321875"></path>
                                                    <path id="SvgjsPath1636"
                                                          d="M 273.7220758928571 120.638L 273.7220758928571 88.3828Q 273.7220758928571 78.3828 283.7220758928571 78.3828L 279.4542633928571 78.3828Q 289.4542633928571 78.3828 289.4542633928571 88.3828L 289.4542633928571 88.3828L 289.4542633928571 120.638Q 289.4542633928571 130.638 279.4542633928571 130.638L 283.7220758928571 130.638Q 273.7220758928571 130.638 273.7220758928571 120.638z"
                                                          fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                          stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="6" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="0"
                                                          clip-path="url(#gridRectMasko7uowqf4)"
                                                          pathTo="M 273.7220758928571 120.638L 273.7220758928571 88.3828Q 273.7220758928571 78.3828 283.7220758928571 78.3828L 279.4542633928571 78.3828Q 289.4542633928571 78.3828 289.4542633928571 88.3828L 289.4542633928571 88.3828L 289.4542633928571 120.638Q 289.4542633928571 130.638 279.4542633928571 130.638L 283.7220758928571 130.638Q 273.7220758928571 130.638 273.7220758928571 120.638z"
                                                          pathFrom="M 273.7220758928571 120.638L 273.7220758928571 120.638L 289.4542633928571 120.638L 289.4542633928571 120.638L 289.4542633928571 120.638L 289.4542633928571 120.638L 289.4542633928571 120.638L 273.7220758928571 120.638"
                                                          cy="78.3828" cx="322.46537946428566" j="5" val="12"
                                                          barHeight="52.255199999999995" barWidth="21.7321875"></path>
                                                    <path id="SvgjsPath1637"
                                                          d="M 325.46537946428566 120.638L 325.46537946428566 101.44660000000002Q 325.46537946428566 91.44660000000002 335.46537946428566 91.44660000000002L 331.19756696428567 91.44660000000002Q 341.19756696428567 91.44660000000002 341.19756696428567 101.44660000000002L 341.19756696428567 101.44660000000002L 341.19756696428567 120.638Q 341.19756696428567 130.638 331.19756696428567 130.638L 335.46537946428566 130.638Q 325.46537946428566 130.638 325.46537946428566 120.638z"
                                                          fill="rgba(105,108,255,0.85)" fill-opacity="1"
                                                          stroke="#ffffff" stroke-opacity="1" stroke-linecap="round"
                                                          stroke-width="6" stroke-dasharray="0"
                                                          class="apexcharts-bar-area" index="0"
                                                          clip-path="url(#gridRectMasko7uowqf4)"
                                                          pathTo="M 325.46537946428566 120.638L 325.46537946428566 101.44660000000002Q 325.46537946428566 91.44660000000002 335.46537946428566 91.44660000000002L 331.19756696428567 91.44660000000002Q 341.19756696428567 91.44660000000002 341.19756696428567 101.44660000000002L 341.19756696428567 101.44660000000002L 341.19756696428567 120.638Q 341.19756696428567 130.638 331.19756696428567 130.638L 335.46537946428566 130.638Q 325.46537946428566 130.638 325.46537946428566 120.638z"
                                                          pathFrom="M 325.46537946428566 120.638L 325.46537946428566 120.638L 341.19756696428567 120.638L 341.19756696428567 120.638L 341.19756696428567 120.638L 341.19756696428567 120.638L 341.19756696428567 120.638L 325.46537946428566 120.638"
                                                          cy="91.44660000000002" cx="374.2086830357142" j="6" val="9"
                                                          barHeight="39.191399999999994" barWidth="21.7321875"></path>
                                                </g>
                                                <g id="SvgjsG1638" class="apexcharts-series" seriesName="2020" rel="2"
                                                   data:realIndex="1">
                                                    <path id="SvgjsPath1640"
                                                          d="M 15.005558035714285 150.638L 15.005558035714285 187.24779999999998Q 15.005558035714285 197.24779999999998 25.005558035714287 197.24779999999998L 20.737745535714282 197.24779999999998Q 30.737745535714282 197.24779999999998 30.737745535714282 187.24779999999998L 30.737745535714282 187.24779999999998L 30.737745535714282 150.638Q 30.737745535714282 140.638 20.737745535714282 140.638L 25.005558035714287 140.638Q 15.005558035714285 140.638 15.005558035714285 150.638z"
                                                          fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                          stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                          stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                          clip-path="url(#gridRectMasko7uowqf4)"
                                                          pathTo="M 15.005558035714285 150.638L 15.005558035714285 187.24779999999998Q 15.005558035714285 197.24779999999998 25.005558035714287 197.24779999999998L 20.737745535714282 197.24779999999998Q 30.737745535714282 197.24779999999998 30.737745535714282 187.24779999999998L 30.737745535714282 187.24779999999998L 30.737745535714282 150.638Q 30.737745535714282 140.638 20.737745535714282 140.638L 25.005558035714287 140.638Q 15.005558035714285 140.638 15.005558035714285 150.638z"
                                                          pathFrom="M 15.005558035714285 150.638L 15.005558035714285 150.638L 30.737745535714282 150.638L 30.737745535714282 150.638L 30.737745535714282 150.638L 30.737745535714282 150.638L 30.737745535714282 150.638L 15.005558035714285 150.638"
                                                          cy="177.24779999999998" cx="63.74886160714286" j="0" val="-13"
                                                          barHeight="-56.60979999999999" barWidth="21.7321875"></path>
                                                    <path id="SvgjsPath1641"
                                                          d="M 66.74886160714286 150.638L 66.74886160714286 209.0208Q 66.74886160714286 219.0208 76.74886160714286 219.0208L 72.48104910714285 219.0208Q 82.48104910714285 219.0208 82.48104910714285 209.0208L 82.48104910714285 209.0208L 82.48104910714285 150.638Q 82.48104910714285 140.638 72.48104910714285 140.638L 76.74886160714286 140.638Q 66.74886160714286 140.638 66.74886160714286 150.638z"
                                                          fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                          stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                          stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                          clip-path="url(#gridRectMasko7uowqf4)"
                                                          pathTo="M 66.74886160714286 150.638L 66.74886160714286 209.0208Q 66.74886160714286 219.0208 76.74886160714286 219.0208L 72.48104910714285 219.0208Q 82.48104910714285 219.0208 82.48104910714285 209.0208L 82.48104910714285 209.0208L 82.48104910714285 150.638Q 82.48104910714285 140.638 72.48104910714285 140.638L 76.74886160714286 140.638Q 66.74886160714286 140.638 66.74886160714286 150.638z"
                                                          pathFrom="M 66.74886160714286 150.638L 66.74886160714286 150.638L 82.48104910714285 150.638L 82.48104910714285 150.638L 82.48104910714285 150.638L 82.48104910714285 150.638L 82.48104910714285 150.638L 66.74886160714286 150.638"
                                                          cy="199.0208" cx="115.49216517857143" j="1" val="-18"
                                                          barHeight="-78.38279999999999" barWidth="21.7321875"></path>
                                                    <path id="SvgjsPath1642"
                                                          d="M 118.49216517857143 150.638L 118.49216517857143 169.8294Q 118.49216517857143 179.8294 128.49216517857144 179.8294L 124.22435267857142 179.8294Q 134.22435267857142 179.8294 134.22435267857142 169.8294L 134.22435267857142 169.8294L 134.22435267857142 150.638Q 134.22435267857142 140.638 124.22435267857142 140.638L 128.49216517857144 140.638Q 118.49216517857143 140.638 118.49216517857143 150.638z"
                                                          fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                          stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                          stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                          clip-path="url(#gridRectMasko7uowqf4)"
                                                          pathTo="M 118.49216517857143 150.638L 118.49216517857143 169.8294Q 118.49216517857143 179.8294 128.49216517857144 179.8294L 124.22435267857142 179.8294Q 134.22435267857142 179.8294 134.22435267857142 169.8294L 134.22435267857142 169.8294L 134.22435267857142 150.638Q 134.22435267857142 140.638 124.22435267857142 140.638L 128.49216517857144 140.638Q 118.49216517857143 140.638 118.49216517857143 150.638z"
                                                          pathFrom="M 118.49216517857143 150.638L 118.49216517857143 150.638L 134.22435267857142 150.638L 134.22435267857142 150.638L 134.22435267857142 150.638L 134.22435267857142 150.638L 134.22435267857142 150.638L 118.49216517857143 150.638"
                                                          cy="159.8294" cx="167.23546875" j="2" val="-9"
                                                          barHeight="-39.191399999999994" barWidth="21.7321875"></path>
                                                    <path id="SvgjsPath1643"
                                                          d="M 170.23546875 150.638L 170.23546875 191.6024Q 170.23546875 201.6024 180.23546875 201.6024L 175.96765625 201.6024Q 185.96765625 201.6024 185.96765625 191.6024L 185.96765625 191.6024L 185.96765625 150.638Q 185.96765625 140.638 175.96765625 140.638L 180.23546875 140.638Q 170.23546875 140.638 170.23546875 150.638z"
                                                          fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                          stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                          stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                          clip-path="url(#gridRectMasko7uowqf4)"
                                                          pathTo="M 170.23546875 150.638L 170.23546875 191.6024Q 170.23546875 201.6024 180.23546875 201.6024L 175.96765625 201.6024Q 185.96765625 201.6024 185.96765625 191.6024L 185.96765625 191.6024L 185.96765625 150.638Q 185.96765625 140.638 175.96765625 140.638L 180.23546875 140.638Q 170.23546875 140.638 170.23546875 150.638z"
                                                          pathFrom="M 170.23546875 150.638L 170.23546875 150.638L 185.96765625 150.638L 185.96765625 150.638L 185.96765625 150.638L 185.96765625 150.638L 185.96765625 150.638L 170.23546875 150.638"
                                                          cy="181.6024" cx="218.97877232142855" j="3" val="-14"
                                                          barHeight="-60.96439999999999" barWidth="21.7321875"></path>
                                                    <path id="SvgjsPath1644"
                                                          d="M 221.97877232142855 150.638L 221.97877232142855 152.411Q 221.97877232142855 162.411 231.97877232142855 162.411L 227.71095982142856 162.411Q 237.71095982142856 162.411 237.71095982142856 152.411L 237.71095982142856 152.411L 237.71095982142856 150.638Q 237.71095982142856 140.638 227.71095982142856 140.638L 231.97877232142855 140.638Q 221.97877232142855 140.638 221.97877232142855 150.638z"
                                                          fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                          stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                          stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                          clip-path="url(#gridRectMasko7uowqf4)"
                                                          pathTo="M 221.97877232142855 150.638L 221.97877232142855 152.411Q 221.97877232142855 162.411 231.97877232142855 162.411L 227.71095982142856 162.411Q 237.71095982142856 162.411 237.71095982142856 152.411L 237.71095982142856 152.411L 237.71095982142856 150.638Q 237.71095982142856 140.638 227.71095982142856 140.638L 231.97877232142855 140.638Q 221.97877232142855 140.638 221.97877232142855 150.638z"
                                                          pathFrom="M 221.97877232142855 150.638L 221.97877232142855 150.638L 237.71095982142856 150.638L 237.71095982142856 150.638L 237.71095982142856 150.638L 237.71095982142856 150.638L 237.71095982142856 150.638L 221.97877232142855 150.638"
                                                          cy="142.411" cx="270.7220758928571" j="4" val="-5"
                                                          barHeight="-21.772999999999996" barWidth="21.7321875"></path>
                                                    <path id="SvgjsPath1645"
                                                          d="M 273.7220758928571 150.638L 273.7220758928571 204.6662Q 273.7220758928571 214.6662 283.7220758928571 214.6662L 279.4542633928571 214.6662Q 289.4542633928571 214.6662 289.4542633928571 204.6662L 289.4542633928571 204.6662L 289.4542633928571 150.638Q 289.4542633928571 140.638 279.4542633928571 140.638L 283.7220758928571 140.638Q 273.7220758928571 140.638 273.7220758928571 150.638z"
                                                          fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                          stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                          stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                          clip-path="url(#gridRectMasko7uowqf4)"
                                                          pathTo="M 273.7220758928571 150.638L 273.7220758928571 204.6662Q 273.7220758928571 214.6662 283.7220758928571 214.6662L 279.4542633928571 214.6662Q 289.4542633928571 214.6662 289.4542633928571 204.6662L 289.4542633928571 204.6662L 289.4542633928571 150.638Q 289.4542633928571 140.638 279.4542633928571 140.638L 283.7220758928571 140.638Q 273.7220758928571 140.638 273.7220758928571 150.638z"
                                                          pathFrom="M 273.7220758928571 150.638L 273.7220758928571 150.638L 289.4542633928571 150.638L 289.4542633928571 150.638L 289.4542633928571 150.638L 289.4542633928571 150.638L 289.4542633928571 150.638L 273.7220758928571 150.638"
                                                          cy="194.6662" cx="322.46537946428566" j="5" val="-17"
                                                          barHeight="-74.0282" barWidth="21.7321875"></path>
                                                    <path id="SvgjsPath1646"
                                                          d="M 325.46537946428566 150.638L 325.46537946428566 195.957Q 325.46537946428566 205.957 335.46537946428566 205.957L 331.19756696428567 205.957Q 341.19756696428567 205.957 341.19756696428567 195.957L 341.19756696428567 195.957L 341.19756696428567 150.638Q 341.19756696428567 140.638 331.19756696428567 140.638L 335.46537946428566 140.638Q 325.46537946428566 140.638 325.46537946428566 150.638z"
                                                          fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                          stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                          stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                          clip-path="url(#gridRectMasko7uowqf4)"
                                                          pathTo="M 325.46537946428566 150.638L 325.46537946428566 195.957Q 325.46537946428566 205.957 335.46537946428566 205.957L 331.19756696428567 205.957Q 341.19756696428567 205.957 341.19756696428567 195.957L 341.19756696428567 195.957L 341.19756696428567 150.638Q 341.19756696428567 140.638 331.19756696428567 140.638L 335.46537946428566 140.638Q 325.46537946428566 140.638 325.46537946428566 150.638z"
                                                          pathFrom="M 325.46537946428566 150.638L 325.46537946428566 150.638L 341.19756696428567 150.638L 341.19756696428567 150.638L 341.19756696428567 150.638L 341.19756696428567 150.638L 341.19756696428567 150.638L 325.46537946428566 150.638"
                                                          cy="185.957" cx="374.2086830357142" j="6" val="-15"
                                                          barHeight="-65.31899999999999" barWidth="21.7321875"></path>
                                                </g>
                                                <g id="SvgjsG1630" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                <g id="SvgjsG1639" class="apexcharts-datalabels" data:realIndex="1"></g>
                                            </g>
                                            <line id="SvgjsLine1695" x1="0" y1="0" x2="362.203125" y2="0"
                                                  stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                  stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1696" x1="0" y1="0" x2="362.203125" y2="0"
                                                  stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                  class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1697" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1698" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1699" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG1670" class="apexcharts-yaxis" rel="0"
                                           transform="translate(15.796875, 0)">
                                            <g id="SvgjsG1671" class="apexcharts-yaxis-texts-g">
                                                <text id="SvgjsText1672" font-family="Helvetica, Arial, sans-serif"
                                                      x="20" y="52.5" text-anchor="end" dominant-baseline="auto"
                                                      font-size="13px" font-weight="400" fill="#a1acb8"
                                                      class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1673">30</tspan>
                                                    <title>30</title></text>
                                                <text id="SvgjsText1674" font-family="Helvetica, Arial, sans-serif"
                                                      x="20" y="96.04599999999999" text-anchor="end"
                                                      dominant-baseline="auto" font-size="13px" font-weight="400"
                                                      fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1675">20</tspan>
                                                    <title>20</title></text>
                                                <text id="SvgjsText1676" font-family="Helvetica, Arial, sans-serif"
                                                      x="20" y="139.59199999999998" text-anchor="end"
                                                      dominant-baseline="auto" font-size="13px" font-weight="400"
                                                      fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1677">10</tspan>
                                                    <title>10</title></text>
                                                <text id="SvgjsText1678" font-family="Helvetica, Arial, sans-serif"
                                                      x="20" y="183.13799999999998" text-anchor="end"
                                                      dominant-baseline="auto" font-size="13px" font-weight="400"
                                                      fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1679">0</tspan>
                                                    <title>0</title></text>
                                                <text id="SvgjsText1680" font-family="Helvetica, Arial, sans-serif"
                                                      x="20" y="226.68399999999997" text-anchor="end"
                                                      dominant-baseline="auto" font-size="13px" font-weight="400"
                                                      fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1681">-10</tspan>
                                                    <title>-10</title></text>
                                                <text id="SvgjsText1682" font-family="Helvetica, Arial, sans-serif"
                                                      x="20" y="270.22999999999996" text-anchor="end"
                                                      dominant-baseline="auto" font-size="13px" font-weight="400"
                                                      fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1683">-20</tspan>
                                                    <title>-20</title></text>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1618" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(105, 108, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(3, 195, 236);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 453px; height: 377px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                                id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            2022
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                            <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                            <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                            <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="growthChart" style="min-height: 154.875px;">
                                <div id="apexcharts0is6v3t7"
                                     class="apexcharts-canvas apexcharts0is6v3t7 apexcharts-theme-light"
                                     style="width: 226px; height: 154.875px;">
                                    <svg id="SvgjsSvg1700" width="226" height="154.875"
                                         xmlns="http://www.w3.org/2000/svg" version="1.1"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                         class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                         style="background: transparent;">
                                        <g id="SvgjsG1702" class="apexcharts-inner apexcharts-graphical"
                                           transform="translate(6, -25)">
                                            <defs id="SvgjsDefs1701">
                                                <clipPath id="gridRectMask0is6v3t7">
                                                    <rect id="SvgjsRect1704" width="222" height="285" x="-3" y="-1"
                                                          rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask0is6v3t7"></clipPath>
                                                <clipPath id="nonForecastMask0is6v3t7"></clipPath>
                                                <clipPath id="gridRectMarkerMask0is6v3t7">
                                                    <rect id="SvgjsRect1705" width="220" height="287" x="-2" y="-2"
                                                          rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1710" x1="1" y1="0" x2="0"
                                                                y2="1">
                                                    <stop id="SvgjsStop1711" stop-opacity="1"
                                                          stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                    <stop id="SvgjsStop1712" stop-opacity="0.6"
                                                          stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                    <stop id="SvgjsStop1713" stop-opacity="0.6"
                                                          stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                                </linearGradient>
                                                <linearGradient id="SvgjsLinearGradient1721" x1="1" y1="0" x2="0"
                                                                y2="1">
                                                    <stop id="SvgjsStop1722" stop-opacity="1"
                                                          stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                    <stop id="SvgjsStop1723" stop-opacity="0.6"
                                                          stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                                    <stop id="SvgjsStop1724" stop-opacity="0.6"
                                                          stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="SvgjsG1706" class="apexcharts-radialbar">
                                                <g id="SvgjsG1707">
                                                    <g id="SvgjsG1708" class="apexcharts-tracks">
                                                        <g id="SvgjsG1709"
                                                           class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                  d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"
                                                                  fill="none" fill-opacity="1"
                                                                  stroke="rgba(255,255,255,0.85)" stroke-opacity="1"
                                                                  stroke-linecap="butt"
                                                                  stroke-width="17.357317073170734" stroke-dasharray="0"
                                                                  class="apexcharts-radialbar-area"
                                                                  data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"></path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1715">
                                                        <g id="SvgjsG1720"
                                                           class="apexcharts-series apexcharts-radial-series"
                                                           seriesName="Growth" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1725"
                                                                  d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"
                                                                  fill="none" fill-opacity="0.85"
                                                                  stroke="url(#SvgjsLinearGradient1721)"
                                                                  stroke-opacity="1" stroke-linecap="butt"
                                                                  stroke-width="17.357317073170734" stroke-dasharray="5"
                                                                  class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                  data:angle="234" data:value="78" index="0" j="0"
                                                                  data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"></path>
                                                        </g>
                                                        <circle id="SvgjsCircle1716" r="54.65121951219512" cx="108"
                                                                cy="108" class="apexcharts-radialbar-hollow"
                                                                fill="transparent"></circle>
                                                        <g id="SvgjsG1717" class="apexcharts-datalabels-group"
                                                           transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                            <text id="SvgjsText1718" font-family="Public Sans" x="108"
                                                                  y="123" text-anchor="middle" dominant-baseline="auto"
                                                                  font-size="15px" font-weight="500" fill="#566a7f"
                                                                  class="apexcharts-text apexcharts-datalabel-label"
                                                                  style="font-family: &quot;Public Sans&quot;;">Growth
                                                            </text>
                                                            <text id="SvgjsText1719" font-family="Public Sans" x="108"
                                                                  y="99" text-anchor="middle" dominant-baseline="auto"
                                                                  font-size="22px" font-weight="500" fill="#566a7f"
                                                                  class="apexcharts-text apexcharts-datalabel-value"
                                                                  style="font-family: &quot;Public Sans&quot;;">78%
                                                            </text>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1726" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6"
                                                  stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                  class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1727" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0"
                                                  stroke-width="0" stroke-linecap="butt"
                                                  class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG1703" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                </div>
                            </div>
                            <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                            <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                                <div class="d-flex">
                                    <div class="me-2">
                                        <span class="badge bg-label-primary p-2"><i
                                                class="bx bx-dollar text-primary"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small>2022</small>
                                        <h6 class="mb-0">$32.5k</h6>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <span class="badge bg-label-info p-2"><i
                                                class="bx bx-wallet text-info"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small>2021</small>
                                        <h6 class="mb-0">$41.2k</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 227px; height: 377px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Total Revenue -->
            <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card"
                                             class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="d-block mb-1">Payments</span>
                                <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                                <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i>
                                    -14.82%</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card"
                                             class="rounded">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Transactions</span>
                                <h3 class="card-title mb-2">$14,857</h3>
                                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                    +28.14%</small>
                            </div>
                        </div>
                    </div>
                    <!-- </div>
    <div class="row"> -->
                    <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3"
                                     style="position: relative;">
                                    <div
                                        class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                        <div class="card-title">
                                            <h5 class="text-nowrap mb-2">Profile Report</h5>
                                            <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                        </div>
                                        <div class="mt-sm-auto">
                                            <small class="text-success text-nowrap fw-semibold"><i
                                                    class="bx bx-chevron-up"></i> 68.2%</small>
                                            <h3 class="mb-0">$84,686k</h3>
                                        </div>
                                    </div>
                                    <div id="profileReportChart" style="min-height: 80px;">
                                        <div id="apexchartsq4qb2156"
                                             class="apexcharts-canvas apexchartsq4qb2156 apexcharts-theme-light"
                                             style="width: 141px; height: 80px;">
                                            <svg id="SvgjsSvg1729" width="141" height="80"
                                                 xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                 xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                 style="background: transparent;">
                                                <g id="SvgjsG1731" class="apexcharts-inner apexcharts-graphical"
                                                   transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1730">
                                                        <clipPath id="gridRectMaskq4qb2156">
                                                            <rect id="SvgjsRect1736" width="142" height="85" x="-4.5"
                                                                  y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                  stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskq4qb2156"></clipPath>
                                                        <clipPath id="nonForecastMaskq4qb2156"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskq4qb2156">
                                                            <rect id="SvgjsRect1737" width="137" height="84" x="-2"
                                                                  y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                  stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <filter id="SvgjsFilter1743" filterUnits="userSpaceOnUse"
                                                                width="200%" height="200%" x="-50%" y="-50%">
                                                            <feFlood id="SvgjsFeFlood1744" flood-color="#ffab00"
                                                                     flood-opacity="0.15" result="SvgjsFeFlood1744Out"
                                                                     in="SourceGraphic"></feFlood>
                                                            <feComposite id="SvgjsFeComposite1745"
                                                                         in="SvgjsFeFlood1744Out" in2="SourceAlpha"
                                                                         operator="in"
                                                                         result="SvgjsFeComposite1745Out"></feComposite>
                                                            <feOffset id="SvgjsFeOffset1746" dx="5" dy="10"
                                                                      result="SvgjsFeOffset1746Out"
                                                                      in="SvgjsFeComposite1745Out"></feOffset>
                                                            <feGaussianBlur id="SvgjsFeGaussianBlur1747"
                                                                            stdDeviation="3 "
                                                                            result="SvgjsFeGaussianBlur1747Out"
                                                                            in="SvgjsFeOffset1746Out"></feGaussianBlur>
                                                            <feMerge id="SvgjsFeMerge1748" result="SvgjsFeMerge1748Out"
                                                                     in="SourceGraphic">
                                                                <feMergeNode id="SvgjsFeMergeNode1749"
                                                                             in="SvgjsFeGaussianBlur1747Out"></feMergeNode>
                                                                <feMergeNode id="SvgjsFeMergeNode1750"
                                                                             in="[object Arguments]"></feMergeNode>
                                                            </feMerge>
                                                            <feBlend id="SvgjsFeBlend1751" in="SourceGraphic"
                                                                     in2="SvgjsFeMerge1748Out" mode="normal"
                                                                     result="SvgjsFeBlend1751Out"></feBlend>
                                                        </filter>
                                                    </defs>
                                                    <line id="SvgjsLine1735" x1="0" y1="0" x2="0" y2="80"
                                                          stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                                          class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                          height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                          stroke-width="1"></line>
                                                    <g id="SvgjsG1752" class="apexcharts-xaxis"
                                                       transform="translate(0, 0)">
                                                        <g id="SvgjsG1753" class="apexcharts-xaxis-texts-g"
                                                           transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1761" class="apexcharts-grid">
                                                        <g id="SvgjsG1762" class="apexcharts-gridlines-horizontal"
                                                           style="display: none;">
                                                            <line id="SvgjsLine1764" x1="0" y1="0" x2="133" y2="0"
                                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                                  stroke-linecap="butt"
                                                                  class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1765" x1="0" y1="20" x2="133" y2="20"
                                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                                  stroke-linecap="butt"
                                                                  class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1766" x1="0" y1="40" x2="133" y2="40"
                                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                                  stroke-linecap="butt"
                                                                  class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1767" x1="0" y1="60" x2="133" y2="60"
                                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                                  stroke-linecap="butt"
                                                                  class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1768" x1="0" y1="80" x2="133" y2="80"
                                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                                  stroke-linecap="butt"
                                                                  class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1763" class="apexcharts-gridlines-vertical"
                                                           style="display: none;"></g>
                                                        <line id="SvgjsLine1770" x1="0" y1="80" x2="133" y2="80"
                                                              stroke="transparent" stroke-dasharray="0"
                                                              stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1769" x1="0" y1="1" x2="0" y2="80"
                                                              stroke="transparent" stroke-dasharray="0"
                                                              stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1738"
                                                       class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG1739" class="apexcharts-series"
                                                           seriesName="seriesx1" data:longestSeries="true" rel="1"
                                                           data:realIndex="0">
                                                            <path id="SvgjsPath1742"
                                                                  d="M 0 76C 9.31 76 17.29 12 26.6 12C 35.910000000000004 12 43.89 62 53.2 62C 62.510000000000005 62 70.49000000000001 22 79.80000000000001 22C 89.11000000000001 22 97.09 38 106.4 38C 115.71000000000001 38 123.69 6 133 6"
                                                                  fill="none" fill-opacity="1"
                                                                  stroke="rgba(255,171,0,0.85)" stroke-opacity="1"
                                                                  stroke-linecap="butt" stroke-width="5"
                                                                  stroke-dasharray="0" class="apexcharts-line" index="0"
                                                                  clip-path="url(#gridRectMaskq4qb2156)"
                                                                  filter="url(#SvgjsFilter1743)"
                                                                  pathTo="M 0 76C 9.31 76 17.29 12 26.6 12C 35.910000000000004 12 43.89 62 53.2 62C 62.510000000000005 62 70.49000000000001 22 79.80000000000001 22C 89.11000000000001 22 97.09 38 106.4 38C 115.71000000000001 38 123.69 6 133 6"
                                                                  pathFrom="M -1 120L -1 120L 26.6 120L 53.2 120L 79.80000000000001 120L 106.4 120L 133 120"></path>
                                                            <g id="SvgjsG1740" class="apexcharts-series-markers-wrap"
                                                               data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1776" r="0" cx="0" cy="0"
                                                                            class="apexcharts-marker wr0gn97yhi no-pointer-events"
                                                                            stroke="#ffffff" fill="#ffab00"
                                                                            fill-opacity="1" stroke-width="2"
                                                                            stroke-opacity="0.9"
                                                                            default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1741" class="apexcharts-datalabels"
                                                           data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1771" x1="0" y1="0" x2="133" y2="0"
                                                          stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                          stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1772" x1="0" y1="0" x2="133" y2="0"
                                                          stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                          class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1773" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1774" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1775" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1734" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                      fill="#fefefe"></rect>
                                                <g id="SvgjsG1760" class="apexcharts-yaxis" rel="0"
                                                   transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1732" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 171, 0);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                         style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 279px; height: 117px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Order Statistics -->
            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Order Statistics</h5>
                            <small class="text-muted">42.82k Total Sales</small>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                            <div class="d-flex flex-column align-items-center gap-1">
                                <h2 class="mb-2">8,258</h2>
                                <span>Total Orders</span>
                            </div>
                            <div id="orderStatisticsChart" style="min-height: 137.55px;">
                                <div id="apexchartsxkis3pn3i"
                                     class="apexcharts-canvas apexchartsxkis3pn3i apexcharts-theme-light"
                                     style="width: 130px; height: 137.55px;">
                                    <svg id="SvgjsSvg1777" width="130" height="137.55"
                                         xmlns="http://www.w3.org/2000/svg" version="1.1"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                         class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                         style="background: transparent;">
                                        <g id="SvgjsG1779" class="apexcharts-inner apexcharts-graphical"
                                           transform="translate(-7, 0)">
                                            <defs id="SvgjsDefs1778">
                                                <clipPath id="gridRectMaskxkis3pn3i">
                                                    <rect id="SvgjsRect1781" width="150" height="173" x="-4.5" y="-2.5"
                                                          rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskxkis3pn3i"></clipPath>
                                                <clipPath id="nonForecastMaskxkis3pn3i"></clipPath>
                                                <clipPath id="gridRectMarkerMaskxkis3pn3i">
                                                    <rect id="SvgjsRect1782" width="145" height="172" x="-2" y="-2"
                                                          rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG1783" class="apexcharts-pie">
                                                <g id="SvgjsG1784" transform="translate(0, 0) scale(1)">
                                                    <circle id="SvgjsCircle1785" r="44.835365853658544" cx="70.5"
                                                            cy="70.5" fill="transparent"></circle>
                                                    <g id="SvgjsG1786" class="apexcharts-slices">
                                                        <g id="SvgjsG1787"
                                                           class="apexcharts-series apexcharts-pie-series"
                                                           seriesName="Electronic" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1788"
                                                                  d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                                  fill="rgba(105,108,255,1)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="butt"
                                                                  stroke-width="5" stroke-dasharray="0"
                                                                  class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                  index="0" j="0" data:angle="153" data:startAngle="0"
                                                                  data:strokeWidth="5" data:value="85"
                                                                  data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                                  stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1789"
                                                           class="apexcharts-series apexcharts-pie-series"
                                                           seriesName="Sports" rel="2" data:realIndex="1">
                                                            <path id="SvgjsPath1790"
                                                                  d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                                  fill="rgba(133,146,163,1)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="butt"
                                                                  stroke-width="5" stroke-dasharray="0"
                                                                  class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                  index="0" j="1" data:angle="27" data:startAngle="153"
                                                                  data:strokeWidth="5" data:value="15"
                                                                  data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                                  stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1791"
                                                           class="apexcharts-series apexcharts-pie-series"
                                                           seriesName="Decor" rel="3" data:realIndex="2">
                                                            <path id="SvgjsPath1792"
                                                                  d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                                  fill="rgba(3,195,236,1)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="butt"
                                                                  stroke-width="5" stroke-dasharray="0"
                                                                  class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                  index="0" j="2" data:angle="90" data:startAngle="180"
                                                                  data:strokeWidth="5" data:value="50"
                                                                  data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                                  stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1793"
                                                           class="apexcharts-series apexcharts-pie-series"
                                                           seriesName="Fashion" rel="4" data:realIndex="3">
                                                            <path id="SvgjsPath1794"
                                                                  d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                                  fill="rgba(113,221,55,1)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="butt"
                                                                  stroke-width="5" stroke-dasharray="0"
                                                                  class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                                  index="0" j="3" data:angle="90" data:startAngle="270"
                                                                  data:strokeWidth="5" data:value="50"
                                                                  data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                                  stroke="#ffffff"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1795" class="apexcharts-datalabels-group"
                                                   transform="translate(0, 0) scale(1)">
                                                    <text id="SvgjsText1796" font-family="Helvetica, Arial, sans-serif"
                                                          x="70.5" y="90.5" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="0.8125rem"
                                                          font-weight="400" fill="#a1acb8"
                                                          class="apexcharts-text apexcharts-datalabel-label"
                                                          style="font-family: Helvetica, Arial, sans-serif;">Weekly
                                                    </text>
                                                    <text id="SvgjsText1797" font-family="Public Sans" x="70.5" y="71.5"
                                                          text-anchor="middle" dominant-baseline="auto"
                                                          font-size="1.5rem" font-weight="400" fill="#566a7f"
                                                          class="apexcharts-text apexcharts-datalabel-value"
                                                          style="font-family: &quot;Public Sans&quot;;">38%
                                                    </text>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1798" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6"
                                                  stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                  class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1799" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0"
                                                  stroke-width="0" stroke-linecap="butt"
                                                  class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG1780" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(105, 108, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(133, 146, 163);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(3, 195, 236);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(113, 221, 55);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 279px; height: 139px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-mobile-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Electronic</h6>
                                        <small class="text-muted">Mobile, Earbuds, TV</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">82.5k</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-success"><i
                                            class="bx bx-closet"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Fashion</h6>
                                        <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">23.8k</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-info"><i
                                            class="bx bx-home-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Decor</h6>
                                        <small class="text-muted">Fine Art, Dining</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">849k</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-secondary"><i
                                            class="bx bx-football"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Sports</h6>
                                        <small class="text-muted">Football, Cricket Kit</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">99</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Order Statistics -->

            <!-- Expense Overview -->
            <div class="col-md-6 col-lg-4 order-1 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-tabs-line-card-income"
                                        aria-controls="navs-tabs-line-card-income" aria-selected="true">
                                    Income
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab">Expenses</button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab">Profit</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body px-0">
                        <div class="tab-content p-0">
                            <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel"
                                 style="position: relative;">
                                <div class="d-flex p-4 pt-3">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="../assets/img/icons/unicons/wallet.png" alt="User">
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Total Balance</small>
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-1">$459.10</h6>
                                            <small class="text-success fw-semibold">
                                                <i class="bx bx-chevron-up"></i>
                                                42.9%
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div id="incomeChart" style="min-height: 215px;">
                                    <div id="apexchartsrqgvbduy"
                                         class="apexcharts-canvas apexchartsrqgvbduy apexcharts-theme-light"
                                         style="width: 326px; height: 215px;">
                                        <svg id="SvgjsSvg1800" width="326" height="215"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                             class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                             transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG1802" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(0, 10)">
                                                <defs id="SvgjsDefs1801">
                                                    <clipPath id="gridRectMaskrqgvbduy">
                                                        <rect id="SvgjsRect1807" width="314.635009765625"
                                                              height="175.73" x="-3" y="-1" rx="0" ry="0" opacity="1"
                                                              stroke-width="0" stroke="none" stroke-dasharray="0"
                                                              fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskrqgvbduy"></clipPath>
                                                    <clipPath id="nonForecastMaskrqgvbduy"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskrqgvbduy">
                                                        <rect id="SvgjsRect1808" width="336.635009765625"
                                                              height="201.73" x="-14" y="-14" rx="0" ry="0" opacity="1"
                                                              stroke-width="0" stroke="none" stroke-dasharray="0"
                                                              fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1828" x1="0" y1="0" x2="0"
                                                                    y2="1">
                                                        <stop id="SvgjsStop1829" stop-opacity="0.5"
                                                              stop-color="rgba(105,108,255,0.5)" offset="0"></stop>
                                                        <stop id="SvgjsStop1830" stop-opacity="0.25"
                                                              stop-color="rgba(195,196,255,0.25)" offset="0.95"></stop>
                                                        <stop id="SvgjsStop1831" stop-opacity="0.25"
                                                              stop-color="rgba(195,196,255,0.25)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine1806" x1="0" y1="0" x2="0" y2="173.73"
                                                      stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                                      class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                      height="173.73" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                      stroke-width="1"></line>
                                                <g id="SvgjsG1834" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1835" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)">
                                                        <text id="SvgjsText1837"
                                                              font-family="Helvetica, Arial, sans-serif" x="0"
                                                              y="202.73" text-anchor="middle" dominant-baseline="auto"
                                                              font-size="13px" font-weight="400" fill="#a1acb8"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1838"></tspan>
                                                            <title></title></text>
                                                        <text id="SvgjsText1840"
                                                              font-family="Helvetica, Arial, sans-serif"
                                                              x="44.09071568080358" y="202.73" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="13px"
                                                              font-weight="400" fill="#a1acb8"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1841">Jan</tspan>
                                                            <title>Jan</title></text>
                                                        <text id="SvgjsText1843"
                                                              font-family="Helvetica, Arial, sans-serif"
                                                              x="88.18143136160714" y="202.73" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="13px"
                                                              font-weight="400" fill="#a1acb8"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1844">Feb</tspan>
                                                            <title>Feb</title></text>
                                                        <text id="SvgjsText1846"
                                                              font-family="Helvetica, Arial, sans-serif"
                                                              x="132.27214704241072" y="202.73" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="13px"
                                                              font-weight="400" fill="#a1acb8"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1847">Mar</tspan>
                                                            <title>Mar</title></text>
                                                        <text id="SvgjsText1849"
                                                              font-family="Helvetica, Arial, sans-serif"
                                                              x="176.36286272321428" y="202.73" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="13px"
                                                              font-weight="400" fill="#a1acb8"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1850">Apr</tspan>
                                                            <title>Apr</title></text>
                                                        <text id="SvgjsText1852"
                                                              font-family="Helvetica, Arial, sans-serif"
                                                              x="220.45357840401783" y="202.73" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="13px"
                                                              font-weight="400" fill="#a1acb8"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1853">May</tspan>
                                                            <title>May</title></text>
                                                        <text id="SvgjsText1855"
                                                              font-family="Helvetica, Arial, sans-serif"
                                                              x="264.5442940848214" y="202.73" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="13px"
                                                              font-weight="400" fill="#a1acb8"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1856">Jun</tspan>
                                                            <title>Jun</title></text>
                                                        <text id="SvgjsText1858"
                                                              font-family="Helvetica, Arial, sans-serif"
                                                              x="308.63500976562494" y="202.73" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="13px"
                                                              font-weight="400" fill="#a1acb8"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1859">Jul</tspan>
                                                            <title>Jul</title></text>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1862" class="apexcharts-grid">
                                                    <g id="SvgjsG1863" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine1865" x1="0" y1="0" x2="308.635009765625"
                                                              y2="0" stroke="#eceef1" stroke-dasharray="3"
                                                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1866" x1="0" y1="43.4325"
                                                              x2="308.635009765625" y2="43.4325" stroke="#eceef1"
                                                              stroke-dasharray="3" stroke-linecap="butt"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1867" x1="0" y1="86.865"
                                                              x2="308.635009765625" y2="86.865" stroke="#eceef1"
                                                              stroke-dasharray="3" stroke-linecap="butt"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1868" x1="0" y1="130.29749999999999"
                                                              x2="308.635009765625" y2="130.29749999999999"
                                                              stroke="#eceef1" stroke-dasharray="3"
                                                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1869" x1="0" y1="173.73"
                                                              x2="308.635009765625" y2="173.73" stroke="#eceef1"
                                                              stroke-dasharray="3" stroke-linecap="butt"
                                                              class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1864" class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine1871" x1="0" y1="173.73" x2="308.635009765625"
                                                          y2="173.73" stroke="transparent" stroke-dasharray="0"
                                                          stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1870" x1="0" y1="1" x2="0" y2="173.73"
                                                          stroke="transparent" stroke-dasharray="0"
                                                          stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1809"
                                                   class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1810" class="apexcharts-series" seriesName="seriesx1"
                                                       data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1832"
                                                              d="M 0 173.73L 0 112.92450000000001C 15.431750488281248 112.92450000000001 28.658965192522324 125.95425 44.09071568080357 125.95425C 59.522466169084815 125.95425 72.74968087332589 86.86500000000001 88.18143136160714 86.86500000000001C 103.61318184988838 86.86500000000001 116.84039655412946 121.611 132.2721470424107 121.611C 147.70389753069196 121.611 160.93111223493304 34.74600000000001 176.36286272321428 34.74600000000001C 191.79461321149552 34.74600000000001 205.0218279157366 104.238 220.45357840401783 104.238C 235.88532889229907 104.238 249.11254359654015 65.14875 264.5442940848214 65.14875C 279.9760445731026 65.14875 293.20325927734376 91.20825 308.635009765625 91.20825C 308.635009765625 91.20825 308.635009765625 91.20825 308.635009765625 173.73M 308.635009765625 91.20825z"
                                                              fill="url(#SvgjsLinearGradient1828)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                              stroke-dasharray="0" class="apexcharts-area" index="0"
                                                              clip-path="url(#gridRectMaskrqgvbduy)"
                                                              pathTo="M 0 173.73L 0 112.92450000000001C 15.431750488281248 112.92450000000001 28.658965192522324 125.95425 44.09071568080357 125.95425C 59.522466169084815 125.95425 72.74968087332589 86.86500000000001 88.18143136160714 86.86500000000001C 103.61318184988838 86.86500000000001 116.84039655412946 121.611 132.2721470424107 121.611C 147.70389753069196 121.611 160.93111223493304 34.74600000000001 176.36286272321428 34.74600000000001C 191.79461321149552 34.74600000000001 205.0218279157366 104.238 220.45357840401783 104.238C 235.88532889229907 104.238 249.11254359654015 65.14875 264.5442940848214 65.14875C 279.9760445731026 65.14875 293.20325927734376 91.20825 308.635009765625 91.20825C 308.635009765625 91.20825 308.635009765625 91.20825 308.635009765625 173.73M 308.635009765625 91.20825z"
                                                              pathFrom="M -1 217.1625L -1 217.1625L 44.09071568080357 217.1625L 88.18143136160714 217.1625L 132.2721470424107 217.1625L 176.36286272321428 217.1625L 220.45357840401783 217.1625L 264.5442940848214 217.1625L 308.635009765625 217.1625"></path>
                                                        <path id="SvgjsPath1833"
                                                              d="M 0 112.92450000000001C 15.431750488281248 112.92450000000001 28.658965192522324 125.95425 44.09071568080357 125.95425C 59.522466169084815 125.95425 72.74968087332589 86.86500000000001 88.18143136160714 86.86500000000001C 103.61318184988838 86.86500000000001 116.84039655412946 121.611 132.2721470424107 121.611C 147.70389753069196 121.611 160.93111223493304 34.74600000000001 176.36286272321428 34.74600000000001C 191.79461321149552 34.74600000000001 205.0218279157366 104.238 220.45357840401783 104.238C 235.88532889229907 104.238 249.11254359654015 65.14875 264.5442940848214 65.14875C 279.9760445731026 65.14875 293.20325927734376 91.20825 308.635009765625 91.20825"
                                                              fill="none" fill-opacity="1" stroke="#696cff"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-area" index="0"
                                                              clip-path="url(#gridRectMaskrqgvbduy)"
                                                              pathTo="M 0 112.92450000000001C 15.431750488281248 112.92450000000001 28.658965192522324 125.95425 44.09071568080357 125.95425C 59.522466169084815 125.95425 72.74968087332589 86.86500000000001 88.18143136160714 86.86500000000001C 103.61318184988838 86.86500000000001 116.84039655412946 121.611 132.2721470424107 121.611C 147.70389753069196 121.611 160.93111223493304 34.74600000000001 176.36286272321428 34.74600000000001C 191.79461321149552 34.74600000000001 205.0218279157366 104.238 220.45357840401783 104.238C 235.88532889229907 104.238 249.11254359654015 65.14875 264.5442940848214 65.14875C 279.9760445731026 65.14875 293.20325927734376 91.20825 308.635009765625 91.20825"
                                                              pathFrom="M -1 217.1625L -1 217.1625L 44.09071568080357 217.1625L 88.18143136160714 217.1625L 132.2721470424107 217.1625L 176.36286272321428 217.1625L 220.45357840401783 217.1625L 264.5442940848214 217.1625L 308.635009765625 217.1625"></path>
                                                        <g id="SvgjsG1811" class="apexcharts-series-markers-wrap"
                                                           data:realIndex="0">
                                                            <g id="SvgjsG1813" class="apexcharts-series-markers"
                                                               clip-path="url(#gridRectMarkerMaskrqgvbduy)">
                                                                <circle id="SvgjsCircle1814" r="6" cx="0"
                                                                        cy="112.92450000000001"
                                                                        class="apexcharts-marker no-pointer-events w6g2ysfms"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="0" j="0" index="0"
                                                                        default-marker-size="6"></circle>
                                                                <circle id="SvgjsCircle1815" r="6"
                                                                        cx="44.09071568080357" cy="125.95425"
                                                                        class="apexcharts-marker no-pointer-events ws52nv2zc"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="1" j="1" index="0"
                                                                        default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1816" class="apexcharts-series-markers"
                                                               clip-path="url(#gridRectMarkerMaskrqgvbduy)">
                                                                <circle id="SvgjsCircle1817" r="6"
                                                                        cx="88.18143136160714" cy="86.86500000000001"
                                                                        class="apexcharts-marker no-pointer-events w32rm3cwd"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="2" j="2" index="0"
                                                                        default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1818" class="apexcharts-series-markers"
                                                               clip-path="url(#gridRectMarkerMaskrqgvbduy)">
                                                                <circle id="SvgjsCircle1819" r="6"
                                                                        cx="132.2721470424107" cy="121.611"
                                                                        class="apexcharts-marker no-pointer-events w29m6ipqt"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="3" j="3" index="0"
                                                                        default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1820" class="apexcharts-series-markers"
                                                               clip-path="url(#gridRectMarkerMaskrqgvbduy)">
                                                                <circle id="SvgjsCircle1821" r="6"
                                                                        cx="176.36286272321428" cy="34.74600000000001"
                                                                        class="apexcharts-marker no-pointer-events wbqv08i5k"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="4" j="4" index="0"
                                                                        default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1822" class="apexcharts-series-markers"
                                                               clip-path="url(#gridRectMarkerMaskrqgvbduy)">
                                                                <circle id="SvgjsCircle1823" r="6"
                                                                        cx="220.45357840401783" cy="104.238"
                                                                        class="apexcharts-marker no-pointer-events wcy2o749qj"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="5" j="5" index="0"
                                                                        default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1824" class="apexcharts-series-markers"
                                                               clip-path="url(#gridRectMarkerMaskrqgvbduy)">
                                                                <circle id="SvgjsCircle1825" r="6"
                                                                        cx="264.5442940848214" cy="65.14875"
                                                                        class="apexcharts-marker no-pointer-events w6vhywap9"
                                                                        stroke="transparent" fill="transparent"
                                                                        fill-opacity="1" stroke-width="4"
                                                                        stroke-opacity="0.9" rel="6" j="6" index="0"
                                                                        default-marker-size="6"></circle>
                                                            </g>
                                                            <g id="SvgjsG1826" class="apexcharts-series-markers"
                                                               clip-path="url(#gridRectMarkerMaskrqgvbduy)">
                                                                <circle id="SvgjsCircle1827" r="6" cx="308.635009765625"
                                                                        cy="91.20825"
                                                                        class="apexcharts-marker no-pointer-events w4ewpvlyk"
                                                                        stroke="#696cff" fill="#ffffff" fill-opacity="1"
                                                                        stroke-width="4" stroke-opacity="0.9" rel="7"
                                                                        j="7" index="0"
                                                                        default-marker-size="6"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1812" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1872" x1="0" y1="0" x2="308.635009765625" y2="0"
                                                      stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                      stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1873" x1="0" y1="0" x2="308.635009765625" y2="0"
                                                      stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1874" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1875" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1876" class="apexcharts-point-annotations"></g>
                                                <rect id="SvgjsRect1877" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                      fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                                <rect id="SvgjsRect1878" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                      fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                            </g>
                                            <rect id="SvgjsRect1805" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe"></rect>
                                            <g id="SvgjsG1860" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-8, 0)">
                                                <g id="SvgjsG1861" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG1803" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 107.5px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(105, 108, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span>
                                                    </div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                            <div class="apexcharts-xaxistooltip-text"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center pt-4 gap-2">
                                    <div class="flex-shrink-0" style="position: relative;">
                                        <div id="expensesOfWeek" style="min-height: 57.7px;">
                                            <div id="apexchartstq96f8uf"
                                                 class="apexcharts-canvas apexchartstq96f8uf apexcharts-theme-light"
                                                 style="width: 60px; height: 57.7px;">
                                                <svg id="SvgjsSvg1879" width="60" height="57.7"
                                                     xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                     xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                     style="background: transparent;">
                                                    <g id="SvgjsG1881" class="apexcharts-inner apexcharts-graphical"
                                                       transform="translate(-10, -10)">
                                                        <defs id="SvgjsDefs1880">
                                                            <clipPath id="gridRectMasktq96f8uf">
                                                                <rect id="SvgjsRect1883" width="86" height="87" x="-3"
                                                                      y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                      stroke="none" stroke-dasharray="0"
                                                                      fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMasktq96f8uf"></clipPath>
                                                            <clipPath id="nonForecastMasktq96f8uf"></clipPath>
                                                            <clipPath id="gridRectMarkerMasktq96f8uf">
                                                                <rect id="SvgjsRect1884" width="84" height="89" x="-2"
                                                                      y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                      stroke="none" stroke-dasharray="0"
                                                                      fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG1885" class="apexcharts-radialbar">
                                                            <g id="SvgjsG1886">
                                                                <g id="SvgjsG1887" class="apexcharts-tracks">
                                                                    <g id="SvgjsG1888"
                                                                       class="apexcharts-radialbar-track apexcharts-track"
                                                                       rel="1">
                                                                        <path id="apexcharts-radialbarTrack-0"
                                                                              d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247"
                                                                              fill="none" fill-opacity="1"
                                                                              stroke="rgba(236,238,241,0.85)"
                                                                              stroke-opacity="1" stroke-linecap="round"
                                                                              stroke-width="2.0408536585365864"
                                                                              stroke-dasharray="0"
                                                                              class="apexcharts-radialbar-area"
                                                                              data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247"></path>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG1890">
                                                                    <g id="SvgjsG1894"
                                                                       class="apexcharts-series apexcharts-radial-series"
                                                                       seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                        <path id="SvgjsPath1895"
                                                                              d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095"
                                                                              fill="none" fill-opacity="0.85"
                                                                              stroke="rgba(105,108,255,0.85)"
                                                                              stroke-opacity="1" stroke-linecap="round"
                                                                              stroke-width="4.081707317073173"
                                                                              stroke-dasharray="0"
                                                                              class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                              data:angle="234" data:value="65" index="0"
                                                                              j="0"
                                                                              data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095"></path>
                                                                    </g>
                                                                    <circle id="SvgjsCircle1891" r="18.881402439024395"
                                                                            cx="40" cy="40"
                                                                            class="apexcharts-radialbar-hollow"
                                                                            fill="transparent"></circle>
                                                                    <g id="SvgjsG1892"
                                                                       class="apexcharts-datalabels-group"
                                                                       transform="translate(0, 0) scale(1)"
                                                                       style="opacity: 1;">
                                                                        <text id="SvgjsText1893"
                                                                              font-family="Helvetica, Arial, sans-serif"
                                                                              x="40" y="45" text-anchor="middle"
                                                                              dominant-baseline="auto" font-size="13px"
                                                                              font-weight="400" fill="#697a8d"
                                                                              class="apexcharts-text apexcharts-datalabel-value"
                                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                                            $65
                                                                        </text>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1896" x1="0" y1="0" x2="80" y2="0"
                                                              stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                              stroke-linecap="butt"
                                                              class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1897" x1="0" y1="0" x2="80" y2="0"
                                                              stroke-dasharray="0" stroke-width="0"
                                                              stroke-linecap="butt"
                                                              class="apexcharts-ycrosshairs-hidden"></line>
                                                    </g>
                                                    <g id="SvgjsG1882" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend"></div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 61px; height: 59px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-n1 mt-1">Expenses This Week</p>
                                        <small class="text-muted">$39 less than last week</small>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 327px; height: 377px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Expense Overview -->

            <!-- Transactions -->
            <div class="col-md-6 col-lg-4 order-2 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Transactions</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Paypal</small>
                                        <h6 class="mb-0">Send money</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+82.6</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Wallet</small>
                                        <h6 class="mb-0">Mac'D</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+270.69</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/chart.png" alt="User" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Transfer</small>
                                        <h6 class="mb-0">Refund</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+637.91</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/cc-success.png" alt="User" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Credit Card</small>
                                        <h6 class="mb-0">Ordered Food</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">-838.71</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Wallet</small>
                                        <h6 class="mb-0">Starbucks</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+203.33</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Mastercard</small>
                                        <h6 class="mb-0">Ordered Food</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">-92.45</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Transactions -->
        </div>
    </div>
@endsection
