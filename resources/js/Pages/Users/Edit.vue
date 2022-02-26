<template>
  <Content> 
    <Head title="User Edit" />
      <template #headerLeft>
          <breadcrumb :lists="breadcrumb"/>
      </template>
      <template #headerRight>
        <RedBreezeButton @click="destroy" v-if="usr">
          Delete
        </RedBreezeButton>
      </template>
              <div>
                <div class="md:grid md:grid-cols-3 md:gap-6">
                  <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                      <h3 class="text-lg font-medium text-gray-900 leading-6">Profile</h3>
                      <p class="mt-1 text-sm text-gray-600">
                        This information will be displayed publicly so be careful what you share.
                      </p>
                    </div>
                  </div>
                  <div class="mt-5 md:mt-0 md:col-span-2">
                    <form @submit.prevent="submitForm">
                      <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                          <div class="grid grid-cols-3 gap-6">
                            <form-input 
                              label    = "Name"
                              :message = "form.errors.name"
                              v-model  = "form.name"
                              ref      = "name"
                              />
                              <form-input 
                                label    = "Email"
                                :message = "form.errors.email"
                                v-model  = "form.email"
                                />
                                <form-textarea 
                                  label    = "Alamat Domisili"
                                  :message = "form.errors.alamat_domisili"
                                  v-model  = "form.alamat_domisili" />
                                  <form-textarea 
                                    label="Alamat KTP" 
                                    :message = "form.errors.alamat_ktp"
                                    v-model="form.alamat_ktp" />
                                    <form-select 
                                      label="Titel" 
                                      :message = "form.errors.titel_id"
                                      v-model="form.titel_id" 
                                      :options="titels" />
                                      <form-input 
                                        label="No KTP" 
                                        :message = "form.errors.no_ktp"
                                        v-model="form.no_ktp" />
                                        <form-input 
                                          label="No STR" 
                                          :message = "form.errors.no_str"
                                          v-model="form.no_str" />
                                          <form-input 
                                            label="Universitas Asal" 
                                            :message = "form.errors.universitas_asal"
                                            v-model="form.universitas_asal" />

                                            <form-date 
                                              label    = "Tanggal Lulus"
                                              :message = "form.errors.tanggal_lulus"
                                              v-model  = "form.tanggal_lulus"
                                              />
                                              <form-date 
                                                label    = "Tanggal Lahir"
                                                :message = "form.errors.tanggal_lahir"
                                                v-model  = "form.tanggal_lahir"
                                                />
                                                <form-date 
                                                  label    = "Tanggal Mulai"
                                                  :message = "form.errors.tanggal_mulai"
                                                  v-model  = "form.tanggal_mulai"
                                                  />
                                                  <form-select 
                                                    :options="menikah_options" 
                                                    :message = "form.errors.menikah"
                                                    label="menikah" 
                                                    v-model="form.menikah" />
                                                    <form-input 
                                                      label="jumlah_anak" 
                                                      :message = "form.errors.jumlah_anak"
                                                      v-model="form.jumlah_anak"
                                                      @keypress="this.isNumber($event)"/>
                                                      <form-image 
                                                        @updateForm="updateForm" 
                                                        :message = "form.errors.photo"
                                                        name="photo" 
                                                        :existing_url="usr?'/users/' + usr.id + '/get/photo':'' "  
                                                        :value="usr?usr.photo:''" 
                                                        label="photo" />
                                                        <form-image 
                                                          @updateForm="updateForm" 
                                                          :message = "form.errors.npwp_image"
                                                          name="npwp_image" 
                                                          :existing_url="usr?'/users/' + usr.id + '/get/npwp_image':'' "  
                                                          :value="usr?usr.npwp_image:''" 
                                                          label="npwp_image" />
                                                          <form-image 
                                                            @updateForm="updateForm" 
                                                            :message = "form.errors.ktp_image"
                                                            name="ktp_image" 
                                                            :existing_url="usr?'/users/' + usr.id + '/get/ktp_image':'' "  
                                                            :value="usr?usr.ktp_image:''" 
                                                            label="ktp_image" />
                                                            <form-image 
                                                              @updateForm="updateForm" 
                                                              :message = "form.errors.str_image"
                                                              name="str_image" 
                                                              :existing_url="usr?'/users/' + usr.id + '/get/str_image':'' "  
                                                              :value="usr?usr.str_image:''" 
                                                              label="str_image" />
                                                              <form-image 
                                                                @updateForm="updateForm" 
                                                                :message = "form.errors.sip_image"
                                                                name="sip_image" 
                                                                :existing_url="usr?'/users/' + usr.id + '/get/sip_image':'' "  
                                                                :value="usr?usr.sip_image:''" 
                                                                label="sip_image" />
                                                                <form-image 
                                                                  @updateForm="updateForm" 
                                                                  :message = "form.errors.kartu_keluarga_image"
                                                                  name="kartu_keluarga_image" 
                                                                  :existing_url="usr?'/users/' + usr.id + '/get/kartu_keluarga_image':'' "  
                                                                  :value="usr?usr.kartu_keluarga_image:''" 
                                                                  label="kartu_keluarga_image" />
                                                                  <form-select 
                                                                    label="jenis_kelamin" 
                                                                    :message = "form.errors.jenis_kelamin"
                                                                    v-model="form.jenis_kelamin" 
                                                                    :options="sexes" />
                                                                    <form-input 
                                                                      label="nomor_rekening" 
                                                                      :message = "form.errors.nomor_rekening"
                                                                      v-model="form.nomor_rekening" />
                                                                      <form-input 
                                                                        label="bank" 
                                                                        :message = "form.errors.bank"
                                                                        v-model="form.bank" />
                                                                        <form-currency
                                                                          label    = "gaji_tetap"
                                                                          :message = "form.errors.gaji_tetap"
                                                                          v-model  = "form.gaji_tetap"
                                                                          :options = "{currency: 'IDR'}"
                                                                          />
                                                                          <form-select 
                                                                            :options="roles" 
                                                                            :message = "form.errors.role_id"
                                                                            label="role" 
                                                                            v-model="form.role_id" />
                                                                            <form-select 
                                                                              :options="active_options" 
                                                                              :message = "form.errors.active"
                                                                              label="active" 
                                                                              v-model="form.active" />
                                                                              <form-input 
                                                                                type="password" 
                                                                                id="password"
                                                                                name="password"
                                                                                :message = "form.errors.password"
                                                                                label="password (Tak perlu diedit apabila tidak diubah)" 
                                                                                v-model="form.password" />
                                                                                <form-input 
                                                                                  type="password" 
                                                                                  id="password_confirmation"
                                                                                  name="password_confirmation"
                                                                                  :message = "form.errors.password_confirmation"
                                                                                  label="Ketik ulang password" 
                                                                                  v-model="form.password_confirmation" 
                                                                                  />
                                                                                  <div class="col-span-6 sm:col-span-6">
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
                                                                                                      placeholder = "number"
                                                                                                      @input      = "phoneInput(index)"
                                                                                                      v-model     = "phone.number"
                                                                                                      ref         = 'phone_number'
                                                                                                      />
                                                                                                  </td>
                                                                                                  <td class="w-2/5 px-6 py-4 whitespace-nowrap">
                                                                                                    <form-input
                                                                                                      placeholder ="description"
                                                                                                      @input="phoneInput(index)"
                                                                                                      v-model  = "phone.description"
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
// @ts-ignore
import BreezeAuthenticatedLayout from '@/Layouts/AppLayout.vue'
import Content from '@/Layouts/Content.vue'
import BreezeButton from '@/Components/Button.vue'
import RedBreezeButton from '@/Jetstream/Redbutton.vue'
import FormInput from '@/Components/FormInput.vue'
import FormCurrency from '@/Components/FormCurrency.vue'
import Breadcrumb from '@/Components/Breadcrumb.vue'
import FormTextarea from '@/Components/FormTextarea.vue'
import FormSelect from '@/Components/FormSelect.vue'
import FormImage from '@/Components/FormImage.vue'
import FormDate from '@/Components/FormDate.vue'
import { useForm } from "@inertiajs/inertia-vue3";
import { Head } from '@inertiajs/inertia-vue3';
import axios from 'axios'

