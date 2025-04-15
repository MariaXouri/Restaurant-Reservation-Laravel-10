<template>
    <div class="reserved" style="position:relative; left:-150px; top:-53.5px;">
      <h2 style="position:absolute; left:72px; top:5px;"> Reservation  </h2>
    <div  class="drinks">
  <h1 style="position:absolute; left:850px; top:170px;">Reserved dates </h1>
    <div style="position:absolute; left:430px; right:50px; top:250px;"v-if="reservation_list">
         <button v-for="reservation_list in reservation_list">
             {{reservation_list.date}} 
          </button>


            </div>
           </div>
          <div>

        </div>
    </div>
</template>

<script setup>
  import axios from "axios"
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



