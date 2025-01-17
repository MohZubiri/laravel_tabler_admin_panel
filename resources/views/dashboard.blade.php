@extends('backend.layouts.app')

@section('content')
<div class="content">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                  Overview
                </div>
                <h2 class="page-title">
                  Dashboard
                </h2>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ml-auto d-print-none">
                <span class="d-none d-sm-inline">
                  <a href="#" class="btn btn-white">
                    New view
                  </a>
                </span>
                <a href="#" class="btn btn-primary ml-3 d-none d-sm-inline-block" data-toggle="modal" data-target="#modal-report">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                  Create new report
                </a>
                <a href="#" class="btn btn-primary ml-3 d-sm-none btn-icon" data-toggle="modal" data-target="#modal-report" aria-label="Create new report">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                </a>
              </div>
            </div>
          </div>
          <div class="row row-deck row-cards">
            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="subheader">Sales</div>
                    <div class="ml-auto lh-1">
                      <div class="dropdown">
                        <a class="dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Last 7 days
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item active" href="#">Last 7 days</a>
                          <a class="dropdown-item" href="#">Last 30 days</a>
                          <a class="dropdown-item" href="#">Last 3 months</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="h1 mb-3">75%</div>
                  <div class="d-flex mb-2">
                    <div>Conversion rate</div>
                    <div class="ml-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        7% <svg xmlns="http://www.w3.org/2000/svg" class="icon ml-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                      </span>
                    </div>
                  </div>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-blue" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">75% Complete</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="subheader">Revenue</div>
                    <div class="ml-auto lh-1">
                      <div class="dropdown">
                        <a class="dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Last 7 days
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item active" href="#">Last 7 days</a>
                          <a class="dropdown-item" href="#">Last 30 days</a>
                          <a class="dropdown-item" href="#">Last 3 months</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-baseline">
                    <div class="h1 mb-0 mr-2">$4,300</div>
                    <div class="mr-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        8% <svg xmlns="http://www.w3.org/2000/svg" class="icon ml-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                      </span>
                    </div>
                  </div>
                </div>
                <div id="chart-revenue-bg" class="chart-sm"></div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="subheader">New clients</div>
                    <div class="ml-auto lh-1">
                      <div class="dropdown">
                        <a class="dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Last 7 days
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item active" href="#">Last 7 days</a>
                          <a class="dropdown-item" href="#">Last 30 days</a>
                          <a class="dropdown-item" href="#">Last 3 months</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-baseline">
                    <div class="h1 mb-3 mr-2">6,782</div>
                    <div class="mr-auto">
                      <span class="text-yellow d-inline-flex align-items-center lh-1">
                        0% <svg xmlns="http://www.w3.org/2000/svg" class="icon ml-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="5" y1="12" x2="19" y2="12" /></svg>
                      </span>
                    </div>
                  </div>
                  <div id="chart-new-clients" class="chart-sm"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="subheader">Active users</div>
                    <div class="ml-auto lh-1">
                      <div class="dropdown">
                        <a class="dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Last 7 days
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item active" href="#">Last 7 days</a>
                          <a class="dropdown-item" href="#">Last 30 days</a>
                          <a class="dropdown-item" href="#">Last 3 months</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-baseline">
                    <div class="h1 mb-3 mr-2">2,986</div>
                    <div class="mr-auto">
                      <span class="text-green d-inline-flex align-items-center lh-1">
                        4% <svg xmlns="http://www.w3.org/2000/svg" class="icon ml-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                      </span>
                    </div>
                  </div>
                  <div id="chart-active-users" class="chart-sm"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Traffic summary</h3>
                  <div id="chart-mentions" class="chart-lg"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Top countries</h3>
                  <div class="embed-responsive embed-responsive-16by9">
                    <div class="embed-responsive-item">
                      <div id="map-world" class="w-100 h-100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row row-cards row-deck">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body p-4 py-5 text-center">
                      <span class="avatar avatar-xl mb-4">W</span>
                      <h3 class="mb-0">New website</h3>
                      <p class="text-muted">Due to: 28 Aug 2019</p>
                      <p class="mb-3">
                        <span class="badge bg-red-lt">Waiting</span>
                      </p>
                      <div>
                        <div class="avatar-list avatar-list-stacked">
                          <span class="avatar" style="background-image: url(./static/avatars/000m.jpg)"></span>
                          <span class="avatar">JL</span>
                          <span class="avatar" style="background-image: url(./static/avatars/002m.jpg)"></span>
                          <span class="avatar" style="background-image: url(./static/avatars/003m.jpg)"></span>
                          <span class="avatar" style="background-image: url(./static/avatars/000f.jpg)"></span>
                        </div>
                      </div>
                    </div>
                    <div class="progress card-progress">
                      <div class="progress-bar" style="width: 38%" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">38% Complete</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body p-4 py-5 text-center">
                      <span class="avatar avatar-xl mb-4 bg-green-lt">W</span>
                      <h3 class="mb-0">UI Redesign</h3>
                      <p class="text-muted">Due to: 11 Nov 2019</p>
                      <p class="mb-3">
                        <span class="badge bg-green-lt">Final review</span>
                      </p>
                      <div>
                        <div class="avatar-list avatar-list-stacked">
                          <span class="avatar">HS</span>
                          <span class="avatar" style="background-image: url(./static/avatars/006m.jpg)"></span>
                          <span class="avatar" style="background-image: url(./static/avatars/004f.jpg)"></span>
                        </div>
                      </div>
                    </div>
                    <div class="progress card-progress">
                      <div class="progress-bar bg-green" style="width: 38%" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">38% Complete</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body p-2 text-center">
                      <div class="text-right text-green">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          6% <svg xmlns="http://www.w3.org/2000/svg" class="icon ml-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                        </span>
                      </div>
                      <div class="h1 m-0">43</div>
                      <div class="text-muted mb-4">New Tickets</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body p-2 text-center">
                      <div class="text-right text-red">
                        <span class="text-red d-inline-flex align-items-center lh-1">
                          -2% <svg xmlns="http://www.w3.org/2000/svg" class="icon ml-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="3 7 9 13 13 9 21 17" /><polyline points="21 10 21 17 14 17" /></svg>
                        </span>
                      </div>
                      <div class="h1 m-0">95</div>
                      <div class="text-muted mb-4">Daily Earnings</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body p-2 text-center">
                      <div class="text-right text-green">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          9% <svg xmlns="http://www.w3.org/2000/svg" class="icon ml-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                        </span>
                      </div>
                      <div class="h1 m-0">7</div>
                      <div class="text-muted mb-4">New Replies</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div id="chart-development-activity" class="mt-4"></div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter">
                    <thead>
                      <tr>
                        <th>User</th>
                        <th>Commit</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="w-1">
                          <span class="avatar" style="background-image: url(./static/avatars/000m.jpg)"></span>
                        </td>
                        <td class="td-truncate">
                          <div class="text-truncate">
                            Fix dart Sass compatibility (#29755)
                          </div>
                        </td>
                        <td class="text-nowrap text-muted">28 Nov 2019</td>
                      </tr>
                      <tr>
                        <td class="w-1">
                          <span class="avatar">JL</span>
                        </td>
                        <td class="td-truncate">
                          <div class="text-truncate">
                            Change deprecated html tags to text decoration classes (#29604)
                          </div>
                        </td>
                        <td class="text-nowrap text-muted">27 Nov 2019</td>
                      </tr>
                      <tr>
                        <td class="w-1">
                          <span class="avatar" style="background-image: url(./static/avatars/002m.jpg)"></span>
                        </td>
                        <td class="td-truncate">
                          <div class="text-truncate">
                            justify-content:between ⇒ justify-content:space-between (#29734)
                          </div>
                        </td>
                        <td class="text-nowrap text-muted">26 Nov 2019</td>
                      </tr>
                      <tr>
                        <td class="w-1">
                          <span class="avatar" style="background-image: url(./static/avatars/003m.jpg)"></span>
                        </td>
                        <td class="td-truncate">
                          <div class="text-truncate">
                            Update change-version.js (#29736)
                          </div>
                        </td>
                        <td class="text-nowrap text-muted">26 Nov 2019</td>
                      </tr>
                      <tr>
                        <td class="w-1">
                          <span class="avatar" style="background-image: url(./static/avatars/000f.jpg)"></span>
                        </td>
                        <td class="td-truncate">
                          <div class="text-truncate">
                            Regenerate package-lock.json (#29730)
                          </div>
                        </td>
                        <td class="text-nowrap text-muted">25 Nov 2019</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="card card-sm">
                <div class="card-body d-flex align-items-center">
                  <span class="bg-blue text-white stamp mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg>
                  </span>
                  <div class="mr-3 lh-sm">
                    <div class="strong">
                      132 Sales
                    </div>
                    <div class="text-muted">12 waiting payments</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="card card-sm">
                <div class="card-body d-flex align-items-center">
                  <span class="bg-green text-white stamp mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><circle cx="9" cy="19" r="2" /><circle cx="17" cy="19" r="2" /><path d="M3 3h2l2 12a3 3 0 0 0 3 2h7a3 3 0 0 0 3 -2l1 -7h-15.2" /></svg>
                  </span>
                  <div class="mr-3 lh-sm">
                    <div class="strong">
                      78 Orders
                    </div>
                    <div class="text-muted">32 shipped</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="card card-sm">
                <div class="card-body d-flex align-items-center">
                  <div class="mr-3">
                    <div class="chart-sparkline chart-sparkline-square" id="sparkline-7"></div>
                  </div>
                  <div class="mr-3 lh-sm">
                    <div class="strong">
                      1,352 Members
                    </div>
                    <div class="text-muted">163 registered today</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="card card-sm">
                <div class="card-body d-flex align-items-center">
                  <div class="mr-3 lh-sm">
                    <div class="strong">
                      132 Comments
                    </div>
                    <div class="text-muted">16 waiting</div>
                  </div>
                  <div class="ml-auto">
                    <div class="chart-sparkline chart-sparkline-square" id="sparkline-8"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Most Visited Pages</h4>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter">
                    <thead>
                      <tr>
                        <th>Page name</th>
                        <th>Visitors</th>
                        <th>Unique</th>
                        <th colspan="2">Bounce rate</th>
                      </tr>
                    </thead>
                    <tr>
                      <td>
                        /about.html
                        <a href="#" class="link-secondary ml-2"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" /><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" /></svg>
                        </a>
                      </td>
                      <td class="text-muted">4,896</td>
                      <td class="text-muted">3,654</td>
                      <td class="text-muted">82.54%</td>
                      <td class="text-right">
                        <div class="chart-sparkline" id="sparkline-9"></div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        /special-promo.html
                        <a href="#" class="link-secondary ml-2"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" /><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" /></svg>
                        </a>
                      </td>
                      <td class="text-muted">3,652</td>
                      <td class="text-muted">3,215</td>
                      <td class="text-muted">76.29%</td>
                      <td class="text-right">
                        <div class="chart-sparkline" id="sparkline-10"></div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        /news/1,new-ui-kit.html
                        <a href="#" class="link-secondary ml-2"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" /><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" /></svg>
                        </a>
                      </td>
                      <td class="text-muted">3,256</td>
                      <td class="text-muted">2,865</td>
                      <td class="text-muted">72.65%</td>
                      <td class="text-right">
                        <div class="chart-sparkline" id="sparkline-11"></div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        /lorem-ipsum-dolor-sit-amet-very-long-url.html
                        <a href="#" class="link-secondary ml-2"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" /><path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" /></svg>
                        </a>
                      </td>
                      <td class="text-muted">986</td>
                      <td class="text-muted">865</td>
                      <td class="text-muted">44.89%</td>
                      <td class="text-right">
                        <div class="chart-sparkline" id="sparkline-12"></div>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <a href="https://github.com/sponsors/codecalm" class="card card-sponsor" target="_blank" style="background-image: url(./static/sponsor-banner-homepage.svg)">
                <div class="card-body"></div>
              </a>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Social Media Traffic</h4>
                </div>
                <table class="table card-table table-vcenter">
                  <thead>
                    <tr>
                      <th>Network</th>
                      <th colspan="2">Visitors</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Instagram</td>
                      <td>3,550</td>
                      <td class="w-50">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Twitter</td>
                      <td>1,798</td>
                      <td class="w-50">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-primary" style="width: 35.96%"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Facebook</td>
                      <td>1,245</td>
                      <td class="w-50">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-primary" style="width: 24.9%"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Pinterest</td>
                      <td>854</td>
                      <td class="w-50">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-primary" style="width: 17.08%"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>VK</td>
                      <td>650</td>
                      <td class="w-50">
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-primary" style="width: 13.0%"></div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-6 col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Tasks</h4>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter">
                    <tr>
                      <td class="w-1 pr-0">
                        <label class="form-check m-0">
                          <input type="checkbox" class="form-check-input" checked>
                          <span class="form-check-label"></span>
                        </label>
                      </td>
                      <td class="w-100">
                        <a href="#" class="text-reset">Extend the data model.</a>
                      </td>
                      <td class="text-nowrap text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
                        January 01, 2019
                      </td>
                      <td class="text-nowrap">
                        <a href="#" class="text-muted">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M5 12l5 5l10 -10" /></svg>
                          2/7
                        </a>
                      </td>
                      <td class="text-nowrap">
                        <a href="#" class="text-muted">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" /><line x1="8" y1="9" x2="16" y2="9" /><line x1="8" y1="13" x2="14" y2="13" /></svg>
                          3</a>
                      </td>
                      <td>
                        <span class="avatar" style="background-image: url(./static/avatars/000m.jpg)"></span>
                      </td>
                    </tr>
                    <tr>
                      <td class="w-1 pr-0">
                        <label class="form-check m-0">
                          <input type="checkbox" class="form-check-input">
                          <span class="form-check-label"></span>
                        </label>
                      </td>
                      <td class="w-100">
                        <a href="#" class="text-reset">Verify the event flow.</a>
                      </td>
                      <td class="text-nowrap text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
                        January 01, 2019
                      </td>
                      <td class="text-nowrap">
                        <a href="#" class="text-muted">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M5 12l5 5l10 -10" /></svg>
                          3/10
                        </a>
                      </td>
                      <td class="text-nowrap">
                        <a href="#" class="text-muted">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" /><line x1="8" y1="9" x2="16" y2="9" /><line x1="8" y1="13" x2="14" y2="13" /></svg>
                          6</a>
                      </td>
                      <td>
                        <span class="avatar">JL</span>
                      </td>
                    </tr>
                    <tr>
                      <td class="w-1 pr-0">
                        <label class="form-check m-0">
                          <input type="checkbox" class="form-check-input">
                          <span class="form-check-label"></span>
                        </label>
                      </td>
                      <td class="w-100">
                        <a href="#" class="text-reset">Database backup and maintenance</a>
                      </td>
                      <td class="text-nowrap text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
                        January 01, 2019
                      </td>
                      <td class="text-nowrap">
                        <a href="#" class="text-muted">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M5 12l5 5l10 -10" /></svg>
                          0/6
                        </a>
                      </td>
                      <td class="text-nowrap">
                        <a href="#" class="text-muted">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" /><line x1="8" y1="9" x2="16" y2="9" /><line x1="8" y1="13" x2="14" y2="13" /></svg>
                          1</a>
                      </td>
                      <td>
                        <span class="avatar" style="background-image: url(./static/avatars/002m.jpg)"></span>
                      </td>
                    </tr>
                    <tr>
                      <td class="w-1 pr-0">
                        <label class="form-check m-0">
                          <input type="checkbox" class="form-check-input" checked>
                          <span class="form-check-label"></span>
                        </label>
                      </td>
                      <td class="w-100">
                        <a href="#" class="text-reset">Identify the implementation team.</a>
                      </td>
                      <td class="text-nowrap text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
                        January 01, 2019
                      </td>
                      <td class="text-nowrap">
                        <a href="#" class="text-muted">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M5 12l5 5l10 -10" /></svg>
                          6/10
                        </a>
                      </td>
                      <td class="text-nowrap">
                        <a href="#" class="text-muted">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" /><line x1="8" y1="9" x2="16" y2="9" /><line x1="8" y1="13" x2="14" y2="13" /></svg>
                          12</a>
                      </td>
                      <td>
                        <span class="avatar" style="background-image: url(./static/avatars/003m.jpg)"></span>
                      </td>
                    </tr>
                    <tr>
                      <td class="w-1 pr-0">
                        <label class="form-check m-0">
                          <input type="checkbox" class="form-check-input">
                          <span class="form-check-label"></span>
                        </label>
                      </td>
                      <td class="w-100">
                        <a href="#" class="text-reset">Define users and workflow</a>
                      </td>
                      <td class="text-nowrap text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
                        January 01, 2019
                      </td>
                      <td class="text-nowrap">
                        <a href="#" class="text-muted">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M5 12l5 5l10 -10" /></svg>
                          3/7
                        </a>
                      </td>
                      <td class="text-nowrap">
                        <a href="#" class="text-muted">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" /><line x1="8" y1="9" x2="16" y2="9" /><line x1="8" y1="13" x2="14" y2="13" /></svg>
                          5</a>
                      </td>
                      <td>
                        <span class="avatar" style="background-image: url(./static/avatars/000f.jpg)"></span>
                      </td>
                    </tr>
                    <tr>
                      <td class="w-1 pr-0">
                        <label class="form-check m-0">
                          <input type="checkbox" class="form-check-input" checked>
                          <span class="form-check-label"></span>
                        </label>
                      </td>
                      <td class="w-100">
                        <a href="#" class="text-reset">Check Pull Requests</a>
                      </td>
                      <td class="text-nowrap text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
                        January 01, 2019
                      </td>
                      <td class="text-nowrap">
                        <a href="#" class="text-muted">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M5 12l5 5l10 -10" /></svg>
                          2/9
                        </a>
                      </td>
                      <td class="text-nowrap">
                        <a href="#" class="text-muted">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" /><line x1="8" y1="9" x2="16" y2="9" /><line x1="8" y1="13" x2="14" y2="13" /></svg>
                          3</a>
                      </td>
                      <td>
                        <span class="avatar" style="background-image: url(./static/avatars/001f.jpg)"></span>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
@endsection
