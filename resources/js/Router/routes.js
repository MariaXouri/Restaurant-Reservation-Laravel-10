// import { component } from 'vue/types/umd'
import Home1 from '../Views/Home1.vue'
import Reservation from '../Views/Reservation.vue'
import First from '../Views/First.vue'
import Menu from '../Views/Menu.vue'
import Gallery from '../Views/Gallery.vue';
import Email from '../Views/Email.vue'
//import { component } from 'vue/types/umd';
//import Login from "../Views/Login.vue";
import Reserved from '../Views/reserved.vue';

const routes = [
    
      {      
       
    
        path: "/",
        name:'Home1',
        component: Home1,

      
    
            children: [
              {
                  path:'/',
                  name:'First',
                  component:First,
              },
            
              {
                path:'/First',
                name:'First',
                component:First,
            },
          
            {

                path:'/reservation',
                name:'Reservation',
                component:Reservation
            },

            {

                path:'/menu',
                name:'Menu',
                component:Menu
            },
            {

                path:'/gallery',
                name:'Gallery',
                component:Gallery
            },
           
            {

                path:'/email',
                name:'Email',
                component:Email
            },
            {

                path:'/reserved',
                name:'Reserved',
                component:Reserved
            },

         
       ],
    
      },
    //   {

        
    //     path: "/login",
    //     name: "Login",
    //     component: Login,
    // },
];
export default routes;