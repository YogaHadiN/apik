<template>
	<Content>
		<Head title="Pasien"/>
		<template #headerLeft>
			<breadcrumb :lists="breadcrumb"/>
		</template>
		<template #headerRight>
			<div v-if="pasien" class="float-right">
				<RedBreezeButton @click="destroy">
					Delete
				</RedBreezeButton>
			</div>
		</template>
		<div>
			<div class="md:grid md:grid-cols-3 md:gap-6">
				<div class="md:col-span-1">
					<div class="px-4 sm:px-0">
						<h3 v-if="pasien" class="font-medium text-gray-900 tkxt-lg leading-6">Edit Pasien</h3>
						<h3 v-else class="font-medium text-gray-900 tkxt-lg leading-6">Create Pasien</h3>
						<p class="mt-1 text-sm text-gray-600">
							Buat pasien baru
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
									:message = "errors.nama"
									v-model  = "form.nama"
									ref = 'nama'
									/>
									<form-input
									label    = "nama_peserta"
									:message = "form.errors.nama_peserta"
									v-model  = "form.nama_peserta"
									/>
									<form-select-async 
										label             = "Asuransi"
										searchable_column = "nama"
										name              = "asuransi_id"
										:route            = "pasien? '/pasiens/' + pasien.id + '/edit' : '/pasiens/create'"
										:value            = "pasien? pasien.asuransi : ''"
										:options          = "asuransis"
										@updateForm       = "updateForm"
										ref               = "asuransi_id"
									/>
									<form-input
									label    = "nomor_asuransi"
									:message = "form.errors.nomor_asuransi"
									v-model  = "form.nomor_asuransi"
									/>
									<form-select
									label    = "jenis_peserta"
									:message = "form.errors.jenis_peserta"
									v-model  = "form.jenis_peserta"
									:options = "jenis_peserta_options"
									/>
									<form-select
									label    = "sex"
									:message = "form.errors.sex"
									v-model  = "form.sex"
									:options="sex_options"
									/>
									<form-textarea
									label    = "alamat"
									:message = "form.errors.alamat"
									v-model  = "form.alamat"
									/>
									<form-date 
									label    = "tanggal_lahir"
									:message = "form.errors.tanggal_lahir"
									v-model  = "form.tanggal_lahir"
									/>
									<form-input
									label    = "nama_ayah"
									:message = "form.errors.nama_ayah"
									v-model  = "form.nama_ayah"
									/>
									<form-input
									label    = "nama_ibu"
									:message = "form.errors.nama_ibu"
									v-model  = "form.nama_ibu"
									/>
									<form-image 
										@updateForm="updateForm" 
										:message = "errors.image"
										name="image" 
										:existing_url="pasien?'/pasiens/' + pasien.id + '/get/image':'' "  
										:value="pasien?pasien.image:''" 
										label="image" 
									/>
									<form-image 
										@updateForm="updateForm" 
										:message = "errors.ktp_image"
										name="ktp_image" 
										:existing_url="pasien?'/pasiens/' + pasien.id + '/get/ktp_image':'' "  
										:value="pasien?pasien.ktp_image:''" 
										label="ktp_image" 
									/>
									<form-image 
										@updateForm="updateForm" 
										:message = "errors.ktp_image"
										name="ktp_image" 
										:existing_url="pasien?'/pasiens/' + pasien.id + '/get/ktp_image':'' "  
										:value="pasien?pasien.ktp_image:''" 
										label="ktp_image" 
									/>
									<form-image 
										@updateForm="updateForm" 
										:message = "errors.bpjs_image"
										name="bpjs_image" 
										:existing_url="pasien?'/pasiens/' + pasien.id + '/get/bpjs_image':'' "  
										:value="pasien?pasien.bpjs_image:''" 
										label="bpjs_image" 
									/>
									<form-input
										label    = "nomor_ktp"
										:message = "form.errors.nomor_ktp"
										v-model  = "form.nomor_ktp"
									/>
									<form-select
										label    = "jangan_disms"
										:message = "form.errors.jangan_disms"
										v-model  = "form.jangan_disms"
										:options="yesno_options"
									/>
									<form-select
										label    = "prolanis_ht"
										:message = "form.errors.prolanis_ht"
										v-model  = "form.prolanis_ht"
										:options = "yesno_options"
									/>
									<form-select
										label    = "prolanis_dm"
										:message = "form.errors.prolanis_dm"
										v-model  = "form.prolanis_dm"
										:options="yesno_options"
									/>
									<form-image 
										@updateForm="updateForm" 
										:message = "errors.prolanis_ht_flagging_image"
										name="prolanis_ht_flagging_image" 
										:existing_url="pasien?'/pasiens/' + pasien.id + '/get/prolanis_ht_flagging_image':'' "  
										:value="pasien?pasien.prolanis_ht_flagging_image:''" 
										label="prolanis_ht_flagging_image" 
									/>
									<form-image 
										@updateForm="updateForm" 
										:message = "errors.prolanis_dm_flagging_image"
										name="prolanis_dm_flagging_image" 
										:existing_url="pasien?'/pasiens/' + pasien.id + '/get/prolanis_dm_flagging_image':'' "  
										:value="pasien?pasien.prolanis_dm_flagging_image:''" 
										label="prolanis_dm_flagging_image" 
									/>
									<form-image 
										@updateForm="updateForm" 
										:message = "errors.kartu_asuransi_image"
										name="kartu_asuransi_image" 
										:existing_url="pasien?'/pasiens/' + pasien.id + '/get/kartu_asuransi_image':'' "  
										:value="pasien?pasien.kartu_asuransi_image:''" 
										label="kartu_asuransi_image" 
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
		yesno_options : {
			1 : 'Ya' ,
			0 : 'Tidak'
		},
		jenis_peserta_options: {
			1 : 'Peserta',
			0 : 'Keluarga peserta'
		},
		sex_options : {
			1 : 'Laki-laki',
			0 : 'Wanita'
		},
        form: this.$inertia.form({
			nama:                       this.pasien? this.pasien.nama : '',
			nama_peserta:               this.pasien? this.pasien.nama_peserta : '',
			asuransi_id:                this.pasien? this.pasien.asuransi_id : '',
			nomor_asuransi:             this.pasien? this.pasien.nomor_asuransi : '',
			jenis_peserta:              this.pasien? this.pasien.jenis_peserta : '',
			sex:                        this.pasien? this.pasien.sex : '',
			alamat:                     this.pasien? this.pasien.alamat : '',
			tanggal_lahir:              this.pasien? this.pasien.tanggal_lahir : '',
			nama_ayah:                  this.pasien? this.pasien.nama_ayah : '',
			nama_ibu:                   this.pasien? this.pasien.nama_ibu : '',
			image:                       '',
			ktp_image:                   '',
			bpjs_image:                  '',
			nomor_asuransi_bpjs:        this.pasien? this.pasien.nomor_asuransi_bpjs : '',
			nomor_ktp:                  this.pasien? this.pasien.nomor_ktp : '',
			jangan_disms:               this.pasien? this.pasien.jangan_disms :0,
			kepala_keluarga_id:         this.pasien? this.pasien.kepala_keluarga_id : '',
			prolanis_ht:                this.pasien? this.pasien.prolanis_ht :0,
			prolanis_dm:                this.pasien? this.pasien.prolanis_dm :0,
			prolanis_ht_flagging_image:  '',
			prolanis_dm_flagging_image:  '',
			kartu_asuransi_image:        '',
			emails:                     this.asuransi && this.asuransi.emails.length ? this.asuransi.emails : [
			  {
				  'email':              ''
			  }
			],
			phones:                     this.asuransi && this.asuransi.phones.length ? this.asuransi.phones : [
			  {
				  'number':             '',
				  'description':        ''
			  }
			],
			_method:                    this.pasien ? 'PUT' :'POST',
        })
      }
    },
    props: { 
      errors:              Object,
      tipe_asuransis:      Object,
      asuransis:            Object,
      pasien:            Object,
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
				route : '/pasiens',
				label : 'Pasien'
			  },{
				label : this.pasien? 'Edit' : 'Create'
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
		  if (this.pasien) {
				this.form.post('/pasiens/' + this.pasien.id , {
				  preserveState: (page) => Object.keys(page.props.errors).length
				});
		  } else {
			this.form.post('/pasiens' , {
			  preserveState: (page) => Object.keys(page.props.errors).length
			});
		  }
      },
      updateFormGenerik(obj){
        this.generik  = obj;
      },
	updateForm(obj){
		this.form[obj.name]  = obj.value;
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
		  if (confirm('Anda yakin mau menghapus pasien ini?')) {
			  this.$inertia.delete('/pasiens/' + this.pasien.id);
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
      this.$refs.nama.focus()
    }
}
</script>
