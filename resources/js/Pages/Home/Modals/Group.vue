<template>
    <b-modal v-model="showModal" @ok="create" title="Group" no-close-on-backdrop centered>
        <b-form class="customform">
            <div class="row p-2">
                <div class="col-md-12">
                    <label>Year From: <span v-if="errors.from" class="haveerror">({{ errors.from[0] }})</span></label>
                    <date-picker
                        v-model:value="from"
                        type="year" format="YYYY"
                        lang="en"
                        placeholder="Select Year"
                        :clearable="false"
                        >
                    </date-picker>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                        <label>Academic Year: <span v-if="errors.academic_year" class="haveerror">({{( errors.academic_year[0] )}})</span></label>
                        <input type="text" class="form-control" v-model="academic_year" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>Semester: <span v-if="errors.semester_id" class="haveerror">({{( errors.semester_id[0] )}})</span></label>
                    <multiselect v-model="semester" id="ajax" label="name" track-by="id"
                        placeholder="Select Semester" open-direction="bottom" :options="semesters"
                        :allow-empty="false"
                        :show-labels="false">
                    </multiselect> 
                </div>
                <div class="col-md-12 mt-4">
                    <b-form-checkbox v-model="is_regular" unchecked-value="not_accepted" checked plain style="font-size: 15px;">
                        Check if academic year is a summer class?
                    </b-form-checkbox>
                        <b-form-checkbox v-model="is_active" unchecked-value="not_accepted" checked plain style="font-size: 15px;">
                        Mark as active academic year?
                    </b-form-checkbox>
                </div>
            </div>
        </b-form>
    </b-modal>
</template>

<script>
    import DatePicker from "vue-datepicker-next";
    import 'vue-datepicker-next/index.css';
    import Multiselect from '@suadelabs/vue3-multiselect';
    export default {
        components : {DatePicker, Multiselect},
        props: ['dropdowns'],
        data() {
            return {
                currentUrl: window.location.origin,
                errors: [],
                is_regular: false,
                is_active: true,
                from: '',
                semester: '',
                showModal: false,
                form : {}
            }
        },
        computed: {
            semesters : function() {
                return this.dropdowns.filter(x => x.classification === 'Semester');
            },
            academic_year : function(){
                if(this.from != ''){
                    return new Date(this.from).getFullYear()+'-'+ (Number(new Date(this.from).getFullYear())+1);
                }else{
                    return '';
                }
            }
        },

        methods: {
            set(){
                this.showModal = true;
            },

            create(){

                this.form = this.$inertia.form({
                    academic_year: (this.from) ? this.academic_year : '',
                    semester_id: this.semester.id,
                    is_regular: this.is_regular,
                    is_active: this.is_active,
                    editable: false
                }),

                this.form.put('/benefits2/update',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.$emit('status', true);
                    }
                });


                // axios.post(this.currentUrl + '/request/benefit/storegroup',{
                //     academic_year: (this.from) ? this.academic_year : '',
                //     semester_id: this.semester.id,
                //     is_regular: this.is_regular,
                //     is_active: this.is_active,
                //     editable: false
                // })
                // .then(response => {
                //     this.$emit('status', response.data);
                //     this.semester_id = '';
                //     this.is_regular = '';
                //     this.is_active = '';
                //     this.showModal = false;
                // })
                // .catch(error => {
                //     if (error.response.status == 422) {
                //         this.errors = error.response.data.errors;
                //     }
                // });
            },
        }
    }

</script>
