<template>
    <Head title="Obat" />
    <Content>
		<template #headerLeft>
			<breadcrumb :lists="breadcrumb"/>
		</template>
		<template #headerRight>
			<Link href="/tarifs/create">
				<BreezeButton>
					Create Tarif
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
										id
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Jenis Tarif
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Tipe Tindakan
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Biaya 
									</th>
									<th scope="col" class="relative px-6 py-3">
										<span class="sr-only">Edit</span>
									</th>
								</tr>
							</thead>

							<tbody class="bg-white divide-y divide-gray-200">
								<tr v-for="tarif in tarifs" :key="tarif.id">
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{ tarif.id }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{  tarif.jenis_tarif  }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{ tarif.tipe_tindakan }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{ $filters.currency(tarif.biaya) }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
										<Link :href="route('tarifs.edit', tarif.id)" class="text-indigo-600 hover:text-indigo-900">Edit</Link>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<pagination :pagination="meta"></pagination>
    </Content>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/AppLayout.vue'
import Content from '@/Layouts/Content.vue'
import Breadcrumb from '@/Components/Breadcrumb.vue'
import BreezeButton from '@/Components/Button.vue'
import UserTable from './UserTable.vue'
import Pagination from '@/Components/Pagination';
import {throttle} from "lodash";
import FormInput from '@/Components/FormInput.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
	layout: BreezeAuthenticatedLayout,
    data(){
      return {
        term: ''
      }
    },
	methods: {
	  search: throttle(function (term) {
		this.$inertia.get( '/tarifs', { term: this.term }, {
		  preserveState: true,
		  preserveScroll: true,
		  replace: true
		})
	  }, 600),
	},
	props: [
	  'tarifs', 
	  'asuransi', 
	  'meta'
	],
    components: {
	  Pagination,
        BreezeAuthenticatedLayout,
		Breadcrumb,
		Content,
        BreezeButton,
        Head,
		FormInput,
        Link,
        UserTable,
    },
	computed : {
	  breadcrumb(){
		if (this.asuransi) {
			return [
			  {
				  label : 'Asuransi',
				  route : '/asuransis'
			  },
			  {
				  label : this.asuransi.nama,
				  route : '/asuransis /' + this.asuransi.id
			  },
			  {
				label : 'Tarif'
			  },
			];
		} else {
			return [
			  {
				label : 'Tarif'
			  },
			];
		}
	  },
	}
}
</script>
