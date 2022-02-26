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
                      <div>
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                          <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                              <h3 v-if="merek" class="font-medium text-gray-900 tkxt-lg leading-6">{{ merek.merek_text }}</h3>
                              <p class="mt-1 text-sm text-gray-600">
							  <div v-if="rak" class="flex flex-col mb-6">
								<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
								  <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
									<div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
									  <table class="min-w-full divide-y divide-gray-200">
										<thead class="bg-gray-50">
										  <tr>
											<th scope="col" colspan="2" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
											 <span class="text-3xl">{{ rak.nomor_rak }}</span>  
											</th>
										  </tr>
										</thead>
										<tbody class="bg-white divide-y divide-gray-200">
										  <tr>
											<td class="px-6 py-4 whitespace-nowrap">
											  <div class="flex items-center">
												<div class="ml-4">
												  <div class="text-sm font-medium text-gray-900">
													Harga Beli
												  </div>
												</div>
											  </div>
											</td>
											<td class="px-6 py-4 whitespace-nowrap">
											  <div class="flex items-center">
												<div class="ml-4">
												  <div class="text-sm font-medium text-gray-900">
													{{ $filters.currency(rak.harga_beli )}}
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
													Harga Jual
												  </div>
												</div>
											  </div>
											</td>
											<td class="px-6 py-4 whitespace-nowrap">
											  <div class="flex items-center">
												<div class="ml-4">
												  <div class="text-sm font-medium text-gray-900">
													{{ $filters.currency(rak.harga_jual )}}
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
													Stok Minimal
												  </div>
												</div>
											  </div>
											</td>
											<td class="px-6 py-4 whitespace-nowrap">
											  <div class="flex items-center">
												<div class="ml-4">
												  <div class="text-sm font-medium text-gray-900">
													{{ rak.stok_minimal }}
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
													Stok
												  </div>
												</div>
											  </div>
											</td>
											<td class="px-6 py-4 whitespace-nowrap">
											  <div class="flex items-center">
												<div class="ml-4">
												  <div class="text-sm font-medium text-gray-900">
													{{ rak.stok }}
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
													Kelas Obat
												  </div>
												</div>
											  </div>
											</td>
											<td class="px-6 py-4 whitespace-nowrap">
											  <div class="flex items-center">
												<div class="ml-4">
												  <div class="text-sm font-medium text-gray-900">
													{{ rak.kelas_obat_id }}
												  </div>
												</div>
											  </div>
											</td>
										  </tr>
										</tbody>
										<tfoot>
										<tr>
											<th scope="col" colspan="2" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
											 Komposisi  
											</th>
										  </tr>
											<tr>
												<td colspan="2" class="px-6 py-4 whitespace-nowrap">
												  <div class="flex items-center">
													<div class="ml-4">
													  <div v-for="komposisi in rak.formula.komposisi" :key="komposisi.id" class="text-sm font-medium text-gray-900">
														  {{ komposisi.generik.generik }} {{ komposisi.bobot }} {{komposisi.satuan.satuan}}
													  </div>
													</div>
												  </div>
												</td>
										    </tr>
										</tfoot>
									  </table>
									</div>
								  </div>
								</div>
							  </div>
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
                                  </div>
                                  <div class="grid grid-cols-3 gap-6">
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
          merek:           this.merek ? this.merek.merek : '',
          nomor_rak:       this.rak ? this.rak.nomor_rak : '',
          unit_tiap_paket: this.merek ? this.merek.unit_tiap_paket : '',
          exp_date:        this.merek ? this.merek.exp_date : '',
          _method:         this.merek ? 'PUT' :'POST',
        })
      }
    },
    props: { 
      errors:        Object,
      rak:           Object,
      merek:         Object,
      generiks:      Object,
      aturan_minums: Object,
      satuans:       Object,
      sediaans:      Object,
      kelas_obats:   Object,
    },
    methods: {
      confirmDelete(e){
        console.log(e.target);
      },
      submit(){
		  if (this.merek) {
				this.form.post('/mereks/' + this.merek.id , {
				  preserveState: (page) => Object.keys(page.props.errors).length
				});
		  }
		  if (this.rak) {
			this.form.post('/mereks' , {
			  preserveState: (page) => Object.keys(page.props.errors).length
			});
		  }
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
	  destroy(){
		  if (confirm('Anda yakin mau menghapus merek ini?')) {
			  this.$inertia.delete('/mereks/' + this.merek.id);
		  }
	  }
    },
	layout: BreezeAuthenticatedLayout,
    components: {
		Content,
		Breadcrumb,
        BreezeButton,
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
      this.$refs.merek.focus()
    }, 
	computed : {
	  breadcrumb(){
		let bread = [
		  {
			label : 'Obat',
			route : '/mereks'
		  },
		{
			label : this.merek? 'Edit' : 'Create'
		}
		];
		return bread;
	  },
	}
}
</script>
