<template>

<div class="First" style="position:relative;  left:-150px; top:-56px; ">
    <h2  style="position:absolute; left:90px;  top:107px; ">Our Cuisine</h2>
    <a style="position:absolute;top:217px; left:90px;right:1000px;">  {{ text1 }}   </a>
 <div>

 <img  style="position:absolute; height:580px; width: 720px;left:1201.6px;"  src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/24/fb/ae/da/ccourtyard.jpg">

<div class="soup" style="position:relative; top:579px;">
   <h2  style="position:absolute; left:1420px;  top:270px; ">Phone and Email</h2>
   <a style="position:absolute;top:370px; left: 1350px;">  {{ phone }} </a>
</div>

<div class="drink" style="position:relative; top:580px;">
    <h2  style="position:absolute; left:100px;  top:209px; ">Location</h2>
    <a style="position:absolute;top:291px; left:100px;">  {{ location }}, Athens  {{ reservation_list }} </a>
</div>

<img  style="position:absolute; height:483px; width: 800px;left:12.5px; top:2018px"  src="https://cdn.rtpmd.gr/media/com_news/story/2023/
07/05/31504/main/greek_salad.jpg">

<img  style="position:absolute; height:710px; width: 910px; top:580px;"  src="https://ousyra.com/wp-content/uploads/2024/06/image_50421505.jpg?fit=490,441">

<img  style="position:absolute; height:730px; width: 908px; top:1290px; left:1015px;"  src="https://syroswinetrails.gr/wp-content/uploads/2023/05/Greek-Wine-Tasting.jpg">

</div>

</div>

</template>


<script setup>
 import { mapState, mapActions } from "vuex";
   import axios from "axios"
   import {ref, onMounted} from 'vue'
    
   const text1 = ref('');
   const location = ref('');
   const phone = ref('');
   const time = ref('');
   const reservation_list = ref('');

const fetchText = async ()=> {  
       try {
        const response = await axios.get('/api/');
        text1.value = response.data.text1;
        location.value= response.data.location;
        location.value= response.data.location;
        phone.value= response.data.phone;
        reservation_list.value = response.data.reservation_list

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

 