<template>
<div class="table-responsive">
    <table class="table table-hover table-bordered ">
      <thead>
        <tr>
          <th>#</th>
          <th>Image</th>
          <th>Name</th>
          <th>Email</th>
          <th>Score</th>
          <th>Joined Date</th>
          <th>Last Active</th>
          <th>Status</th>
          <th>Control</th>
        </tr>
      </thead>
      <tbody>
        <user-list-row v-for="(user,index) in users" v-bind:user="user,index"></user-list-row>
      </tbody>
    </table>
  </div>
</template>

<script>
    export default {
        props:['users'],
        data(){
            return {
                //userlist : this.users
            }
        },
        methods:{
 

        }

      }
</script>
