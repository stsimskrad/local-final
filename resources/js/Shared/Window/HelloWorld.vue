<template>
  <vue-pdf-embed :source="currentUrl+'/storage/'+attachment">
    <template slot="loading">
      loading content here...
    </template>
  </vue-pdf-embed>
</template>

<script>
import VuePdfEmbed from 'vue-pdf-embed'
export default {
  props: ['attachment'],
  components: {
    VuePdfEmbed
  },
  data(){
    return{
      currentUrl: window.location.origin,
    }
  }
}
</script>