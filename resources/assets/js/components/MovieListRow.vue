<template>
    <tr>
        <td>{{ movie.rank }}</td>
        <td><img v-bind:src="'img/models/W150H110/' + movie.filename" width="45" height="32"></td>
        <td>
           <input v-if="editname" type="text" class="form-control input-sm" v-model="newMovieName">
           <span v-else>{{ movie.title }}</span>
        </td>
        <td>{{ movie.score }}</td>
        <td>{{ movie.wins }}</td>
        <td>{{ movie.losses }}</td>
        <td>{{ movie.created_at }}</td>
        <td><span class="label label-success">Active</span></td>
        <td width="250px">
            <button v-on:click="editName" class="btn btn-xs btn-purple" v-if="!editname">
                <i class="fa fa-edit"></i> Edit</button>
            <button v-on:click="saveUpdate(movie,newMovieName)" class="btn btn-xs btn-purple" v-if="editname">
               <i class="fa fa-floppy-o"></i> Update</button>
            <button v-on:click="cancelUpdate" class="btn btn-xs btn-default" v-if="editname">
               <i class="fa fa-undo"></i> Cancel</button>
            <button class="btn btn-xs btn-warning" v-if="!editname" disabled>
                <i class="fa fa-photo"></i> Image</button>
            <button class="btn btn-xs btn-danger" v-if="!editname" disabled>
                <i class="fa fa-trash-o "></i> Remove</button>
        </td>
    </tr> 
</template>

<script>
    export default {
        props:['movie'],
        data(){
            return {
                hello: 'sunburn300.png',
                editname : false,
                newMovieName : ''
            }
        },
        methods:{
          editName(){
            this.editname = true;
            this.newMovieName = this.movie.title;
            //console.log(this.newMovieName);
          },
          cancelUpdate(){
            this.editname = false;
             toastr.options = {
                "closeButton": true,
             };
             toastr.warning('cancelled !');
            //this.newMovieName = this.movie.title;
            //console.log(this.newMovieName);
          },
          saveUpdate(oldName,newName){
            this.editname = false;

            if(newName!=oldName.title){
                axios.post('/update-movie-name',{
                    oldmovie: oldName,
                    newmovie: newName
                })  
                .then(response => {
                  //console.log(response);
                    this.$emit('update-movie');
                })
                .catch(e => {
                    //console.log(e.response.data.newmovie[0]);
                    toastr.options = {
                         "closeButton": true,
                    };
                    toastr.error(e.response.data.newmovie[0]);
                });
            }else{
                toastr.options = {
                    "closeButton": true,
                };
                toastr.warning("Tried to update the same Movie Name!")
            }
          
          }
        }

      }
</script>

<style scoped>
  input {
    height:25px;
   }
</style>
