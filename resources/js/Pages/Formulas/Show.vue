<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                User
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <user-show :user="user"></user-show>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/AppLayout.vue'
import UserShow from './UserShow.vue'
import { Head } from '@inertiajs/inertia-vue3';

export default {
    props: ['user'],
    components: {
        BreezeAuthenticatedLayout,
        Head,
        UserShow,
    },
}
</script>
