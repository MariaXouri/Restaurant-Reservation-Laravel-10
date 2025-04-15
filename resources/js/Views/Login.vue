<template>
    <div class="LoginUser" style="position: absolute; top:-10px;">
        <h1 class="title" style="position: absolute; top:10px; left:55px;">
            Local Cuisine
        </h1>
        <h1 class="title2" style="position: absolute; top:89px; left:57px;">
           since 2022
        </h1>

        <div class="LoginForm">
         <form  @submit.prevent="validateAndLogin" >
          <h1 style="position:absolute; left:879px; top:117px;">
             Login </h1>
          <div  class="form-group" style="position:absolute; left:587px; top:270px;">
            <a for="exampleEmail" style="position:relative; left:50px; top:-50px;" >Your Email</a>
                  <input type="email"  style="position:absolute; left:50px; top:-10px;"class="form" 
                   id="exampleEmail"
                   placeholder="Your Email"
                   :class="{ 'border-red-500': showErrorEmail }"
                   required name="email"       
                   v-model= "email" > </input>
                  
            </div>

            <div class="form-group"style="position:absolute; left:587px; top:370px;">
            <a for="password" style="position:relative; left:50px; top:-50px;">Password</a>
                  <input type="password" style="position:absolute; left:50px; top:-10px;" class="form" id="subject"
                   placeholder="Password" 
                   :class="{ 'border-red-500': showErrorPassword }"

                   required name="password" 
                   v-model="password" > </input>
            </div>

           
            <button  style="position:relative; left:1270px; top:420px;"
                        type="submit"
                        class="button-submit mt-4"
                     
                    >
                        Go
                    </button>
            <!-- <button  style="position:absolute; left:1250px; top:400px;" @submit="submit">GO</button> -->
            </form>
     
        </div>
    </div>
    
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
    const email = ref('');
    const password = ref('');
    const showErrorEmail = ref(false);
    const showErrorPassword = ref(false);


const validateAndLogin = async () => {
    showErrorEmail.value = !email.value;
    showErrorPassword.value = !password.value;
    if (showErrorEmail.value || showErrorPassword.value) {
    return;
    }
    try {
        const response = await axios.post('/api/login', {
            email: email.value,
            password: password.value
        });

        console.log(response.data.authorisation.token); // Access token from the 'authorisation' object
    
        const token = response.data.authorisation.token; // Access token from the 'authorisation' object
        const user = response.data.user; // User object

    if(token){
    localStorage.setItem('token', token);
    localStorage.setItem('user', JSON.stringify(user));
    
    
    window.location.href = '/';
    }

        else {
        console.error('Token not received');
    }


    }   
        catch (error) {
        console.error(error);
    }
}
</script>


<style scoped>
.login-con {
    background-color: #640dac;
    width: 100%;
    height: 100vh;
}

.custom-con {
    background-color: white;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    padding: 2rem;
    border-radius: 25px;
}

.logo-con {
    display: flex;
    flex-direction: column;
    gap: 0.3rem;
    justify-content: center;
    align-items: center;
}

.button {
    align-self: center;
    color: white;
    font-size: 22px;
    font-weight:100;
    background: #1c108a;
    padding: 7px;
    padding-left: 10px;
    padding-right:10px;
    border-radius: 60px;
}
</style>
