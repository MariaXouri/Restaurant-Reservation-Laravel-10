<template>
    <div class="Reservation" style="position:relative; left:-130px; top:-53.9px;">
      <div class="reservationForm" >
        <form @submit="submit">
          <a class="reservation_title"  style="position:relative; left:260px; top:75.5px;"> <strong> Make a reservation</strong></a>
           <a  style="position:absolute; left:583px; top:167.5px;"> Name of the reservation </a>
           
            <input placeholder="Put your full name here" style="position:absolute; left:585px; top:217.5px;"type="text" v-model="name">
              <a style="position:absolute; left:583px; top:337.5px;"> Date of the reservation</a> 
              <datetime placeholder="Press here" style="position:absolute; left:585px; top:387.5px;" type="datetime" format="yyyy-MM-dd  HH:mm:ss" min-datetime="2025-01-05" max-datetime="2025-12-28" hour-step=1 minute-step=15 v-model="date"></datetime>
      
                  </input>
                    <a style="position:absolute; left:583px; top:507.5px;"> Νumber</a>
                <input style="position:absolute; left:585px; top:557.5px;" type="number" v-model="location_num">
              </input>
            <!-- <h1  style="position:absolute; left:765px; right:220px; top:100px; "> Schedule</h1> -->
        
                 <div v-for="item in reservation_list" :key="item.id">
                    <a>{{ item.date }}</a>
                 </div>
      
                <!-- <div class="schedule" style="position:absolute; left:750px; right:20px; top:200px; ">
                  <ul>
                   <a v-for="reservation in reservation_list">
                    <ul>
                      <a v-for= "i in 5" >
                        <button>  {{ reservation[i]['date'] }} </button> 
                      
                       </a>
                       </ul>
                      </a>
                    </ul>
                  </div> -->
           
      <button  style="position:absolute; left:1500px; top:620px;" @submit="submit">Submit</button> 
       </form> 

       <!-- <div class="leftbtn">
                  <button>  
                  </button>
            </div>     -->
      </div>
    </div> 
</template>


  <script>
     import axios from "axios"
     import {ref} from 'vue';
     export default ({
       
      setup(){
          const reservation_list=ref('');
          return reservation_list
        },

         name: "App",
          data(){  
              return {
                name:'', 
                date:'',
                location_num:'',
               reservation_list:'',
                id: '',
              
                errors:[]
               }},

            methods: {
                submit() {
              
                    axios.post('/api/reservation', {
                    name: this.name,
                    date: this.date,
                    location_num: this.location_num,
                    
                });
            },

              // async getAnswer() {   
              //   const { data } = await axios.get("api/reservation");
              // this.reservation_list = data;
              
              // this.rlngth=data.length;
                
              //   async getAnswer() {   
              //    const { data } = await axios.get("api/reservation");
              //   this.reservation_list = data;
                
              // this.rlngth=data.length;
                
  //        //  },
  //  },


  //      beforeMount() {
  //           this.getAnswer();
  //         },
            
      }

    });
        </script>
<!-- <script setup>
import {axios as a} from "axios"
 import {ref, onMounted} from 'vue'
  
  const reservation_list =  ref('');
  const fetchText = async ()=> {  
     try {
      const response = await axios.get('/api/reserved');
      reservation_list.value = response.data.reservation_list;
  }
     catch (error) {
          console.error("Error fetching message:", error);

      }
    };
    onMounted(() => fetchText())



</script>

<style scoped> -->



@import "./style.css";
</style>


