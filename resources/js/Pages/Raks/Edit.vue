<template>
    <Head title="Merek Edit" />
    <Content>
        <template #headerLeft>
          <breadcrumb :lists="breadcrumb"/>
		</template>
		<template #headerRight>
		  <RedBreezeButton @click="destroy">
			  Delete
		  </RedBreezeButton>
		</template>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-visible bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                      <div>
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                          <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
							  <h3 class="mb-6 text-lg font-medium text-gray-900 leading-6">
								Profile
								<div v-if="rak" class="float-right">
									<Link :href="'/raks/' + rak.id + '/create/merek'">
										<BreezeButton>
											Create Merek
										</BreezeButton>
									</Link>
								</div>
							  </h3>
								<div v-if="formula" class="flex flex-col">
									<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
									  <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
										<div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
										  <table class="min-w-full divide-y divide-gray-200">
											<thead class="bg-gray-50">
											  <tr>
												<th colspan="2" scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
													Formula
												</th>
											  </tr>
											</thead>
											<tbody class="bg-white divide-y divide-gray-200">
											  <tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
														<div class="text-sm font-medium text-gray-900">
															Indikasi
														</div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														{{ formula.indikasi }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
												<tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
														<div class="text-sm font-medium text-gray-900">
															Kontraindikasi
														</div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														{{ formula.kontraindikasi }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
											<tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
														<div class="text-sm font-medium text-gray-900">
															Efek Samping
														</div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														{{ formula.efek_samping }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
												<tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
														<div class="text-sm font-medium text-gray-900">
															Dijual Bebas
														</div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														{{ formula.dijual_bebas ? 'Dijual Bebas' : 'Tidak dijual bebas' }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
												<tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
														<div class="text-sm font-medium text-gray-900">
															Fornas
														</div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														{{ formula.fornas ? 'Fornas' : 'Bukan Fornas' }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
												<tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
														<div class="text-sm font-medium text-gray-900">
															Sediaan
														</div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														{{ formula.sediaan.sediaan }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
												<tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
														<div class="text-sm font-medium text-gray-900">
															Aturan Minum
														</div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														{{ formula.aturan_minum.aturan_minum }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
												<tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
														<div class="text-sm font-medium text-gray-900">
															Peringatan
														</div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														{{ formula.peringatan }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
												<tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
														<div class="text-sm font-medium text-gray-900">
															Boleh Dipuyer
														</div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														{{ formula.boleh_dipuyer ? 'Boleh Dipuyer' : 'Tidak boleh dipuyer' }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
												<tr>
												<td colspan="2" class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
														<div class="text-sm font-medium text-gray-900">
															<ul>
																<li v-for="komposisi in formula.komposisi">
																	{{ komposisi.generik.generik }} {{ komposisi.bobot }} {{ komposisi.satuan.satuan }}
																</li>
															</ul>
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
                              <p v-if="rak" class="mt-1 text-sm text-gray-600">
								<div class="overflow-visible bg-white shadow-sm sm:rounded-lg">
								  <div class="p-4 text-orange-700 bg-orange-100 border-l-4 border-orange-500" role="alert">
									<p class="font-bold">Perhatian!</p>
									<p>Perubahan yang Anda lakukan disini akan berpengaruh pada obat-obat berikut</p>
									<br>
									<div>
									  <ul class="text-xl font-bold list-disc">
										<li v-for="(merek, index) in rak.merek" :key="merek.id" v-text="merek.merek"></li>
									  </ul>
									</div>
									<br>
									<p>Karena masuk ke dalam Rak yang sama</p>
								  </div>
								</div>
                              </p>
                            </div>
                          </div>
                          <div class="mt-5 md:mt-0 md:col-span-2">
                            <form @submit.prevent="submit">
                              <div class="shadow sm:rounded-md sm:overflow-visible">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
								  <div v-if="!formula" class="flex flex-col">
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
												  Exp Date
												</th>
												<th scope="col" colspan="2" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
												  Unit / Paket
												</th>
											  </tr>
											</thead>
											<tbody class="bg-white divide-y divide-gray-200">
											  <tr v-for="merek in rak.merek" :key="merek.id">
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														<Link :href="route('raks.edit', merek.rak_id)" class="text-indigo-600 hover:text-indigo-900">
														  {{ merek.merek }}
														</Link>
													  </div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														{{ $filters.formatDate(merek.exp_date )}}
													  </div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">

														{{ merek.unit_tiap_paket }}

													  </div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-end">
													<div class="ml-4">
													  <div class="text-sm font-medium text-right text-gray-900">
														<Link :href="route('mereks.edit', merek.id)" class="text-indigo-600 hover:text-indigo-900">
														  <BreezeButton class="ml-4">
															Edit
														  </BreezeButton>
														</Link>
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

								  <div class="flex flex-col" v-if="rak">
									<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
									  <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
										<div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
										  <table class="min-w-full divide-y divide-gray-200">
											<thead class="bg-gray-50">
											  <tr>
												<th scope="col" colspan="3" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase col-span-3">
												  Formula
												  <div class="float-right">
													<Link :href="route('formulas.edit', rak.formula_id)" class="text-indigo-600 hover:text-indigo-900">
													  <BreezeButton class="ml-4">
														Edit
													  </BreezeButton>
													</Link>
												  </div>
												</th>
											  </tr>
											</thead>
											<tbody class="bg-white divide-y divide-gray-200">
											  <tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														Indikasi
														<!-- 
														  {{ komposisi.generik.generik }} {{ komposisi.bobot }} {{ komposisi.satuan.satuan }}
														-->
													  </div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														{{ rak.formula.indikasi }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
											  <tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														Kontraindikasi
													  </div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														{{ rak.formula.kontraindikasi }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
											  <tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														Efek Samping
													  </div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														  {{ rak.formula.efek_samping }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
											  <tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														Dijual Bebass
														<!-- 
														  {{ komposisi.generik.generik }} {{ komposisi.bobot }} {{ komposisi.satuan.satuan }}
														-->
													  </div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														  {{ rak.formula.dijual_bebas ? 'Dijual Bebas' : 'Tidak dijual bebas' }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
											  <tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														Fornas
														<!-- 
														  {{ komposisi.generik.generik }} {{ komposisi.bobot }} {{ komposisi.satuan.satuan }}
														-->
													  </div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														  {{ rak.formula.fornas }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
											  <tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														Sediaan
														<!-- 
														  {{ komposisi.generik.generik }} {{ komposisi.bobot }} {{ komposisi.satuan.satuan }}
														-->
													  </div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														  {{ rak.formula.sediaan.sediaan }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
											  <tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														Aturan Minum
														<!-- 
														  {{ komposisi.generik.generik }} {{ komposisi.bobot }} {{ komposisi.satuan.satuan }}
														-->
													  </div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														  {{ rak.formula.aturan_minum.aturan_minum }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
											  <tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														peringatan
													  </div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														  {{ rak.formula.peringatan }}
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
											  <tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														Komposisi
													  </div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														<ul>
														  <li v-for="komposisi in rak.formula.komposisi" :key="komposisi.id">
															  {{ komposisi.generik.generik }} {{ komposisi.bobot }} {{ komposisi.satuan.satuan }}
														  </li>
														</ul>
													  </div>
													</div>
												  </div>
												</td>
											  </tr>
											  <tr>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														Dipuyer
													  </div>
													</div>
												  </div>
												</td>
												<td class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div class="text-sm font-medium text-gray-900">
														  {{ rak.formula.boleh_dipuyer_text }}
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
                                  <div v-if="formula" class="grid sm:grid-cols-3 gap-6">
									  <form-input
									  label    = "merek"
									  :message = "errors.merek"
									  v-model  = "form.merek"
									  />
									  <form-input
									  label    = "unit_tiap_paket"
									  :message = "errors.unit_tiap_paket"
									  v-model  = "form.unit_tiap_paket"
									  />
									  <form-date
									  label    = "exp_date"
									  :message = "errors.exp_date"
									  v-model  = "form.exp_date"
									  />
                                  </div>
                                  <div class="grid grid-cols-3 gap-6">
                                    <form-input
                                      label    = "nomor_rak"
                                      :colspan = "1"
                                      :message = "form.errors.nomor_rak"
                                      v-model  = "form.nomor_rak"
                                    />
                                    <form-currency
                                      label    = "harga_beli"
                                      :message = "form.errors.harga_beli"
                                      v-model  = "form.harga_beli"
                                      :options = "{currency: 'IDR'}"
                                    />
                                    <form-currency
                                      label    = "harga_jual"
                                      :message = "form.errors.harga_jual"
                                      v-model  = "form.harga_jual"
                                      :options = "{currency: 'IDR'}"
                                    />
                                    <form-input
                                      label    = "stok_minimal"
                                      :message = "form.errors.stok_minimal"
                                      v-model  = "form.stok_minimal"
									 @keypress="this.isNumber($event)"
                                    />
                                    <form-input
                                      label    = "stok"
                                      :message = "form.errors.stok"
									 @keypress="this.isNumber($event)"
                                      v-model  = "form.stok"
                                    />
                                    <form-select
                                      label    = "kelas_obat_id"
                                      :message = "form.errors.kelas_obat_id"
                                      v-model  = "form.kelas_obat_id"
									  :options = "kelas_obats"
                                    />
                                </div>
                                <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                  <BreezeButton type="submit" class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                      Save
                                  </BreezeButton>
                                </div>
                              </div>
                              </div>
                            </form>
                        </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </Content>
</template>

<script>
// @ts-ignore
import Multiselect from '@vueform/multiselect'
import BreezeAuthenticatedLayout from '@/Layouts/AppLayout.vue'
import Content from '@/Layouts/Content.vue'
import BreezeButton from '@/Components/Button.vue'
import Breadcrumb from '@/Components/Breadcrumb.vue'
import RedBreezeButton from '@/Jetstream/Redbutton.vue'
import FormInput from '@/Components/FormInput.vue'
import FormTextarea from '@/Components/FormTextarea.vue'
import FormSelect from '@/Components/FormSelect.vue'
import FormSelectObject from '@/Components/FormSelectObject.vue'
import FormSelectAjax from '@/Components/FormSelectAjax.vue'
import FormDate from '@/Components/FormDate.vue'
import FormCurrency from '@/Components/FormCurrency.vue'
import FormResponsiveTable from './FormResponsiveTable.vue'
import FormImage from '@/Components/FormImage.vue'
import { useForm, Link } from "@inertiajs/inertia-vue3";
import { reactive, ref } from "vue";
import { Head } from '@inertiajs/inertia-vue3';
import axios from 'axios'

export default {
    data(){
      return{
        example6: {
          filterResults: false,
          minChars: 3,
          clearOnSearch: true,
          closeOnSelect : true,
          clearOnSelect: true,
          resolveOnLoad: false,
          delay: 0,
          searchable: true,
          options: async (query) => {
            return await fetchLanguages(query)
          }
        },
        generik:    '',
        bobot:      '',
        satuan:     '',
        form: this.$inertia.form({
		  merek:          '',
		  exp_date:       '',
		  unit_tiap_paket: '',
		  formula_id:     this.formula ? this.formula.id : '',
		  nomor_rak:      this.rak ? this.rak.nomor_rak : '',
		  harga_beli:     this.rak ? this.rak.harga_beli : '',
		  harga_jual:     this.rak ? this.rak.harga_jual : '',
		  stok_minimal:   this.rak ? this.rak.stok_minimal : '',
		  stok:           this.rak ? this.rak.stok : '',
		  kelas_obat_id:  this.rak ? this.rak.kelas_obat_id : '',
          _method:        this.rak ? 'PUT' :'POST',
        })
      }
    },
    props: { 
      errors:      Object,
      rak:         Object,
      formula:     Object,
      kelas_obats: Object,
    },
    methods: {
      submit(){
		  if (this.rak) {
			this.form.post('/raks/' + this.rak.id, {
			  preserveState: (page) => Object.keys(page.props.errors).length
			});
		  } else {
			this.form.post('/raks', {
			  preserveState: (page) => Object.keys(page.props.errors).length
			});
		  }
      },
    },
	layout: BreezeAuthenticatedLayout,
    components: {
        Content,
		Breadcrumb,
        BreezeButton,
        RedBreezeButton,
        Head,
        Multiselect,
        axios,
        FormInput,
        FormResponsiveTable,
        Link,
        FormImage,
        FormCurrency,
        FormSelect,
        FormSelectAjax,
        FormSelectObject,
        FormDate,
        FormTextarea,
        useForm,
    },
	computed : {
	  breadcrumb(){
		let bread = [
		  {
			label : 'Obat',
			route : '/mereks'
		  },
			{
			label : 'Raks',
			route : '/mereks'
		  },
		{
			label : this.rak? 'Edit' : 'Create'
		}
		];
		return bread;
	  },
	}
}
</script>
