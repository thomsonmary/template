@extends('admin.users.index')
@section('konten_profile')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> <strong class="card-title">Users Management - Profile</strong> </div>
                        <div class="card-body">
                                  <div class="col-md-4">
                                      <aside class="profile-nav alt">
                                          <section class="card">
                                              <div class="card-header user-header alt bg-dark">
                                                  <div class="media">
                                                      <a href="#">
                                                          <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{Auth::user()->getAvatar()}}">
                                                      </a>
                                                      <div class="media-body">
                                                          <h2 class="text-light display-6">{{Auth::user()->name}}</h2>
                                                            <p>{{ implode(', ', Auth::user()->roles()->get()->pluck('role')->toArray()) }}</p>
                                                      </div>
                                                  </div>
                                              </div>
                                              <ul class="list-group list-group-flush">
                                                  <li class="list-group-item">
                                                      <a href="#"> <i class="fa fa-envelope-o"></i> {{Auth::user()->email}} <span class="badge badge-primary pull-right">cek</span></a>
                                                  </li>
                                                  <li class="list-group-item">
                                                      <a href="#"> <i class="fa fa-tasks"></i> Level Akses : <b>{{ implode(', ', Auth::user()->roles()->get()->pluck('role')->toArray()) }}</b><span class="badge badge-danger pull-right">cek</span></a>
                                                  </li>
                                                  <li class="list-group-item">
                                                      <a href="#"> <i class="fa fa-bell-o"></i> Notification <span class="badge badge-success pull-right">cek</span></a>
                                                  </li>
                                                  <li class="list-group-item">
                                                      <a href="#"> <i class="fa fa-comments-o"></i> Message <span class="badge badge-warning pull-right r-activity">cek</span></a>
                                                  </li>
                                              </ul>

                                          </section>
                                      </aside>
                                  </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
