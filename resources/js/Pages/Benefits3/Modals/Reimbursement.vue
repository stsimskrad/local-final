<template>
    <b-modal v-model="showModal" size="lg" title="Reimbursement" centered>
        <b-form class="customform mb-2">
            <div class="row">
                <div class="col-md-12">
                    <label>Scholar: <span v-if="errors.scholar_id" v-text="errors.scholar_id" class="haveerror"></span></label>
                    <multiselect v-model="scholar" id="ajax" label="name" track-by="id"
                        placeholder="Search Scholar" open-direction="bottom" :options="scholars"
                        :searchable="true" 
                        :allow-empty="false"
                        :show-labels="false"
                        @search-change="asyncScholar">
                    </multiselect> 
                </div>
                <div class="col-md-6 mt-1">
                    <label>Privilege: <span v-if="errors.benefit_id" v-text="errors.benefit_id" class="haveerror"></span></label>
                    <multiselect 
                        v-model="privilege" 
                        id="ajax" 
                        label="name" track-by="id"
                        placeholder="Search Privilige" 
                        open-direction="bottom" 
                        :options="list_privileges"
                        :searchable="true" 
                        :allow-empty="false"
                        :show-labels="false">
                    </multiselect> 
                </div>
                <div class="col-md-6 mt-1">
                    <div class="form-group">
                        <label>Amount: <span v-if="errors.amount" v-text="errors.amount" class="haveerror"></span></label>
                        <input type="text" class="form-control" v-model="amount">
                    </div>
                </div>
                <div class="col-md-6 mt-1">
                    <label>AY/Semester: <span v-if="errors.school_semester_id" v-text="errors.school_semester_id" class="haveerror"></span></label>
                    <multiselect 
                        v-model="semester" 
                        id="ajax"  track-by="id"
                        placeholder="Search Semester" 
                        open-direction="bottom" 
                        :options="semesters"
                        :searchable="true" 
                        :allow-empty="false"
                        :custom-label="nameWithLang"
                        :show-labels="false">
                    </multiselect> 
                </div>
                <div class="col-md-6 mt-1">
                    <label>Attachments:  <span v-if="errors.attachment" v-text="'Attachment is required'" class="haveerror"></span></label>
                    <input multiple type="file" @change="uploadFieldChange" class="form-control" style="width: 100%;" id="formFileSm"/>
                </div>
            </div>
        </b-form>
        <template v-slot:footer>
            <b-button @click="showModal = false" variant="secondary" block>Cancel</b-button>
            <b-button @click="create('ok')" variant="primary"  block>Save</b-button>
        </template>
    </b-modal>
</template>
<script>
import Multiselect from '@suadelabs/vue3-multiselect';
export default {
    components : { Multiselect },
    props: ['privileges'],
    data(){
        return {
            currentUrl: window.location.origin,
            errors: [],
            scholars: [],
            showModal: false,
            privilege: '',
            scholar: '',
            amount: 0,
            type: null,
            attachments: [],
            semesters: [],
            semester: '',
            form: {}
        }
    },

    computed:{
        list_privileges : function() {
            return this.privileges.filter(x => x.is_reimburseable == true && x.is_active == true);
        },
    },

    watch : {
        scholar(){
            this.semesters = this.scholar.semesters;
        },

        privilege(){
            this.amount = 0;
            switch(this.privilege.name){
                case 'Transportation Allowance': 
                    this.type = 'transpo';
                break;
                case 'Thesis Allowance': 
                    this.type = 'thesis';
                    this.amount = this.privilege.regular_amount;
                break;
                case 'Graduation Allowance': 
                    this.type = 'grad';
                    this.amount = this.privilege.regular_amount;
                break;
            }
        },
    },  

    methods : {
        set(){
            this.showModal = true;
        },

        nameWithLang ({ academic_year,semester }) {
            return `${academic_year} — ${semester.name}`
        },

        create() {
            let data = new FormData();
            if(this.attachments.length > 0){
                for (var i = this.attachments.length - 1; i >= 0; i--) {
                    data.append('files[]', this.attachments[i]);
                }
            }else{
                data.append('files[]', []);
            }
            data.append('scholar_id', (this.scholar.id != undefined) ? this.scholar.id : '');
            data.append('school_semester_id', (this.semester.id != undefined) ? this.semester.id : '');
            data.append('benefit_id', (this.privilege.id != undefined) ? this.privilege.id : '');
            data.append('amount', (this.amount != undefined) ? this.amount : '');

            this.$inertia.post('/reimbursements', data, {
                preserveScroll: true,
                forceFormData: true,
                onSuccess: (response) => {
                    this.showModal = false;
                    this.hide();
                },
                onError: () => {
                    this.errors = this.$page.props.errors;
                }
            });
        },

        asyncScholar(value) {
            if(value.length > 5){
                axios.post(this.currentUrl + '/lists/search/scholars', {
                    word: value,
                })
                .then(response => {
                    this.scholars = response.data.data;
                })
                .catch(err => console.log(err));
            }
        },

        uploadFieldChange(e) {
            e.preventDefault();
            var files = e.target.files || e.dataTransfer.files;

            if (!files.length)
                return;
            for (var i = files.length - 1; i >= 0; i--) {
                this.attachments.push(files[i]);
            }
        },

        hide(){
            this.attachments = [];
            this.scholar = '';
            this.semester = '';
            this.privilege = '';
            this.amount = '';
        }
    }
}
</script>