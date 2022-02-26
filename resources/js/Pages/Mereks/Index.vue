<template>
    <Head title="Dashboard" />
    <Content>
		<template #headerLeft>
          <breadcrumb :lists="breadcrumb"/>
		</template>
        <template #headerRight>
			<Link href="/formulas/create">
				<BreezeButton>
					Create Formula
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
										Merek
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Fornas
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Stok
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Harga Jual
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Komposisi
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Rak
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
										Formula
									</th>
									<th scope="col" class="relative px-6 py-3">
										<span class="sr-only">Edit</span>
									</th>
								</tr>
							</thead>
							<tbody class="bg-white divide-y divide-gray-200">
								<tr v-for="merek in mereks.data" :key="merek.id">
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{ merek.merek_text }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{ merek.rak.formula.fornas  ? 'Fornas' : 'Bukan' }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{ merek.rak.stok }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													{{ $filters.currency( merek.rak.harga_jual ) }}
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													<ul>
														<li v-for="komposisi in merek.rak.formula.komposisi" :key="komposisi.id">
															{{ komposisi.generik.generik }} {{ komposisi.bobot }} {{ komposisi.satuan.satuan }}
														</li>
													</ul>
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													<Link :href="route('raks.edit', merek.rak_id)" class="text-indigo-600 hover:text-indigo-900">
													{{ merek.rak.nomor_rak }}
													</Link>
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="flex items-center">
											<div class="ml-4">
												<div class="text-sm text-gray-500">
													<Link :href="route('formulas.edit', merek.rak.formula_id)" class="text-indigo-600 hover:text-indigo-900">
													{{ merek.rak.formula_id }}
													</Link>
												</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
										<Link :href="route('mereks.edit', merek.id)" class="text-indigo-600 hover:text-indigo-900">Edit</Link>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<pagination :pagination="mereks"></pagination>
    </Content>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/AppLayout.vue'
import Content from '@/Layouts/Content.vue'
import Pagination from '@/Components/Pagination';
import Breadcrumb from '@/Components/Breadcrumb';
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
    props: ['mereks'],
	methods:{
	  search: throttle(function (term) {
		this.$inertia.get( '/mereks', { term: this.term }, {
		  preserveState: true,
		  preserveScroll: true,
		  replace: true
		})
	  }, 600),
	},
	layout: BreezeAuthenticatedLayout,
    components: {
		Content,
		Breadcrumb,
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
			label : 'Merek'
		  }
		];
		return bread;
	  },
	}
}
</script>
