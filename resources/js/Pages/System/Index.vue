<template>
<app-layout>
<template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                System Management

                <!-- <inertia-link class="float-right" :href="route('users.create')"
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
                        Create New User
                    </button></inertia-link> -->

                    <Link href="/users/create" method="get"  class="float-right"><button
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
                    >Create New Users</button></Link>  
                

            
            </h2>
  </template>

        <div class="py-12">
            <div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Title
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Role
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200" v-for="user in users"
                                            :key="user.id">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                 
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      {{user.name}}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{user.email}}</div>
               
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                <div class="text-sm text-gray-500">Optimization</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Active
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Admin
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                 <Link href="/users/{user}/edit" method="get"  class="text-indigo-600 hover:text-indigo-900">Edit</Link>
              </td>
            </tr>

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
        </div>
</app-layout>
</template>




<script>
 import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from "@/Layouts/AppLayout";
  import { defineComponent } from 'vue'
   import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'




    export default defineComponent({
        components: {
          Head,
          AppLayout,
            JetApplicationLogo,
            Link,
        },
      

      




 props:{
      users: Object,
      },


// methods:{
//   editUser(){
//     this.$inertia.get("/users/edit/{id}");
//   }
// }
    })
</script>
