<template>
    <div>
        <Index :count="count" @status="set" :height="height" v-if="show == 'index'" ref="index"/>
        <Releasing  @status="back" :height="height" v-else-if="show == 'releasing'" ref="release"/>
    </div>
</template>
<script>
    import Releasing from './Modules/Releasing.vue';
    import Index from './Modules/Index.vue';
    export default {
        props: ['height','count'],
        components : {Releasing, Index },
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