<template>
<app-layout>
<template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create New User

                <!-- <inertia-link class="float-right" :href="route('users')"
                    ><button
                        class="
                            bg-black
                            hover:bg-blue-700
                            text-white
                            font-bold
                            py-2
                            px-4
                            border border-blue-400
                            rounded
                        "
                    >
                        Back
                    </button></inertia-link> -->

                      <Link href="/users" method="get"  class="float-right"><button
                        class="
                            bg-black
                            hover:bg-blue-700
                            text-white
                            font-bold
                            py-2
                            px-4
                            border border-blue-400
                            rounded
                        "
                    >Back</button></Link>  

            
            </h2>
  </template>

        
<form action="/users" method="POST">
<input type="hidden" name="_token" :value="csrf" />

<div class="mb-6">
<label for="name"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
<input type="name" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Your Name" required="" v-model="users.name">
</div>
<div class="mb-6">
<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
<input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required=""  placeholder="Enter your Email" v-model="users.email" >
</div>
<div class="mb-6">
<label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contact</label>
<input type="phone" id="phone" name="phone" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required="" placeholder="Enter your Phone Number"  v-model="users.phone" >
</div>
<div class="mb-6">
<label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address</label>
<input type="address" id="address" name="address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required="" placeholder="Enter your Address"  v-model="users.address" >
</div>
<div class="mb-6">
<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
<input type="password" id="password" name="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required=""  placeholder="Enter your Password" v-model="users.password">
</div>
<div class="mb-6">
<label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm Password</label>
<input type="password" id="password_confirmation"  name="password_confirmation" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required=""  placeholder="Reconfirm your password" v-model="users.password_confirmation">
</div>

<span class="text-gray-700 text-m">User roles:</span>
<div v-for="role in roles" v-bind:key="role.id">
<input class="form-check-input text-m" name="roles[]" type="radio" :value="role.id" id="role.name"   :checked="true"/>
{{role.name}}
    </div>


<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

</app-layout>
</template>




<script>
import AppLayout from "@/Layouts/AppLayout";
  import { defineComponent } from 'vue'
   import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';



    export default defineComponent({
        components: {
            Head,
          AppLayout,
            JetApplicationLogo,
            Link
        },
        props:["users","roles"],

        data() {
        return {
            users: {
                name:null,   
                email: null,
                phone:null,
                address:null,
                password: null,
                password_confirmation: null,
            },
               
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    

        };
        },
        
    })
</script>
