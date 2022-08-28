<template>
    <div>
        <div id="preloader">
            <div id="status">
                <div class="spinner-chase">
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                </div>
            </div>
        </div>
        <div id="layout-wrapper">
            <wew />
            <div class="main-content" style="margin-top: -40px;">
                <div class="page-content">
                    <div class="account-pages px-4">

                        <div class="row g-3">
                            <div class="col-xl-4">
                                <div class="card overflow-hidden" style="margin-bottom: -30px;">
                                    <div class="bg-soft bg-primary">
                                        <div class="row mt-3 ms-2 mb-1">
                                            <div class="col-7">
                                                <div class="text-primary">
                                                    <h4 class="text-primary">{{ $page.props.scholar.data.program.name }}
                                                        Scholar</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-bottom pt-0">
                                        <div class="row">
                                            <div class="col-sm-12 mt-4">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex mt-4 me-3">
                                                        <div class="avatar-md profile-user-wid">
                                                            <img :src="currentUrl+'/images/avatars/'+$page.props.scholar.data.profile.avatar"
                                                                alt class="img-thumbnail rounded-circle" />
                                                        </div>
                                                    </div>

                                                    <div class="flex-grow-1">
                                                        <div class="text-muted">
                                                            <span
                                                                class="fw-bold font-size-13 text-primary">{{ $page.props.scholar.data.profile.firstname+' '+$page.props.scholar.data.profile.middlename+' '+$page.props.scholar.data.profile.lastname }}</span>
                                                            <!-- <p class="mb-0 font-size-11 fw-bold">{{ $page.props.scholar.data.spas_id }}</p> -->
                                                            <p class="mb-0 font-size-11 ">
                                                                {{ $page.props.scholar.data.profile.email }}</p>
                                                            <p class="text-muted mb-0"><span
                                                                    :class="'badge bg-'+$page.props.scholar.data.status.color">{{$page.props.scholar.data.status.name}}
                                                                </span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-body" :style="{ height: height2-171 + 'px' }">
                                        <div class="table-responsive ">
                                            <table class="table table-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">SPAS ID :</th>
                                                        <td>{{ $page.props.scholar.data.spas_id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Year Awarded :</th>
                                                        <td>{{ $page.props.scholar.data.awarded_year }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">School :</th>
                                                        <td>{{ $page.props.scholar.data.education.school.name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Course :</th>
                                                        <td>{{ $page.props.scholar.data.education.course.name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Region :</th>
                                                        <td>{{ $page.props.scholar.data.address.region.region }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Email :</th>
                                                        <td>{{ $page.props.scholar.data.profile.email }}</td>
                                                    </tr>
                                                     <tr>
                                                        <th scope="row">Mobile :</th>
                                                        <td>{{ $page.props.scholar.data.profile.mobile }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-8">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium mb-2">Completed Projects</p>
                                                        <h4 class="mb-0">125</h4>
                                                    </div>
                                                    <div
                                                        class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary">
                                                        <span class="avatar-title"><i
                                                                class="bx bx-check-circle font-size-24"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium mb-2">Pending Projects</p>
                                                        <h4 class="mb-0">12</h4>
                                                    </div>
                                                    <div
                                                        class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary">
                                                        <span class="avatar-title"><i
                                                                class="bx bx-hourglass font-size-24"></i></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium mb-2">Total Revenue</p>
                                                        <h4 class="mb-0">$36,524</h4>
                                                    </div>
                                                    <div
                                                        class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary">
                                                        <span class="avatar-title"><i
                                                                class="bx bx-package font-size-24"></i></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-n2">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="">
                                                    <ul class="nav nav-pills small bg-light rounded" role="tablist">
                                                        <li class="nav-item"><button id="__BVID__369482___BV_tab__"
                                                                class="nav-link active" data-bs-toggle="tab"
                                                                data-bs-target="#__BVID__079994___BV___" role="tab"
                                                                aria-controls="__BVID__079994___BV___"
                                                                aria-selected="true">Home</button></li>
                                                        <li class="nav-item"><button id="__BVID__023529___BV_tab__"
                                                                class="nav-link" data-bs-toggle="tab"
                                                                data-bs-target="#__BVID__143997___BV___" role="tab"
                                                                aria-controls="__BVID__143997___BV___"
                                                                aria-selected="false">Endorsements</button></li>
                                                        <li class="nav-item"><button id="__BVID__266675___BV_tab__"
                                                                class="nav-link" data-bs-toggle="tab"
                                                                data-bs-target="#__BVID__837652___BV___" role="tab"
                                                                aria-controls="__BVID__837652___BV___"
                                                                aria-selected="false">Reimbursements</button></li>
                                                        <li class="nav-item"><button id="__BVID__950295___BV_tab__"
                                                                class="nav-link" data-bs-toggle="tab"
                                                                data-bs-target="#__BVID__571198___BV___" role="tab"
                                                                aria-controls="__BVID__571198___BV___"
                                                                aria-selected="false">Trace Requests</button></li>
                                                        <li class="nav-item"><button id="__BVID__584865___BV_tab__"
                                                                class="nav-link" data-bs-toggle="tab"
                                                                data-bs-target="#__BVID__603031___BV___" role="tab"
                                                                aria-controls="__BVID__603031___BV___"
                                                                aria-selected="false">Requests</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-n2">
                                        <div class="card" :style="{ height: height2-200 + 'px' }" style="margin-bottom: -30px;">
                                            <div class="card-body">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- <div class="d-xl-flex">
                            <div class="w-100">
                                <div class="d-md-flex">
                                    <div class="chat-leftsidebar me-4">
                                        <Sidebar/>
                                    </div>
                                    <div class="w-100 me-3">
                                        <div class="row">
                                            <slot />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Sidebar from "@/Shared/Layout/Horizontal/Sidebar.vue";
    import wew from "@/Shared/Layout/Horizontal/TopBar.vue";
    export default {
        props: ['dropdowns', 'programs', 'regions'],
        inject:['height2'],
        components: {
            wew,
            Sidebar
        },
        data() {
            return {
                currentUrl: window.location.origin,
                isMenuCondensed: false
            };
        },
        created: () => {
            document.body.setAttribute("data-layout", "horizontal");
            document.body.setAttribute("data-topbar", "dark");
            document.body.removeAttribute("data-sidebar", "dark");
            document.body.removeAttribute("data-layout-size", "boxed");
        },
        mounted() {
            const layout = JSON.parse(localStorage.getItem("layout")) || {};
            if (layout.loader == true) {
                document.getElementById("preloader").style.display = "block";
                document.getElementById("status").style.display = "block";

                setTimeout(function () {
                    document.getElementById("preloader").style.display = "none";
                    document.getElementById("status").style.display = "none";
                }, 2500);
            } else {
                document.getElementById("preloader").style.display = "none";
                document.getElementById("status").style.display = "none";
            }
        },
        methods: {
            toggleMenu() {
                document.body.classList.toggle("sidebar-enable");

                if (window.screen.width >= 992) {
                    document.body.classList.toggle("vertical-collpsed");
                } else {
                    document.body.classList.remove("vertical-collpsed");
                }
                this.isMenuCondensed = !this.isMenuCondensed;
            },
            toggleRightSidebar() {
                document.body.classList.toggle("right-bar-enabled");
            },
            hideRightSidebar() {
                document.body.classList.remove("right-bar-enabled");
            }
        }
    };

</script>
