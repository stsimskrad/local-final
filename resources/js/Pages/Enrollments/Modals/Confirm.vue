<template>
    <b-modal v-model="showModal" hide-footer title="Lock Enrollment" centered>
        <form @submit.prevent="save" class="customform">
            <div class="row mb-2">
                <div class="col-md-12 mt-3">
                    <div role="alert" aria-live="polite" aria-atomic="true" class="alert alert-info">
                        <p class="text-center"> Are you sure? You won't be able to update the grades anymore! </p>
                        <hr>
                        <p class="text-center fs-11 text-muted">Please type "CONFIRM" to continue</p>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control text-center" v-model="confirm">
                    </div>
                </div>
                <div class="col-md-12 d-inline-block mt-3 d-grid">
                    <button type="submit" class="btn btn-info btn-block float-end waves-effect waves-light mb-2"
                        :disabled="(confirm == 'CONFIRM') ? false : true">LOCK NOW</button>
                </div>
            </div>
        </form>
    </b-modal>
</template>

<script>
    export default {
        props: ['lists'],
        data() {
            return {
                currentUrl: window.location.origin,
                confirm: '',
                id: '',
                showModal: false
            }
        },

        methods: {
            set(id){
                this.id = id;
                this.showModal = true;
            },
            
            save(){
                this.form = this.$inertia.form({
                    id: this.id,
                    is_locked: true,
                    editable: true,
                    lists: this.lists
                })

                this.form.post('/grade/store',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.showModal = false;
                    }
                });
            }
        }
    }
</script>

<style>
    .modal-header .close {
        display: none;
    }

</style>
