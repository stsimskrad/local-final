<template>
    <b-modal v-model="showModal" @ok="create($event)" ok-title="Confirm" title="Add Course" no-close-on-backdrop centered>
        <b-form class="customform mb-2">
            <div class="row">
                <div class="col-md-12">
                    <label>Course: <span v-if="form.errors" v-text="form.errors.course_id" class="haveerror"></span></label>
                    <multiselect v-model="list.course" id="ajax" label="name" track-by="id"
                        placeholder="Search Course" open-direction="bottom" :options="courses"
                        :searchable="true" 
                        :allow-empty="false"
                        :show-labels="false"
                        @search-change="asyncCourse">
                    </multiselect> 
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Type: <span v-if="form.errors" v-text="form.errors.type" class="haveerror"></span></label>
                        <input type="text" class="form-control" v-model="list.type" style="text-transform: capitalize;">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Years: <span v-if="form.errors" v-text="form.errors.years" class="haveerror"></span></label>
                        <input type="text" class="form-control" v-model="list.years" style="text-transform: capitalize;">
                    </div>
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
import Multiselect from '@suadelabs/vue3-multiselect';
export default {
    components : { Multiselect },
    data(){
        return {
            currentUrl: window.location.origin,
            showModal: false,
            courses: [],
            list: {
                course: '',
                type: '',
                years:'',
            },
            school: {},
            form: {},
            editable: false
        }
    },

    methods : {
        set(data) {
            this.school = data;
            this.showModal = true;
        },

        asyncCourse(value) {
            if(value.length > 5){
                axios.post(this.currentUrl + '/lists/search/courses', {
                    word: value,
                })
                .then(response => {
                    this.courses = response.data.data;
                })
                .catch(err => console.log(err));
            }
        },

        create(){
            this.form = this.$inertia.form({
                school_id: this.school.data.id,
                course_id: (this.list.course.id != undefined) ? this.list.course.id : '',
                type:  (this.list.type == '') ? 'n/a'  : this.list.type,
                years: this.list.years,
                editable: false,
                option: 'course'
            })

            this.form.put('/schools/update',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.hide();
                }
            });
        },

        hide(){
           (this.form.hasOwnProperty('reset') ) ? this.form.reset().clearErrors() : this.list = {};
            this.showModal = false;
        },
    }
}
</script>
<style>.modal-header .btn-close {display: none;}</style>