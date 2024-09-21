@extends('web.layouts.main')
@section('content')
    <div class="detail-event mb-4">
        <div class="banner">
            <div class="container">
                <div class="row"></div>
                <div class="col">
                    <h2 class="title">Girlboss masterclass</h2>
                    <div class="subtitle"><span>Glam up with cover last foundation</span></div>
                </div>
            </div>
        </div>
        <div class="container information-event">
            <div class="header">
                <div class="row">
                    <div class="col d-flex justify-content-between align-items-start">
                        <div>
                            <h2 class="title">Girlboss masterclass</h2>
                            <div class="subtitle"><span>Glam up with cover last foundation</span></div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="shared me-3">
                                <a href="javascript:void(0)" class="btn btn-outline">
                                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="join">
                                <a href="javascript:void(0)" class="btn btn-share">
                                    Join
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="information">
                <div class="row">
                    <div class="col">
                        <div class="Kuota">
                            <div class="title">Kuota</div>
                            <div class="sub">50 Orang</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="location">
                            <div class="title">Lokasi</div>
                            <div class="sub">Cafe Mandatory</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="date">
                            <div class="title">Tanggal Acara</div>
                            <div class="sub">20 Desember 2024</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="date">
                            <div class="title">Kota</div>
                            <div class="sub">Jakarta</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container about-event">
            <div class="row">
                <div class="col-8">
                    <div class="content-banner mb-4">
                        <div class="images">
                            <img src="{{ asset('assets/web/images/event/event_1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="content-information">
                        <div class="title">Tentang Girlboss masterclass</div>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                est laborum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="join-people">
                        <div class="title">
                            Daftar Influencer
                        </div>
                        <div class="list-influencer mt-4">
                            <div class="people d-flex align-items-center">
                                <div class="images">
                                    <img src="{{ asset('assets/web/images/icon/web/female.png') }}" alt="">
                                </div>
                                <div class="identity ms-2">
                                    <div class="name">Tasha Annisa</div>
                                    <div class="social-media">@tshaannisa</div>
                                </div>
                            </div>
                            <div class="people d-flex align-items-center">
                                <div class="images"></div>
                                <div class="identity ms-2">
                                    <div class="name">Tasha Annisa</div>
                                    <div class="social-media">@tshaannisa</div>
                                </div>
                            </div>
                            <div class="people d-flex align-items-center">
                                <div class="images"></div>
                                <div class="identity ms-2">
                                    <div class="name">Tasha Annisa</div>
                                    <div class="social-media">@tshaannisa</div>
                                </div>
                            </div>
                            <div class="people d-flex align-items-center">
                                <div class="images"></div>
                                <div class="identity ms-2">
                                    <div class="name">Tasha Annisa</div>
                                    <div class="social-media">@tshaannisa</div>
                                </div>
                            </div>
                            <div class="people d-flex align-items-center">
                                <div class="images"></div>
                                <div class="identity ms-2">
                                    <div class="name">Tasha Annisa</div>
                                    <div class="social-media">@tshaannisa</div>
                                </div>
                            </div>
                            <div class="people d-flex align-items-center">
                                <div class="images"></div>
                                <div class="identity ms-2">
                                    <div class="name">Tasha Annisa</div>
                                    <div class="social-media">@tshaannisa</div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-join mt-4">
                            <a href="javascript:void(0)" class="btn btn-outline w-100">
                                Tampilkan Semua
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
