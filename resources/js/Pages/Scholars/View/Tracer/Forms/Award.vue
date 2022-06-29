<template>
    <b-modal v-model="showModal" @ok="create()" size="lg" title="Award" ok-title="Save"  centered>
        <b-form class="customform mb-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Title of Award: <span v-if="errors.award" class="haveerror">({{ errors.award[0] }})</span></label>
                        <input type="text" class="form-control"  v-model="award.award" style="text-transform: capitalize;">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Awarding Body: <span v-if="errors.body" class="haveerror">({{ errors.body[0] }})</span></label>
                        <input type="text" class="form-control"  v-model="award.body" style="text-transform: capitalize;">
                    </div>
                </div> 
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Date: <span v-if="errors.given" class="haveerror">({{ errors.given[0] }})</span></label>
                        <input type="date" class="form-control" v-model="award.given" style="text-transform: capitalize;">
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
                award : {
                    id: '',
                    award: '',
                    body: '',
                    given: ''
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
                    id: this.award.id,
                    award: this.award.award,
                    body: this.award.body,
                    given: this.award.given,
                    type: 'Award',
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
                this.award = {};
                this.showModal = false;
            },
        }
    }
</script>


