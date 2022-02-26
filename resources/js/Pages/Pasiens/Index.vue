<template>
	<Content>
		<Head title="Pasien" />
		<template #headerLeft>
			<breadcrumb :lists="breadcrumb"/>
		</template>
		<template #headerRight>
			<Link href="/pasiens/create">
				<BreezeButton>
					Create Pasien
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
	   <form-select
	   	v-model  = "parameter_pencarian_tambahan"
	   	:options="kolom_pasiens"
	   />
		<div class="flex flex-col">
			<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
				<div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
					<div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
						<table class="min-w-full divide-y divide-gray-200">
							<thead class="bg-gray-50">
								<tr>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Nama
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Tanggal Lahir
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Alamat
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										No Telp
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Nama Ibu
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Nama Ayah
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Action
									</th>
								</tr>
							</thead>
							<tbody class="bg-white divide-y divide-gray-200">
								<tr v-for="pasien in pasiens.data" :key="pasien.id">
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{ pasien.nama }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{ $filters.formatDateSearch( pasien.tanggal_lahir ) }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{ pasien.alamat }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{ pasien.no_telp }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{ pasien.nama_ibu }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{ pasien.nama_ayah }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													<Link :href="route('pasiens.edit', pasien.id)" class="mr-4 text-indigo-600 hover:text-indigo-900">Edit</Link>
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
		<pagination :pagination="pasiens"></pagination>
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
    props: ['pasiens'],
	methods:{
	  search: throttle(function (term) {
		this.$inertia.get( '/pasiens', { term: this.term }, {
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
			label : 'Pasien'
		  }
		];
		return bread;
	  },
	}
}
</script>
