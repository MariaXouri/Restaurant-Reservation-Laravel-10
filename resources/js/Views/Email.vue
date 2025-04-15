

<template>
    <div>
      <h2 style="position:relative; left:5px; top:1px;"> EMAIL  </h2>
      <div class="Email" style="position:absolute; left:-130px; top:-84px;">

     <!-- <p style="color:red" v-if="success">Message Send !</p> -->
     <div class="emailform">
         <form  @submit="submit" >
          <h1 style="position:absolute; left:179px; top:54px;">
             Email Form</h1>
             <a style="position:absolute; left:181px; top:135px;">
              Email us your opinion about Local Cuisine</a>
          <div  class="form-group" style="position:absolute; left:587px; top:250px;">
            <a for="exampleEmail" style="position:relative; left:50px; top:-40px;" >Your Email</a>
                  <input type="text"  style="position:absolute; left:50px; top:-10px;"class="form" id="exampleEmail"
                   placeholder="Your Email" required name="email" 
                   v-model= 'headers' > </input>
            </div>

            <div class="form-group"style="position:absolute; left:587px; top:350px;">
            <a for="subject" style="position:relative; left:50px; top:-10px;">Subject</a>
                  <input type="text"  style="position:absolute; left:50px; top:20px;" class="form" id="subject"
                   placeholder="Subject" required name="subject" 
                   v-model='subject' > </input>
            </div>

            <div class="form-group" style="position:absolute; left:587px; top:450px;">
            <a for="body" style="position:relative; left:50px; top:20px;">Body</a>
                  <textarea type="text"  style="position:absolute; left:50px; top:50px;" class="form-area" id="body"
                   placeholder="Body" required name="body" 
                   v-model='body'>  </textarea>
            </div>
           
          
            <button  style="position:absolute; left:1350px; top:650px;" @submit="submit">Submit</button>
            </form>
     
        </div>
          </div>
          
          <!-- <div class="background" style="position:absolute; left:425px; top:80px;">
            <a></a>
          </div> -->
          <div class="background1" style="position:absolute; left:425px; top:80px;">
            <a></a>
          </div>
      </div>
    
 </template>

 
<script >

   import axios from "axios"
   

   export default({
       
    data(){ return {
        headers: '', // initialise this to an empty string
        subject: '', // same thing
        body:'',
        a:'',
        errors:[]
    }},

    methods: {
        submit() {
            // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
                axios.post('/api/email', {
                headers: this.headers,
                subject: this.subject,
                body:this.body,
                a:this.a
            });
        },
        checkForm: function (e) {
            this.errors = [];

        if (!this.headers) {
        this.errors.push('Email required.');
      } else if (!this.validEmail(this.headers)) {
        this.errors.push('Valid email required.');
      }
      e.preventDefault();
    },
    validEmail: function (headers) {
      var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(headers);
    }

    }
}); 


</script>

<!-- <script>

export default
     { 
     data()
{ 
    return {
        headers:'',subject:'',body:'',success: false,
      }},
        
        methods:
        { submitform: function (e) 
            
            { 
                e.preventDefault();
                let self = this;
const params = JSON.stringify({headers : this.headers,subject: this.subject,body: this.body
});

axios.post('api/email',params,{headers: {"content-type": "application/json",},
})

.then(function (response) {self.success = true;
})

.catch(function (error) {// handle error
console.log(error);
})
.then(function () {// always executed
});
}},
}


</script>       -->
   


   
 




 

 <style>
@import "./style.css";
</style>
