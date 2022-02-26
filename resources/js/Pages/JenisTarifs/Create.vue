<template>
    <Head title="Merek Edit" />
    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
			  Merek
			  <span v-if="merek">Edit</span>
			  <span v-else>Create</span>
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-visible shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                      <div>
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                          <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                              <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                              <p class="mt-1 text-sm text-gray-600">
                                This information will be displayed publicly so be careful what you share.
                              </p>
                            </div>
                          </div>
                          <div class="mt-5 md:mt-0 md:col-span-2">
                            <form @submit.prevent="submit">
                              <div class="shadow sm:rounded-md sm:overflow-visible">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                  <div class="grid sm:grid-cols-3 gap-3">
                                    <form-input
                                      label    = "merek"
                                      :colspan = "3"
                                      :message = "form.errors.merek"
                                      v-model  = "form.merek"
                                      ref      = "merek"
                                    />
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
                                    <form-input
                                      label    = "nomor_rak"
                                      :colspan = "1"
                                      :message = "form.errors.nomor_rak"
                                      v-model  = "form.nomor_rak"
                                    />
                                  </div>
                                  <div class="grid grid-cols-3 gap-6">
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
                                    <form-select
                                      label    = "fornas"
                                      :message = "form.errors.fornas"
                                      v-model  = "form.fornas"
                                      :options = "{ '' : '-Pilih-', 1 : 'Fornas', 0 : 'Bukan Fornas' }"
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
									  route="/mereks/create"
									  label="Aturan Minum"
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
                                  <div class="flex flex-col">
                                    <div class="-my-2 overflow-visible sm:-mx-6 lg:-mx-8  ">
                                      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8  ">
                                        <div class="shadow overflow-visible border-b border-gray-200 sm:rounded-lg ">
                                          <table class="min-w-full divide-y divide-gray-200 ">
                                            <thead class="bg-gray-50">
                                              <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                  Generiks
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                  Bobot
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                  Satuan
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                  <span class="sr-only">Input</span>
                                                </th>
                                              </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                              <tr v-for="(komposisi, index) in form.komposisis" :key="index">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                  {{ komposisi.generik }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                  {{ komposisi.bobot }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                  {{ komposisi.satuan }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                  <BreezeButton 
                                                    type="button" 
                                                    @click="deleteKomposisi(index)"
                                                  >
                                                  Delete
                                                </BreezeButton>
                                                </td>
                                              </tr>
                                            </tbody>
                                            <tfoot class="bg-white divide-y divide-gray-200 ">
                                              <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium w-3/6">
												<!-- Parent Component -->
												  <form-select-async 
													name="generik"
													route="/mereks/create"
													:options="generiks"
													@updateForm="updateFormGenerik"
													ref="generik"
												  />
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium w-1/6">
                                                  <FormInput v-model="bobot" @keypress="this.isNumber($event)"/>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium w-1/6">
                                                  <FormSelectObject v-model="satuan" :options="satuans" />
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium w-1/6">
                                                  <BreezeButton
                                                    type="button" 
                                                    @click="addKomposisi(index)"
                                                  >
                                                    Input
                                                  </BreezeButton >
                                                </td>
                                              </tr>
                                            </tfoot>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
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
    </BreezeAuthenticatedLayout>
</template>

<script>
// @ts-ignore
import BreezeAuthenticatedLayout from '@/Layouts/AppLayout.vue'
import BreezeButton from '@/Components/Button.vue'
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
import { Head } from '@inertiajs/inertia-vue3';
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
          merek:             this.merek ? this.merek.merek : '',
          nomor_rak:         this.merek ? this.merek.nomor_rak : '',
          unit_tiap_paket:   this.merek ? this.merek.unit_tiap_paket : '',
          harga_beli:        this.merek ? this.merek.harga_beli : 0,
          harga_jual:        this.merek ? this.merek.harga_jual : 0,
          exp_date:          this.merek ? this.merek.exp_date : '',
          fornas:            this.merek ? this.merek.fornas : '',
          stok_minimal:      this.merek ? this.merek.stok_minimal : '',
          stok:              this.merek ? this.merek.stok : '',
          alternatif_fornas: this.merek ? this.merek.alternatif_fornas : '',
          kelas_obat_id:     this.merek ? this.merek.kelas_obat_id : '',
          indikasi:          this.merek ? this.merek.indikasi : '',
          kontraindikasi:    this.merek ? this.merek.kontraindikasi : '',
          efek_samping:      this.merek ? this.merek.efek_samping : '',
          dijual_bebas:      this.merek ? this.merek.dijual_bebas : '',
          sediaan_id:        this.merek ? this.merek.sediaan_id : '',
          aturan_minum_id:   this.merek ? this.merek.aturan_minum_id : '',
          peringatan:        this.merek ? this.merek.peringatan : '',
          boleh_dipuyer:     this.merek ? this.merek.boleh_dipuyer : '',
          golongan_obat_id:  this.merek ? this.merek.golongan_obat_id : '',
          komposisis:        this.merek ? this.merek.komposisis :[],
          _method:           this.merek ? 'PUT' :'POST',
        })
      }
    },
    props: { 
      errors:        Object,
      merek:         Object,
      generiks:      Object,
      aturan_minums: Object,
      satuans:       Object,
      sediaans:      Object,
      kelas_obats:   Object,
    },
    methods: {
      submit(){
        this.form.post('/mereks', {
          preserveState: (page) => Object.keys(page.props.errors).length
        });
      },
      updateFormGenerik(obj){
        this.generik  = obj;
      },
	  updateForm(obj){
		this.form.aturan_minum_id = obj.value
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
    },
    components: {
        BreezeAuthenticatedLayout,
        BreezeButton,
        Head,
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
      this.$refs.merek.focus()
    }
}
</script>
