<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Updating Roles

                <inertia-link class="float-right" :href="route('roles')"
                    ><button
                        class="bg-black hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-400 rounded"
                    >
                        Back
                    </button></inertia-link
                >
            </h2>
        </template>

        <form action="/roles/{role}" method="PATCH">
            <input type="hidden" name="_method" value="PATCH" />
            <input type="hidden" name="_token" :value="csrf" />

            <div class="mb-6">
                <label
                    for="name"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Role</label
                >
                <input
                    type="name"
                    name="name"
                    id="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Roles"
                    v-model="form.name"
                />
            </div>
            <div class="mb-6">
                <label
                    for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Description</label
                >
                <input
                    type="description"
                    id="description"
                    name="description"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Description of Roles"
                    v-model="form.description"
                />
            </div>

            <button
                type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
                Update
            </button>
        </form>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import { defineComponent } from "vue";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";

export default defineComponent({
    components: {
        AppLayout,
        JetApplicationLogo,
    },
    props: ["roles"],

    created() {
        this.form = this.role;
    },

    data: () => ({
        form: {
            name: null,
            description: null,
        },
        csrf: document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content"),
    }),
    setup() {
        return {};
    },
});
</script>
