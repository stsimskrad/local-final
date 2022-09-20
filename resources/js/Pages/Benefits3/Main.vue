<template>
    <div>
        <Index :count="count" @status="set" :height="height" v-if="show == 'index'" ref="index"/>
        <Releasing  @status="back" :height="height" v-else-if="show == 'releasing'" ref="release"/>
        <Reimburse  @status="back" :height="height" v-else-if="show == 'reimburse'" ref="reimburse"/>
    </div>
</template>
<script>
    import Reimburse from './Modules/Reimburse.vue';
    import Releasing from './Modules/Releasing.vue';
    import Index from './Modules/Index.vue';
    export default {
        props: ['height','count'],
        components : {Releasing, Index, Reimburse },
        data(){
            return {
                show : 'index'
            }
        },
    
        methods : {
            type(data,selected){
                this.show = data;
                if(data == 'releasing'){
                    this.$nextTick(function () {
                        this.$refs.release.fetch(selected);
                    });
                }
                if(data == 'reimburse'){
                    this.$nextTick(function () {
                        this.$refs.reimburse.fetch();
                    });
                }
            },
    
            set(data){
                this.show = 'view';
                this.$nextTick(function () {
                    this.$refs.view.set(data);
                });
            },
    
            back(){
                this.show = 'index';
                this.$nextTick(function () {
                    this.$refs.index.fetch();
                });
            }
        }
    }
    </script>