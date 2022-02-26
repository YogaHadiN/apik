<template>
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
              <tr v-for="komposisi in modelValue" :key="komposisi.id">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ komposisi.generik }}
                </td>
				<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ komposisi.bobot }}
                </td>
				<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ person.satuan }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
				  <BreezeButton 
					type="button" 
					@click="deleteKomposisi"
				  >
				  Delete
				</BreezeButton>
                </td>
              </tr>
            </tbody>
			<tfoot class="bg-white divide-y divide-gray-200 ">
			  <tr>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium w-3/6">
                  <FormSelectAjax v-model="generik_id"/>
				</td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium w-1/6">
                  <FormInput v-model="bobot" />
				</td>
				<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium w-1/6">
                  <FormSelect v-model="satuan_id" :options="satuan_option" />
				</td>
				<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium w-1/6">
                  <BreezeButton
					type="button" 
					@click="addKomposisi"
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
</template>
<script>
import BreezeInput from '@/Components/Input.vue'
import BreezeButton from '@/Components/Button.vue'
import FormSelect from '@/Components/FormSelect.vue'
import FormInput from '@/Components/FormInput.vue'
import FormSelectAjax from '@/Components/FormSelectAjax.vue'
export default {
  data(){
    return{
      generik_id: null,
      generik: null,
      bobot: null,
      satuan_id: null,
      satuan: null,
    }
  },
  props: {
	modelValue:Object,
	satuan_option:Object
  },
  components: {
	BreezeInput,
	BreezeButton,
	FormSelect,
	FormInput,
	FormSelectAjax
  },
  emits: ["update:modelValue"],
  setup(prop){
    const addKomposisi = () => {
      prop.modelValue.push({
        'generik_id' : this.generik_id,
        'generik' : this.generik,
        'satuan_id' : this.satuan_id,
        'bobot' : this.bobot,
        'satuan' : this.satuan
      })
      this.generik_id = null;
      this.generik    = null;
      this.satuan_id  = null;
      this.satuan     = null;
      this.bobot      = null;
    }
    return { addKomposisi }
  }
}
</script>
