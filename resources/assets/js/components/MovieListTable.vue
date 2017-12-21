<template>
<div class="table-responsive">
  <!-- <add-movie></add-movie> -->
  <br/>
    <table class="table table-hover table-bordered ">
      <thead>
        <tr>
          <th>Rank</th>
          <th>Image</th>
          <th>Movie Name</th>
          <th>Score</th>
          <th>Wins</th>
          <th>losses</th>
          <th>Added Date</th>
          <th>Status</th>
          <th>Control</th>
        </tr>
      </thead>
      <tbody>
        <movie-list-row 
            v-for="movie in movieList" 
            v-bind:movie="movie"
            v-on:update-movie="fetchMovies"
            >
        </movie-list-row>
      </tbody>
    </table>
  </div>
</template>

<script>
    export default {
        props:['movies'],
        data(){
          return {
              movieList : this.movies//userlist : this.users
          }
        },
        methods: {
          fetchMovies(){
            axios.get('/movies-ajax')
             .then(response => {
              //console.log('hi');
                this.movieList = response.data.movies;
                toastr.options = {
                    "closeButton": true,
                };
                toastr.success('Successfully updated the Movie Name !')
             });
          },
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
