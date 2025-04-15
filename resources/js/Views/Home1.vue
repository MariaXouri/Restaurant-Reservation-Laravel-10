<template>

   <div class="home">
  <div class="title" style="position: absolute; top:138px; left:750px">
     <a>  Local cuisine </a>
   </div>
   <div class="title2" style="position: absolute; left:753px; top:218px;">
    <a>
        since 2022
    </a>
</div>

<div class="bar" style="position:relative; left:-130px; top:-130.6px;">

<a></a>
</div>

<div  style="position:relative; left:-126px; top:-170px;">
    <a href="/login">
      <button class="loginbtn">Login</button>
    </a>
  </div>

  <div  style="position:relative; left:-42px; top:-205px;">
    <a href="/register">
      <button class="loginbtn">Register</button>
    </a>

</div>
<!-- <div class="buttons2"style="position: absolute; left:-1px; top:327px;"></div> -->
<div class="buttons"style="position: absolute; left:420px; top:330px;">
   <div class="OurCuisine" style="position: absolute; top: 91px; left:-220px;">
   <!-- <router-link  :to="{ path: '/' }"

   > </router-link> -->
     
   <router-link  :to="{ path: '/First' }"
   > Our Cuisine</router-link>
     
  </div>

   <div class="MakeAReservation" style="position: absolute; top:91px; left:80px; right:-900px; ">
   <router-link :to="{ path: '/reservation' }" class="dash-link"
   >Make a reservation</router-link>
  </div>
   
  <div class="Menu"  style="position: absolute; top:91px; left:489px; ">
   <router-link :to="{ path: '/menu' }" class="dash-link"
   >Menu</router-link>
   </div>

   
   <div class= "Gallery"  style="position: absolute; top:91px; left:810px; ">
   <router-link :to="{ path: '/gallery' }" class="dash-link"
   >Gallery</router-link>
  </div>

   <div class="Email2"   style="position: absolute; top:91px; left:1150px;  right:-1400px ">
   <router-link :to="{ path: '/email' }" class="dash-link"
   >Email Form</router-link>
  </div>

  </div>
<div class="router" style="position: relative; top:286px;  ">
   <main>
                <router-view></router-view>
   </main>
   </div>
  </div>

</template>



<script setup>
   import router from "../Router";
   import { mapState, mapActions } from "vuex";
   import axios from "axios"
   import {ref, onMounted} from 'vue'
   import jQuery from "jquery";

    const text =  ref('');
    const fetchText = async ()=> {  
       


       try {
        const response = await axios.get('/api/');
        text.value = response.data.text;
       }
       catch (error) {
            console.error("Error fetching message:", error);

        }
      };
      onMounted(() => fetchText())

</script>


<style>
@import "./style.css";



</style>