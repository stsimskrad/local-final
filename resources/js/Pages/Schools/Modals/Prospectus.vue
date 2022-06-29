<template>
    <b-modal @ok="create($event)" v-model="showModal" ok-title="Confirm" title="Add Prospectus" centered>
        <b-form class="customform mb-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>School Year: <span v-if="form.errors" v-text="form.errors.school_year" class="haveerror"></span></label>
                        <input type="text" class="form-control" v-model="schoolyear">
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
export default {
    data(){
        return {
            showModal: false,
            schoolyear: '',
            course: '',
            editable: false,
            form: {}
        }
    },

    methods : {
        set(data) {
            this.showModal = true;
            this.course = data;
        },

        create(){
            this.form = this.$inertia.form({
                school_year: this.schoolyear,
                school_course_id : this.course.id,
                years : this.course.years,
                editable: false,
                option: 'prospectus'
            })
            this.form.post('/schools',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.hide();
                    this.$parent.set(response.props.flash.datares);
                }
            });
        },

        hide(){
            (this.form.hasOwnProperty('reset') ) ? this.form.reset().clearErrors() : this.schoolyear = {};
            this.showModal = false;
        },
    }
}
</script>
<style>.modal-header .btn-close {display: none;}</style>
