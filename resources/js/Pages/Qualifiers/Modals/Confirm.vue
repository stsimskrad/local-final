<template>
    <b-modal v-model="showModal" @ok="submit($event)" id="add" ok-title="Confirm" title="Mark as Scholar" centered>
        <blockquote class="p-3 border-light border rounded">
            <div class="d-flex">
                <div class="mr-3"><i class="bx bxs-quote-alt-left text-primary font-size-14"></i></div>
                <div>
                    <p class="mb-1 fw-bold" v-bind:class="[(user.gender == 0? 'text-danger' : 'text-primary')]">{{ user.name }} <span class="text-muted font-size-11 ml-2">({{user.program.name}})</span> </p>
                </div>
            </div>
            <div class="row font-size-11 mt-0">
                <div class="col-sm-12">
                    <p class="fw-bold text-danger mb-0">{{user.address.name}}</p>
                </div>
            </div>
        </blockquote>
    </b-modal>
</template>
<script>
    import Multiselect from '@suadelabs/vue3-multiselect';
    export default {
        // hide: ['dropdowns','regions'],
        components : { Multiselect },
        data(){
            return {
                currentUrl: window.location.origin,
                errors: [],
                user: {program: {}, address: {}},
                showModal: false
            }
        },
        methods : {
            set(data){
                this.user = data;
                this.showModal = true;
            },

            submit(){

                this.form = this.$inertia.form({
                    id: this.user.id,
                    spas_id: this.user.spas_id,
                    profile_id: this.user.profile.id,
                    email: this.user.profile.email,
                    program_id: this.user.program.id,
                    is_undergrad: this.user.is_undergrad,
                    status_id : 30,
                    is_completed: 0,
                    awarded_year: new Date().getFullYear(),
                    editable: 'qualifier'
                })

                this.form.post('/scholars',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.showModal = false;
                    }
                });

                // axios.post(this.currentUrl + '/request/scholar/store', {
                //     id: this.user.id,
                //     spas_id: this.user.spas_id,
                //     profile_id: this.user.profile.id,
                //     email: this.user.profile.email,
                //     program_id: this.user.program.id,
                //     is_undergrad: this.user.is_undergrad,
                //     status_id : 30,
                //     is_completed: 0,
                //     awarded_year: new Date().getFullYear(),
                //     editable: 'qualifier'
                // })
                // .then(response => {
                //     this.$emit('status', this.user);
                //     this.$bvModal.hide("add");
                // })
                // .catch(error => {
                //     if (error.response.status == 422) {
                //         this.errors = error.response.data.errors;
                //          this.isLoading = false;
                //     }
                // });
            },
        }
    }
</script>





