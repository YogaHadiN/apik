<template>
    <Head title="Merek Edit" />
    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
			  User 
			  <span v-if="user">Edit</span>
			  <span v-else>Create</span>
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
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
							<Multiselect
							  v-bind="example6"
							  v-model = "example6.value"
							  class="relative clearfix"
							></Multiselect>
						  </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script charset="utf-8">
  
// @ts-ignore
import Multiselect from '@vueform/multiselect'
import BreezeAuthenticatedLayout from '@/Layouts/AppLayout.vue'
import { Head } from '@inertiajs/inertia-vue3';
import axios from 'axios'
import "@vueform/multiselect/themes/default.css"

export default {
  components: {
	Multiselect,
	BreezeAuthenticatedLayout,
	Head
  },
  data: () => ({
    example6: {
      value: null,
      placeholder: 'Choose a programming anguage',
      filterResults: false,
      minChars: 3,
      resolveOnLoad: false,
      delay: 0,
      searchable: true,
	  options: async (query) => {
        return await fetchLanguages(query)
      }
    },
  }),
}
const fetchLanguages = async (query) => {
  let data = await axios.post('/generiks/get/options/' + query);
  return data.data.map((item) => {
    return { value: item.id, label: item.generik }
  });
}

</script>
