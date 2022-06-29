<template>
    <b-modal v-model="showModal" @ok="create()" size="lg" title="Affliation" ok-title="Save" centered>
        <b-form class="customform mb-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Organization: <span v-if="form.errors" v-text="form.errors.organization" class="haveerror"></span></label>
                        <input type="text" class="form-control"  v-model="affliation.organization" style="text-transform: capitalize;">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Address: <span v-if="form.errors" v-text="form.errors.address" class="haveerror"></span></label>
                        <input type="text" class="form-control"  v-model="affliation.address" style="text-transform: capitalize;">
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Position: <span v-if="form.errors" v-text="form.errors.position" class="haveerror"></span></label>
                        <input type="text" class="form-control" v-model="affliation.position" style="text-transform: capitalize;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Duration: <span v-if="form.errors" v-text="form.errors.duration" class="haveerror"></span></label>
                        <input type="text" class="form-control" v-model="affliation.duration" style="text-transform: capitalize;">
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
        props: ['user'],
        data(){
            return {
                currentUrl: window.location.origin,
                errors: [],
                affliation: {
                    id: '',
                    organization: '',
                    address: '',
                    position: '',
                    duration: ''
                },
                showModal: false,
                form: {}
            }
        },

        methods : {  
            set(){
                this.showModal = true;
            },
            
            create(){
                 this.form = this.$inertia.form({
                    id: this.affliation.id,
                    organization: this.affliation.organization,
                    address: this.affliation.address,
                    position: this.affliation.position,
                    duration: this.affliation.duration,
                    type: 'Affliation',
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
                this.affliation = {};
                this.showModal = false;
            },
        }
    }
</script>


