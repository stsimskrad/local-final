<template>
    <b-modal v-model="showModal" @ok="create($event)" id="semester" ok-title="Confirm"  title="Add Semester" no-close-on-backdrop  centered>
        <b-form class="customform mb-2">
            <div class="row">
                <div class="col-md-6">
                    <label>Year From: {{ type }}
                        <span v-if="form.errors" v-text="form.errors.academic_year" class="haveerror"></span>
                    </label>
                    <date-picker
                        v-model:value="semester.from"
                        type="year" format="YYYY"
                        lang="en"
                        placeholder="Select Year"
                        :clearable="false"
                        >
                    </date-picker>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                        <label>Academic Year:</label>
                        <input type="text" class="form-control" v-model="academic_year" readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <label>Semester: <span v-if="form.errors" v-text="form.errors.semester_id" class="haveerror"></span></label>
                    <multiselect v-model="semester.semester" id="ajax" label="name" track-by="id"
                        placeholder="Select Semester" open-direction="bottom" :options="semester_lists"
                        :allow-empty="false"
                        :show-labels="false">
                    </multiselect> 
                </div>
                <div class="col-md-6">
                    <label>Start At: <span v-if="form.errors" v-text="form.errors.start_at" class="haveerror"></span></label>
                    <date-picker
                        v-model:value="semester.start"
                        type="month" format="YYYY-MM-DD"
                        lang="en"
                        placeholder="Select Month"
                        >
                    </date-picker>
                </div>
                <div class="col-md-6">
                    <label>End At: <span v-if="form.errors" v-text="form.errors.end_at" class="haveerror"></span></label>
                    <date-picker
                        v-model:value="semester.end"
                        type="month" format="YYYY-MM-DD"
                        lang="en"
                        placeholder="Select Month"
                        >
                    </date-picker>
                </div>
            </div>
        </b-form>   
        <template v-slot:footer>
            <b-button @click="hide()" variant="secondary" block>Cancel</b-button>
            <b-button @click="create('ok')" variant="primary" :disabled="form.processing" block>Save</b-button>
        </template>
    </b-modal>
</template>
<script>
import DatePicker from 'vue-datepicker-next';
import 'vue-datepicker-next/index.css';
import Multiselect from '@suadelabs/vue3-multiselect';
export default {
    components : { DatePicker, Multiselect },
    props: ['semesters','type'],
    data(){
        return {
            showModal: false,
            semester: {
                from: '',
                to: '',
                start: '',
                end: '',
                semester: {}
            },
            id: '',
            form: {},
            editable: false,
        }
    },

    computed : {
        academic_year : function(){
            if(this.semester.from != ''){
                return new Date(this.semester.from).getFullYear()+'-'+ (Number(new Date(this.semester.from).getFullYear())+1);
            }else{
                return '';
            }
        },
        semester_lists : function() {
            return this.semesters.filter(x => x.classification === this.type);
        },
    },

    methods : {
        set(id) {
            this.id = id;
            this.showModal = true;
        },

        create(){
            this.form = this.$inertia.form({
                school_id: this.id,
                academic_year: (this.semester.from) ? this.academic_year : '',
                start_at: (this.semester.start != '') ? new Date(this.semester.start).toLocaleDateString("af-ZA") : '',
                end_at: (this.semester.start != '') ? new Date(this.semester.end).toLocaleDateString("af-ZA"): '',
                semester_id: this.semester.semester.id,
                editable: false,
                option: 'semester'
            })

            this.form.post('/schools',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.hide();
                },
            });
        },

        hide(){
            (this.form.hasOwnProperty('reset') ) ? this.form.reset().clearErrors() : this.semester = {};
            this.showModal = false;
        },
    }
}
</script>
<style>.modal-header .btn-close {display: none;}</style>
