@extends('backend.layouts.app')

@section('content')
<div class="content">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header">
            <div class="row align-items-center">
              <div class="col-auto">
                <h2 class="page-title">
                  Users
                </h2>
              </div>
              <div class="col-auto">
                <div class="text-muted text-h5 mt-2">1-18 of 413 people</div>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ml-auto d-print-none">
                <div class="d-flex">
                  <input type="search" class="form-control d-inline-block w-9 mr-3" placeholder="Search user…"/>
                  <a href="#" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                    New user
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            @foreach ($users as $user)
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="card-body">
                  <div class="row row-sm align-items-center">
                    <div class="col-auto">
                      <span class="avatar avatar-md" style="background-image: url(./static/avatars/000m.jpg)"></span>
                    </div>
                    <div class="col">
                      <h3 class="mb-0"><a href="#">{{$user->name}}</a></h3>
                      <div class="text-muted text-h5">{{$user->email}}</div>
                    </div>
                    <div class="col-auto lh-1 align-self-start">
                      <span class="badge bg-gray-lt">
                       {{($user->status == 0) ? (__('user.Inactive')) :(__('user.Active'))}}
                      </span>
                    </div>
                  </div>
                  <div class="row align-items-center mt-4">
                    <div class="col">
                      <div>
                        <div class="d-flex mb-1 align-items-center lh-1">
                          <div class="text-h5 font-weight-bolder m-0">Progress</div>
                          <span class="ml-auto text-h6 strong">84%</span>
                        </div>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-blue" style="width: 84%" role="progressbar" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">84% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="btn-list">
                        <a href="#" class="btn btn-white btn-sm">
                          {{$user->role}}
                        </a>
                        <a href="#" class="btn btn-white btn-sm">
                          {{__('user.profile')}}
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          {{ $users->links() }}
        </div>

      </div>

    @endsection
