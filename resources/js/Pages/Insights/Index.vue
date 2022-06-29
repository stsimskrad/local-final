<template>
    <Header :title="title" :content="title" :items="items" />
    <div class="row g-3" style="margin-top: -33px;">
        <div class="col-xl-8">
            <Count :lists="lists"/>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body" style="height: 137px;">
                    s
                </div>
            </div>
        </div>

        <div class="col-xl-8 mt-n2">
            <div class="card">
                <div class="card-body" style="height: 440px;">
                    <Lists data-simplebar style="height: 400px; overflow-y: auto; overflow-x: hidden;"/>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mt-n2">
           <div class="card">
                <Statuses :statuses="statuses" :total="total"/>
            </div>
        </div>
        <div class="col-xl-12 mt-n2">
            <div class="card">
                <div class="card-body">
                    <Year />
                </div>
            </div>
        </div>
        <div class="col-xl-4 mt-n2">
            <div class="card">
                <School :schools="schools" :total="total"/>
            </div>
        </div>
        <div class="col-xl-4 mt-n2">
            <div class="card">
                <Course :courses="courses" :total="total"/>
            </div>
        </div>
        <div class="col-xl-4 mt-n2">
            <div class="card">
                <Gender :gender="gender" :school="school"/>
            </div>
        </div>
    </div>
</template>
<script>
import Header from "@/Shared/Header.vue";
import Count from "./Sections/Count.vue";
import Program from "./Sections/Program.vue";
import Year from "./Sections/Year.vue";
import Lists from "./Sections/Lists.vue";
import School from "./Sections/School.vue";
import Course from "./Sections/Course.vue";
import Gender from "./Sections/Gender.vue";
import Statuses from "./Sections/Status.vue";
export default {
    components: { Header, Count, Program, Year, School, Course, Gender, Statuses, Lists },
    props: ['dropdowns'],
    data() {
        return {
            currentUrl: window.location.origin,
            title: "Insights",
            items: [{text: "Insights", href: "/",},{text: "Lists",active: true,},],
            lists: {},
            schools: [],
            courses: [],
            statuses: [],
            years: [],
            gender: [],
            school: [],
            total: '',
            types: { lists : []},
            colors : ['bg-primary','bg-danger','bg-success','bg-warning','bg-info','bg-seconday'],
            series: [],
            chartOptions: {
                chart: {
                    type: 'pie',
                    height: 100,
                },
                labels: ['Male', 'Female'],
                colors: ['#556ee6', '#34c38f'],
                legend: {
                    show: false,
                }
            }
        };
    },

    created() {
        this.fetch();
    },

    computed : {
        main(){
            return this.lists.filter(car => car.is_sub == 0);
        }
    },

    methods: {
        fetch() {
            axios.get(this.currentUrl + '/insights',{
                params : {
                    search : 'lists'
                }
            })
            .then(response => {
                this.lists = response.data.lists.graphs;
                this.schools = response.data.lists.schools;
                this.courses = response.data.lists.courses;
                this.statuses = response.data.lists.statuses;
                this.gender = response.data.counts.gender;
                this.school = response.data.counts.school;
                this.total = response.data.counts.total;
            })
            .catch(err => console.log(err));
        }
    }
}
</script>
