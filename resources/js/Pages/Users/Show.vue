<template>
    <Head title="Dashboard" />
    <Content>
        <template #headerLeft>
          <breadcrumb :lists="breadcrumb"/>
        </template>
        <user-show :user="user"></user-show>
    </Content>
</template>
<script>
import BreezeAuthenticatedLayout from '@/Layouts/AppLayout.vue'
import Content from '@/Layouts/Content.vue'
import Breadcrumb from '@/Components/Breadcrumb.vue'
import UserShow from './UserShow.vue'
import { Head } from '@inertiajs/inertia-vue3';

export default {
    props: ['user'],
    layout: BreezeAuthenticatedLayout,
    components: {
        Breadcrumb,
        Content,
        Head,
        UserShow,
    },
    computed: {
		  breadcrumb(){
			let bread = [
			  {
				route : '/users',
				label : 'User'
			  },{
				label : this.user.name
			  }
			];
			return bread;
		  },
    }
}
</script>
