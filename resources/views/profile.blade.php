@extends('layout.main')

@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="container pd-0">
                <div class="contact-directory-list">
                    <ul class="row">
                        <li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-directory-box">
                                <div class="contact-dire-info text-center">
                                    <div class="contact-avatar">
                                        <span>
                                            <img src="{{url('fotomember/'.Auth::user()->foto) }}" alt="">
                                        </span>
                                    </div>
                                    <div class="contact-name">
                                        <h4>{{ Auth::user()->nama }}</h4>
                                        <p>{{ Auth::user()->no_hp }}</p>
                                        <div class="work text-success"><i class="ion-android-person mr-2"></i>{{ Auth::user()->jenis_kelamin }}</div>
                                    </div>
                                    <div class="contact-skill">
                                        <span class="badge badge-pill">{{ Auth::user()->email}}</span>
                                    </div>
                                    <div class="profile-sort-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing magna aliqua.
                                    </div>
                                </div>
                                <div class="view-contact">
                                    <a href="/member/ubah/{{ Auth::user()->id }}">Ubah</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
