<template>
    <b-modal v-model="showModal" @ok="create()" size="lg" ok-title="Save" title="Research" centered>
        <b-form class="customform mb-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Title of Research: <span v-if="form.errors" v-text="form.errors.research" class="haveerror"></span></label>
                        <input type="text" class="form-control"  v-model="research.research" style="text-transform: capitalize;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Source of fund: <span v-if="form.errors" v-text="form.errors.fund" class="haveerror"></span></label>
                        <input type="text" class="form-control"  v-model="research.fund" style="text-transform: capitalize;">
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nature of Involvement: <span v-if="form.errors" v-text="form.errors.involvement" class="haveerror"></span></label>
                        <input type="text" class="form-control" v-model="research.involvement" style="text-transform: capitalize;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Duration: <span v-if="form.errors" v-text="form.errors.duration" class="haveerror"></span></label>
                        <input type="text" class="form-control" v-model="research.duration">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Location: <span v-if="errors.location" class="haveerror">({{ errors.location[0] }})</span></label>
                        <input type="text" class="form-control"  v-model="research.location" style="text-transform: capitalize;">
                    </div>
                </div> 
            </div>
        </b-form>
    </b-modal>
</template>

<script>
    export default {
        props: ['user'],
        data(){
            return {
                currentUrl: window.location.origin,
                errors: [],
                research: {
                    id: '',
                    research: '',
                    involvement: '',
                    duration: '',
                    fund: '',
                    location: ''
                },
                showModal: false,
                editable: false,
                form: {}
            }
        },

        methods : {
            set(){
                this.showModal = true;
            },

            create(){
                this.form = this.$inertia.form({
                    id: this.research.id,
                    research: this.research.research,
                    fund: this.research.fund,
                    involvement: this.research.involvement,
                    duration: this.research.duration,
                    location: this.research.location,
                    type: 'Research',
                    user: this.user,
                    editable: this.editable
                })
                this.form.post('/scholar/tracer/store',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.hide();
                    }
                });
            },

            hide(){
                this.history = {};
                this.showModal = false;
            },
        }
    }
</script>


