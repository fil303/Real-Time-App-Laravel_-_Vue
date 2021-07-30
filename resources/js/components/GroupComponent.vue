<template>
	<div>
		<div id="app" style="text-align: center;">{{ this.group.name }}<span style="float: right;"><a :href="'/groupchatroom/member/'+this.group.id">Add Friends</a></span></div><br>
    <div style="height: 300px; width: 70%;margin-left: 15%;margin-bottom: 0" class=" grid-margin stretch-card">

        <div id="smsbody" style="overflow: auto;" class="card">


                <div v-for=" (massage,index) in massage" :key="index" > 

                    <div class="senderbody" v-if="user.id == massage.sender_id">
                  
                        <span class="senderbody">
                          <span class="sendersms">{{ massage.massage }} </span><b v-on:click="remove(index)" class="sendersmslink">X</b>
                        </span>

                    </div>
                   
                    <div class="reciverbody" v-else>
                    	<div><span style="">{{ massage.sender_name }}</span></div>
                        <span class="reciverbody">

                          <span class="reciversms">{{ massage.massage }} </span>
                        </span>
                    
                    </div>

                </div>
<!-- 		<span class="reciverbody">
			<span class="reciversms">Hey</span>
		</span>

		<span class="senderbody">
			<span class="sendersms">Hey</span>
		</span>

		<span class="reciverbody">
			<span class="reciversms">Hey</span>
		</span>

		<span class="reciverbody">
			<span class="reciversms">Hey</span>
		</span>

		 -->

		</div>

	</div>
		<div class="card smstypebody">
					<div class="">
                      <textarea v-model="newMassage" @keydown="typing" class="form-control" id="exampleTextarea1" rows="2"></textarea>
                    </div>
                    <div>
                    	<input class="submit" @click="post" type="submit" value="Send">
                    </div>
                    <div v-if="usertyping">Typing...</div>
		</div>

	</div>
</template>

<script>
export default {

  name: 'group',
  props:['group','user'],

  data () {
    return {
     	reciver:null,
    	massage:null,
    	newMassage:'',
     	usertyping:false,
    }
  },

  created(){
        this.get();

          Echo.join('gchat.'+this.group.channel)
                    .listen('GroupChat', (event) =>{
                        this.massage.push(event.data);
                         //console.log(event);
                    })
                    .here((users) => {
                        console.log('here');
                    })
                    .joining((user) => {

                        //this.reciver = user ;
                        console.log('joining');
                    })
                    .leaving((user) => {
                        console.log('leaving');
                    })
                    .listenForWhisper('typing', (e) => {

                        if (this.timeset) {
                            clearTimeout(this.timeset);
                        }
                        this.usertyping = true ;

                      this.timeset =  setTimeout(()=>{
                            this.usertyping = false ;
                        },3000);
                     
                    });
                
  },         
  methods:{
            get (){
                //const _this = this ;
                axios.get('/groupmassageget/'+this.group.id)
                  .then((response) => {

                  this.massage = response.data;
                    //console.log(response);
                  })
                  .catch( (error) => {
                    // handle error
                    //console.log(error);
                  })
                  .then( () => {
                    // always executed
                  });
            },

            post () {
                //console.log(this.$refs.chatid);
                // var chat_id = this.$refs.chatid
                // ?this.$refs.chatid[0].attributes[0].value
                // :Math.random().toString(36).substr(7);

                // console.log(chat_id);

                // if (this.newMassage !== ''){}
             
                axios.post('/groupchatroom', {
                	sender_id: this.user.id,
                    group_id: this.group.id,
                    massage: this.newMassage,
                    sender_name: this.user.username,
                    channel : this.group.channel,
                    
                  })
                  .then( (response) => {
                    
                    this.massage.push({
                    	id:response.data,
	                	sender_id: this.user.id,
	                    group_id: this.group.id,
	                    massage: this.newMassage,
	                    sender_name: this.user.username,
	                    channel : this.code,

                    });
                    this.newMassage = '' ;
                    // console.log(response.data);
                  })
                  .catch( (error) => {
                   // console.log(error);
                  });


                  // this.chat_id = this.chat_id == ''
                  // ? this.$refs.chatid[0].attributes[0].value
                  // : this.chat_id ;

                  //console.log(65465);

              
            },


            typing () {

                Echo.join('gchat.'+this.group.channel)
                    .whisper('typing', this.user);

            },

            remove(index){
              var id = this.massage[index].id;


              axios.post('/groupsmsdelete/'+id,{
                status:'success'
              })
              .then( (response) => {
                this.massage.splice(index, 1);
              });
            },
  },
}
</script>

<style lang="css" scoped>
#smsbody{
	overflow: auto;
}
.reciverbody{
	margin-left: 5%;
	margin-top: 2%;
}
.reciversms{
	width: 45%;
	background-color: #d6d4d4;
	padding: 1%;
	float: left;
}
.senderbody{
	margin-right: 5%;
	margin-top: 2%;
}
.sendersmslink{
  cursor: pointer;
  color: red;
  float: right;
}
.sendersmslink:hover{
  color: blue;
}
.reciversmslink{
  cursor: pointer;
  color:red;
}
.reciversmslink:hover{
  color:blue;
}
.sendersms{
	width: 45%;
	background-color: #008cff;
	padding: 1%;
	float: right;
}

.smstypebody{
	width: 70%;
	margin-left: 15%
}
.submit{
	width: 100%
}
</style>