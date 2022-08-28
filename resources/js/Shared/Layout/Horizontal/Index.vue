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

                        
                        <div class="d-xl-flex">
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
                        </div>

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
