<template>
<div class="dropdown">
      <a href="#" id="users" data-toggle="dropdown" class="mhead-icon" ><i class="fa fa-bell"></i>

       <span v-if="unreadnotifications.length > 0" class="label label-danger">{{ unreadnotifications.length }}</span></a>
       <ul v-if="unreadnotifications.length > 0" class="dropdown-menu drop-users" role="button" aria-labelledby="users">       
        
        <li class="dropdown-head">
            Users <span class="label label-danger pull-right">{{ unreadnotifications.length }}</span>
        </li>
        <user-notification-list 
           v-for="unreadlist in unreadnotifications "
           v-bind:unread="unreadlist">          
        </user-notification-list>
      </ul>
</div>
</template>

<script>
    export default {
        props:['unreads','userid'],
        data(){
            return {
                unreadnotifications : this.unreads
            }
        },
        mounted(){
            //console.log('mounted');
            Echo.private('App.User.'+ this.userid)
            .notification((notification) => {
                console.log(notification);
                let newnotification = {data:{type:notification.type,header:notification.header,body1:notification.body1,body2:notification.body2,created_at:notification.created_at,id:notification.id}}
                this.unreadnotifications.push(newnotification);
            });
        }
    }
</script>