export default {
    layout : BreezeAuthenticatedLayout,
    data() {
        return {
          config: {
            altFormat: "d F Y",
			altInput: true
          },
		  form: this.$inertia.form({
			_method:                        this.usr ? "PUT" : 'POST',
			name:                           this.usr ? this.usr.name : '',
			email:                          this.usr ? this.usr.email : '',
			password:                       this.usr ? this.usr.password : '',
			password_confirmation:          this.usr ? this.usr.password_confirmation : '',
			email_verified_at:              this.usr ? this.usr.email_verified_at : '',
			alamat_domisili:                this.usr ? this.usr.alamat_domisili : '',
			alamat_ktp:                     this.usr ? this.usr.alamat_ktp : '',
			titel_id:                       this.usr ? this.usr.titel_id : '',
			no_ktp:                         this.usr ? this.usr.no_ktp : '',
			no_str:                         this.usr ? this.usr.no_str : '',
			no_hp:                          this.usr ? this.usr.no_hp : '',
			universitas_asal:               this.usr ? this.usr.universitas_asal : '',
			tanggal_lulus:                  this.usr ? this.usr.tanggal_lulus : '',
			tanggal_lahir:                  this.usr ? this.usr.tanggal_lahir : '',
			tanggal_mulai:                  this.usr ? this.usr.tanggal_mulai : '',
			photo:                          this.usr ? this.usr.photo : '',
			ktp_image:                       '',
			str_image:                       '',
			npwp_image:                      '',
			sip_image:                       '',
			photo_mime_type:                this.usr ? this.usr.photo_mime_type : '',
			kartu_keluarga_image:            '',
			ktp_image_mime_type:             '',
			str_image_mime_type:             '',
			npwp_image_mime_type:            '',
			sip_image_mime_type:             '',
			kartu_keluarga_image_mime_type:  '',
			menikah:                        this.usr ? this.usr.menikah : '',
			npwp:                           this.usr ? this.usr.npwp : '',
			jumlah_anak:                    this.usr ? this.usr.jumlah_anak : '',
			jenis_kelamin:                  this.usr ? this.usr.jenis_kelamin : '',
			nomor_rekening:                 this.usr ? this.usr.nomor_rekening : '',
			bank:                           this.usr ? this.usr.bank : '',
			gaji_tetap:                     this.usr ? this.usr.gaji_tetap : '',
			role_id:                        this.usr ? this.usr.role_id : '',
			tenant_id:                      this.usr ? this.usr.tenant_id : '',
			active:                         this.usr ? this.usr.active : '',
			phones:                         this.usr && this.usr.phones.length ? this.usr.phones : [
				{
					'number':               '',
					'description':          ''
				}
			],
		  })
        }
      },
      props: { 
        usr:            {
          type: Object,
          required:false
        },
        sexes:           Object,
        active_options:  Object,
        menikah_options: Object,
        titels:          Object,
        roles:           Object,
      },
	  mounted(){
		this.$refs.name.focus()
	  },
	  methods: {

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
		},
        destroy(){
		  if (confirm('Anda yakin mau menghapus user ini?')) {
			  this.$inertia.delete('/users/' + this.usr.id);
		  }
        },
		updateForm(obj){
		  this.form[obj.name]  = obj.value;
		  const mime_name      = obj.name + '_mime_type';
		  this.form[mime_name] = obj.value.type;
		},
        submitForm(){
		  if (this.usr) {
            this.form.post('/users/'+ this.usr.id ), {
                preserveState: (page) => Object.keys(page.props.errors).length
            }
          } else {
            this.form.post('/users'), {
                preserveState: (page) => Object.keys(page.props.errors).length
            }
          }
        },
	  },
	  components: {
        Content,
		  BreezeAuthenticatedLayout,
		  BreezeButton,
		  RedBreezeButton,
		  Head,
		  axios,
		  FormInput,
		  FormCurrency,
		  FormDate,
		  FormImage,
		  FormSelect,
		  FormTextarea,
		  useForm,
		  Breadcrumb,
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
				route : '/users',
				label : 'User'
			  },{
				label : this.usr? 'Edit' : 'Create'
			  }
			];
			return bread;
		  },
	  },
}
</script>
