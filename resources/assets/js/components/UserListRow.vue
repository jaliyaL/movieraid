<template>
    <tr>
        <td>{{ index+1 }}</td>
        <td><img v-bind:src="'admin/img/user.png'" width="25" height="25" class="img-responsive"></td>
        <td>{{ user.name }}</td>
        <td>{{ user.email }}</td>
        <td>{{ user.score }}</td>
        <td>{{ user.created_at }}</td>
        <td>{{ user.updated_at }}</td>
        <td><span class="label label-success">Active</span></td>
        <td>
          <button class="btn btn-xs btn-danger" disabled><i class="fa fa-power-off"></i>Block</button>
          <button class="btn btn-xs btn-purple" disabled><i class="fa fa-history"></i>History</button>
          <button class="btn btn-xs btn-info" disabled><i class="fa fa-envelope-o"></i>Email</button>
        </td>
    </tr> 
</template>

<script>
    export default {
        props:['user','index'],
        data(){
            return {
                
            }
        },
        methods:{
 
        }
      }
</script>
