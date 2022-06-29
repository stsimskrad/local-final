<template>
    <b-modal v-model="showModal" size="xl" title="Province" hide-footer centered>
        <b-form class="customform mb-2">
            <div class="row p-2">
                <div class="col-md-12">
                    <h6>{{ province.province.name }} - <span class="text-success"> {{ province.total }} Scholars</span></h6>
                    <div class="table-responsive mt-1">
                    </div>
                </div>
            </div>
        </b-form>
    </b-modal>
</template>

<script>
    export default {
        data() {
            return {
                currentUrl: window.location.origin,
                province: { province: {}},
                showModal: false
            }
        },

        methods: {
            set(province){
                this.province = province;
                this.showModal = true;
            }
        }
    }

</script>
