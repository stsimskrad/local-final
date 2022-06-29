<template>
    <Header :title="title" :content="title" :items="items" />
    <div class="col-12 mt-n3">
        <div class="row gx-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body border-bottom">
                        <div class="col-md-12 mb-n2" style="margin-top: -6px;">
                            <div class="search-box input-group bg-light rounded">
                                <input type="text" placeholder="Search" class="form-control bg-transparent border-0"
                                    v-model="keyword">
                                <i class="bx bx-search-alt search-icon"></i>
                                <button type="button" class="btn btn-danger">
                                    <i class='bx bx-search-alt'></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-bottom" v-if="user.hasOwnProperty('profile')">
                        <div class="col-md-12">
                            <div class="d-flex">
                                <div class="me-3">
                                    <img :src="currentUrl+'/images/avatars/'+user.profile.avatar" alt=""
                                        class="avatar-sm rounded-circle img-thumbnail">
                                </div>
                                <div class="flex-grow-1 align-self-center">
                                    <div class="text-muted">
                                        <p class="text-primary fs-14 fw-bold mb-0">{{ user.profile.firstname }}
                                            {{ user.profile.middlename[0] }}.
                                            {{ user.profile.lastname}} {{ user.profile.suffix}}</p>
                                        <p class="mb-0"><span
                                                :class="'badge bg-'+user.status.color">{{user.status.name}}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 mb-n4">
                                <div class="col-md-12">
                                    <div class="mb-n3">
                                        <p class="text-muted">
                                            <i class="bx bxs-school font-size-16 align-middle text-primary me-1"></i>
                                            <span class="text-muted font-size-11">School</span> :
                                            <span class="fw-bold font-size-11">{{ user.education.school.name }}</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-muted">
                                            <i
                                                class="bx bxs-graduation font-size-16 align-middle text-primary me-1"></i>
                                            <span class="text-muted font-size-11">Course</span> :
                                            <span class="fw-bold font-size-11">{{ user.education.course.name }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" :style="{ height: (height-((user.hasOwnProperty('profile')) ? 251 : 64)) + 'px' }">
                        <div class="table-responsive" v-if="!user.hasOwnProperty('profile')">
                            <table class="table table-nowrap align-middle" v-if="users.length > 0">
                                <tbody>
                                    <tr v-for="list in users" v-bind:key="list.id">
                                        <td style="width: 50px;">
                                            <img :src="currentUrl+'/images/avatars/'+list.profile.avatar" alt="" class="rounded-circle avatar-xs">
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 m-0"><a @click="view(list)" class="text-dark">{{list.profile.lastname}}, {{list.profile.firstname}} {{list.profile.middlename}}</a></h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="justify-content-center" v-else>
                                <div class="col-xl-12">
                                    <center>
                                        <i class='bx bx-user-circle h1 text-secondary mt-5' style="font-size: 100px;"></i>
                                    </center>
                                    <p class="text-muted text-center font-size-12">No scholar found | Search now.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive" v-else>
                            <div v-if="user.enrollments.length > 0">
                                <table class="table table-nowrap align-mid table-hover mb-0">
                                    <tbody>
                                        <tr v-for="list in user.enrollments" v-bind:key="list.id">
                                            <td>
                                                <i @click="win(list.attachment.enrollments.file)"
                                                    class='bx bxs-file-pdf font-size-24 mt-1 me-n3'
                                                    style="cursor: pointer;"></i>
                                            </td>
                                            <td @click="fetchLists(list)" style="cursor: pointer;">
                                                <h5 class="text-truncate font-size-13 mb-0">
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        {{ list.academic_year }}
                                                        <span class="text-muted"> / </span>
                                                        <span class="text-info">{{ list.level }}</span>
                                                        <span class="text-muted"> / </span>
                                                        <span class="text-warning">{{ list.semester }}</span>
                                                    </a>
                                                </h5>
                                                <p class="text-muted mb-0 font-size-12">{{ list.created_at}}</p>
                                            </td>
                                            <td>
                                                <div v-if="list.is_clear == 1" class="font-size-22"><i
                                                        :class="[(list.is_locked == 0) ? 'bx bxs-check-circle' : 'bx bxs-lock-alt',(list.has_failing > 0) ? 'text-danger': 'text-success']"></i>
                                                </div>
                                                <div v-else class="font-size-22 text-info"><i
                                                        class="bx bxs-error-circle "></i></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="justify-content-center" v-else>
                                <div class="col-xl-12">
                                    <center><i @click="addNew" class='bx bxs-plus-circle h1 text-danger mt-5'
                                            style="cursor: pointer;"></i></center>
                                    <p class="text-muted text-center font-size-11">No enrollment record found.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top" style="padding: 12px;" v-if="user.hasOwnProperty('profile')">
                        <div class="col-md-12 d-grid mt-0">
                            <!-- :disabled="count != 0" -->
                            <button @click="addNew()" type="button" class="btn btn-light btn-sm btn-block">
                                <i class="text-muted bx bx-plus-circle"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <Prospectus v-if="show == 'prospectus'" ref="prospectus"/>
                    <Create v-else-if="show == 'create'" @status="message" :height="height" :user="user"
                    :dropdowns="dropdowns" ref="create" />
                    <Lists v-else-if="show == 'lists'" @status="message" :lists="lists" :selected="selected" :user="user.code" ref="lists" />
                    <Default v-else />
                </div>
            </div>
            <Course ref="course"/>
        </div>
    </div>
    <WindowPortal v-model="open" ref="open">
        <HelloWorld ref="viewpdf"/>
    </WindowPortal>
</template>
<script>
import WindowPortal from "@/Shared/Window/WindowPortal";
import HelloWorld from "@/Shared/Window/HelloWorld";
import Header from "@/Shared/Header.vue";
import Lists from "./Modules/Lists.vue";
import Create from "./Modules/Create.vue";
import Course from "./Modals/Course.vue";
import Default from "./Modules/Default.vue";
import Prospectus from "./Modules/Prospectus.vue";
export default {
    components: { Header, Course, Default, Prospectus, Create, Lists, WindowPortal, HelloWorld},
    inject: ['height'],
    props: ['dropdowns'],
    data() {
        return {
            currentUrl: window.location.origin,
            title: "Enrollments",
            items: [{
                    text: "Enrollment",
                    href: "/",
                },
                {
                    text: "Lists",
                    active: true,
                },
            ],
            keyword: '',
            users: [],
            user: {},
            lists: [],
            selected: {},
            show: 'default',
            open: false,
            attachment: '',
        };
    },
    watch: {
        keyword(newVal) {
            this.checkSearchStr(newVal)
        },
        datares: {
            deep: true,
            handler(val = null) {
                if(val != null && val !== ''){
                    this.message(val.data);
                }
            },
        },
    },

    computed: {
        datares() {
            return this.$page.props.flash.datares;
        },
    },

    methods: {
        checkSearchStr: _.debounce(function (string) {
            (this.keyword == '') ? this.users = [] : '';
            this.fetch();
        }, 300),

        fetch() {
            this.user = {};
            axios.get('/enrollments', {
                params: {
                    keyword: this.keyword,
                    search: true
                }
            })
            .then(response => {
                if (response) {
                    this.users = response.data.data;
                }
            })
            .catch(err => console.log(err));
        },

        
        fetchLists(list) {
            this.selected = list;
            axios.get(this.currentUrl + '/enrollments/' + list.id)
            .then(response => {
                this.lists = response.data.data;
                this.show = 'lists';
            })
            .catch(err => console.log(err));
        },

        view(data){
            this.user = data;
            if (this.user.education.subcourse == null) {
                 this.$refs.course.set(
                    this.user.id, 
                    this.user.profile, 
                    this.user.education.school, 
                    this.user.education.course);
                    this.show = 'course';
            }else{
                this.viewProspectus();
            }
            this.check();
        },

        viewProspectus(){
            this.show = 'prospectus';
            this.$nextTick(function () {
                this.$refs.prospectus.set(this.user.education.information)
            });
        },

        set(show) {
            this.show = show;
            if (show == 'prospectus') {
                this.$nextTick(function () {
                    this.$refs.prospectus.set(this.user.education.information)
                });
            } else {
                this.users = [];
                this.user = {};
                this.keyword = '';
            }
        },

        addNew(){
            this.show = 'create';
            this.$nextTick(function () {
                this.$refs.create.fetchSemesters(this.user.education.school.id, this.user.awarded_year);
            });
        },

        check() {
            if (this.user.enrollments.length > 0) {
                let count;
                count = this.user.enrollments.filter(x => x.is_locked === 0);
                this.count = count.length;
            }
        },

        message(list) {
            let index = '';
            switch(this.show){
                case 'course': 
                    this.user = list;
                    this.viewProspectus();
                break;
                case 'create':
                    index = this.user.enrollments.findIndex(u => u.id === list.id);
                    if (index >= 0) {
                        this.user.enrollments[index] = list;
                        this.check();
                    }else{
                        this.user.enrollments.unshift(list);
                        this.check();
                        this.fetchLists(list);
                    }
                break;
                default:
                    this.selected = list;
                    index = this.user.enrollments.findIndex(u => u.id === list.id);
                    this.user.enrollments[index] = list;
            }
        },

        win(attachment){
            this.open = true;
            this.attachment = attachment;
            this.$refs.open.set(attachment);
        }

    }
}
</script>
<style>
    .modal-header .close {
        display: none;
    }

</style>
