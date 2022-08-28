<template>
    <Header :title="title" :content="title" :items="items" />
    <div class="row g-3" style="margin-top: -33px;">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body p-4" :style="{ height: height + 'px' }">
                    <div class="search-box">
                        <div class="position-relative"><input type="text" placeholder="Search..."
                                class="form-control rounded bg-light border-light"><i
                                class="mdi mdi-magnify search-icon"></i></div>
                    </div>
                    <hr class="my-4">
                    <div>
                        <p class="text-muted mb-2">Today Events</p>
                        <div class="list-group list-group-flush">
                            <a href="javascript:void(0);"
                                class="list-group-item text-muted py-3 px-2">
                                <div class="d-flex align-items-center">
                                    <div class="me-3"><img src="/img/img-7.4dbb8c9d.jpg" alt=""
                                            class="avatar-md h-auto d-block rounded"></div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 text-truncate"> Beautiful Day with Friends </h5>
                                        <p class="mb-0 text-truncate">10 Apr, 2020</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div>
                        <p class="text-muted mb-2">Upcoming Events</p>
                        <div class="list-group list-group-flush"><a href="javascript:void(0);"
                                class="list-group-item text-muted py-3 px-2">
                                <div class="d-flex align-items-center">
                                    <div class="me-3"><img src="/img/img-7.4dbb8c9d.jpg" alt=""
                                            class="avatar-md h-auto d-block rounded"></div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 text-truncate"> Beautiful Day with Friends </h5>
                                        <p class="mb-0 text-truncate">10 Apr, 2020</p>
                                    </div>
                                </div>
                            </a><a href="javascript:void(0);" class="list-group-item text-muted py-3 px-2">
                                <div class="d-flex align-items-center">
                                    <div class="me-3"><img src="/img/img-4.825d4e1c.jpg" alt=""
                                            class="avatar-md h-auto d-block rounded"></div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 text-truncate"> Drawing a sketch </h5>
                                        <p class="mb-0 text-truncate">24 Mar, 2020</p>
                                    </div>
                                </div>
                            </a><a href="javascript:void(0);" class="list-group-item text-muted py-3 px-2">
                                <div class="d-flex align-items-center">
                                    <div class="me-3"><img src="/img/img-6.17b0e61c.jpg" alt=""
                                            class="avatar-md h-auto d-block rounded"></div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 text-truncate"> Project discussion with team </h5>
                                        <p class="mb-0 text-truncate">11 Mar, 2020</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body" :style="{ height: height + 'px' }">

                    <div class="row mb-3">
                        <div class="col-xl-6 col-sm-6 d-inline-block">
                            <button @click="create" type="button" class="btn btn-danger waves-effect waves-light me-1"><i class='bx bx-plus-medical'></i></button>
                            <form class="d-inline-block ">
                                <div class="search-box">
                                    <div class="position-relative">
                                        <input type="text" class="form-control bg-light border-light rounded" placeholder="Search..." v-model="keyword">
                                        <i class='bx bx-search-alt search-icon'></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <ul class="list-inline user-chat-nav text-end mb-0 dropdown">
                                <Pagination v-if="meta" @fetch="fetch" :links="links" :pagination="meta"/>
                            </ul>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap align-middle">
                            <thead class="thead-light">
                                <tr class="font-size-11">
                                    <th style="width: 2%;"></th>
                                    <th>Title</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="list in lists" v-bind:key="list.id">
                                    <td>1
                                    </td>
                                    <td>
                                        <h5 class="font-size-13 mb-0 text-dark">{{list.title}}.</h5>
                                        <p class="font-size-12 text-muted mb-0">{{list.created_at}}</p>
                                    </td>
                                    <td class="text-center">
                                        <h5 class="font-size-12 mb-0 text-dark">{{list.created_at}}</h5>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-success fs-11">{{ list.type.name }}</span>
                                    </td>
                                    <td class="text-center">
                                        <a class="me-3 text-warning" @click="edit(list)"><i class='bx bx-edit-alt' ></i></a>
                                        <a class="text-info" @click="verify(list)"><i class='bx bx-mail-send'></i></a>
                                    </td>
                                </tr>
                                <tr v-if="lists.length == 0">
                                    <td class="text-center" colspan="5">
                                        No users found.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Header from "@/Shared/Header.vue";
    import Pagination from "@/Shared/Pagination.vue";
    export default {
        components: { Header, Pagination },
        inject:['count', 'height'],
        data() {
            return {
                currentUrl: window.location.origin,
                title: "Events",
                items: [{
                    text: "Event",
                    href: "/",
                }, {
                    text: "Lists",
                    active: true,
                }],
                lists: []
            }
        },

        methods: {
            create(){

            },

            edit(){

            },

            verify(){
                
            }
        }
    }

</script>
