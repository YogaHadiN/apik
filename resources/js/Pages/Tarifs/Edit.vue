<template>
    <Head v-if="tarif" title="Tarif Edit" />
    <Head v-else title="Tarif Create" />
    <Content>
        <template #headerLeft>
			<breadcrumb :lists="breadcrumb"/>
        </template>
        <template #headerRight>
            <RedBreezeButton v-if="tarif" @click="destroy">
                Delete
            </RedBreezeButton>
        </template>
            <div>
              <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                  <div class="px-4 sm:px-0">
                    <h3 v-if="tarif" class="font-medium text-gray-900 tkxt-lg leading-6">{{ tarif.merek_text }}</h3>
                  </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                  <form @submit.prevent="submit">
                    <div class="shadow sm:rounded-md sm:overflow-visible">
                      <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid sm:grid-cols-3 gap-3">
                          <form-input
                            label    = "jenis_tarif"
                            :colspan = "3"
                            :message = "form.errors.jenis_tarif"
                            v-model  = "form.jenis_tarif"
                            ref      = "tarif"
                            />
                            <form-currency
                              label    = "biaya"
                              :message = "form.errors.biaya"
                              v-model  = "form.biaya"
                              :options = "{currency: 'IDR'}"
                              />
                              <form-select
                                label    = "tipe_tindakan_id"
                                :message = "errors.tipe_tindakan_id"
                                v-model  = "form.tipe_tindakan_id"
                                :options = "tipe_tindakans"
                                />
                                <form-currency
                                  label    = "fee_dokter"
                                  :message = "form.errors.fee_dokter"
                                  v-model  = "form.fee_dokter"
                                  :options = "{currency: 'IDR'}"
                                  />
                                  <form-currency
                                    label    = "fee_asisten_tindakan"
                                    :message = "form.errors.fee_asisten_tindakan"
                                    v-model  = "form.fee_asisten_tindakan"
                                    :options = "{currency: 'IDR'}"
                                    />
                        </div>
                        <div class="flex flex-col">
                          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                              <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                  <thead class="bg-gray-50">
                                    <tr>
                                      <th colspan="3" scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Bahan habis pakai
                                      </th>
                                    </tr>
                                  </thead>
                                  <tbody class="bg-white divide-y divide-gray-200">
                                    <tr v-for="(bhp, index) in form.bhps" :key="index">
                                      <td class="w-4/6 px-6 py-4 whitespace-nowrap">
                                        <form-select-async 
                                          name="merek"
                                          searchable_column="merek"
                                          :route="tarif? '/tarifs/' + tarif.id + '/edit' : '/tarifs/create'"
                                          :value="tarif? bhp.merek : ''"
                                          :options="mereks"
                                          :index="index"
                                          @updateForm="updateForm"
                                          ref="merek"
                                        />
                                      </td>
                                      <td class="w-1/6 px-6 py-4 whitespace-nowrap">
                                        <form-input
                                          v-model  = "bhp.jumlah"
                                          @keypress="this.isNumber($event)"
                                          />
                                      </td>
                                      <td class="w-1/6 px-6 py-4 text-xs align-bottom whitespace-nowrap">
                                        <BreezeButton
                                          type="button"
                                          @click="remove(index)"
                                          v-show="index || ( !index && form.bhps.length > 1)"
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
                                          v-show="index == form.bhps.length-1"
                                          type="button"
                                          v-if="enable_bhp_add"
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
import RedBreezeButton from '@/Jetstream/Redbutton.vue'
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
          jenis_tarif:          this.tarif? this.tarif.jenis_tarif.jenis_tarif :'',
          biaya:                this.tarif? this.tarif.biaya : '',
          fee_dokter:           this.tarif? this.tarif.fee_dokter : '',
          fee_asisten_tindakan: this.tarif? this.tarif.fee_asisten_tindakan : '',
          tipe_tindakan_id:     this.tarif? this.tarif.tipe_tindakan_id : '',
          bhps:                 this.tarif && this.tarif.jenis_tarif.bahan_habis_pakai.length ? this.tarif.jenis_tarif.bahan_habis_pakai : [
			  {
				  'merek_id':        '',
				  'jumlah':        '',
			  }
		  ],
          _method:              this.tarif ? 'PUT' :'POST',
        })
      }
    },
    props: { 
      errors:         Object,
      rak:            Object,
      tarif:          Object,
	  mereks: {
		type: Array,
		default: () => []
	  },
      tipe_tindakans: Object,
    },
    methods: {
      confirmDelete(e){
        console.log(e.target);
      },
      submit(){
		  if (this.tarif) {
            this.form.post('/tarifs/' + this.tarif.id , {
				  preserveState: (page) => Object.keys(page.props.errors).length
				});
          } else {
            this.form.post('/tarifs' , {
              preserveState: (page) => Object.keys(page.props.errors).length
            });
          }
      },
      updateFormGenerik(obj){
        this.generik  = obj;
      },
	  updateForm(obj){
        this.form.bhps[obj.index][obj.name + '_id'] = obj.value;
	  },
      deleteKomposisi(index){
        this.form.komposisis.splice(index, 1);
      },
	  destroy(){
		  if (confirm('Anda yakin mau menghapus tarif ini?')) {
            this.$inertia.delete('/tarifs/' + this.tarif.id);
		  }
      },
	  add(index) {
		  if (
			  this.form.bhps[index].merek_id !== '' &&
			  this.form.bhps[index].jumlah !== ''
		  ) {
			  this.form.bhps.push({
				  'merek_id' : '',
				  'jumlah' : ''
			  })
		  } else {
			  alert('Harus lengkap dulu sebelum menambahkan');
		  }
	  },
	  remove(k){
		  console.log('remove');
		  this.form.bhps.splice(k, 1);
	  },
    },
    components: {
        Content,
        BreezeButton,
      Breadcrumb,
        Head,
        Link,
		FormSelectAsync,
        axios,
        FormInput,
        FormResponsiveTable,
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
      this.$refs.tarif.focus()
    },
  layout : BreezeAuthenticatedLayout,
  computed: {
	  breadcrumb(){
		let bread = [
		  {
			label : 'Tarif',
            route : '/tarifs',
		  },
		  {
            label : this.tarif? 'Edit' : 'Create',
		  },
		];
		return bread;
	  },
      enable_bhp_add(){
          if (
              this.form.bhps[this.form.bhps.length -1].jumlah !== '' &&
              this.form.bhps[this.form.bhps.length -1].merek_id !== ''
          ) {
              return true
          } else {
              return false
          }
      },
  }
}
</script>
