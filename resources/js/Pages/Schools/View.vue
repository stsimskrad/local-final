<template>
    <Header :title="school.data.name" :content="'School Profile'" :items="items" />
    
    <div class="card mt-n3 mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-7">
                    <div class="media">
                        <div class="me-3">
                            <img src="/images/avatars/school.jpg" alt="" class="avatar-sm rounded-circle img-thumbnail">
                        </div>
                        <div class="media-body align-self-center">
                            <div class="text-muted">
                                <h5 class="text-primary mb-0">{{ school.data.name }}</h5>
                                <p class="mb-0">{{school.data.address}}, {{school.data.municipality.name}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="text-lg-center mt-4 mt-lg-0">
                        <div class="row">
                            <div class="col-6">
                                <div>
                                    <p class="text-muted text-truncate mb-2">Ongoing Scholars</p>
                                    <h5 class="mb-0">48</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <p class="text-muted text-truncate mb-2">Graduated Scholars</p>
                                    <h5 class="mb-0">40</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body mb-n3">
                    <div class="float-end">
                        <div class="input-group input-group-sm mt-n1">
                            <b-form-input style="width: 100px;" for="text" v-model="year"></b-form-input>
                            <label class="input-group-text">Year</label>
                        </div>
                    </div>
                    <p class="text-muted fw-bold">Semesters</p>
                </div>
                <div class="card-body border-top">

                    <div class="mt-2">
                        <div class="table-responsive w-100">
                            <SimpleBar :style="{ height: (height - 250) + 'px' }">
                                <table class="table table-nowrap table-centered table-hover mb-0">
                                    <tbody>
                                        <tr v-for="semester in school.data.semesters" v-bind:key="semester.id">
                                            <td>
                                                <h5 class="text-truncate font-size-13 mb-0">
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        {{ semester.academic_year }} 
                                                        <span class="text-muted"> / </span> 
                                                        <span class="text-info"> {{ semester.semester.name }}</span>
                                                    </a>
                                                </h5>
                                                <p class="text-muted mb-0 font-size-12">{{ semester.start_at}} - {{ semester.end_at}}</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </SimpleBar>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top d-grid" style="margin-bottom: -18px;">
                        <button type="button" @click="newSemester" class="btn btn-block btn-light btn-sm waves-effect waves-light">Add Semester</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body mb-n3">
                    <div class="mb-3 float-end">
                        <ul class="mb-0">
                            <li class="list-inline-item d-non d-sm-inline-block mr-4">     
                                <i class='bx bxs-notepad text-success'></i> <span class="text-muted font-size-11">With Prospectus</span>
                            </li>
                            <li class="list-inline-item d-non d-sm-inline-block mr-4">     
                                <i class='bx bxs-notepad text-danger'></i> <span class="text-muted font-size-11">No Prospectus</span>
                            </li>
                        </ul>
                    </div>
                    <p class="text-muted fw-bold">Courses</p>
                </div>
                <div class="card-body border-top">

                    <div class="mt-2">
                        <div class="table-responsive w-100">
                            <SimpleBar :style="{ height: (height - 250) + 'px' }">
                                <table class="table table-nowrap table-centered table-hover mb-0">
                                    <tbody>
                                        <tr v-for="course in school.data.courses" v-bind:key="course.id" @click="viewProspectus(course)" style="cursor: pointer;">
                                            <td>
                                                <h5 class="text-truncate font-size-12 mb-0"><a href="#" class="text-dark">{{(course.type == 'N/a') ? course.course : course.type}}</a></h5>
                                                <p class="text-muted font-size-11 mb-0" v-if="course.type != 'N/a'">{{course.course}}</p>
                                            </td>
                                            <td class="text-end" style="width: 90px;">
                                                <i class="bx bxs-notepad h5 mr-3 mt-1" :class="[(course.prospectus == null) ? 'text-danger' : 'text-success']"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </SimpleBar>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top d-grid" style="margin-bottom: -18px;">
                        <button type="button" @click="newCourse" class="btn btn-block btn-light btn-sm waves-effect waves-light">Add Course</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body mb-n3">
                    <div class="mb-3 float-end">
                        <ul class="mb-0">
                            <li class="list-inline-item d-non d-sm-inline-block mr-4">     
                                <i class='bx bxs-circle text-success'></i> <span class="text-muted font-size-11">Activated</span>
                            </li>
                            <li class="list-inline-item d-non d-sm-inline-block mr-4">     
                                <i class='bx bxs-circle text-danger'></i> <span class="text-muted font-size-11">Not Activated</span>
                            </li>
                        </ul>
                    </div>
                    <p class="text-muted fw-bold">Prospectus</p>
                </div>
                <div class="card-body border-top">
                    <div class="mt-2">
                        <div class="table-responsive w-100">
                            <SimpleBar :style="{ height: (height - 250) + 'px' }">
                                <div class="text-center mb-3">
                                    <h5 class="text-truncate text-primary font-size-13 mb-0"><span class="text-dark">{{(course.type == 'N/a') ? course.course : course.type}}</span></h5>
                                    <p class="text-muted font-size-11 mb-0" v-if="course.type != 'N/a'">{{course.course}}</p>
                                </div>
                                <table class="table table-nowrap table-centered table-hover mb-0">
                                    <tbody>
                                        <tr v-for="prospectus in prospectuses" v-bind:key="prospectus.id" style="cursor: pointer;" @click="openProspectus(prospectus,course)">
                                            <td>
                                                <i class="bx bxs-circle" :class="[(prospectus.is_completed == 0) ? 'text-warning' : 'text-info']"></i>
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-12 mb-0">Effective School Year {{prospectus.school_year}}</h5>
                                            </td>
                                            <td class="text-right" style="width: 90px;">
                                                <span class="badge badge-bg badge-success" v-if="prospectus.is_active == 1">Active</span>
                                                <span class="badge badge-bg badge-danger"  v-else>Inactive</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div v-if="prospectuses.length == 0 && course == ''" class="col-md-10 mx-auto mt-5"> 
                                    <br>
                                    <div class="justify-content-center">
                                        <div class="col-xl-12">
                                            <p class="text-muted text-center font-size-12 mt-4">Please click to choose on the list of courses.</p>
                                        </div>
                                        <center>
                                        <i class='text-muted bx bxs-left-arrow-circle h1'></i>
                                        </center>
                                    </div>
                                </div>
                            </SimpleBar>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top d-grid" style="margin-bottom: -18px;">
                        <button type="button" @click="newProspectus" class="btn btn-block btn-light btn-sm waves-effect waves-light">Add Prospectus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <Course ref="course"/>
    <Prospectus :type="school.data.term.name" ref="prospectus"/>
    <Semester :type="school.data.term.name" :semesters="semesters" ref="semester"/>
    <ViewProspectus :height="height" ref="viewprospectus"/>
</template>

<script>
import Course from './Modals/Course.vue';
import Semester from './Modals/Semester.vue';
import Prospectus from './Modals/Prospectus.vue';
import ViewProspectus from './Modals/ViewProspectus.vue';
import { SimpleBar } from 'simplebar-vue3';
import Header from "@/Shared/Header.vue";
import Pagination from "@/Shared/Pagination.vue";
import _ from 'lodash';

export default {
    props: ['school','dropdowns'],
    components : { Header, Pagination, SimpleBar, Course, Semester, Prospectus, ViewProspectus },
    inject:['count', 'height'],
    data() {
        return {
            currentUrl: window.location.origin,
            title: "School Profile",
            items: [
                {text: "School", href: "/",},
                {text: "Profile",active: true,},
            ],
            prospectuses: [],
            course: [],
            year: new Date().getFullYear(),
            editable : false
        };
    },

    computed : {
        semesters : function() {
            return this.dropdowns.filter(x => x.type === 'term');
        }
    },

    methods: {
        newCourse(){
            this.editable = 'newcourse';
            this.$refs.course.set(this.school);
        },

        newSemester(){
            this.editable = 'newsemester';
            this.$refs.semester.set(this.school.data.id);
        },

        newProspectus(){
            this.editable = 'newprospectus';
            let course = this.course;
            this.$refs.prospectus.set(course);
        },

        viewProspectus(course){
            this.course = course;
            this.prospectuses = course.prospectuses;
        },

        openProspectus(prospectus,course){
            this.$refs.viewprospectus.set(prospectus,course);
        },

        set(prospectus){
            this.prospectuses.unshift(prospectus);
        }
    }
   
}
</script>