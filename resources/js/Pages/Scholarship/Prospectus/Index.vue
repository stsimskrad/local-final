<template>
    <Head title="Prospectus" />

    <div class="card" :style="{ height: height2 + 'px' }" style="margin-bottom: -30px;">
        <div class="card-body">
            <div class="row"> 
                <div class="col-md-12" :style="{ height: (height2-50) + 'px' }" style="overflow: auto;">
                    <div class="table-responsive" :class="(index == 0) ? 'mt-0' : 'mt-3'" v-for="(year,index) in scholar.data.education.information.prospectus" v-bind:key="index">
                        <table class="table table-bordered mb-0"> 
                            <thead>
                                <tr class="text-light text-center font-weight-bold font-size-11 bg-dark">
                                    <th>
                                        {{ year.year_level }}
                                    </th>
                                </tr>
                            </thead>
                        </table>
                        <div class="row g-0">
                            <div :class="(semester.semester == 'Summer Class') ? 'col-md-12' : 'col-md-6'" v-for="(semester,index) in year.semesters" v-bind:key="index">
                                <table class="table table-bordered mb-0" v-if="semester.courses.length > 0"> 
                                    <thead>
                                        <tr class="text-dark text-center font-weight-bold font-size-11" style="background-color: #ededed;">
                                            <th colspan="3">
                                                {{ semester.semester }}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="font-size-11" v-for="(course,index) in semester.courses" v-bind:key="index">
                                            <td width="15%" class="text-center">{{course.code}}</td>
                                            <td width="70%" class="text-center text-muted">{{course.subject}}</td>
                                            <td class="text-center fw-bold" width="15%" v-if="!course.hasOwnProperty('grades')">
                                                {{ course.grade}}
                                            </td>
                                            <td class="text-center fw-bold" width="15%" v-else>
                                                <span :class="(grade > 3 || grade == 'F') ? 'text-danger' : 'text-dark'" v-for="(grade,index) in course.grades" v-bind:key="index">
                                                    <span class="text-muted" v-if="course.grades.length > 1 && index != 0"> / </span> {{grade}} 
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-12 mt-2">
                    <div class="float-end">
                        <i class='bx bxs-error-circle bx-tada text-danger font-size-12 me-1 mb-n1'></i><span class="text-muted font-size-11">Scholar has <span class="text-danger fw-bold">1</span> failing marks.</span>
                    </div>
                    <span class="text-muted font-size-11">Last Update: <span class="text-dark fw-bold">haha</span></span>
                </div> -->
            </div>
        </div>
    </div>
</template>
<script>
    import Header from "@/Shared/Header.vue";
    export default {
        components: { Header },
        inject:['height2'],
        props: ['scholar'],
        data(){
            return {
                pros: {},
            }
        },
    }

</script>
