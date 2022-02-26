<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                User
                <div class="float-right">
                    <Link href="/formulas/create">
                        <BreezeButton>
                            Create Formula
                        </BreezeButton>
                    </Link>
                </div>
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
						<div class="flex flex-col">
						  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
							<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
							  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
								<table class="min-w-full divide-y divide-gray-200">
								  <thead class="bg-gray-50">
									<tr>
									  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
										Merek
									  </th>
									  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
										Fornas
									  </th>
									  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
										Stok
									  </th>
									  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
										Harga Jual
									  </th>
									  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
										Komposisi
									  </th>
									  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
										Rak
									  </th>
									  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
										Formula
									  </th>
									  <th scope="col" class="relative px-6 py-3">
										<span class="sr-only">Edit</span>
									  </th>
									</tr>
								  </thead>
								  <tbody class="bg-white divide-y divide-gray-200">
									<tr v-for="merek in mereks" :key="merek.id">
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
									  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
										<Link :href="route('mereks.edit', merek.id)" class="text-indigo-600 hover:text-indigo-900">Edit</Link>
									</td>
								</tr>
							  </tbody>
							</table>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
			  </div>
		  </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/AppLayout.vue'
import BreezeButton from '@/Components/Button.vue'
import UserTable from './UserTable.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    props: ['mereks'],
    components: {
        BreezeAuthenticatedLayout,
        BreezeButton,
        Head,
        Link,
        UserTable,
    },
}
</script>
