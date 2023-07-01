@extends('layouts.main')
@section('content')

 <div>
 <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
              <!--begin::Dashboard-->
              @yield('content')
              <!--begin::Row-->
              <div class="row">
                <div class="col-lg-12 col-xxl-4">
                  <!--begin::Stats Widget 11-->
                  <div class="card card-custom card-stretch card-stretch-half gutter-b">
                    <!--begin::Body-->
                    <div class="card-body p-0" style="position: relative;">
                      <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                        <span class="symbol symbol-50 symbol-light-success mr-2">
                          <span class="symbol-label">
                            <span class="svg-icon svg-icon-xl svg-icon-success">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <rect x="0" y="0" width="24" height="24"></rect>
                                  <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                                  <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                                </g>
                              </svg>
                              <!--end::Svg Icon-->
                            </span>
                          </span>
                        </span>
                        <div class="d-flex flex-column text-right">
                          <span class="text-dark-75 font-weight-bolder font-size-h3">750$</span>
                          <span class="text-muted font-weight-bold mt-2">NASABAH</span>
                        </div>
                      </div>
                      <div id="kt_stats_widget_11_chart" class="card-rounded-bottom" data-color="success" style="height: 150px; min-height: 150px;">
                        <div id="apexcharts81shs65f" class="apexcharts-canvas apexcharts81shs65f apexcharts-theme-light" style="width: 343px; height: 150px;"><svg id="SvgjsSvg1230" width="343" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG1232" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                              <defs id="SvgjsDefs1231">
                                <clipPath id="gridRectMask81shs65f">
                                  <rect id="SvgjsRect1235" width="350" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                </clipPath>
                                <clipPath id="gridRectMarkerMask81shs65f">
                                  <rect id="SvgjsRect1236" width="347" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                </clipPath>
                              </defs>
                              <g id="SvgjsG1243" class="apexcharts-xaxis" transform="translate(0, 0)">
                                <g id="SvgjsG1244" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                              </g>
                              <g id="SvgjsG1253" class="apexcharts-grid">
                                <g id="SvgjsG1254" class="apexcharts-gridlines-horizontal" style="display: none;">
                                  <line id="SvgjsLine1256" x1="0" y1="0" x2="343" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1257" x1="0" y1="15" x2="343" y2="15" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1258" x1="0" y1="30" x2="343" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1259" x1="0" y1="45" x2="343" y2="45" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1260" x1="0" y1="60" x2="343" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1261" x1="0" y1="75" x2="343" y2="75" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1262" x1="0" y1="90" x2="343" y2="90" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1263" x1="0" y1="105" x2="343" y2="105" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1264" x1="0" y1="120" x2="343" y2="120" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1265" x1="0" y1="135" x2="343" y2="135" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1266" x1="0" y1="150" x2="343" y2="150" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                </g>
                                <g id="SvgjsG1255" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                <line id="SvgjsLine1268" x1="0" y1="150" x2="343" y2="150" stroke="transparent" stroke-dasharray="0"></line>
                                <line id="SvgjsLine1267" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0"></line>
                              </g>
                              <g id="SvgjsG1237" class="apexcharts-area-series apexcharts-plot-series">
                                <g id="SvgjsG1238" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0">
                                  <path id="SvgjsPath1241" d="M 0 150L 0 40.90909090909091C 20.008333333333333 40.90909090909091 37.15833333333333 40.90909090909091 57.166666666666664 40.90909090909091C 77.175 40.90909090909091 94.32499999999999 68.18181818181817 114.33333333333333 68.18181818181817C 134.34166666666667 68.18181818181817 151.49166666666667 68.18181818181817 171.5 68.18181818181817C 191.50833333333333 68.18181818181817 208.65833333333333 54.54545454545453 228.66666666666666 54.54545454545453C 248.67499999999998 54.54545454545453 265.825 54.54545454545453 285.8333333333333 54.54545454545453C 305.84166666666664 54.54545454545453 322.9916666666667 13.636363636363626 343 13.636363636363626C 343 13.636363636363626 343 13.636363636363626 343 150M 343 13.636363636363626z" fill="rgba(201,247,245,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask81shs65f)" pathTo="M 0 150L 0 40.90909090909091C 20.008333333333333 40.90909090909091 37.15833333333333 40.90909090909091 57.166666666666664 40.90909090909091C 77.175 40.90909090909091 94.32499999999999 68.18181818181817 114.33333333333333 68.18181818181817C 134.34166666666667 68.18181818181817 151.49166666666667 68.18181818181817 171.5 68.18181818181817C 191.50833333333333 68.18181818181817 208.65833333333333 54.54545454545453 228.66666666666666 54.54545454545453C 248.67499999999998 54.54545454545453 265.825 54.54545454545453 285.8333333333333 54.54545454545453C 305.84166666666664 54.54545454545453 322.9916666666667 13.636363636363626 343 13.636363636363626C 343 13.636363636363626 343 13.636363636363626 343 150M 343 13.636363636363626z" pathFrom="M -1 150L -1 150L 57.166666666666664 150L 114.33333333333333 150L 171.5 150L 228.66666666666666 150L 285.8333333333333 150L 343 150"></path>
                                  <path id="SvgjsPath1242" d="M 0 40.90909090909091C 20.008333333333333 40.90909090909091 37.15833333333333 40.90909090909091 57.166666666666664 40.90909090909091C 77.175 40.90909090909091 94.32499999999999 68.18181818181817 114.33333333333333 68.18181818181817C 134.34166666666667 68.18181818181817 151.49166666666667 68.18181818181817 171.5 68.18181818181817C 191.50833333333333 68.18181818181817 208.65833333333333 54.54545454545453 228.66666666666666 54.54545454545453C 248.67499999999998 54.54545454545453 265.825 54.54545454545453 285.8333333333333 54.54545454545453C 305.84166666666664 54.54545454545453 322.9916666666667 13.636363636363626 343 13.636363636363626" fill="none" fill-opacity="1" stroke="#1bc5bd" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask81shs65f)" pathTo="M 0 40.90909090909091C 20.008333333333333 40.90909090909091 37.15833333333333 40.90909090909091 57.166666666666664 40.90909090909091C 77.175 40.90909090909091 94.32499999999999 68.18181818181817 114.33333333333333 68.18181818181817C 134.34166666666667 68.18181818181817 151.49166666666667 68.18181818181817 171.5 68.18181818181817C 191.50833333333333 68.18181818181817 208.65833333333333 54.54545454545453 228.66666666666666 54.54545454545453C 248.67499999999998 54.54545454545453 265.825 54.54545454545453 285.8333333333333 54.54545454545453C 305.84166666666664 54.54545454545453 322.9916666666667 13.636363636363626 343 13.636363636363626" pathFrom="M -1 150L -1 150L 57.166666666666664 150L 114.33333333333333 150L 171.5 150L 228.66666666666666 150L 285.8333333333333 150L 343 150"></path>
                                  <g id="SvgjsG1239" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                    <g class="apexcharts-series-markers">
                                      <circle id="SvgjsCircle1274" r="0" cx="0" cy="0" class="apexcharts-marker wenkubexm no-pointer-events" stroke="#1bc5bd" fill="#c9f7f5" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle>
                                    </g>
                                  </g>
                                </g>
                                <g id="SvgjsG1240" class="apexcharts-datalabels" data:realIndex="0"></g>
                              </g>
                              <line id="SvgjsLine1269" x1="0" y1="0" x2="343" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                              <line id="SvgjsLine1270" x1="0" y1="0" x2="343" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                              <g id="SvgjsG1271" class="apexcharts-yaxis-annotations"></g>
                              <g id="SvgjsG1272" class="apexcharts-xaxis-annotations"></g>
                              <g id="SvgjsG1273" class="apexcharts-point-annotations"></g>
                            </g>
                            <g id="SvgjsG1252" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                            <g id="SvgjsG1233" class="apexcharts-annotations"></g>
                          </svg>
                          <div class="apexcharts-legend" style="max-height: 75px;"></div>
                          <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title" style="font-family: Poppins; font-size: 12px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(201, 247, 245);"></span>
                              <div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;">
                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                              </div>
                            </div>
                          </div>
                          <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                            <div class="apexcharts-xaxistooltip-text" style="font-family: Poppins; font-size: 12px;"></div>
                          </div>
                          <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                          </div>
                        </div>
                      </div>
                      <div class="resize-triggers">
                        <div class="expand-trigger">
                          <div style="width: 344px; height: 258px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                      </div>
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Stats Widget 11-->
                  <!--begin::Stats Widget 12-->
                  <div class="card card-custom card-stretch card-stretch-half gutter-b">
                    <!--begin::Body-->
                    <div class="card-body p-0" style="position: relative;">
                      <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                        <span class="symbol symbol-50 symbol-light-primary mr-2">
                          <span class="symbol-label">
                            <span class="svg-icon svg-icon-xl svg-icon-primary">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                  <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                  <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                </g>
                              </svg>
                              <!--end::Svg Icon-->
                            </span>
                          </span>
                        </span>
                        <div class="d-flex flex-column text-right">
                          <span class="text-dark-75 font-weight-bolder font-size-h3">+6,5K</span>
                          <span class="text-muted font-weight-bold mt-2">New Users</span>
                        </div>
                      </div>
                      <div id="kt_stats_widget_12_chart" class="card-rounded-bottom" data-color="primary" style="height: 150px; min-height: 150px;">
                        <div id="apexchartsek7jqgs7h" class="apexcharts-canvas apexchartsek7jqgs7h apexcharts-theme-light" style="width: 343px; height: 150px;"><svg id="SvgjsSvg1276" width="343" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG1278" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                              <defs id="SvgjsDefs1277">
                                <clipPath id="gridRectMaskek7jqgs7h">
                                  <rect id="SvgjsRect1281" width="350" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                </clipPath>
                                <clipPath id="gridRectMarkerMaskek7jqgs7h">
                                  <rect id="SvgjsRect1282" width="347" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                </clipPath>
                              </defs>
                              <g id="SvgjsG1289" class="apexcharts-xaxis" transform="translate(0, 0)">
                                <g id="SvgjsG1290" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                              </g>
                              <g id="SvgjsG1299" class="apexcharts-grid">
                                <g id="SvgjsG1300" class="apexcharts-gridlines-horizontal" style="display: none;">
                                  <line id="SvgjsLine1302" x1="0" y1="0" x2="343" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1303" x1="0" y1="15" x2="343" y2="15" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1304" x1="0" y1="30" x2="343" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1305" x1="0" y1="45" x2="343" y2="45" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1306" x1="0" y1="60" x2="343" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1307" x1="0" y1="75" x2="343" y2="75" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1308" x1="0" y1="90" x2="343" y2="90" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1309" x1="0" y1="105" x2="343" y2="105" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1310" x1="0" y1="120" x2="343" y2="120" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1311" x1="0" y1="135" x2="343" y2="135" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                  <line id="SvgjsLine1312" x1="0" y1="150" x2="343" y2="150" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                </g>
                                <g id="SvgjsG1301" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                <line id="SvgjsLine1314" x1="0" y1="150" x2="343" y2="150" stroke="transparent" stroke-dasharray="0"></line>
                                <line id="SvgjsLine1313" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0"></line>
                              </g>
                              <g id="SvgjsG1283" class="apexcharts-area-series apexcharts-plot-series">
                                <g id="SvgjsG1284" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0">
                                  <path id="SvgjsPath1287" d="M 0 150L 0 40.90909090909091C 20.008333333333333 40.90909090909091 37.15833333333333 40.90909090909091 57.166666666666664 40.90909090909091C 77.175 40.90909090909091 94.32499999999999 68.18181818181817 114.33333333333333 68.18181818181817C 134.34166666666667 68.18181818181817 151.49166666666667 68.18181818181817 171.5 68.18181818181817C 191.50833333333333 68.18181818181817 208.65833333333333 54.54545454545453 228.66666666666666 54.54545454545453C 248.67499999999998 54.54545454545453 265.825 54.54545454545453 285.8333333333333 54.54545454545453C 305.84166666666664 54.54545454545453 322.9916666666667 13.636363636363626 343 13.636363636363626C 343 13.636363636363626 343 13.636363636363626 343 150M 343 13.636363636363626z" fill="rgba(225,240,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskek7jqgs7h)" pathTo="M 0 150L 0 40.90909090909091C 20.008333333333333 40.90909090909091 37.15833333333333 40.90909090909091 57.166666666666664 40.90909090909091C 77.175 40.90909090909091 94.32499999999999 68.18181818181817 114.33333333333333 68.18181818181817C 134.34166666666667 68.18181818181817 151.49166666666667 68.18181818181817 171.5 68.18181818181817C 191.50833333333333 68.18181818181817 208.65833333333333 54.54545454545453 228.66666666666666 54.54545454545453C 248.67499999999998 54.54545454545453 265.825 54.54545454545453 285.8333333333333 54.54545454545453C 305.84166666666664 54.54545454545453 322.9916666666667 13.636363636363626 343 13.636363636363626C 343 13.636363636363626 343 13.636363636363626 343 150M 343 13.636363636363626z" pathFrom="M -1 150L -1 150L 57.166666666666664 150L 114.33333333333333 150L 171.5 150L 228.66666666666666 150L 285.8333333333333 150L 343 150"></path>
                                  <path id="SvgjsPath1288" d="M 0 40.90909090909091C 20.008333333333333 40.90909090909091 37.15833333333333 40.90909090909091 57.166666666666664 40.90909090909091C 77.175 40.90909090909091 94.32499999999999 68.18181818181817 114.33333333333333 68.18181818181817C 134.34166666666667 68.18181818181817 151.49166666666667 68.18181818181817 171.5 68.18181818181817C 191.50833333333333 68.18181818181817 208.65833333333333 54.54545454545453 228.66666666666666 54.54545454545453C 248.67499999999998 54.54545454545453 265.825 54.54545454545453 285.8333333333333 54.54545454545453C 305.84166666666664 54.54545454545453 322.9916666666667 13.636363636363626 343 13.636363636363626" fill="none" fill-opacity="1" stroke="#3699ff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskek7jqgs7h)" pathTo="M 0 40.90909090909091C 20.008333333333333 40.90909090909091 37.15833333333333 40.90909090909091 57.166666666666664 40.90909090909091C 77.175 40.90909090909091 94.32499999999999 68.18181818181817 114.33333333333333 68.18181818181817C 134.34166666666667 68.18181818181817 151.49166666666667 68.18181818181817 171.5 68.18181818181817C 191.50833333333333 68.18181818181817 208.65833333333333 54.54545454545453 228.66666666666666 54.54545454545453C 248.67499999999998 54.54545454545453 265.825 54.54545454545453 285.8333333333333 54.54545454545453C 305.84166666666664 54.54545454545453 322.9916666666667 13.636363636363626 343 13.636363636363626" pathFrom="M -1 150L -1 150L 57.166666666666664 150L 114.33333333333333 150L 171.5 150L 228.66666666666666 150L 285.8333333333333 150L 343 150"></path>
                                  <g id="SvgjsG1285" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                    <g class="apexcharts-series-markers">
                                      <circle id="SvgjsCircle1320" r="0" cx="0" cy="0" class="apexcharts-marker wfxq3efhp no-pointer-events" stroke="#3699ff" fill="#e1f0ff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle>
                                    </g>
                                  </g>
                                </g>
                                <g id="SvgjsG1286" class="apexcharts-datalabels" data:realIndex="0"></g>
                              </g>
                              <line id="SvgjsLine1315" x1="0" y1="0" x2="343" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                              <line id="SvgjsLine1316" x1="0" y1="0" x2="343" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                              <g id="SvgjsG1317" class="apexcharts-yaxis-annotations"></g>
                              <g id="SvgjsG1318" class="apexcharts-xaxis-annotations"></g>
                              <g id="SvgjsG1319" class="apexcharts-point-annotations"></g>
                            </g>
                            <g id="SvgjsG1298" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                            <g id="SvgjsG1279" class="apexcharts-annotations"></g>
                          </svg>
                          <div class="apexcharts-legend" style="max-height: 75px;"></div>
                          <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title" style="font-family: Poppins; font-size: 12px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(225, 240, 255);"></span>
                              <div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;">
                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                              </div>
                            </div>
                          </div>
                          <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                            <div class="apexcharts-xaxistooltip-text" style="font-family: Poppins; font-size: 12px;"></div>
                          </div>
                          <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                          </div>
                        </div>
                      </div>
                      <div class="resize-triggers">
                        <div class="expand-trigger">
                          <div style="width: 344px; height: 258px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                      </div>
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Stats Widget 12-->
                </div>

                <div class="col-lg-6 col-xxl-4">
                </div>
                
              </div>
              <!--end::Row-->
              <!--end::Dashboard-->
            </div>
            <!--end::Container-->
          </div>
    </div>


@endsection