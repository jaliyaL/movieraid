<template>
<div>
    <b-button class="btn btn-sm btn-primary" @click="showModal">
        <i class="fa fa-plus"></i> Add New
    </b-button>
    
    <b-modal ref="myModalRef" hide-footer title="Using Component Methods">
      <div class="d-block text-center">
        <form @submit.stop.prevent="handleSubmit">
        <b-form-input type="text"
                      placeholder="Enter your name"
                      v-model="name">
        </b-form-input>
        </form>   
      </div>
      <b-btn class="mt-3" variant="outline-danger" block @click="hideModal">Close Me</b-btn>
    </b-modal>
</div>
</template>

<script>
    export default {
        props:['movies'],
        data(){
            return {
                //userlist : this.users
            }
        },
        computed(){
          this.$refs.myModalRef.show();
        },
        methods: {
          showModal() {
            console.log('hi');
              this.$refs.myModalRef.show();
          },
          hideModal() {
              this.$refs.myModalRef.hide();
          }
       }
      }
</script>
