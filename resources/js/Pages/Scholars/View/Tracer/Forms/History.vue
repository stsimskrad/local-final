<template>
    <b-modal v-model="showModal" @ok="create()" size="lg" ok-title="Save" title="History" no-close-on-backdrop centered>
        <b-form class="customform mb-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Company: <span v-if="form.errors" v-text="form.errors.company" class="haveerror"></span></label>
                        <input type="text" class="form-control"  v-model="history.company" style="text-transform: capitalize;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Address: <span v-if="form.errors" v-text="form.errors.address" class="haveerror"></span></label>
                        <input type="text" class="form-control"  v-model="history.address" style="text-transform: capitalize;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Position: <span v-if="form.errors" v-text="form.errors.position" class="haveerror"></span></label>
                        <input type="text" class="form-control"  v-model="history.position" style="text-transform: capitalize;">
                    </div>
                </div>
                <div class="col-md-6">
                    <label>Start At: <span v-if="form.errors" v-text="form.errors.start_at" class="haveerror"></span></label>
                    <date-picker
                        v-model:value="history.period1" format="YYYY-MM-DD"
                        lang="en" placeholder="Select Month"
                    ></date-picker>
                </div>
                <div class="col-md-6">
                    <label>End At: <span v-if="form.errors" v-text="form.errors.end_at" class="haveerror"></span></label>
                    <date-picker
                        v-model:value="history.period2" format="YYYY-MM-DD"
                        lang="en" placeholder="Select Date"
                    ></date-picker>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="alert alert-warning alert-dismissible fade show align-middle" role="alert">
                        <b-form-checkbox v-model="history.job" unchecked-value="not_accepted" checked plain style="font-size: 15px;">
                            Is Job Related To Undergraduate Academic Training?
                        </b-form-checkbox>
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
    import DatePicker from 'vue-datepicker-next';
    import 'vue-datepicker-next/index.css';
    export default {
        components : {DatePicker},
        props: ['user'],
        data(){
            return {
                currentUrl: window.location.origin,
                errors: [],
                history : {
                    id: '',
                    company: '',
                    address: '',
                    position: '',
                    period1: '',
                    period2: '',
                    job: false,
                },
                editable: false,
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
                    id: this.history.id,
                    company: this.history.company,
                    address: this.history.address,
                    position: this.history.position,
                    start_at: (this.history.period1 != '') ? new Date(this.history.period1).toLocaleDateString("af-ZA") : '',
                    end_at: (this.history.period2 != '') ? new Date(this.history.period2).toLocaleDateString("af-ZA") : '',
                    job: this.history.job,
                    type: 'History',
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


