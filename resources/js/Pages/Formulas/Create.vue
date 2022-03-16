<template>
    <Head title="Formula" />
    <Content>
        <template #headerLeft>
          <breadcrumb :lists="breadcrumb"/>
        </template>
		  <div>
			<div class="md:grid md:grid-cols-3 md:gap-6">
			  <div class="md:col-span-1">
				<div class="px-4 sm:px-0">
					<h3 class="mb-6 text-lg font-medium text-gray-900 leading-6">Formula
						<div v-if="formula" class="float-right">
							<Link :href="'/formulas/' + formula.id + '/create/rak'">
								<BreezeButton>
									Create Rak
								</BreezeButton>
							</Link>
						</div>
					</h3>
				  <p class="mt-1 text-sm text-gray-600">
					<div v-if="formula" class="overflow-visible bg-white shadow-sm sm:rounded-lg">
					  <div class="p-4 text-orange-700 bg-orange-100 border-l-4 border-orange-500" role="alert">
						<p class="font-bold">Perhatian!</p>
						<p>Perubahan yang Anda lakukan disini akan berpengaruh pada obat-obat berikut</p>
						<br>
						<div>
						  <ul class="text-2xl font-bold">
							<li v-for="(rak, index) in formula.rak" :key="index">
							  Rak : {{ rak.nomor_rak }}
							  <ul class="ml-6 text-xl font-bold">
								<li v-for="(merek, index) in rak.merek" :key="index">
								  {{ merek.merek_text }}
								</li>
							  </ul>
							</li>
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
				  <div v-if="formula" class="flex flex-col mb-6">
					<div class="-my-2 overflow-visible sm:-mx-6 lg:-mx-8">
					  <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
						<div class="overflow-visible border-b border-gray-200 shadow sm:rounded-lg">
						  <table class="min-w-full divide-y divide-gray-200">
							<thead class="bg-gray-50">
							  <tr>
								<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
								  Merek
								</th>
								<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
								  Exp Date
								</th>
								<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
								  Unit / Paket
								</th>
								<th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
								  Nomor Rak
								</th>
							  </tr>
							</thead>
							<tbody class="bg-white divide-y divide-gray-200">
							  <tr v-for="merek in mereks" :key="merek.id">
								<td class="px-6 py-4 whitespace-nowrap">
								  <div class="flex items-center">
									<div class="ml-4">
									  <div class="text-sm font-medium text-gray-900">
										<Link :href="route('mereks.edit', merek.id)" class="text-indigo-600 hover:text-indigo-900">
										  {{ merek.merek_text }}
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
								  <div class="flex items-center">
									<div class="ml-4">
									  <div class="text-sm font-medium text-gray-900">
										<Link :href="route('raks.edit', merek.rak_id)" class="text-indigo-600 hover:text-indigo-900">
											{{ merek.rak.nomor_rak }}
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
				<form @submit.prevent="submit">
				  <div class="shadow sm:rounded-md sm:overflow-visible">
					<div class="px-4 py-5 bg-white space-y-6 sm:p-6">

					  <div v-if="!formula" class="grid sm:grid-cols-3 gap-3">
						<form-input
						  label    = "merek"
						  :colspan = "3"
						  :message = "form.errors.merek"
						  v-model  = "form.merek"
						  ref      = "merek"
						/>

					  <div class="col-span-6 sm:col-span-6">
						<label class="block text-sm font-medium text-gray-700">Nomor Rak</label>
						<input 
						  v-model="form.nomor_rak"
						  type="text"
						  ref="nomor_rak"
						  :class="form.errors.nomor_rak ? 'form-input block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red sm:text-sm sm:leading-5' : 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md' "
						  @input="inputNomorRak"
						/>
						<div v-show="form.errors.nomor_rak">
							<p class="text-sm text-red-600" v-html="form.errors.nomor_rak">
							</p>
						</div>
					  </div>
						<form-input
						  label    = "unit/paket"
						  :colspan = "1"
						  :message = "form.errors.unit_tiap_paket"
						  v-model  = "form.unit_tiap_paket"
						/>
						<form-date
						  label    = "exp_date"
						  :message = "form.errors.exp_date"
						  v-model  = "form.exp_date"
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
						/>
						<form-input
						  label    = "stok"
						  :message = "form.errors.stok"
						  v-model  = "form.stok"
						/>
						<form-select
						  label    = "kelas_obat_id"
						  :message = "form.errors.kelas_obat_id"
						  v-model  = "form.kelas_obat_id"
						  :options = "kelas_obats"
						/>
					  </div>

					<div class=" col-span-6 sm:col-span-6">
					  <div class="flex flex-col">
						<div class="-my-2 overflow-visible sm:-mx-6 lg:-mx-8 ">
						  <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 ">
							<div class="overflow-visible border-b border-gray-200 shadow sm:rounded-lg ">
							  <table class="min-w-full divide-y divide-gray-200 ">
								<thead class="bg-gray-50">
								  <tr>
									  <th scope="col" class="w-6/12 px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
									  Generiks
									</th>
									<th scope="col" class="w-2/12 px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
									  Bobot
									</th>
									<th scope="col" class="w-3/12 px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
									  Satuan
									</th>
									<th scope="col" class="relative w-1/12 px-6 py-3">
									  <span class="sr-only">Input</span>
									</th>
								  </tr>
								</thead>
								<tbody class="bg-white divide-y divide-gray-200">
								  <tr v-for="(komposisi, index) in form.komposisis" :key="index">
									  <td class="w-6/12 px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
									<!-- Parent Component -->

									  <form-select-async 
										name="generik"
										searchable_column="generik"
										:route="formula? '/formulas/' + formula.id + '/edit' : '/formulas/create'"
										:options="generiks"
										:index="index"
										:value="formula? formula.komposisi[index].generik : ''"
										@updateForm="updateFormGenerik"
										ref="generik"
									  />
									</td>
									<td class="w-2/12 px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
									  <FormInput v-model="komposisi.bobot" @keypress="this.isNumber($event)"/>
									</td>
									<td class="w-3/12 px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
									  <FormSelect v-model="komposisi.satuan_id" :options="satuans" />
									</td>
									<td class="w-1/12 px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
										<BreezeButton
											type="button"
											@click="remove(index)"
											v-show="index || ( !index && form.komposisis.length > 1)"
											class="mr-2"
										>
											<svg 
												xmlns="http://www.w3.org/2000/svg" 
												class="w-4 h-4 fill-current flex-no-shrink"
												fill="none" 
												viewBox="0 0 24 24" 
												stroke="currentColor"
											>
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
											</svg>
										</BreezeButton>
										<BreezeButton
											v-show="index == form.komposisis.length-1"
											type="button"
											v-if="enable_add"
											@click="add(index)"
											:class="!index? 'w-full' : ''"
										> 
											<svg 
											xmlns="http://www.w3.org/2000/svg" 
											class="w-4 h-4 mx-auto fill-current flex-no-shrink"
											fill="none" 
											viewBox="0 0 24 24" 
											stroke="currentColor"
											>
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
											</svg>
										</BreezeButton>
									</td>
								  </tr>
								</tbody>
							  </table>
							</div>
						  </div>
						</div>
					  </div>
						<div v-show="form.errors.komposisis">
							<p class="text-sm text-red-600" v-html="form.errors.komposisis">
							</p>
						</div>
					</div>
					  <div class="grid grid-cols-3 gap-6">
						<form-select
						  label    = "fornas"
						  :message = "form.errors.fornas"
						  v-model  = "form.fornas"
						  :options = "{ '' : '-Pilih-', 1 : 'Fornas', 0 : 'Bukan Fornas' }"
						  ref="fornas"
						/>
						<form-textarea
						  label    = "Indikasi"
						  :message = "form.errors.indikasi"
						  v-model  = "form.indikasi"
						/>
						<form-textarea
						  label    = "Kontraindikasi"
						  :message = "form.errors.kontraindikasi"
						  v-model  = "form.kontraindikasi"
						/>
						<form-textarea
						  label    = "efek_samping"
						  :message = "form.errors.efek_samping"
						  v-model  = "form.efek_samping"
						/>
						<form-select-async 
						  name="aturan_minum"
						  searchable_column="aturan_minum"
						  :route="formula? '/formulas/' + formula.id + '/edit' : '/formulas/create'"
						  label="Aturan Minum"
						  :value="formula? formula.aturan_minum : ''"
						  :options="aturan_minums"
						  @updateForm="updateForm"
						/>
						<form-select
						  label    = "dijual_bebas"
						  :message = "form.errors.dijual_bebas"
						  v-model  = "form.dijual_bebas"
						  :options="{ '' : 'Pilih', 1 : 'Dijual Bebas', 0: 'Tidak dijual bebas' }"
						/>
						<form-select
						  label    = "sediaan_id"
						  :message = "form.errors.sediaan_id"
						  v-model  = "form.sediaan_id"
						  :options = 'sediaans'
						/>
						<form-textarea
						  label    = "peringatan"
						  :message = "form.errors.peringatan"
						  v-model  = "form.peringatan"
						/>
						<form-select
						  label    = "boleh_dipuyer"
						  :message = "form.errors.boleh_dipuyer"
						  v-model  = "form.boleh_dipuyer"
						  :options = "{ '' : 'Pilih', 0 : 'Tidak dipuyer' , 1: 'Boleh dipuyer' }"
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
    </Content>
