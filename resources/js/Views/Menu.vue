<template>
    <div class="body">
      
      <h2 style="position:absolute; left:72px; top:5px;"> Menu  </h2>
      

  <div  class="drinks">
  <h1 style="position:absolute; left:750px; top:170px;">Drinks </h1>

        <div   style="position:absolute; left:370px; right:350px; top:250px;"v-if="drink">
        <p v-for="drink in drink">
            {{drink.name}} :
            {{ drink.description }} -
            {{drink.price}} euros
        </p>
      </div>
</div>
<div class="salads">
  <h1 style="position:absolute; left:750px; top:400px; ">Salads</h1>
        <div style="position:absolute; left:500px; top:500px; "v-if="salad">
        <p v-for="salad in salad">
          {{salad.name}}:
            {{ salad.description }}-
            {{salad.price}} euros
        </p>
  </div>
  </div>
  
  <div class="appetizers">
  <h1  style="position:absolute; left:720px; top:600px; ">Appetizers</h1>
        <div  style="position:absolute; left:580px; top:700px; " v-if="appetizer">
        <p v-for="appetizer in appetizer">
            {{appetizer.name}}:
            {{ appetizer.description }} -
            {{appetizer.price}} euros
        </p>
  </div>
</div>

<div class="main-dishes">
  <h1  style="position:absolute; left:710px; top:810px; " >Main Dishes</h1>
        <div  style="position:absolute; left:560px; right:520px; top:900px; " v-if="main_dish">
        <p v-for="main_dish in main_dish">
            {{main_dish.name}}:
            {{ main_dish.description }} -
            {{main_dish.price}} euros
        </p>
  </div>
</div>

<div class="puds">
  <h1  style="position:absolute; left:750px; top:1000px; ">Puds</h1>
        
  <div  style="position:absolute; left:580px;  top:1089px; " v-if="pud">
        <p v-for="pud in pud">
            {{pud.name}}:
            {{ pud.description }} -
            {{pud.price}} euros
        </p>
  </div>
</div>



<!-- <div class="part1" style="position:absolute; left:750px; top:1100px; ">
  rdtg
</div>
 -->

  </div>

 </template>

<script setup>
 import { mapState, mapActions } from "vuex";
   import axios from "axios"
   import {ref, onMounted} from 'vue'
    
    const drink =  ref('');
    const salad =  ref('');
    const appetizer =  ref('');
    const main_dish =  ref('');
    const pud =  ref('');
    

    
    const fetchText = async ()=> {  
       try {
        const response = await axios.get('/api/menu');
        drink.value = response.data.drink;
        salad.value = response.data.salad;
        appetizer.value = response.data.appetizer;
        main_dish.value = response.data.main_dish;
        pud.value = response.data.pud;


        
       }
       catch (error) {
            console.error("Error fetching message:", error);

        }
      };
      onMounted(() => fetchText())


</script>


 <style scoped>
@import "./style.css";

</style>