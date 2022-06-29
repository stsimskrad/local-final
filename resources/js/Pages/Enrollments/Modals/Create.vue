<template>
    <b-modal v-model="showModal" title="Enrollment" ok-title="Save" centered>
        <b-form class="customform mb-2">
            <div class="row">
                <div class="col-md-12">
                    <div v-if="Object.keys(errors).length === 0" role="alert" aria-live="polite" aria-atomic="true"
                        class="alert alert-success mt-2 mb-n1">
                        Are you sure you want to enroll the scholar?
                    </div>
                    <div v-else role="alert" aria-live="polite" aria-atomic="true"
                        class="alert alert-danger mt-2 mb-n1">
                        Please check the following fields.
                    </div>

                    <ul class="pl-4 mt-3 ">
                        <li class="py-0" v-for="(error,index) in errors" v-bind:key="index">{{ error }}</li>
                    </ul>


                    <div class="form-check" v-if="enrollments.lenght > 0">
                        <input class="form-check-input" type="checkbox" id="gridCheck" />
                        <label class="form-check-label" for="gridCheck">Do you want to update status?</label>
                    </div>
                    <div class="form-check" v-if="class_type == 'Private'">
                        <input class="form-check-input" type="checkbox" id="gridCheck" />
                        <label class="form-check-label" for="gridCheck">Do you want to add Tuition fee?</label>
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
        data() {
            return {
                currentUrl: window.location.origin,
                errors: [],
                value: '',
                enrollments: [],
                class_type: '',
                showModal: false,
                form: {}
            }
        },

        created() {
            this.enrollments = this.user.enrollments;
            this.class_type = this.user.education.school.class;
        },

        methods: {
            set(value) {
                this.value = value;
                this.showModal = true;
            },

            create() {
                this.$inertia.post('/enrollments', this.value, {
                    preserveScroll: true,
                    forceFormData: true,
                    onSuccess: (response) => {
                        this.showModal = false;
                    },
                    onError: () => {
                        this.errors = this.$page.props.errors;
                    }
                });
            },

            hide() {
                this.showModal = false;
                this.errors = [];
            }
        }
    }

</script>
