<template>
	<Content>
		<Head title="Asuransi" />
		<template #headerLeft>
			<breadcrumb :lists="breadcrumb"/>
		</template>
		<template #headerRight>
			<Link href="/asuransis/create">
				<BreezeButton>
					Create Asuransi
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
		<div class="flex flex-col">
			<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
				<div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
					<div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
						<table class="min-w-full divide-y divide-gray-200">
							<thead class="bg-gray-50">
								<tr>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										ID
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Nama Asuransi
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										PIC
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Email
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Action
									</th>
								</tr>
							</thead>
							<tbody class="bg-white divide-y divide-gray-200">
								<tr v-for="asuransi in asuransis.data" :key="asuransi.id">
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{ asuransi.id }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{ asuransi.nama }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													<ul>
														<li v-for="(pic, index) in asuransi.phones" :key="index"> {{ pic.description }} - {{ pic.number }}</li>
													</ul>
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													<ul>
														<li v-for="(email, index) in asuransi.emails" :key="index"> {{ email.email }}</li>
													</ul>
												</div>
											</div>
										</div>
									</td>

									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													<Link :href="route('asuransis.edit', asuransi.id)" class="mr-4 text-indigo-600 hover:text-indigo-900">Edit</Link>
													<Link v-if="asuransi" Link :href="route('asuransis.tarifs', asuransi.id)" class="text-indigo-600 hover:text-indigo-900">Tarif</Link>
												</div>
											</div>
										</div>
									</td>

								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<pagination :pagination="asuransis"></pagination>






	</Content>
</template>
<script>
import BreezeAuthenticatedLayout from '@/Layouts/AppLayout.vue'
import Content from '@/Layouts/Content.vue'
import Pagination from '@/Components/Pagination';
import Breadcrumb from '@/Components/Breadcrumb';
import BreezeButton from '@/Components/Button.vue'
import {throttle} from "lodash";
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
	layout: BreezeAuthenticatedLayout,
	data(){
		return {
			term:''
		}
	},
    props: ['asuransis'],
	methods:{
	  search: throttle(function (term) {
		this.$inertia.get( '/asuransis', { term: this.term }, {
		  preserveState: true,
		  preserveScroll: true,
		  replace: true
		})
	  }, 600),
	},
    components: {
		Content,
	  Pagination,
		Breadcrumb,
        BreezeButton,
        Head,
        Link,
    },
	computed: {
	  breadcrumb(){
		let bread = [
		  {
			label : 'Asuransi'
		  }
		];
		return bread;
	  },
	}
}
</script>
