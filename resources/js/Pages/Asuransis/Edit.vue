<template>
	<Content>
		<Head title="Asuransi"/>
		<template #headerLeft>
			<breadcrumb :lists="breadcrumb"/>
		</template>
		<template #headerRight>
			<div v-if="asuransi" class="float-right">
				<RedBreezeButton @click="destroy">
					Delete
				</RedBreezeButton>
			</div>
		</template>
		<div>
			<div class="md:grid md:grid-cols-3 md:gap-6">
				<div class="md:col-span-1">
					<div class="px-4 sm:px-0">
						<h3 v-if="asuransi" class="font-medium text-gray-900 tkxt-lg leading-6">{{ asuransi.nama }}</h3>
						<p class="mt-1 text-sm text-gray-600">
							a
						</p>
					</div>
				</div>
				<div class="mt-5 md:mt-0 md:col-span-2">
					<form @submit.prevent="submit">
						<div class="shadow sm:rounded-md sm:overflow-visible">
							<div class="px-4 py-5 bg-white space-y-6 sm:p-6">
								<div class="grid sm:grid-cols-3 gap-6">
								<form-input
									 label    = "nama"
									 :colspan = "3"
									 :message = "form.errors.nama"
									 v-model  = "form.nama"
									 ref      = "asuransi"
									 />
										<form-textarea
			  label    = "alamat"
			  :message = "errors.alamat"
			  v-model  = "form.alamat"
			  />
											<form-date
			   label    = "tanggal_berakhir"
			   :message = "errors.tanggal_berakhir"
			   v-model  = "form.tanggal_berakhir"
			   />
												<form-textarea
				label    = "alamat_penagihan"
				:message = "errors.alamat_penagihan"
				v-model  = "form.alamat_penagihan"
				/>
													<form-textarea
				 label    = "catatan_pelayanan_gigi"
				 :message = "errors.catatan_pelayanan_gigi"
				 v-model  = "form.catatan_pelayanan_gigi"
				 />
														<form-select
				  label    = "tipe_asuransi_id"
				  :message = "errors.tipe_asuransi_id"
				  v-model  = "form.tipe_asuransi_id"
				  :options = 'tipe_asuransis'
				  />
															<form-input
				   label    = "kali_obat"
				   :message = "errors.kali_obat"
				   @keypress="this.isNumber($event)"
				   v-model  = "form.kali_obat"
				   />
																<form-input
					label    = "kata_kunci"
					:message = "errors.kata_kunci"
					v-model  = "form.kata_kunci"
					/>
																	<form-select
					 label    = "aktif"
					 :message = "errors.aktif"
					 v-model  = "form.aktif"
					 :options="aktifs"
					 />
																		<form-select
					  label    = "pelunasan_transfer"
					  :message = "errors.pelunasan_transfer"
					  v-model  = "form.pelunasan_transfer"
					  :options = "pelunasan_transfers"
					  />
								</div>
								<div :class="colspan? 'col-span-' + colspan + ' sm:col-span-6'  :  'col-span-6 sm:col-span-6'">
									<div class="flex flex-col">
										<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
											<div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
												<div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
													<table class="min-w-full divide-y divide-gray-200">
														<thead class="bg-gray-50">
															<tr>
																<th colspan="3" scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
																	Phone
																</th>
															</tr>
														</thead>
														<tbody class="bg-white divide-y divide-gray-200">
															<tr v-for="(phone, index) in form.phones" :key="index">
																<td class="w-2/5 px-6 py-4 whitespace-nowrap">
																	<form-input
					 :message    = "errors.number"
					 placeholder = "number"
					 @input     = "phoneInput(index)"
					 v-model     = "phone.number"
					 ref         = 'phone_number'
					 />
																</td>
																<td class="w-2/5 px-6 py-4 whitespace-nowrap">
																	<form-input
					 :message    = "errors.description"
					 placeholder = "description"
					 @input      = "phoneInput(index)"
					 v-model     = "phone.description"
					 />
																</td>
																<td class="w-1/5 px-6 py-4 text-xs align-bottom whitespace-nowrap">
																	<BreezeButton
					 type="button"
	  @click="remove(index)"
	  v-show="index || ( !index && form.phones.length > 1)"
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
					 v-show="index == form.phones.length-1"
	  type="button"
	v-if="enable_phone_add"
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
									<div class="flex flex-col">
										<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
											<div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
												<div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
													<table class="min-w-full divide-y divide-gray-200">
														<thead class="bg-gray-50">
															<tr>
																<th colspan="1" scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
																	Email
																</th>
															</tr>
														</thead>
														<tbody class="bg-white divide-y divide-gray-200">
															<tr v-for="(email, index) in form.emails" :key="index">
																<td class="w-2/5 px-6 py-4 whitespace-nowrap">
																	<form-input
					 :message = "errors.email"
					 placeholder ="email"
					 v-model  = "email.email"
					 ref="email"
	  />
																</td>
																<td class="w-1/5 px-6 py-4 text-xs align-bottom whitespace-nowrap">
																	<BreezeButton
					 type="button"
	  @click="removeEmail(index)"
	  v-show="index || ( !index && form.emails.length > 1)"
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
					 v-show="index == form.emails.length-1 && enable_email_add"
	  type="button"
	@click="addEmail(index)"
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
import BreezeAuthenticatedLayout from '@/Layouts/AppLayout.vue'
import Content from '@/Layouts/Content.vue'
import BreezeButton from '@/Components/Button.vue'
import RedBreezeButton from '@/Jetstream/Redbutton.vue'
import FormInput from '@/Components/FormInput.vue'
import FormTextarea from '@/Components/FormTextarea.vue'
import Breadcrumb from '@/Components/Breadcrumb.vue'
import FormSelect from '@/Components/FormSelect.vue'
import FormSelectObject from '@/Components/FormSelectObject.vue'
import FormSelectAsync from '@/Components/FormSelectAjax2.vue'
import FormDate from '@/Components/FormDate.vue'
import FormCurrency from '@/Components/FormCurrency.vue'
import FormImage from '@/Components/FormImage.vue'
import { useForm } from "@inertiajs/inertia-vue3";
import { Head, Link } from '@inertiajs/inertia-vue3';
import axios from 'axios'
import { ref } from "vue"

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
		  nama:                   this.asuransi? this.asuransi.nama : '',
		  alamat:                 this.asuransi? this.asuransi.alamat : '',
		  tanggal_berakhir:       this.asuransi? this.asuransi.tanggal_berakhir : '',
		  alamat_penagihan:       this.asuransi? this.asuransi.alamat_penagihan : '',
		  catatan_pelayanan_gigi: this.asuransi? this.asuransi.catatan_pelayanan_gigi : '',
		  tipe_asuransi_id:       this.asuransi? this.asuransi.tipe_asuransi_id : '',
		  kali_obat:              this.asuransi? this.asuransi.kali_obat : '',
		  coa_id:                 this.asuransi? this.asuransi.coa_id : '',
		  kata_kunci:             this.asuransi? this.asuransi.kata_kunci : '',
		  aktif:                  this.asuransi? this.asuransi.aktif : '1',
		  pelunasan_transfer:     this.asuransi? this.asuransi.pelunasan_transfer : '1',
		  emails:                 this.asuransi && this.asuransi.emails.length ? this.asuransi.emails : [
			  {
				  'email':        ''
			  }
		  ],
		  phones:                 this.asuransi && this.asuransi.phones.length ? this.asuransi.phones : [
			  {
				  'number':       '',
				  'description':  ''
			  }
		  ],
          _method:                this.asuransi ? 'PUT' :'POST',
        })
      }
    },
    props: { 
      errors:              Object,
      tipe_asuransis:      Object,
      asuransi:            Object,
      coas:                Object,
      aktifs:              Object,
      pelunasan_transfers: Object,
    },
	computed: {
		enable_phone_add(){
			if (
				this.form.phones[this.form.phones.length -1].number !== '' &&
				this.form.phones[this.form.phones.length -1].description !== ''
			) {
				return true
			} else {
				return false
			}
		},
		enable_email_add(){
			console.log('ayethis.form.emails[this.form.emails.length -1]');
			console.log(this.form.emails[this.form.emails.length -1]);
			if (
				this.form.emails[this.form.emails.length -1].email !== ''
			) {
				return true
			} else {
				return false
			}
		},
		  breadcrumb(){
			let bread = [
			  {
				route : '/asuransis',
				label : 'Asuransi'
			  },{
				label : this.asuransi? 'Edit' : 'Create'
			  }
			];
			return bread;
		  },
	},
    methods: {
      confirmDelete(e){
        console.log(e.target);
      },
      submit(){
		  if (this.asuransi) {
				this.form.post('/asuransis/' + this.asuransi.id , {
				  preserveState: (page) => Object.keys(page.props.errors).length
				});
		  } else {
			this.form.post('/asuransis' , {
			  preserveState: (page) => Object.keys(page.props.errors).length
			});
		  }
      },
      updateFormGenerik(obj){
        this.generik  = obj;
      },
	  updateForm(obj){
		this.form[obj.name + '_id'] = obj.value
	  },
      addKomposisi(){
        this.form.komposisis.push({
          'generik_id': this.generik.value,
          'generik':    this.generik.label,
          'bobot':      this.bobot,
          'satuan_id':  this.satuan.id,
          'satuan':     this.satuan.text,
        });
        this.generik = '';
        this.bobot   = '';
        this.satuan  = '';
		this.$refs.generik.focus()
		this.$refs.generik.emptyValue()
      },
      deleteKomposisi(index){
        this.form.komposisis.splice(index, 1);
      },
	  destroy(){
		  if (confirm('Anda yakin mau menghapus asuransi ini?')) {
			  this.$inertia.delete('/asuransis/' + this.asuransi.id);
		  }
	  },
	  phoneInput(index){
		  if (
			  this.form.phones[index].number !== '' &&
			  this.form.phones[index].description !== ''
		  ) {
			  this.disable_phone_add = false;
		  }
	  },
	  add(index) {
		  if (
			  this.form.phones[index].number !== '' &&
			  this.form.phones[index].description !== ''
		  ) {
			  this.form.phones.push({
				  'name' : '',
				  'description' : ''
			  })
		  } else {
			  alert('Harus lengkap dulu sebelum menambahkan');
		  }
	  },
	  remove(k){
		  console.log('remove');
		  this.form.phones.splice(k, 1);
	  },
	  addEmail(index) {
		  if (
			  this.form.emails[index].email !== ''
		  ) {
			  this.form.emails.push({
				  'email' : ''
			  })
		  } else {
			  alert('Email harus lengkap dahulu');
		  }
	  },
	  removeEmail(k){
		  console.log('removeEmail');
		  this.form.emails.splice(k, 1);
	  }
    },
	layout: BreezeAuthenticatedLayout,
    components: {
		Breadcrumb,
		Content,
        BreezeButton,
        Head,
        Link,
		FormSelectAsync,
        axios,
        FormInput,
        FormImage,
        FormCurrency,
        RedBreezeButton,
        FormSelect,
        FormSelectObject,
        FormDate,
        FormTextarea,
        useForm,
    },
    mounted(){
      this.$refs.asuransi.focus()
    }
}
</script>