</template>
<script>
// @ts-ignore
import BreezeAuthenticatedLayout from '@/Layouts/AppLayout.vue'
import Content from '@/Layouts/Content.vue'
import BreezeButton from '@/Components/Button.vue'
import Breadcrumb from '@/Components/Breadcrumb.vue'
import FormInput from '@/Components/FormInput.vue'
import FormTextarea from '@/Components/FormTextarea.vue'
import FormSelect from '@/Components/FormSelect.vue'
import FormSelectObject from '@/Components/FormSelectObject.vue'
import FormSelectAsync from '@/Components/FormSelectAjax2.vue'
import FormDate from '@/Components/FormDate.vue'
import FormCurrency from '@/Components/FormCurrency.vue'
import FormResponsiveTable from './FormResponsiveTable.vue'
import FormImage from '@/Components/FormImage.vue'
import { useForm } from "@inertiajs/inertia-vue3";
import { Head, Link } from '@inertiajs/inertia-vue3';
import axios from 'axios'
import { ref } from "vue"

export default {
    data(){
      return{
        generik:    '',
        bobot:      '',
        satuan:     '',
        form: this.$inertia.form({
          merek: '',
          nomor_rak: '',
          exp_date: '',
          unit_tiap_paket: '',
          harga_beli: 0,
          harga_jual: 0,
          stok_minimal: '',
          stok: '',
          fornas:           this.formula ? this.formula.fornas : '',
          kelas_obat_id:    this.formula ? this.formula.kelas_obat_id : '',
          indikasi:         this.formula ? this.formula.indikasi : '',
          kontraindikasi:   this.formula ? this.formula.kontraindikasi : '',
          efek_samping:     this.formula ? this.formula.efek_samping : '',
          dijual_bebas:     this.formula ? this.formula.dijual_bebas : '',
          sediaan_id:       this.formula ? this.formula.sediaan_id : '',
          aturan_minum_id:  this.formula ? this.formula.aturan_minum_id : '',
          peringatan:       this.formula ? this.formula.peringatan : '',
          boleh_dipuyer:    this.formula ? this.formula.boleh_dipuyer : '',
          golongan_obat_id: this.formula ? this.formula.golongan_obat_id : '',
		  komposisis:       this.formula && this.formula.komposisis.length ? this.formula.komposisis : [
			  {   
				  'generik_id' : '',
				  'bobot' : '',
				  'satuan_id' : ''
			  },
		  ],
          _method:           this.formula ? 'PUT' :'POST',
        })
      }
    },
    props: { 
      errors:        Object,
      formula:        Object,
      mereks:         Object,
	  generiks: {
		type: Array,
		default: () => []
	  },
      aturan_minums: Object,
      satuans:       Object,
      sediaans:      Object,
      kelas_obats:   Object,
    },
    methods: {
      submit(){
		if (this.formula) {
		  this.form.post('/formulas/' + this.formula.id, {
			preserveState: (page) => Object.keys(page.props.errors).length
		  });
		} else {
		  this.form.post('/formulas', {
			preserveState: (page) => Object.keys(page.props.errors).length
		  });
		}
      },
      updateFormGenerik(obj){
		  console.log('obj');
		  console.log(obj);
		  this.form.komposisis[obj.index][obj.name + '_id'] = obj.value;
      },
	  updateForm(obj){
		this.form.aturan_minum_id = obj.value
	  },
	  add(index) {
		  if (
			  this.form.komposisis[index].generik_id !== '' &&
			  this.form.komposisis[index].satuan_id !== '' &&
			  this.form.komposisis[index].bobot !== ''
		  ) {
			  this.form.komposisis.push({
				  'generik_id' : '',
				  'satuan_id' : '',
				  'bobot' : ''
			  })
		  } else {
			  alert('Harus lengkap dulu sebelum menambahkan');
		  }
	  },
	  remove(k){
		  console.log('remove');
		  this.form.komposisis.splice(k, 1);
	  },

      deleteKomposisi(index){
        this.form.komposisis.splice(index, 1);
      },
	  inputNomorRak(){
		axios
	  }
    },
	layout: BreezeAuthenticatedLayout,
    components: {
        BreezeButton,
		Breadcrumb,
		Content,
        Head,
        Link,
		FormSelectAsync,
        axios,
        FormInput,
        FormResponsiveTable,
        FormImage,
        FormCurrency,
        FormSelect,
        FormSelectObject,
        FormDate,
        FormTextarea,
        useForm,
    },
    mounted(){
    },
	computed : {

		enable_add(){
			if (
				this.form.komposisis[this.form.komposisis.length -1].generik_id !== '' &&
				this.form.komposisis[this.form.komposisis.length -1].satuan_id !== '' &&
				this.form.komposisis[this.form.komposisis.length -1].bobot !== ''
			) {
				return true
			} else {
				return false
			}
		},
	  breadcrumb(){
		let bread = [
		  {
			label : 'Formula',
			route : '/formulas'
		  },
		{
			label : 'Create'
		}
		];
		return bread;
	  },
	}
}
</script>
