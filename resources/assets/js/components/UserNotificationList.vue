<template>
   <li>
      <a @click="makeRead">                    
      <div class="">
          <span class="font-size">{{ unread.data.header }}</span>
          <span class="font12">{{ unread.data.body1 }}</span>
          <span class="font12">{{ unread.data.body2 }}</span>
      </div>
      <div class="clearfix"></div>
     </a>
  </li>      
</template>

<script>
    export default {
        props:['unread'],
        data(){
            return {
                unreadid : this.unread.data.id
            }
        },
        methods:{
         makeRead() {
            console.log(this.unreadid);
          axios.post('make-read', {
            id: this.unreadid
          })
          .then(response => {
            console.log(response);
          })
          .catch(e => {
            //this.errors.push(e)
          })
          }

        }

      }
</script>

<style scoped>
.font-size{
  font-size:13px !important;
  font-weight: bold;
},
.font12{
  font-size:12px !important;
}

</style>
