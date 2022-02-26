<template>
	<Content>
		<Head title="User" />
		<template #headerLeft>
			<breadcrumb :lists="breadcrumb"/>
		</template>
		<template #headerRight>
			<Link href="/users/create">
				<BreezeButton>
					Create User
				</BreezeButton>
			</Link>
		</template>
			<input 
			  v-model="term"
			  type="text"
			  placeholder="Search .."
			  class="relative right-0 block w-1/4 mt-1 mb-6 border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm rounded-md"
			  @input="search"
			/>
			<user-table :users="users.data"></user-table>
			<pagination :pagination="users"></pagination>
    </Content>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/AppLayout.vue'
import Content from '@/Layouts/Content.vue'
import Pagination from '@/Components/Pagination';
import Breadcrumb from '@/Components/Breadcrumb';
import ApplicationLogo from '@/Jetstream/ApplicationLogo';
import BreezeButton from '@/Components/Button.vue'
import {throttle} from "lodash";
import UserTable from './UserTable.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
	data(){
		return {
			term:''
		}
	},
	methods:{
	  search: throttle(function (term) {
		this.$inertia.get( '/users', { term: this.term }, {
		  preserveState: true,
		  preserveScroll: true,
		  replace: true
		})
	  }, 600),
	},
    props: ['users'],
    layout: BreezeAuthenticatedLayout,
    components: {
        Content,
        Breadcrumb,
        ApplicationLogo,
		Pagination,
        BreezeButton,
        Head,
        Link,
        UserTable,
    },
    computed : {
	  breadcrumb(){
		let bread = [
		  {
			label : 'User'
		  }
		];
		return bread;
	  },
    },
}
</script>
